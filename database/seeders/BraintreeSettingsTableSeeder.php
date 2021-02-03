<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BraintreeSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('braintree_settings')->insert([
            'braintree_environment' => 'sandbox',
            'braintree_sandbox_merchant_id' => '',
            'braintree_sandbox_public_key' => '',
            'braintree_sandbox_private_key' => '',
        ]);
    }
}
