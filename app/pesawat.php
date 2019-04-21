<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesawat extends Model
{
    protected $table ='pesawat';
    protected $fillable=['nama_pesawat','kode_pesawat','kapasitas','tipe_pesawat','photo','maskapai','tahun_pesawat'];
    public $timestamps = false;
}
