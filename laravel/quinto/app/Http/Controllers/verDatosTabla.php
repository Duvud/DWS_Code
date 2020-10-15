<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verDatosTabla extends Controller
{
    public function procesar(Request $req){
        $datos =  $req->all();
        return view('verDatosFormulario')->with('datos',$datos);
    }
}
