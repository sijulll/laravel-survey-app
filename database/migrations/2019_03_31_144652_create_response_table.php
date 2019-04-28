<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->foreign('id_pertanyaan')->references('id')->on('pertanyaan');
            $table->foreign('id_survei')->references('id')->on('survei');
            $table->foreign('id_tipepertanyaan')->references('id')->on('tipepertanyaan');
            $table->foreign('id_pilihan')->references('id')->on('pilihan_jawaban');
            $table->foreign('id_point')->references('id')->on('point');
            $table->timestamps('respondate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('response');
    }
}
