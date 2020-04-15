<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratkeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkeluars', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('no_agenda');
            $table->varchar('tujuan');
            $table->varchar('no_surat');
            $table->text('isi');
            $table->varchar('kode');
            $table->timestamps('tgl_surat');
            $table->varchar('tgl_catat');
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
        Schema::dropIfExists('suratkeluars');
    }
}
