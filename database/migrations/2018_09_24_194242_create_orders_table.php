<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
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
            $table->string('pedidos');
            $table->string('referencia');
            $table->string('pedido');
            $table->unsignedInteger('restaurant_detail_id');
            $table->foreign('restaurant_detail_id')->references('id')->on('restaurant_details')->onDelete('cascade');
            $table->unsignedInteger('customer_detail_id');
            $table->foreign('customer_detail_id')->references('id')->on('customer_details')->onDelete('cascade');
            $table->unsignedInteger('order_state_id');
            $table->foreign('order_state_id')->references('id')->on('order_states')->onDelete('cascade');
            $table->unsignedInteger('order_type_id');
            $table->foreign('order_type_id')->references('id')->on('order_types')->onDelete('cascade');
            $table->unsignedInteger('pay_type_id');
            $table->foreign('pay_type_id')->references('id')->on('pay_types')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
