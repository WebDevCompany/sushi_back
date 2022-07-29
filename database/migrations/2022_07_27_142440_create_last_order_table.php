<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_order', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prise');
            $table->string('number');
            $table->string('order_time');
            $table->string('time_to_get_order');
            $table->string('address');
            $table->string('courier_or_pickup');
            $table->string('promo_code');
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
        Schema::dropIfExists('last_order');
    }
};
