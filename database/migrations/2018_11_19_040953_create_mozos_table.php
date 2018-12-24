<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMozosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mozos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('cellphone');
            $table->integer('status');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::dropIfExists('mozos');
    }
}
