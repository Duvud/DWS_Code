<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\procesarFormulario;

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

//Este route get devuelve una vista con los datos del producto elegido
Route::get('/procesarProducto/{tipoProducto}/{numeroProducto}', function ($tipoProducto,$numeroProducto){
    return view('productoElegido',['tipoProducto' => $tipoProducto, 'numeroProducto' => $numeroProducto]);
});

//Este route te devuelve la vista firstForm
Route::view('/form','firstForm');

//Este route pasa el request post a la funcion procesar del controlador ProcesaFormulario
Route::post('/procesaForm3',[procesarFormulario::class,'procesar']);


