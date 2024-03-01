<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DueTasksRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'dueTasks' => 'sometimes|string',
		];
	}
}
