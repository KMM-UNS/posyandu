<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbuHamilPeriksasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibu_hamil_periksas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_id');
            $table->string('nomor_periksa');
            $table->string('keluhan');
            $table->string('tanggal_kembali');
            $table->string('tenaga_kesehatan');
            $table->string('tanggal_periksa');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ibu_hamil_periksas');
    }
}
