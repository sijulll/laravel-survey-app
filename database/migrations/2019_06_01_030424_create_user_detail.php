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
            $table->bigInteger('id_user')->unsigned();
            $table->string('nama_user');
            $table->string('jenis_kelamin');
            $table->integer('no_tlp');
            $table->string('pekerjaan');
            $table->string('wilayah');
            $table->integer('user_point');
            $table->timestamps();

            $table->primary('id_user')->references('id')->on('user');
            
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
