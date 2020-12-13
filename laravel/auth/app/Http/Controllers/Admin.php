<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public static function buscar(Request $req){
        return $req.string;
    }
}
