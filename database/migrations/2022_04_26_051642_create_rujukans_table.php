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
            $table->string('kepada');
            $table->string('nama');
            $table->string('umur');
            $table->string('alamat');
            $table->string('bb_turun');
            $table->string('bb_naik');
            $table->string('keluhan');
            $table->string('keterangan_rujukan');
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
