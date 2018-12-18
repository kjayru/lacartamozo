<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPushsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_pushs', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('push_id');
            $table->foreign('push_id')->references('id')->on('pushs');

            $table->unsignedInteger('type_list_id');
            $table->foreign('type_list_id')->references('id')->on('type_lists');

            $table->decimal('latitud',9,6);

            $table->decimal('longitud',9,6);
            $table->decimal('radius',9,6);

            

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
        Schema::dropIfExists('job_pushs');
    }
}
