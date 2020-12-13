<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminRegisterController;

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

//App\Http\Controllers\AuthAdmin\LoginController

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login/admin', [AdminLoginController::class,'showAdminLoginForm']);
Route::post('/login/admin', [AdminLoginController::class,'adminLogin']);
Route::get('/register/admin', [App\Http\Controllers\Auth\AdminRegisterController::class,'showAdminRegisterForm']);
Route::post('/register/admin', [AdminRegisterController::class,'createAdmin']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/logout', [App\Http\Controllers\Auth\AdminLoginController::class,'adminLogout']);

Route::view('/home','home')->middleware('auth');
Route::view('/admin','adminAuth.admin');

