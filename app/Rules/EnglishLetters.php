<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class EnglishLetters implements Rule
{
	public function passes($attribute, $value): bool
	{
		return preg_match('/^[a-zA-Z\s]+$/', $value);
	}

	public function message(): string
	{
		return __('validation.english_letters');
	}
}
