<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');


            $table->unsignedInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menus');

            $table->unsignedInteger('mesa_id');
            $table->foreign('mesa_id')->references('id')->on('mesas');

            

            $table->unsignedInteger('mozo_id');
            $table->foreign('mozo_id')->references('id')->on('mozos');
            
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
        Schema::dropIfExists('assignments');
    }
}
