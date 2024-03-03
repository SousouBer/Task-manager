<?php

namespace App\Http\Requests;

use App\Rules\GeorgianLetters;
use Illuminate\Foundation\Http\FormRequest;

class EditTaskRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name-en'        => 'required|min:3|alpha',
			'name-ka'        => ['required', 'min:3', new GeorgianLetters],
			'description-en' => 'required|min:3|alpha',
			'description-ka' => ['required', 'min:3', new GeorgianLetters],
			'due_date'       => 'required',
		];
	}
}
