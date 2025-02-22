<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Pformulario;
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

//Este route devuelve el registro.php
Route::view('/registro', 'registro');

//Este route enruta los datos del formulario al controlador
Route::post('/mostrardatos',[Pformulario::class,'procesar']);
