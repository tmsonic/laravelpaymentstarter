<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('currency');
            $table->string('use_integer_prices');
            $table->boolean('use_currency_symbol');
            $table->boolean('comma_is_decimal_separator');
            $table->boolean('enable_braintree');
            $table->boolean('enable_paypal_in_bt');
            $table->boolean('enable_stripe');
            $table->boolean('enable_paypal_smart');
            $table->boolean('enable_pp_smart_card');
            $table->boolean('enable_pp_smart_credit');
            $table->boolean('enable_pp_smart_bancontact');
            $table->boolean('enable_pp_smart_blik');
            $table->boolean('enable_pp_smart_eps');
            $table->boolean('enable_pp_smart_giropay');
            $table->boolean('enable_pp_smart_ideal');
            $table->boolean('enable_pp_smart_mercadopago');
            $table->boolean('enable_pp_smart_mybank');
            $table->boolean('enable_pp_smart_p24');
            $table->boolean('enable_pp_smart_sepa');
            $table->boolean('enable_pp_smart_sofort');
            $table->boolean('enable_pp_smart_venmo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
