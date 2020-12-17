<?php

namespace App\Http\Controllers;

use App\Models\Incidencias;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminIncidencias extends Controller
{
    public function anadirIncidencia(Request $request){
         $incidencia = new Incidencias($request->all());
         $incidencia->save();
         return self::actualizarProfesores();
    }


    //Muestra las incidencias para los administradores
    public function procesar(){
        $incidencias = self::actualizar();
        for($i=0;$i<count($incidencias);$i++){
            $userId =$incidencias[$i]->user;
            $user = User::where('id',$userId)->first()->name;
            $incidencias[$i]->user =  $user;
        }
        return view('adminAuth.incidencias',['incidencias' => $incidencias]);
    }

    //Muestra las incidencia para los profesores
    public function procesarProfesores(){
         return self::actualizarProfesores();
    }

    //Cambia el estado de una incidencia
    public function cambiarEstado(Request $request){
        //$incidencia = Incidencias::where('id',$id)->update(['estado'=>$estado]);
        $id = $request->id;
        $estado = $request->estado;
        $incidencia = Incidencias::where('id',$id)->update(['estado'=>$estado]);
        $incidencias = self::actualizar();
        return view('adminAuth.incidencias')->with('incidencias', $incidencias)->with('usuario', $incidencias);

    }

    //Cambia el comentario de una incidencia
    public function cambiarComentario(Request $request){
        //$incidencia = Incidencias::where('id',$id)->update(['estado'=>$estado]);
        $id = $request->id;
        $comentario = $request->comentario;
        $incidencia = Incidencias::where('id',$id)->update(['comentario'=>$comentario]);
        $incidencias = self::actualizar();
        return view('adminAuth.incidencias',['incidencias' => $incidencias]);
    }


    //Devuelve todas las incidencias
    public static function actualizar(){
        return Incidencias::all();
    }

    public static function actualizarProfesores(){
        if(Auth::user() !== null){
            $userId = User::where('id',Auth::user()->getAuthIdentifier())->first()->id;
            $incidencias = Incidencias::all()->where('user',$userId);

            for($i=0;$i<count($incidencias);$i++){
                $userId =$incidencias[$i]->user;
                $user = User::where('id',$userId)->first()->name;
                $incidencias[$i]->user =  $user;
            }
            return view('incidencias',['incidencias' => $incidencias]);
        }else{
            return view('home');
        }
    }
}
