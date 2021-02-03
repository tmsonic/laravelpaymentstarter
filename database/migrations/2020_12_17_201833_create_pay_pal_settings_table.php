<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayPalSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_pal_settings', function (Blueprint $table) {
            $table->id();
            $table->string('paypal_smart_environment')->nullable();
            $table->string('paypal_smart_sandbox_client')->nullable();
            $table->string('paypal_smart_production_client')->nullable();
            $table->string('paypal_smart_sandbox_secret')->nullable();
            $table->string('paypal_smart_production_secret')->nullable();
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
        Schema::dropIfExists('pay_pal_settings');
    }
}
