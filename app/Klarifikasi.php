<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klarifikasi extends Model
{
    protected $table = 'klarifikasi';
    protected $fillable = ['kode','nama','uraian','id_user'];
}
