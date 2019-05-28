<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('amount');
            $table->date('day');
            $table->time('star');
            $table->time('end'); 
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //caso de una reserva en el rest desde el app, sin indicar mesa y sector
            $table->unsignedInteger('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedInteger('bookingstate_id');
            $table->foreign('bookingstate_id')->references('id')->on('booking_state');        
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
        Schema::dropIfExists('booking');
    }
}
