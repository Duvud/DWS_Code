<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\Handler;
use App\Rules\UpperCase;
use App\Rules\DniCorrecto;
use App\Rules\EmailCorrecto;
use App\Rules\CodeRule;
use Illuminate\Support\Facades\Validator;
use Redirect;

class validarFormulario extends Controller
{
    public function validar(Request $req){
        $message=[
            'required' => 'Tu tio que hay que rellenarlo, no me seas peina calvos .',
        ];
        //Bloque try catch para manejar todo el tema de la validacion del formulario
        $validacion = Validator::make($req->all(), [
            'sexo' => ['in:V,F'],//V o F
            'discapacidad' => ['integer','max:100','min:1'],//un valor entre 1 y 100
            'fecha_nacimiento' => ['required','date','before:-18 years'],//Que sea mayor de edad
            'id' => ['required','regex:/[0-9]{3}[A-Z]{3}/'],//Tres números seguidos de tres letras mayus
            'codigo_seguridad' => [new CodeRule],//Si cumple con el ejemplo turbio ese
            'dni' => ['required',new DniCorrecto],
            'email' => ['required', new EmailCorrecto]
        ]);
        
        if ($validacion->fails()){
            return Redirect::back()->withErrors($validacion)->withInput($req->all());
        }
        //Si llega hasta aqui es que no ha saltado nada
        return 'test is ok';
    }
}
