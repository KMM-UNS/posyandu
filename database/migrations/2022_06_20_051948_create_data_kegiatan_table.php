<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('daftar_hadir');
            $table->string('notulensi');
            $table->string('fotokegiatan');
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
        Schema::dropIfExists('data_kegiatan');
    }
}
