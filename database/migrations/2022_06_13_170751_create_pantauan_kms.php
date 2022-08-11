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
            $table->string('kader');
            $table->string('kegiatan_harian');
            $table->string('status_mental');
            $table->string('indeks_massa_tubuh');
            $table->integer('tb');
            $table->string('bb');
            $table->string('hasil');
            $table->string('tekanan_darah');
            $table->string('sistol');
            $table->string('diastol');
            $table->string('dengan_obat')->nullable();;
            $table->string('nadi')->nullable();;
            $table->string('hemoglobin');
            $table->string('g_hemoglobin');
            $table->string('reduksi_urine');
            $table->string('jumlahtanda')->nullable();;
            $table->string('dengan_obat_reduksi')->nullable();
            $table->string('protein_urine');
            $table->string('jumlah_tanda')->nullable();
            $table->string('dengan_obat_protein')->nullable();
            $table->string('gizi');
            $table->string('keluhan');
            $table->string('tindakan');
            $table->string('status')->default(0);
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
