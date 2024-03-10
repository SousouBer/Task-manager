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
                'en' => $this->faker->sentence,
                'ka' => 'Georgian Name',
            ],
            'description' => [
                'en' => $this->faker->paragraph,
                'ka' => 'Georgian Description',
            ],
            'due_date' => $this->faker->date,
        ];
    }
}
