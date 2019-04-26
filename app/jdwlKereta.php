<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jdwlKereta extends Model{
    protected $table = 'jdwl_kereta';
    protected $fillable = ['id','tujuan','stasiun_keberangkatan','waktu_keberangkatan','tanggal_keberangkatan','Durasi_perjalanan'];
    public $timestamps = false;
}
