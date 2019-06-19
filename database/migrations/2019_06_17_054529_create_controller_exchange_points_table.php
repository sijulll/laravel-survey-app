<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControllerExchangePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controller_exchange_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->$table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('user_detail');
            $table->$table->Integer('id_reward')->unsigned();
            $table->foreign('id_reward')->references('id')->on('reward');
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
        Schema::dropIfExists('controller_exchange_points');
    }
}
