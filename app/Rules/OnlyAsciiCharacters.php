<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class OnlyAsciiCharacters implements Rule
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
        return mb_check_encoding($value, 'ASCII');
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'First name and last name must contain letters only from the English alphabet.';
    }
}
