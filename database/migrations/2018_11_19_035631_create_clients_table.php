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
            $table->unsignedInteger('franchise_id');
            $table->foreign('franchise_id')->references('id')->on('franchisees');
            $table->string('cover');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('cellphone');
            $table->string('email');
            $table->string('sexo');
            $table->string('cashier');
            $table->string('logo');
            $table->decimal('latitude',11,8);
            $table->decimal('longitude',11,8);
            $table->integer('status');
            $table->integer('numesas');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->unsignedInteger('package_id');
            $table->foreign('package_id')->references('id')->on('packages');
            $table->integer('likes')->default(0);
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

