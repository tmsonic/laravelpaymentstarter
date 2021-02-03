<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_courses')->insert([
            'user_id'  => 2,
            'course_id'  => 1,
        ]);

        DB::table('user_courses')->insert([
            'user_id'  => 2,
            'course_id'  => 2,
        ]);

        DB::table('user_courses')->insert([
            'user_id'  => 2,
            'course_id'  => 3,
        ]);

        DB::table('user_courses')->insert([
            'user_id'  => 1,
            'course_id'  => 1,
        ]);

        DB::table('user_courses')->insert([
            'user_id'  => 1,
            'course_id'  => 2,
        ]);

        DB::table('user_courses')->insert([
            'user_id'  => 1,
            'course_id'  => 3,
        ]);
    }
}
