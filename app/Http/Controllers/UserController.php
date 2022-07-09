<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
       $users = User::paginate(10);
       return view("pages.admin.users.index",['usersView'=>$users]);
    }

    public function create()
    {
        return view("pages.admin.users.add");
    }

    public function store(Request $request)
    {
       $user = User::create($request->only(['name','email','password']));
        $message = "add success!!";
        if($user == null)
        {
            $message = "add failed!!";
            
         }
        // else if($request ->rePassword != $request->password)
        // {
        //     $message = "not matched!!";
        //     return;
        // }
        return redirect()->route("userIndex")->with('message',$message);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return View('pages.admin.users.edit',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $bool = $user->update($request->only([
            'name','email','password'
        ]));
        $message = "success full updated";
        if(!$bool)
        {
            $message = "success full failed";
        }
        return redirect()->route("userIndex")->with('message',$message);
    }
    public function destroy($id)
    {
        $message = "Delete success!";

        if(!User::destroy($id))
        {
            $message = "Delete failed!";
        }
        return redirect()->route("userIndex")->with('message',$message);
    }
}
