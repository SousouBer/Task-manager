<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'name' => [
				'en' => fake()->realText(50),
				'ka' => fake('ka_GE')->realText(50),
			],
			'description' => [
				'en' => fake()->realText(800),
				'ka' => fake('ka_GE')->realText(800),
			],
			'due_date' => fake()->date,
		];
	}
}
