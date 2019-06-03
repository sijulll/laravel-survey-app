<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponse extends Migration
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
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('user');
            $table->integer('id_kategori')->unsigned();
            $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->bigInteger('id_pertanyaan')->unsigned();
            $table->foreign('id_pertanyaan')->references('id')->on('pertanyaan');
            $table->bigInteger('id_survei')->unsigned();
            $table->foreign('id_survei')->references('id')->on('survei');
            $table->bigInteger('id_tipe_pertanyaan')->unsigned();
            $table->foreign('id_tipe_pertanyaan')->references('id')->on('tipe_pertanyaan');
            $table->bigInteger('id_pilihan')->unsigned();
            $table->foreign('id_pilihan')->references('id')->on('pilihan_jawaban');
            $table->bigInteger('id_point')->unsigned();
            $table->foreign('id_point')->references('id')->on('point');
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
        Schema::dropIfExists('response');
    }
}
