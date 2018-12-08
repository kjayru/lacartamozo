<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('campaign_id');
            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
            $table->unsignedInteger('customer_detail_id');
            $table->foreign('customer_detail_id')->references('id')->on('customer_details')->onDelete('cascade');
            $table->unsignedInteger('campaign_state_id');
            $table->foreign('campaign_state_id')->references('id')->on('campaign_states')->onDelete('cascade');
            $table->unsignedInteger('personal_detail_id');
            $table->foreign('personal_detail_id')->references('id')->on('personal_details')->onDelete('cascade');
            
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
        Schema::dropIfExists('campaign_details');
    }
}
