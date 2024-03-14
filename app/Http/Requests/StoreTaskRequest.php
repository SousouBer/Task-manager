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
			'user_id'           => 'required|exists:users,id',
			'name.en'           => ['required', 'min:3', new EnglishLetters],
			'name.ka'           => ['required', 'min:3', new GeorgianLetters],
			'description.en'    => ['required', 'min:3', new EnglishLetters],
			'description.ka'    => ['required', 'min:3', new GeorgianLetters],
			'due_date'          => 'required',
		];
	}

	public function attributes(): array
	{
		return [
			'name.en'           => __('tasks.task_name_englisch'),
			'name.ka'           => __('tasks.task_name_georgian'),
			'description.en'    => __('tasks.description_english'),
			'description.ka'    => __('tasks.description_georgian'),
			'due_date'          => __('tasks.due_date'),
		];
	}

	protected function prepareForValidation(): void
	{
		$this->merge(
			[
				'user_id' => auth()->user()->id,
			]
		);
	}
}
