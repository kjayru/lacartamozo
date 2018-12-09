<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_lists', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('push_list_id');
            $table->foreign('push_list_id')->references('id')->on('push_lists');

            $table->unsignedInteger('push_type_id');
            $table->foreign('push_type_id')->references('id')->on('push_types');

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
        Schema::dropIfExists('type_lists');
    }
}
