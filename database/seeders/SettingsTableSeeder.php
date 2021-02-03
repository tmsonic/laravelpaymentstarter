<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            "currency" => "USD",
            "use_integer_prices" => 0,
            "use_currency_symbol" => 1,
            "comma_is_decimal_separator" => 0,
            "enable_braintree" => 1,
            "enable_paypal_in_bt" => 1,
            "enable_stripe" => 0,
            "enable_paypal_smart" => 0,
            "enable_pp_smart_card" => 1,
            "enable_pp_smart_credit" => 1,
            "enable_pp_smart_bancontact" => 1,
            "enable_pp_smart_blik" => 1,
            "enable_pp_smart_eps" => 1,
            "enable_pp_smart_giropay" => 1,
            "enable_pp_smart_ideal" => 1,
            "enable_pp_smart_mercadopago" => 1,
            "enable_pp_smart_mybank" => 1,
            "enable_pp_smart_p24" => 1,
            "enable_pp_smart_sepa" => 1,
            "enable_pp_smart_sofort" => 1,
            "enable_pp_smart_venmo" => 1,
        ]);
    }
}
