<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketPelatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket_pelatihan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pelatihan_id');
            $table->integer('jenjang_pelatihan');
            $table->date('waktu_pelaksanaan');
            $table->string('pelaksana');
            $table->string('no_sertifikat');
            $table->bigInteger('id_user');
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
        Schema::dropIfExists('tiket_pelatihan');
    }
}
