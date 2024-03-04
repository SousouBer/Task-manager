<?php

namespace App\Http\Requests;

use App\Rules\GeorgianLetters;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name_en'        => 'required|min:3|regex:/^[a-zA-Z\s]+$/',
			'name_ka'        => ['required', 'min:3', new GeorgianLetters],
			'description_en' => 'required|min:3|regex:/^[a-zA-Z\s]+$/',
			'description_ka' => ['required', 'min:3', new GeorgianLetters],
			'due_date'       => 'required',
		];
	}
}
