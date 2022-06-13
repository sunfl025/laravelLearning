<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> d5a7d1d4bb3b2361ef4607c8144d75562223d866
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view("pages.login");
    }

    public function authen(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ],[
            "email.email" => "email không hợp lệ",
            "email.required" => "email không được bỏ trống",
            "password.required" => "pass không được bỏ trống",

        ]);
        if($validated ->fails())
        {
            return redirect(route('login'))->withErrors($validated)->withInput();
        }

        //login
        $auth = Auth::attempt(['email' => $request->email, 'password' =>$request-> password]);
        if(!$auth) {
            return  redirect(route('login'))->with('massage','Thông tin đăng nhập sai');
        }
        return redirect(route('userIndex'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
