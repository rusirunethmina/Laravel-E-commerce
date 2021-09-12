<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {   //login view route and function
    return view('login');
});

Route::get('/logout', function () {   //login view route and function
    Session::forget('user');     //remove the session
    return view('login');
});

Route::view('/register', 'register');   //register view

Route::post('/register', 'UserController@register');   //login controller route

Route::post('/login', 'UserController@login');   //register controller route

Route::get('/', 'ProductController@index');  //product(home page) view  route

Route::get('/detail/{id}', 'ProductController@details');  //product detail   route

Route::post('/add_to_cart', 'ProductController@add_to_cart');  //add to cart route for function

Route::get('/list_cart', 'ProductController@list_cart'); //route view function

Route::get('/removecart/{id}', 'ProductController@remove_cart'); //remove cart item function

Route::get('/order', 'ProductController@order_now');  //order view and function

Route::post('/order_place', 'ProductController@order_place');   //payment/order controller route

Route::get('/myorders', 'ProductController@my_orders');    //my orders route

Route::get('/search', 'ProductController@search_product');    //search route
