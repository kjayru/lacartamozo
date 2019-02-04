<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeqrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codeqrs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mesa_id');
            $table->foreign('mesa_id')->references('id')->on('mesas');
            $table->string('path');
            $table->string('detalle');
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
        Schema::dropIfExists('codeqrs');
    }
}
