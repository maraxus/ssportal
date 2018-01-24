<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->dateTime('data_envio');
            $table->unsignedInteger("wallet_id");
            $table->unsignedInteger("template_id");
            $table->foreign("wallet_id")
                ->references('id')
                ->on("wallets")
                ->onDelete("restrict");
            $table->foreign('template_id')
                ->references('id')
                ->on('templates')
                ->onDelete('restrict');
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
        Schema::dropIfExists('campaigns');
    }
}
