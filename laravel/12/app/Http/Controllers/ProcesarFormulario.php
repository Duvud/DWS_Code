<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class ProcesarFormulario extends Controller
{
    public function procesar(Request $req){
        $usuario = new usuario($req->all());
        $usuario->save();
        
        return "Datos insertados";
    }
}
