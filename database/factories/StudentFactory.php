<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'program' => fake()->randomElement([
                'BS Computer Science',
                'BS Multimedia Arts',
                'BS Entertainment and Multimedia Computing',
                'BS Information Systems',
                'BS Entrepreneurship',
            ]),
            'enrollment_year' => fake()->numberBetween(2018, now()->year),
            'birthday' => fake()->dateTimeBetween('-30 years', '-17 years')->format('Y-m-d'),
        ];
    }
}
