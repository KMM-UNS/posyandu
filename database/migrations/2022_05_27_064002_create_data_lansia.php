<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataLansia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_lansia', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lansia');
            $table->string('email');
            $table->string('no_hp');
            $table->string('no_KMS');
            $table->string('NIK');
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('umur');
            $table->string('status_perkawinan');
            $table->string('alamat');
            $table->string('agama');
            $table->string('pendidikan_terakhir');
            $table->string('golongan_darah');
            $table->string('jaminan_kesehatan');
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
        Schema::dropIfExists('data_lansia');
    }
}