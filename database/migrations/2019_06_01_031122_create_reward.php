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
            $table->Increments('id');
            $table->string('reward_name');
            $table->string('description');
            $table->integer('reward_point');
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('admin');
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
        Schema::dropIfExists('reward');
    }
}
