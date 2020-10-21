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

        $pattern = "/[0-9]{8}[a-zA-Z]{1}/";
        if (preg_match($pattern,$value) == 1){

            $sumTotal="";//Variable en la que guardaremos la suma total
            $totalPos="";//En esta variable guardaremos el resto de la división
            $diccionario = "trwagmyfpdxbnjzsqvhlcke";

            for( $i=0 ; $i<strlen($value)-1 ; $i++ ){
                $sumTotal.=strval($value[$i]);
            }
            $sumTotal = intval($sumTotal);

            $totalPos = $sumTotal % 23;//Hacemos el cálculo principal

            //Comprobamos en que posicion del diccionario está la última cifra y devolvemos true o false
            for( $i=0 ; $i<strlen($diccionario) ; $i++ ){
                if($diccionario[$i] == strtolower($value[strlen($value)-1])){
                    if ($i == $totalPos)
                        return true;
                    else
                        $this->message();
                    }elseif($i == strlen($diccionario)){
                        $this->message();
                    }
            }
        }else{
            $this->message();
        }

        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'F';
    }
}
