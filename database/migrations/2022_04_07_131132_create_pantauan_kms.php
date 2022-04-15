<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePantauanKms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantauan_kms', function (Blueprint $table) {
             $table->id();
            $table->string('tanggal_pemeriksaan');
            $table->string('nama_lansia1');
            $table->string('kegiatan_harian');
            $table->string('status_mental');
            $table->string('indeks_massa_tubuh');
            $table->string('tekanan_darah');
            $table->string('hemoglobin');
            $table->string('reduksi_urine');
            $table->string('protein_urine');
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
        Schema::dropIfExists('pantauan_kms');
    }
}
