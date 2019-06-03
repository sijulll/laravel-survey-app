<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePilihanJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihan_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_pertanyaan')->unsigned();
            $table->foreign('id_pertanyaan')->references('id')->on('pertanyaan');
            $table->bigInteger('id_survei')->unsigned();
            $table->foreign('id_survei')->references('id')->on('survei');
            $table->integer('id_kategori')->unsigned();
            $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->bigInteger('id_tipe_pertanyaan')->unsigned();
            $table->foreign('id_tipe_pertanyaan')->references('id')->on('tipe_pertanyaan');
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
        Schema::dropIfExists('pilihan_jawaban');
    }
}
