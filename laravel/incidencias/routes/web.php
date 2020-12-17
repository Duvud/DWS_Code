<?php

use App\Http\Controllers\AdminIncidencias;
use App\Http\Controllers\RegistrarAdmin;
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

Route::get('/admin',function(){
    return view('adminAuth.admin');
})->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'admin'])->middleware('is_admin')->name('home');
Route::get('/dash', ['as' => 'dash', function() {
    return view('home');
}]);
Route::get('/register/admin', ['as' => 'registerAdmin', function() {
    return view('adminAuth.register');
}])->middleware('is_admin');
Route::get('/admin', ['as' => 'admin', function() {
    return view('adminAuth.admin');
}])->middleware('is_admin');
Route::get('/none', ['as' => 'none', function() {
    return view('welcome');
}]);

Route::get('/Admin/Incidencias', [AdminIncidencias::class,'procesar'])->middleware('is_admin')->name('AdminIncidencias');
Route::get('/Profesor/Incidencias', [AdminIncidencias::class,'procesarProfesores'])->name('ProfesorIncidencias');
Route::post('/Profesor/Incidencias/Añadir', [AdminIncidencias::class,'anadirIncidencia'])->name('anadirIncidencia');

Route::post('/Admin/Cambiar/Incidencia/Estado', [AdminIncidencias::class,'cambiarEstado'])->middleware('is_admin')->name('cambiarEstado');
Route::post('/Admin/Cambiar/Incidencia/Comentario', [AdminIncidencias::class,'cambiarComentario'])->middleware('is_admin')->name('cambiarComentario');
Route::post('/register/admin',[RegistrarAdmin::class,'procesar']);
Route::post('/register/admin',[RegistrarAdmin::class,'procesar']);

Auth::routes(['verify' => true]);

