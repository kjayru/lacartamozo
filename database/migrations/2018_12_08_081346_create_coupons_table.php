<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->string('title');
            $table->string('product');
            $table->text('conditions');
            $table->integer('amount');
            $table->enum('descuent',['2x1','10%','15%','20%','25%','30%','35%','40%']);
            $table->integer('days');
            $table->integer('uses')->default(1);
            $table->string('cover');
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
        Schema::dropIfExists('coupons');
    }
}
