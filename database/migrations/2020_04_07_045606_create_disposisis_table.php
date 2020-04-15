<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisposisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisis', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('tujuan');
            $table->text('isi_disposisi');
            $table->varchar('sifat');
            $table->timestamps('batas_waktu');
            $table->varchar('catatan');
            $table->integer('id_surat');
            $table->integer('id_user');            
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
        Schema::dropIfExists('disposisis');
    }
}
