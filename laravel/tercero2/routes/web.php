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
    return view('index');
});

//Este obtiene un id y un nombre en mayúscula y minúscula
Route::get('/saludo/{id}/{nombre}', function ($id, $nombre) {
    return "Este es el saludo nº " . $id  . " el saludo te lo manda " . $nombre;
})-> where('nombre','[a-zA-Z]+');

//Este route obtiene un código si el código tiene 3 caracteres alfabéticos y 4 numericos
Route::get('/producto/{codigo}{digitos}', function($letras,$digitos) {
    return view('index',['letras' => $letras, 'digitos' => $digitos]);
})->where(['letras' => '[A-Za-z]{3}',
            'digitos'=>'[0-9]{4}'
]);
