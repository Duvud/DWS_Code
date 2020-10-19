<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validarFormulario extends Controller
{
    public function validar(Request $req){
        $validacion = $req->validate([
            //'fecha_nacimiento' => 'required|unique:posts|max:255',
            'sexo' => 'required',
        ]);
    }
}
