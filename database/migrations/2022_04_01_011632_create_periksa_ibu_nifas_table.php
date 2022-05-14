<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksaIbuNifasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periksa_ibu_nifas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('golongan_darah_id');
            $table->string('tanggal_periksa');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('riwayat_kesehatanibu');
            $table->string('status_pemberian_vitamin');
            $table->string('riwayat_penyakit_keluarga');
            $table->string('kader');
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
        Schema::dropIfExists('periksa_ibu_nifas');
    }
}
