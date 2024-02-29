<?php

namespace App\Rules;

use Hamcrest\Type\IsBoolean;
use Illuminate\Contracts\Validation\Rule;
use PhpParser\Node\Expr\BinaryOp\BooleanOr;

// use Illuminate\Contracts\Validation\Rule;

class GeorgianLetters implements Rule
{
    public function passes($attribute, $value) : bool
    {
        return preg_match('/^[\p{Georgian}]+$/u', $value);
    }

    public function message() : string
    {
        return 'The :attribute must contain only Georgian letters.';
    }
}