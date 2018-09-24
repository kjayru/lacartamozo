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
            $table->unsignedInteger('campaing_id');
            $table->foreign('campaing_id')->on('id')->references('campaings')->onDelete('cascade');
            $table->unsignedInteger('Customer_detail_id');
            $table->foreign('Customer_detail_id')->on('id')->references('customer_details')->onDelete('cascade');
            $table->unsignedInteger('campaign_state_id');
            $table->foreign('camapaign_state_id')->on('id')->references('campaign_states')->onDelete('cascade');
            $table->unsignedInteger('personal_detail_id');
            $table->foreign('personal_detail_id')->on('id')->references('personal_details')->onDelete('cascade');
            
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
