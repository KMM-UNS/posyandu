<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImunisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imunisasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anak_id');
            $table->string('tanggal_imunisasi');
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('umur');
            $table->string('jenis_vaksin');
            $table->string('vitamin');
            $table->string('tindakan');
            $table->string('keluhan');
            $table->string('status_gizi');
            $table->string('nama_kader');
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
        Schema::dropIfExists('imunisasis');
    }
}
