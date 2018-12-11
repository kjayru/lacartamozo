<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('franchise_id')->references('id')->on('franchisees');
            $table->string('cover');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('cellphone');
           
            $table->decimal('latitude',11,8);
            $table->decimal('longitude',11,8);
            $table->integer('numesas');
            $table->integer('status');
           
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
        Schema::dropIfExists('clients');
    }
}
