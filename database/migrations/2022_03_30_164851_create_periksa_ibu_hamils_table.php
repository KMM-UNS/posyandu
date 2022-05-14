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
            $table->string('nama_id');
            $table->string('tanggal_periksa');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('lila_ibu');
            $table->string('riwayat_kesehatanibu_id');
            $table->string('status_imunisasi');
            $table->string('riwayat_beresiko');
            $table->string('riwayat_kehamilan');
            $table->string('kader');
            $table->string('tt_ke');
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
