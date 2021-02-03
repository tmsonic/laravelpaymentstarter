<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => 'English Beginner Course',
            'slug' => Str::slug('English Beginner Course'),
            'description' => 'Dummy description for English course',
            'price' => 50.00,
            'image' => 'uk_flag_1.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('courses')->insert([
            'title' => 'German Beginner Course',
            'slug' => Str::slug('German Beginner Course'),
            'description' => 'Dummy description for German course',
            'price' => 55.55,
            'image' => 'german_flag_2.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('courses')->insert([
            'title' => 'German Preintermediate Course',
            'slug' => Str::slug('German Preintermediate Course'),
            'description' => 'Dummy description for German Preintermediate course',
            'price' => 500.00,
            'image' => 'german_pre_int_3.png',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);


        DB::table('courses')->insert([
            'title' => 'German Intermediate Course',
            'slug' => Str::slug('German Intermediate Course'),
            'description' => 'Dummy description for German Intermediate course',
            'price' => 555.55,
            'image' => 'course_default_pic.webp',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);


        DB::table('courses')->insert([
            'title' => 'German Upperintermediate Course',
            'slug' => Str::slug('German Upperintermediate Course'),
            'description' => 'Dummy description for German Upperintermediate course',
            'price' => 12340.00,
            'image' => 'course_default_pic.webp',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);


        DB::table('courses')->insert([
            'title' => 'German Advanced Course',
            'slug' => Str::slug('German Advanced Course'),
            'description' => 'Dummy description for German Advanced course',
            'price' => 12340.12,
            'image' => 'course_default_pic.webp',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);
    }
}
