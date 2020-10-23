<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class EmailCorrecto implements Rule
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
    public function passes($attribute, $value)
    {
        $pattern = "/ik012108{1}[a-zA-Z0-9]{1,}@plaiaundi.[(net)|(com)]{1}/";
        if (preg_match($pattern,$value) == 1){
            return true;
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
