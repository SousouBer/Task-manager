<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'current_password'      => 'required_with:password,password_confirmation|current_password:api',
			'password'              => 'nullable|required_with:password_confirmation|min:4',
			'password_confirmation' => 'nullable|required_with:password|confirmed',
			'profile_picture'       => 'nullable|image',
			'cover_picture'         => 'nullable|image',
		];
	}
}
