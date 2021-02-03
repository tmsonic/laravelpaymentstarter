<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayPalSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pay_pal_settings')->insert([
            'paypal_smart_environment' => 'sandbox',
            'paypal_smart_sandbox_client' => '',
            'paypal_smart_sandbox_secret' => '',
        ]);
    }
}
