<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandara', function (Blueprint $table) {
            $table->increments('id_bandara');
            $table->text('nama_bandara');
            $table->string('kota','100');
            $table->string('negara','50');
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
        Schema::dropIfExists('bandara');
    }
}
