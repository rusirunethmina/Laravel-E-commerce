<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class ProductController extends Controller
{
    public function index()
    {
          $product_data = Product::all();
          return view('product',['products' => $product_data]);
    }

    public function details($id)
    {
       $product_details =  Product::find($id);
       return view('products_details', ['details' => $product_details]);
    }

    public function add_to_cart(Request $request)
    {
      if($request->session()->has('user'))
      {
         $cart = new Cart;
         $cart->user_id = $request->session()->get('user')['id'];  //taking user id with session
         $cart->product_id = $request->product_id;                //taking product id sending in hidden filed
         $cart->save();
         return redirect('/');
      }
      else
      {
          return redirect('/login');
      }

    }

    static function cart_item()
    {
        $user_id = Session::get('user')['id'];            //count the cart item using session
        return Cart::where('user_id',$user_id)->count();
    }

    public function list_cart()
    {
         $user_id = Session::get('user')['id'];
         $products_list = DB::table('cart')
         ->join('products','cart.product_id', '=', 'product_id')
         ->where('cart.user_id', $user_id)
         ->select('products.*','cart.id as cart_id')
         ->get();

        //  return $products_list;

         return view('cart_list', ['products' => $products_list]);
    }

    public function remove_cart($id)
    {
       Cart::destroy($id);
       return redirect('/list_cart');
    }

    public function order_now()
    {
        $user_id = Session::get('user')['id'];
         $user_price = DB::table('cart')
         ->join('products','cart.product_id', '=', 'product_id')
         ->where('cart.user_id', $user_id)
         ->sum('products.price');

        //  return $user_price;

         return view('order_now', ['total' => $user_price]);
    }

    public function order_place(Request $request)
    {
         $user_id = Session::get('user')['id'];
         $all_cart = Cart::where('user_id', $user_id)->get();
         foreach($all_cart as $cart)
         {
              $order = new Order;
              $order->product_id = $cart['product_id'];
              $order->user_id = $cart['user_id'];
              $order->status = "pending";
              $order->payment_method = $request->payment;
              $order->payment_status = "pending";
              $order->address = $request->address;
              $order->save();

              Cart::where('user_id', $user_id)->delete();         //delete item from cart
          }

          return redirect('/');

    }

    public function my_orders()
    {
        $user_id = Session::get('user')['id'];
        $data = DB::table('orders')
        ->join('products','orders.product_id', '=', 'product_id')
        ->where('orders.user_id', $user_id)
        ->get();

        // return $data;

        return view('my_orders', ['data' => $data]);
    }

    public function search_product(Request $request)
    {
        $search = $request->input('search');
        $product_data = Product::where('name', $search)->get();
        return view('search_product', ['search_items' =>$product_data]);
    }
}
