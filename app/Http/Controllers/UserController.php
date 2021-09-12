<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
       $user =  User::where(['email' => $request->email])->first();
    //    return $user->password; for debuging purpose
       if(!$user || !Hash::check($request->password,$user->password))
       {
             return redirect('/login');
       }
       else
       {
           $request->session()->put('user',$user);
           return redirect('/');
       }
    }

    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login');
    }
}
