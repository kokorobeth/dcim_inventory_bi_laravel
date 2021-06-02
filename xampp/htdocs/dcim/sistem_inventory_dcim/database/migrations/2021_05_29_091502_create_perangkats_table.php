<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerangkatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perangkats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hostname');
            $table->string('serial_number');
            $table->string('model');
            $table->unsignedBigInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('merks');
            $table->unsignedBigInteger('petugas_id');
            $table->foreign('petugas_id')->references('id')->on('petugas');
            $table->unsignedBigInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->string('pdu');
            $table->string('uspace');
            $table->string('tgl_masuk');
            $table->unsignedBigInteger('ruangan_id');
            $table->foreign('ruangan_id')->references('id')->on('ruangans');
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
        Schema::dropIfExists('perangkats');
    }
}
