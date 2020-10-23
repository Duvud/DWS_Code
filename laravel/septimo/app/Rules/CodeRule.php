<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CodeRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //'regex:"/ab(\d)ab(\d)cc(\d\d)/"'
        $pattern = "/ab(\d)ab(\d)cc(\d)/";
        $aMatch=[];
        if (preg_match($pattern,$value,$aMatch) == 1){
            $sA1 = $aMatch[1]+$aMatch[1];
            $sA2 = $aMatch[2]+$aMatch[2];
            $sC1 = $aMatch[3];
            if(strcmp($aMatch[1],$aMatch[3]) == 0 ||strcmp($aMatch[1],$aMatch[3]) == 0){
                return true;
            }else
                $this->message();
        }else
            $this->message();
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
