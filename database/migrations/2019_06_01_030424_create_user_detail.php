<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_detail', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->foreign('id_point')->references('id')->on('point');
            $table->string('nama');
            $table->datetime('tanggal_lahir');
            $table->integer('usia');
            $table->string('jenis_kelamin');
            $table->timestamps('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_detail');
    }
}
