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
        Schema::create('orders', function (Blueprint $table) {
                $table->increments('id');
                $table->string('phone');
                $table->string('name');
                $table->integer('payment_type_id');
                $table->string('street');
                $table->string('house');
                $table->string('banknote_for_change');
                $table->string('flat');
                $table->string('entrance');
                $table->string('floor');
                $table->string('intercom_code');
                $table->text('order_comment');
                $table->integer('delivery_type_id');
                $table->string('email');
                $table->integer('promo_code_id');
                $table->integer('delivery_type_by_time_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
