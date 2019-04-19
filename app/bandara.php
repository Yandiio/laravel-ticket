<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bandara extends Model
{
    protected $table = 'bandara';
    protected $fillable = ['id_bandara','nama_bandara','kota','negara','alamat','keterangan'];
    public $timestamps = false;
}
