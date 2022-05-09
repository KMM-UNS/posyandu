<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRujukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rujukans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_surat');
            $table->string('tanggal_surat');
            $table->string('kode_pemeriksaan');
            $table->string('kepada');
            $table->string('penyakit');
            $table->string('tempat_rujukan');
            $table->string('kecamatan');
            $table->string('lampiran');
            $table->string('perihal');
            $table->string('alamat_penerima');
            $table->string('keterangan_rujukan');
            $table->string('tanggal_rujukan');
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
        Schema::dropIfExists('rujukans');
    }
}
