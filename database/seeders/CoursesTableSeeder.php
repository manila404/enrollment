<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Truncate the table to clear existing data
        DB::table('courses')->truncate();

        // Insert data
        DB::table('courses')->insert([
            [
                'course_id' => 'GNED 08',
                'description' => 'Understanding the Self',
                'credit_units' => 3,
                'IT_dpt' => false,
                'CS_dpt' => true,
            ],
            [
                'course_id' => 'GNED 14',
                'description' => 'Panitikang Panlipunan',
                'credit_units' => 3,
                'IT_dpt' => true,
                'CS_dpt' => true,
            ],
            [
                'course_id' => 'MATH 2',
                'description' => 'Calculus',
                'credit_units' => 3,
                'IT_dpt' => true,
                'CS_dpt' => false,
            ],
            [
                'course_id' => 'FITT 4',
                'description' => 'Physical Activities Towards Health and Fitness 2',
                'credit_units' => 2,
                'IT_dpt' => false,
                'CS_dpt' => true,
            ],
        ]);
    }
}
