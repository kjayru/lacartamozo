<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyedClientpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyed_clientpoints', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients'); 
            $table->unsignedInteger('paymentmethod_id');
            $table->foreign('paymentmethod_id')->references('id')->on('payment_methods');
            $table->decimal('importe',8,2); 
            $table->unsignedInteger('statebuyed_id');
            $table->foreign('statebuyed_id')->references('id')->on('state_buyed');
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
        Schema::dropIfExists('buyed_clientpoints');
    }
}
