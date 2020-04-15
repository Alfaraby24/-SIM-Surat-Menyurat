<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table = 'instansi';
    protected $fillable = ['institusi','nama','status','alamat','kepsek','nip','website','email','logo','id_user'];
}
