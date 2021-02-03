<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBraintreeSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('braintree_settings', function (Blueprint $table) {
            $table->id();
            $table->string('braintree_environment')->nullable();
            $table->string('braintree_sandbox_merchant_id')->nullable();
            $table->string('braintree_sandbox_public_key')->nullable();
            $table->string('braintree_sandbox_private_key')->nullable();
            $table->string('braintree_production_merchant_id')->nullable();
            $table->string('braintree_production_public_key')->nullable();
            $table->string('braintree_production_private_key')->nullable();
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
        Schema::dropIfExists('braintree_settings');
    }
}
