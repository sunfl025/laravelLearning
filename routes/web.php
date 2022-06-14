<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return "Trang";
});

Route::get('/login', [LoginController::class,'login'])->name("login");

Route::get('/logout',[LoginController::class,'logout'])->name("logout");

Route::post('/authen',[LoginController::class,'authen'])->name("postAuthen");

// route::get('/admin/users',[UserController::class,'index'])->name("userIndex");

route::group(['prefix' => 'admin','middleware' => 'login'],function(){
        route::get('/users',[UserController::class,'index'])->name("userIndex");
        route::get('/user/add',[UserController::class,'create'])->name("createUser");
});
