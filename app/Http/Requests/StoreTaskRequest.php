<?php

namespace App\Http\Requests;

use App\Rules\EnglishLetters;
use App\Rules\GeorgianLetters;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name_en'        => ['required', 'min:3', new EnglishLetters],
			'name_ka'        => ['required', 'min:3', new GeorgianLetters],
			'description_en' => ['required', 'min:3', new EnglishLetters],
			'description_ka' => ['required', 'min:3', new GeorgianLetters],
			'due_date'       => 'required',
		];
	}

	public function prepareForValidation(): void
	{
		$this->merge(
			[
				'user_id' => auth()->user()->id,
				'name' => [
					'en' => $this->input('name_en'),
					'ka' => $this->input('name_ka'),
				],
				'description' => [
					'en' => $this->input('description_en'),
					'ka' => $this->input('description_ka'),
				],
				'due_date' => $this->get('due_date'),
			]
		);
	}
}
