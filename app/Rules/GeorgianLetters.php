<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class GeorgianLetters implements Rule
{
	public function passes($attribute, $value): bool
	{
		return preg_match('/^[\p{Georgian} ]+$/u', $value);
	}

	public function message(): string
	{
		return __('validation.georgian_letters');
	}
}
