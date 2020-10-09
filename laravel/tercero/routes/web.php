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

/*Te devuelve el index como ruta por defecto*/ 
Route::get('/', function () {
    return view('index');
});

/*Te devuelve la página producto si te pasa un codigo con 3 letras y 4 numeros*/ 
Route::get('/producto/{codigo}', function($codigo) {
    return view('producto',['codigo => '.$codigo]);
})->where('codigo','[a-z]{3},[0-9]{4}');