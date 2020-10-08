<?php

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

Route::get('/{user}/{name}', function() {
    return "Hola {name}";
});

Route::get('/DNI/{num}', function() {
    return "Su dni es {num}";
})->where('num','[0-9]{8}');

Route::get('/DNI/{num}{l}', function() {
    return "Su numero es {num} y su {l}";
})->where([
    'num' => '[0-9]{8}',
    'l' => '[a-z]{1}'
]);