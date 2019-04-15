<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelSurveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survei', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->string('judul_survei');
            $table->string('deskripsi_survei');
            $table->string('pict_survei');
            $table->foreign('id_user')->references('id')->on('user');
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
        Schema::dropIfExists('survei');
    }
}
