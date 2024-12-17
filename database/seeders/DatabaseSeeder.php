<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Insert roles and users
        User::create([
            'name' => 'Test User Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1, // Admin
        ]);

        User::create([
            'name' => 'Test User Registrar',
            'email' => 'registrar@gmail.com',
            'password' => bcrypt('password'),
            'role' => 2, // Registrar
        ]);

        User::create([
            'name' => 'Test User Department',
            'email' => 'department@gmail.com',
            'password' => bcrypt('password'),
            'role' => 3, // Department
        ]);

        User::create([
            'name' => 'Test User Student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('password'),
            'role' => 4, // Student
        ]);

        // Call the CoursesTableSeeder
        $this->call(CoursesTableSeeder::class);
    }
}
