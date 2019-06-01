<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReward extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward', function (Blueprint $table) {
            $table->Increments('id_reward');
            $table->string('reward');
            $table->string('description');
            $table->timestamps();
            $table->foregin('id_admin')->references('id')->on('admin');

	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reward');
    }
}
