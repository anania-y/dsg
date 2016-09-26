<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->delete();

        DB::table('courses')->insert([
            [
                'course_code' => 'COMP 232',
                'course_name' => 'Mathematics for Computer Science',
                'description' => '',
                'credits' => 3,
                'instructor_id' => 1
            ],
            [
                'course_code' => 'COMP 248',
                'course_name' => 'Object-Oriented Programming I',
                'description' => '',
                'credits' => 3,
                'instructor_id' => 2
            ],
            [
                'course_code' => 'ENGR 201',
                'course_name' => 'Professional Practice & Responsibility',
                'description' => '',
                'credits' => 1.5,
                'instructor_id' => 4
            ],
            [
                'course_code' => 'ENGR 213',
                'course_name' => 'Applied Ordinary Differential Equations',
                'description' => '',
                'credits' => 3,
                'instructor_id' => 5
            ],
            [
                'course_code' => 'COMP 249',
                'course_name' => 'Object-Oriented Programming II',
                'description' => '',
                'credits' => 3,
                'instructor_id' => 2
            ],
            [
                'course_code' => 'ENGR 233',
                'course_name' => 'Applied Advanced Calculus',
                'description' => '',
                'credits' => 3,
                'instructor_id' => 5
            ],
            [
                'course_code' => 'SOEN 228',
                'course_name' => 'System Hardware',
                'description' => '',
                'credits' => 4,
                'instructor_id' => 1
            ],
            [
                'course_code' => 'SOEN 287',
                'course_name' => 'Introduction to Web Applications',
                'description' => '',
                'credits' => 3,
                'instructor_id' => 8
            ],
            [
                'course_code' => 'COMP 348',
                'course_name' => 'Principles of Programming Languages',
                'description' => '',
                'credits' => 3,
                'instructor_id' => 7
            ],
            [
                'course_code' => 'COMP 352',
                'course_name' => 'Data Structures and Algorithms',
                'description' => '',
                'credits' => 3,
                'instructor_id' => 7
            ],
            [
                'course_code' => 'ENCS 282',
                'course_name' => 'Technical Writing and Communication',
                'description' => '',
                'credits' => 3,
                'instructor_id' => 6
            ],
            [
                'course_code' => 'ENGR 202',
                'course_name' => 'Sustainable Development and Environmental Stewardship',
                'description' => '',
                'credits' => 1.5,
                'instructor_id' => 4
            ],
        ]);
    }
}
