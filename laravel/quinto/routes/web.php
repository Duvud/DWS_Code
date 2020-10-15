<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\verDatosTabla;
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

//Este route muestra el formulario
Route::view('registro2','verFormulario');

//Este route enruta los datos del formulario al controlador
Route::post('mostrardatosTabla',[verDatosTabla::class,'procesar']);