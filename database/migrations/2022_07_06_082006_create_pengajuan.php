<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kader');
            $table->string('tgl_ajuan');
            $table->string('jumlah_ajuan');
            $table->string('rencana_ajuan');
            $table->string('status')->default(0);
            $table->string('bukti')->nullable();
            $table->string('kembali')->nullable();
            $table->string('statusakhir')->default(0);
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
        Schema::dropIfExists('pengajuan');
    }
}
