<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrarAdmin extends Controller
{
    public function procesar(Request $req){
        $contrasena = Hash::make($req['password']);
        $req['password'] = $contrasena;
        $usuario = new User($req->all());
        $usuario->save();
        return redirect()->route('admin');
    }
}
