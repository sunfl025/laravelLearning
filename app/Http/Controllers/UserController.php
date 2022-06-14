<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view("pages.admin.users.index",['usersView'=>$users]);
    }
    public function create()
    {
        return view("pages.admin.users.add");
    }
}
