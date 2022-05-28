<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRujukanLansia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rujukan_lansia', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat');
            $table->string('kepada');
            $table->string('tanggal_surat');
            $table->string('namalansia');
            $table->string('umur');
            $table->string('jeniskelamin');
            $table->string('alamat');
            $table->string('keluhan');
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
        Schema::dropIfExists('rujukan_lansia');
    }
}
