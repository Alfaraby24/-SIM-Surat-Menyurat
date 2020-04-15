<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $table = 'disposisi';
    protected $fillable = ['tujuan','isi_disposisi','sifat','batas_waktu','catatan','id_surat','id_user'];
}
