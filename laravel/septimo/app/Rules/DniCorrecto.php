<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DniCorrecto implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value){
        $sumTotal=0;//Variable en la que guardaremos la suma total
        $totalPos=0;//En esta variable guardaremos el resto de la división
        $diccionario = "abcdefghijklmnñopqrstuvwxyz";
        $dicPos;//Aquí guardaremos la posicion del caracter dentro del diccionario

        //Vamos leyendo e incrementando $sumTotal
        for( $i=0 ; $i<8 ; $i++ ){
            $sumTotal+=(int)$value[$i];
        }

        $totalPos = $sumTotal % 23;//Hacemos el cálculo principal

        //Comprobamos en que posicion del diccionario está la última cifra y devolvemos true o false
        for( $i=0 ; $i<strlen($diccionario) ; $i++ ){
            if($diccionario[$i] == strtolower($value[strlen($value)-1])){
                if (($i+1) == $totalPos)
                    return true;
                else
                    return false;
            }elseif($i == strlen($diccionario) ){
                return false;
            }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
