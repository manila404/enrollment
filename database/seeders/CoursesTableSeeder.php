<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            ['course_id' => 'GNED 08', 'description' => 'Understanding the Self', 'credit_units' => 3, 'department' => 'CS'],
            ['course_id' => 'GNED 14', 'description' => 'Panitikang Panlipunan', 'credit_units' => 3, 'department' => 'CS & IT'],
            ['course_id' => 'MATH 2', 'description' => 'Calculus', 'credit_units' => 3, 'department' => 'IT'],
            ['course_id' => 'FITT 4', 'description' => 'Physical Activities Towards Health and Fitness 2', 'credit_units' => 2, 'department' => 'CS'],
        ]);
    }
}

