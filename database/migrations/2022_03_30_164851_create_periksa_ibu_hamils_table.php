<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksaIbuHamilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periksa_ibu_hamils', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('golongan_darah');
            $table->string('tanggal_periksa');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('riwayat_kesehatanibu');
            $table->string('status_pemberian_vitamin');
            $table->string('riwayat_penyakit_keluarga');
            $table->string('keluhan_ibu_hamil');
            $table->string('tenaga_kesehatan');
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
        Schema::dropIfExists('periksa_ibu_hamils');
    }
}
