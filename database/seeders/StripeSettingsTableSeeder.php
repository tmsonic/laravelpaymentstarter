<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StripeSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stripe_settings')->insert([
            'stripe_environment' => 'test',
            'stripe_test_publishable_key' => '',
            'stripe_test_secret_key' => '',
        ]);
    }
}
