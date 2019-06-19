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
            $table->bigInteger('id_pertanyaan')->unsigned();
            $table->bigInteger('id_survei')->unsigned();
            $table->string('response');
            $table->timestamps();
        
            // $table->bigInteger('id_point')->unsigned();
            // $table->integer('id_kategori')->unsigned();
            // $table->bigInteger('id_pilihan')->unsigned();
            // $table->foreign('id_pilihan')->references('id')->on('pilihan_jawaban');
            
            // $table->foreign('id_point')->references('id')->on('point');
            // $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_survei')->references('id')->on('survei');
            $table->foreign('id_pertanyaan')->references('id')->on('pertanyaan');
            
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
