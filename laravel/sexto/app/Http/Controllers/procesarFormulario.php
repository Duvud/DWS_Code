<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class procesarFormulario extends Controller
{
    public function procesar(Request $req){
        $tipoProducto = $req->tipoProducto;
        return view('lista',['tipoProducto' => $tipoProducto]);
    }
}
