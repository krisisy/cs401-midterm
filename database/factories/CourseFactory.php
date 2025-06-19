<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => fake()->words(2, true),
            'description' => fake()->sentence(10),
            'credits' => fake()->numberBetween(2, 3),
            'course_code' => strtoupper(fake()->bothify('???###')),
        ];
    }
}
