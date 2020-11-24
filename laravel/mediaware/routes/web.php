<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\edad;


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


Route::view('ver','ver');

Route::view('/inicio','inicio');

Route::POST('/entrada',function(){
    return view('ver');
})->middleware([edad::class]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
