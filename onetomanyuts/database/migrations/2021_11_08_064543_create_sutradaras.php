<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSutradaras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sutradaras', function (Blueprint $table) {
            $table->id();
            $table->string('id_sutradara');
            $table->string('nama_sutradara');
            $table->string('alamat_sutradara');
            $table->Integer('no_telp'); 
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
        Schema::dropIfExists('sutradaras');
    }
}
