<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaKegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kegiatan_lansia_id');
            $table->string('lansia_id')->nullable();
            $table->string('status')->default(0);
            $table->string('iuran_wajib');
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
        Schema::dropIfExists('peserta_kegiatan');
    }
}
