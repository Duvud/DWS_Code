<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corredor;

class ProcesarFormulario extends Controller
{
    public function procesar(Request $req){
        $corredor = new Corredor($req->all());
        $corredor->save();
        $corArray = new Corredor();
        return "Datos enviados satisfactoriamente";
    }
}
