<?php

use App\Http\Controllers\Auth\forgetpassController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});
//Home Route
Route::get('home', [HomeController::class, 'index'])->name('home');
//Register Route
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register', [RegisterController::class, 'register_post'])->name('register_post');
//login logout route
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'login_post'])->name('login_post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//forget password Route

Route::get('forget-password', [forgetpassController::class, 'forget_password'])->name('forget_password');
Route::post('forget-password', [forgetpassController::class, 'forgetpass_post'])->name('forget.password.post');
//Reset link Route
Route::get('reset-link/{token}',[forgetpassController::class,'reset_link'])->name('reset_link');
Route::post('reset-link',[forgetpassController::class,'reset_link_post'])->name('reset.link.post');