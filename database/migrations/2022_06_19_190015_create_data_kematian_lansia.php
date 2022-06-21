<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKematianLansia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kematian_lansia', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jenazah');
            $table->string('jenis_kelamin');
            $table->string('tgl_lahir');
            $table->string('tgl_meninggal');
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
        Schema::dropIfExists('data_kematian_lansia');
    }
}
