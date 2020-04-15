<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sett extends Model
{
    protected $table = 'sett';
    protected $fillable = ['surat_masuk','surat_keluar','referensi','id_user'];
}
