<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailImunisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_imunisasis', function (Blueprint $table) {
            $table->id();
            $table->string('tt_ke');
            $table->string('selang_waktu');
            $table->string('perlindungan');
            $table->timestamps();
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif');
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
        Schema::dropIfExists('detail_imunisasis');
    }
}
