<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansis', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('institusi');
            $table->varchar('nama');
            $table->varchar('status');
            $table->varchar('alamat');
            $table->varchar('kepsek');
            $table->varchar('nip');
            $table->varchar('website');
            $table->varchar('email');
            $table->varchar('logo');
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
        Schema::dropIfExists('instansis');
    }
}
