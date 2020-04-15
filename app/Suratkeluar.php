<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
    protected $table = 'surat_keluar';
    protected $fillable = ['no_agenda','tujuan','no_surat','isi','kode','tgl_surat','tgl_catat','file','keterangan','id_user'];
}
