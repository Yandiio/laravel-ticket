<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesawatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesawat', function (Blueprint $table) {
            $table->increments('id_pesawat');
            $table->longText('nama_pesawat');
            $table->text('kode_pesawat');
            $table->integer('kapasitas');
            $table->text('tipe_pesawat');
            $table->binary('photo');
            $table->text('maskapai');
            $table->year('tahun_pesawat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesawat');
    }
}
