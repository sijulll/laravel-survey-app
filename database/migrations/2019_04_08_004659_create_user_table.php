<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_kategori')->references('id')->on('kategori');
            // Untuk ID Poin gw masih bingung maksudnya gimana
            // $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->string('nama');
            $table->datetime('tanggal_lahir');
            $table->integer('usia');
            $table->string('jensis_kelamin');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            // gw juga masih kurang paham fungsi role ini apa
            // $table->string('role');
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
        Schema::dropIfExists('user');
    }
}
