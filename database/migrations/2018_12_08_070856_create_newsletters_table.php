<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('news_campaign_id');
            $table->foreign('news_campaign_id')->references('id')->on('news_campaign');

            $table->unsignedInteger('news_template_id');
            $table->foreign('news_template_id')->references('id')->on('news_templates');

            $table->unsignedInteger('news_list_client_id');
            $table->foreign('news_list_client_id')->references('id')->on('news_list_clients');

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
        Schema::dropIfExists('newsletters');
    }
}
