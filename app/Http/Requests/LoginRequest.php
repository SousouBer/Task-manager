<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'email'    => 'required|email',
			'password' => 'required|min:4',
		];
	}

	public function attributes(): array
	{
		return [
			'email'    => __('auth.email'),
			'password' => __('auth.password'),
		];
	}
}
