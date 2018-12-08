<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagePushDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_push_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('message_pushe_id');
            $table->foreign('message_pushe_id')->references('id')->on('message_pushes')->onDelete('cascade');
            $table->unsignedInteger('campaign_state_id');
            $table->foreign('campaign_state_id')->references('id')->on('campaign_states')->onDelete('cascade');
            $table->unsignedInteger('customer_location_id');
            $table->foreign('customer_location_id')->references('id')->on('customer_locations')->onDelete('cascade');
            
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
        Schema::dropIfExists('message_push_details');
    }
}
