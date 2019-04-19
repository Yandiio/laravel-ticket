<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jdwlPesawat extends Model
{
    protected $table = 'jdwl_pesawat';
    protected $fillable = ['tujuan','Bandara_keberangkatan','waktu_keberangkatan','waktu_sampai','tanggal_keberangkatan','Durasi_Perjalanan',];
    public $timestamps = false;
}
