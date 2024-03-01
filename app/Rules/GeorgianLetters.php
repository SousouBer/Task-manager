<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class GeorgianLetters implements Rule
{
	public function passes($attribute, $value): bool
	{
		return preg_match('/^[\p{Georgian}]+$/u', $value);
	}

	public function message(): string
	{
		return 'The :attribute must contain only Georgian letters.';
	}
}
