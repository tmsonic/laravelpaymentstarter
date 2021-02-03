<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_id' => 1,
            'customer_name' => 'John Ruth',
            'user_email' => 'johnruth@admin.com',
            'price' => 50.00,
            'purchased_course_id' => 1,
            'purchased_course_title' => 'English Beginner Course',
            'transaction_id' => 'transaction_1',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('orders')->insert([
            'user_id' => 1,
            'customer_name' => 'John Ruth',
            'user_email' => 'johnruth@admin.com',
            'price' => 55.00,
            'purchased_course_id' => 2,
            'purchased_course_title' => 'German Beginner Course',
            'transaction_id' => 'transaction_2',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('orders')->insert([
            'user_id' => 1,
            'customer_name' => 'John Ruth',
            'user_email' => 'johnruth@admin.com',
            'price' => 500.00,
            'purchased_course_id' => 3,
            'purchased_course_title' => 'German Preintermediate Course',
            'transaction_id' => 'transaction_3',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);
        DB::table('orders')->insert([
            'user_id' => 2,
            'customer_name' => 'Joe Gage',
            'user_email' => 'member@gmail.com',
            'price' => 50.00,
            'purchased_course_id' => 1,
            'purchased_course_title' => 'English Beginner Course',
            'transaction_id' => 'transaction_4',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('orders')->insert([
            'user_id' => 2,
            'customer_name' => 'Joe Gage',
            'user_email' => 'member@gmail.com',
            'price' => 55.00,
            'purchased_course_id' => 2,
            'purchased_course_title' => 'German Beginner Course',
            'transaction_id' => 'transaction_5',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('orders')->insert([
            'user_id' => 2,
            'customer_name' => 'Joe Gage',
            'user_email' => 'member@gmail.com',
            'price' => 500.00,
            'purchased_course_id' => 3,
            'purchased_course_title' => 'German Preintermediate Course',
            'transaction_id' => 'transaction_6',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('orders')->insert([
            'user_id' => 3,
            'customer_name' => 'Minnie Mink',
            'user_email' => 'newmember@gmail.com',
            'price' => 50.00,
            'purchased_course_id' => 1,
            'purchased_course_title' => 'English Beginner Course',
            'transaction_id' => 'transaction_7',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('orders')->insert([
            'user_id' => 3,
            'customer_name' => 'Minnie Mink',
            'user_email' => 'newmember@gmail.com',
            'price' => 55.00,
            'purchased_course_id' => 2,
            'purchased_course_title' => 'German Beginner Course',
            'transaction_id' => 'transaction_8',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('orders')->insert([
            'user_id' => 3,
            'customer_name' => 'Minnie Mink',
            'user_email' => 'newmember@gmail.com',
            'price' => 500.00,
            'purchased_course_id' => 3,
            'purchased_course_title' => 'German Preintermediate Course',
            'transaction_id' => 'transaction_9',
            'created_at'  => date("Y-m-d H:i:s"),
        ]);
    }
}
