<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('no_agenda');
            $table->varchar('no_surat');
            $table->varchar('asal_surat');
            $table->text('isi');
            $table->varchar('kode');
            $table->varchar('indeks');
            $table->timestamps('tgl_surat');
            $table->varchar('tgl_diterima');
            $table->varchar('file');
            $table->varchar('keterangan');
            $table->varchar('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_masuks');
    }
}
