<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'program' => fake()->randomElement([
                'BS Computer Science',
                'BS Multimedia Arts',
                'BS Entertainment and Multimedia Computing',
                'BS Information Systems',
                'BS Entrepreneurship',
            ]),
            'birthday' => fake()->dateTimeBetween('-60 years', '-25 years')->format('Y-m-d'),
        ];
    }
}
