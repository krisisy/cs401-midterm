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
        $firstName = fake()->firstName;
        $lastName = fake()->lastName;
        $email = strtolower($firstName . '.' . $lastName . fake()->numberBetween(1, 99) . '@ciit.edu.ph');
        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'department' => fake()->randomElement([
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
