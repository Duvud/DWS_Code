<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\Handler;

class validarFormulario extends Controller
{
    public function validar(Request $req){
        //Bloque try catch para manejar todo el tema de la validacion del formulario
        try{
        $validacion = $req->validate([
            //'fecha_nacimiento' => 'required|unique:posts|max:255',
            'sexo' => 'required',
            'discapacidad' => 'integer|max:100|min:1'
        ]);
        } catch (Throwable $e){
            report($e);
            return false; //? Supongo que algo tiene que devolver aquí también??
        }
            //Si llega hasta aqui es que no ha saltado nada
        return 'test is ok';
    }
}
