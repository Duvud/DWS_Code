<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcesarFormulario;

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

Route::view('form','formCorredores');

Route::post('ProcesarForm',[ProcesarFormulario::class,'procesar']);
<<<<<<< HEAD
=======

Route::get('/verCorredor/{nombre}/{apellidos}/{imagen}', function($nombre,$apellidos,$imagen){
        return view('verCorredor', ['nombre' => $nombre, 'apellidos' => $apellidos , 'imagen' => $imagen]);
});
>>>>>>> 26aea4356048c160352901dbef0f6fb86c48eec5

