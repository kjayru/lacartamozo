<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantPointDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_point_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('restaurant_detail_id');
            $table->foreign('restaurant_detail_id')->references('id')->on('restaurant_details');
            $table->unsignedInteger('restaurant_point_buy_id');
            $table->foreign('restaurant_point_buy_id')->references('id')->on('restaurant_point_buys')->onDelete('cascade');
            
            $table->integer('cantidad');
            $table->string('puntos_restaurant');
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
        Schema::dropIfExists('restaurant_point_details');
    }
}
