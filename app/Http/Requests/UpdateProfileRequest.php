<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'current_password'      => 'nullable|required_with:password,password_confirmation',
			'password'              => 'nullable|required_with:password_confirmation|confirmed',
			'profile_picture'       => 'nullable|image',
			'cover_picture'         => 'nullable|image',
		];
	}
}
