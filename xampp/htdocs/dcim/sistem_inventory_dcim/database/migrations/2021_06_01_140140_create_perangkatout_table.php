<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerangkatoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perangkatout', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hostname');
            $table->string('serial_number');
            $table->string('model');
            $table->unsignedBigInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('merks');
            $table->string('pdu');
            $table->string('uspace');
            $table->string('tgl_keluar');
            $table->string('petugas');
            $table->string('ruangan');
            $table->string('rack');
            $table->string('installer');
            $table->string('keterangan');
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
        Schema::dropIfExists('perangkatout');
    }
}
