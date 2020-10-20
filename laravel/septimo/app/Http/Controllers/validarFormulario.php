<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\Handler;
use App\Rules\UpperCase;

class validarFormulario extends Controller
{
    public function validar(Request $req){
        //Bloque try catch para manejar todo el tema de la validacion del formulario
        $validacion = $req->validate([
            //'sexo' => ['required','regex:/[V]{1}|[F]{1}/'],//V o F
            //'discapacidad' => ['integer','max:100|min:1'],//un valor entre 1 y 100
            //'fecha_nacimiento' => ['required','before_or_equal:20 October 2002'],//Que sea mayor de edad
            //'id' => ['required','regex:/[0-9]{3}[A-Z]{3}/'],//Tres números seguidos de tres letras mayus
            //'codigo_seguridad' => ['regex:/[[ab]{1}[0-9]*]*[[cc]{1}[0-9]*[0-9]*]*/'],//Si cumple con el ejemplo turbio ese
            'dni' => ['required', new DniCorrecto]
        ]);
            //Si llega hasta aqui es que no ha saltado nada
        return 'test is ok';
    }
}
