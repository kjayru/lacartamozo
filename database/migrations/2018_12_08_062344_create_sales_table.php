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


            $table->unsignedInteger('mozo_id');
            $table->foreign('mozo_id')->references('id')->on('mozos');

            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->unsignedInteger('payment_method_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');

            $table->unsignedInteger('mesa_id');
            $table->foreign('mesa_id')->references('id')->on('mesas');

            $table->decimal('importe',8,2);

            $table->integer('state')->default(1);
            
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
