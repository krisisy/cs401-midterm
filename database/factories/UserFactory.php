<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstName = $this->faker->firstName;
        $lastName = $this->faker->lastName;
        $username = strtolower($firstName . '.' . $lastName . $this->faker->numberBetween(1, 99));
        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'user_name' => $username,
            'password' => bcrypt('password123'), // You can also use Hash::make()
            'registration_date' => $this->faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
        ];
    }
}
