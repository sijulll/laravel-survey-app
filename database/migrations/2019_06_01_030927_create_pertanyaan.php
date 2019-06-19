<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_survei')->unsigned();
            $table->foreign('id_survei')->references('id')->on('survei');
            $table->bigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('user');
            $table->bigInteger('id_tipe_pertanyaan')->unsigned();
            $table->foreign('id_tipe_pertanyaan')->references('id')->on('tipe_pertanyaan');
            $table->string('pertanyaan');
            $table->string('opsi_pertanyaan')->nullable();
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
        Schema::dropIfExists('pertanyaan');
    }
}
