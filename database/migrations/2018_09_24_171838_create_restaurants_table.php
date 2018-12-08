<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
           
            $table->unsignedInteger('person_franchise_id');
            $table->foreign('person_franchise_id')->references('id')->on('person_franchises');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('direccion');
            $table->float('latitud',11,8);
            $table->float('longitud',11,8);
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
        Schema::dropIfExists('restaurants');
    }
}
