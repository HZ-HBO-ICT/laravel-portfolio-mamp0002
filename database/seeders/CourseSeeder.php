<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'category' => '1',
            'name' => 'Programming and Career Orientation',
            'EC' => '2.5',
        ]);
        DB::table('courses')->insert([
            'category' => '1',
            'name' => 'Computer Science Basics',
            'EC' => '5',
        ]);
        DB::table('courses')->insert([
            'category' => '1',
            'name' => 'Programming Basics',
            'EC' => '5',
        ]);
        DB::table('courses')->insert([
            'category' => '2',
            'name' => 'Object Oriented Programming',
            'EC' => '10',
        ]);
        DB::table('courses')->insert([
            'category' => '3',
            'name' => 'Framework Development 1',
            'EC' => '5',
        ]);
        DB::table('courses')->insert([
            'category' => '3',
            'name' => 'Framework Project 1',
            'EC' => '7.5',
        ]);
        DB::table('courses')->insert([
            'category' => '4',
            'name' => 'Framework Project 2',
            'EC' => '10',
        ]);
        DB::table('courses')->insert([
            'category' => '4',
            'name' => 'Personal Professional Development',
            'EC' => '12.5',
        ]);
        DB::table('courses')->insert([
            'category' => '4',
            'name' => 'Personality 1',
            'EC' => '1.25',
        ]);
        DB::table('courses')->insert([
            'category' => '4',
            'name' => 'Personality 2',
            'EC' => '1.25',
        ]);
    }
}
