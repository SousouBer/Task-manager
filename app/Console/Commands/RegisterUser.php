<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class RegisterUser extends Command
{
	protected $signature = 'register:user';

	protected $description = 'Register a user in the database';

	public function handle(): int
	{
		$this->info('To register, type the email and password.');

		$email = $this->ask('Type the email');
		$password = $this->ask('Type the password');

		$validator = Validator::make([
			'email'    => $email,
			'password' => $password,
		], [
			'email'    => 'required|email|unique:users,email',
			'password' => 'required|min:4',
		]);

		if ($validator->fails()) {
			$this->info('User was not registered. Errors below:');

			foreach ($validator->errors()->all() as $error) {
				$this->error($error);
			}
			return 1;
		}

		User::create([
			'email'    => $email,
			'password' => bcrypt($password),
			'picture'  => 'images/avatar.png',
		]);

		$this->info('User registered successfully! You can now log in.');

		return 0;
	}
}
