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
            $table->datetime('star');
            $table->datetime('end');
            $table->unsignedInteger('sector_id');
            $table->foreign('sector_id')->references('id')->on('sectors');
            $table->unsignedInteger('mesa_id');
            $table->foreign('mesa_id')->references('id')->on('mesas');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('booking');
    }
}
