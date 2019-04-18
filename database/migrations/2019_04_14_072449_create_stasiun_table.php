<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStasiunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stasiun',function(Blueprint $table){
            $table->integer('nomor');
            $table->text('nama_stasiun');
            $table->string('kota','100');
            $table->string('alamat','100');
            $table->text('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('stasiun');
    }
}
