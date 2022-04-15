<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluhanTindakan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluhan_tindakan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lansia_id');
            $table->string('nama_pemeriksa');
            $table->string('tanggal_pemeriksaan');
            $table->string('keluhan');
            $table->string('tindakan');
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
        Schema::dropIfExists('keluhan_tindakan');
    }
}
