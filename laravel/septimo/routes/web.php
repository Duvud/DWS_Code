<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\validarFormulario;

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

//Esta ruta te devuelve el formulario principal
Route::view('/form','form');

//Esta ruta es para redirigir los datos del formulario hacia las clases que los valida
Route::post('/procesarForm',[validarFormulario::class,'validar']);
