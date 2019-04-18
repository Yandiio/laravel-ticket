<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jdwlPesawat extends Model
{
    protected $table = 'jdwl_pesawat';
    protected $fillable = ['nama_pesawat','kode_pesawat','kapasitas','tipe_pesawat','photo','maskapai','tahun_pesawat'];
}
