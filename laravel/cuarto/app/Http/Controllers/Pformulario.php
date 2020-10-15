<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pformulario extends Controller
{
    public function procesar(Request $req){
        $nombre = $req->nombre;
        return view('resultado',['nombre' => $nombre]);
    }
}
