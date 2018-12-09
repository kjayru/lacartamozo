<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gifts', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->string('name');
            $table->text('description');
            $table->text('terms')->nullable();
            $table->string('cover');
            $table->boolean('display');
            $table->boolean('repeat');
            $table->integer('points_open');
            $table->enum('sistema',['gps chekin','Por Cercania','QR','CODIGO']);
            $table->integer('distance_permit');
            $table->string('zone_gtm')->nullable();
            $table->string('limit_start')->nullable();
            $table->string('limit_end')->nullable();
            $table->text('prize')->nullable();
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
        Schema::dropIfExists('gifts');
    }
}
