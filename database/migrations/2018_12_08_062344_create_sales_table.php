<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');


            $table->unsignedInteger('mozo_id')->nullable();
            $table->foreign('mozo_id')->references('id')->on('mozos');

            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->unsignedInteger('paymentmethod_id');
            $table->foreign('paymentmethod_id')->references('id')->on('payment_methods');

            $table->unsignedInteger('mesa_id')->nullable();
            $table->foreign('mesa_id')->references('id')->on('mesas');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->decimal('importe',8,2);

            $table->unsignedInteger('salestate_id');
            $table->foreign('salestate_id')->references('id')->on('sales_state');
            
            $table->unsignedInteger('typesale_id');
            $table->foreign('typesale_id')->references('id')->on('type_sales');

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
        Schema::dropIfExists('sales');
    }
}
