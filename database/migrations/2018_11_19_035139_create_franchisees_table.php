<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchiseesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('cellphone');
            $table->integer('status');
            $table->unsignedInteger('package_id');
            $table->foreign('package_id')->references('id')->on('packages');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('classification_id');
            $table->foreign('classification_id')->references('id')->on('classifications');
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
        Schema::dropIfExists('franchisees');
    }
}
