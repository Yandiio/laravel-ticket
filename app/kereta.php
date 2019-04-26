<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kereta extends Model
{
    protected $table = 'stasiun';
    protected $fillable = ['id_stasiun','nomor','nama_stasiun','kota','alamat','keterangan'];
    public $timestamps = false;    
}



