<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            CourseSeeder::class,
            ScheduleSeeder::class,
            UserSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
