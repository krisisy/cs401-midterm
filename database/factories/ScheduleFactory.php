<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day_of_week' => fake()->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']),
            'time_slot' => fake()->randomElement([
                '08:30 AM - 11:00 AM',
                '11:00 AM - 01:30 AM',
                '01:30 PM - 04:00 PM',
                '04:00 PM - 06:30 PM',
                '06:30 PM - 09:00 PM',
            ]),
            'room' => 'Room ' . fake()->numberBetween(100, 500),
            'term' => fake()->randomElement(['1st Semester', '2nd Semester', '3rd Semester']),
            'teacher_id' => Teacher::factory()->create()->id,
            'student_id' => Student::factory()->create()->id,
            'course_code' => Course::factory()->create()->course_code,
        ];
    }
}
