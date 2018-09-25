<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyPointDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_point_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_point_id');
            $table->foreign('company_point_id')->references('id')->on('company_points')->onDelete('cascade');
            $table->string('descripción');
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
        Schema::dropIfExists('company_point_details');
    }
}
