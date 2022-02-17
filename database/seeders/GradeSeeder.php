<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'category'=>'1',
            'course_name'=>'Program- & Career Orientation',
            'test_name'=>'Portfolio based assessment',
            'credits'=>'2.5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'1',
            'course_name'=>'Computer Science Basics',
            'test_name'=>'Written exam',
            'credits'=>'7.5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'1',
            'course_name'=>'Programming Basics',
            'test_name'=>'Case study exam',
            'credits'=>'5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'2',
            'course_name'=>'Object-oriented programming',
            'test_name'=>'Presentation',
            'credits'=>'5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'2',
            'course_name'=>'Object-oriented programming',
            'test_name'=>'Case study exam',
            'credits'=>'5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'2',
            'course_name'=>'Professional skills 1',
            'test_name'=>'Portfolio + optional assessment',
            'credits'=>'2.5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'2',
            'course_name'=>'HZ Personality 1',
            'test_name'=>'Portfolio',
            'credits'=>'2.5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Framework Project 1',
            'test_name'=>'Portfolio',
            'credits'=>'2.5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Framework Project 1',
            'test_name'=>'Portfolio',
            'credits'=>'2.5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Framework Development 1',
            'test_name'=>'Case study exam',
            'credits'=>'5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Professional working environment',
            'test_name'=>'Workplace assessment',
            'credits'=>'2.5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Professional skills 2',
            'test_name'=>'Portfolio + optional assessment',
            'credits'=>'1.25',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Professional skills 2',
            'test_name'=>'Open questions, multiple choice',
            'credits'=>'0.625',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Professional skills 2',
            'test_name'=>'Multiple choice, paper',
            'credits'=>'0.625',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Framework Project 1',
            'test_name'=>'Portfolio',
            'credits'=>'2.5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Framework Project 1',
            'test_name'=>'Portfolio',
            'credits'=>'2.5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Framework Development 1',
            'test_name'=>'Case study exam',
            'credits'=>'5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Professional working environment',
            'test_name'=>'Workplace assessment',
            'credits'=>'2.5',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Professional skills 2',
            'test_name'=>'Portfolio + optional assessment',
            'credits'=>'1.25',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Professional skills 2',
            'test_name'=>'Open questions, multiple choice',
            'credits'=>'0.625',
            'lowest_passing_grade'=>'5.5'
        ]);
        DB::table('grades')->insert([
            'category'=>'3',
            'course_name'=>'Professional skills 2',
            'test_name'=>'Multiple choice, paper',
            'credits'=>'0.625',
            'lowest_passing_grade'=>'5.5'
        ]);
    }
}
