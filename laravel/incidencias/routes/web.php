<?php

use App\Http\Controllers\AdminIncidencias;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\RegistrarAdmin;
use Illuminate\Support\Facades\Auth;
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

//Route hacia el panel de administradores
Route::get('/admin',function(){
    return view('adminAuth.admin');
})->middleware('is_admin');

//Estas routes son para hacer la redirección automática a través del sistema de login de laravel 7.x y el middleware is_admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('home')->middleware('is_admin');
Route::get('/index',[App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/admin',function() {
    return view('adminAuth.admin');
})->middleware('is_admin')->name('admin');
Route::get('/none', function() {
    return view('welcome');
})->name('none');

//Routes paragestionar incidencias de profesores y admins
Route::get('/Admin/Incidencias', [AdminIncidencias::class,'procesar'])->middleware('is_admin')->name('AdminIncidencias');
Route::get('/Profesor/Incidencias', [AdminIncidencias::class,'procesarProfesores'])->name('ProfesorIncidencias');
Route::post('/Profesor/Incidencias/Añadir', [AdminIncidencias::class,'anadirIncidencia'])->name('anadirIncidencia');
Route::post('/Admin/Cambiar/Incidencia/Estado', [AdminIncidencias::class,'cambiarEstado'])->middleware('is_admin')->name('cambiarEstado');
Route::post('/Admin/Cambiar/Incidencia/Comentario', [AdminIncidencias::class,'cambiarComentario'])->middleware('is_admin')->name('cambiarComentario');

//Routes para registrar administradores
Route::get('/register/admin', ['as' => 'registerAdmin', function() {
    return view('adminAuth.register');
}])->middleware('is_admin');
Route::post('/register/admin',[RegistrarAdmin::class,'procesar']);

//Routes por defecto de laravel auth 7.x (aunque el proyecto es laravel 8) con verificación de correo electrónico
Auth::routes(['verify' => true]);

//Routes de google auth
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

