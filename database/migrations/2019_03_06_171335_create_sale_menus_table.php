<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sale_id');
            $table->foreign('sale_id')->references('id')->on('sales'); 
            $table->unsignedInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menus'); 
            $table->integer('amount');
            $table->double('price',8,2); 
            $table->double('discoint',8,2); 
            $table->string('msg_tochef');
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
        Schema::dropIfExists('sale_menus');
    }
}
