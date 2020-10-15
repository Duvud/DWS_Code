<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formulario extends Controller
{
    function procesar(Request $req){
        print_r($req->input());
    }
}
