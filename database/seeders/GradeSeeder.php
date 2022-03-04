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
            'course_id' => '1',
            'test_name' => 'Assessment',
        ]);
        DB::table('grades')->insert([
            'course_id' => '2',
            'test_name' => 'Written Exam',
        ]);
        DB::table('grades')->insert([
            'course_id' => '3',
            'test_name' => 'Case Study',
        ]);
        DB::table('grades')->insert([
            'course_id' => '4',
            'test_name' => 'Case Study',
        ]);
        DB::table('grades')->insert([
            'course_id' => '4',
            'test_name' => 'Project',
        ]);
        DB::table('grades')->insert([
            'course_id' => '5',
            'test_name' => 'Case Study',
        ]);
        DB::table('grades')->insert([
            'course_id' => '6',
            'test_name' => 'Project',
        ]);
        DB::table('grades')->insert([
            'course_id' => '6',
            'test_name' => 'Assessment',
        ]);
        DB::table('grades')->insert([
            'course_id' => '6',
            'test_name' => 'Report',
        ]);
        DB::table('grades')->insert([
            'course_id' => '7',
            'test_name' => 'Portfolio',
        ]);
        DB::table('grades')->insert([
            'course_id' => '7',
            'test_name' => 'Project',
        ]);
        DB::table('grades')->insert([
            'course_id' => '7',
            'test_name' => 'Assessment',
        ]);
        DB::table('grades')->insert([
            'course_id' => '8',
            'test_name' => 'Portfolio',
        ]);
        DB::table('grades')->insert([
            'course_id' => '9',
            'test_name' => 'Portfolio',
        ]);
        DB::table('grades')->insert([
            'course_id' => '10',
            'test_name' => 'Portfolio',
        ]);
    }
}
