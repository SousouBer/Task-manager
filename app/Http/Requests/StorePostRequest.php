<?php

namespace App\Http\Requests;

use App\Rules\GeorgianLetters;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
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
