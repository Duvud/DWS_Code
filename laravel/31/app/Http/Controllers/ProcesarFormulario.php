<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corredor;

class ProcesarFormulario extends Controller
{
    public function procesar(Request $req){
        $corredor = new Corredor($req->all());
        $corredor->save();
        $corArray = Corredor::all();
        $bOrdenado = false;//Booleano para ir iterando si no está ordenado
        $aux; //Variable auxiliar para mover elementos del array en caso de necesitarlo

        if(count($corArray) == 1){

        }else{
                //Este bucle es el que se encarga de ordenar el array;
        while ($bOrdenado == false){
            $bOrdenado = true;
            for ($i=0; $i < count($corArray); $i++){
                 if($i == count($corArray)-1){
                   if((strcmp($corArray[$i]["tiempoS"],'ABANDONA')!=0 && strcmp($corArray[$i-1]["tiempoS"],'ABANDONA')!=0) && intval($corArray[$i-1]["tiempoS"])>intval($corArray[$i]["tiempoS"])){
                    $bOrdenado = false;
                    echo(" Ultimo mayor" );
                    $aux = $corArray[$i-1];
                    $corArray[$i-1] = $corArray[$i];
                    $corArray[$i] = $aux;
                   }else if(strcmp($corArray[$i-1]["tiempoS"],'ABANDONA') == 0 && is_numeric($corArray[$i]["tiempoS"]) == 1){
                    $bOrdenado = false;
                    echo(" Ultimo Abandona" );
                    $aux = $corArray[$i-1];
                    $corArray[$i-1] = $corArray[$i];
                    $corArray[$i] = $aux;
                   }
                }else{
                    if (strcmp($corArray[$i]["tiempoS"],"ABANDONA") == 0 && is_numeric($corArray[$i+1]["tiempoS"]) == 1){
                        $bOrdenado = false;
                        //echo(" Medio abandona ");
                         $aux = $corArray[$i+1];
                         $corArray[$i+1] = $corArray[$i];
                         $corArray[$i] = $aux;
                     }else{
                         if((strcmp($corArray[$i]["tiempoS"],'ABANDONA')!=0 && strcmp($corArray[$i+1]["tiempoS"],'ABANDONA')!=0) && intval($corArray[$i]["tiempoS"])>intval($corArray[$i+1]["tiempoS"])){
                             $bOrdenado = false;
                             //echo(" Medio mayor ");
                             $aux = $corArray[$i+1];
                             $corArray[$i+1] = $corArray[$i];
                             $corArray[$i] = $aux;
                         }
                     }
                }
            }
        }
        }
        
        
        
        return view('verCorredores',['corredores' => $corArray]);
    }

}