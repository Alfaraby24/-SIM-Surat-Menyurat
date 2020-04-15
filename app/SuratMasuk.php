<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = 'surat_masuk';
    protected $fillable = ['no_agenda','no_surat','asal_surat','isi','kode','indeks','tgl_surat','tgl_diterima','file','keterangan','id_user'];
}
