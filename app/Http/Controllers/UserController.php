<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        // if(Auth::check()){
            return view("pages.admin.users.index");
        // }

        // return  redirect(route('login'))->with('message','Bạn chưa đăng nhập');
     
    }
}
