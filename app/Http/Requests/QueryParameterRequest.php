<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QueryParameterRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'dueTasks' => 'sometimes|string',
			'sortBy' => 'sometimes|string',
			'sortDirection' => 'sometimes|string'
		];
	}
}
