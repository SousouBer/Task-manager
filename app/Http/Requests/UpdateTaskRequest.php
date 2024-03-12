<?php

namespace App\Http\Requests;

use App\Rules\EnglishLetters;
use App\Rules\GeorgianLetters;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name.en'           => ['required', 'min:3', new EnglishLetters],
			'name.ka'           => ['required', 'min:3', new GeorgianLetters],
			'description.en'    => ['required', 'min:3', new EnglishLetters],
			'description.ka'    => ['required', 'min:3', new GeorgianLetters],
			'due_date'          => 'required',
		];
	}
}
