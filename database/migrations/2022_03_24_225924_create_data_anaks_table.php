<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_anaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anak');
            $table->string('NIK');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('berat_badan_lahir');
            $table->string('tinggi_badan_lahir');
            $table->string('umur');
            $table->string('jenis_kelamin');
            $table->string('anak_ke');
            $table->string('nama_orangtua');
            $table->string('no_hp_orangtua');
            $table->string('golongan_darah');
            $table->string('tinggi_ibu');
            $table->string('tinggi_bapak');
            $table->bigInteger('createable_id')->nullable();
            $table->text('createable_type')->nullable();
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
        Schema::dropIfExists('data_anaks');
    }
}
