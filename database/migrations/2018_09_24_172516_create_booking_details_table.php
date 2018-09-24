<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('booking_id');
            $table->foreign('booking_id')->on('id')->references('bookings')->onDelete('cascade');
            $table->unsignedInteger('restaurant_id');
            $table->foreign('restaurant_id')->on('id')->reference('restaurants')->onDelete('cascade');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->on('id')->references('users');
            $table->datetime('fecha');
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
        Schema::dropIfExists('booking_details');
    }
}
