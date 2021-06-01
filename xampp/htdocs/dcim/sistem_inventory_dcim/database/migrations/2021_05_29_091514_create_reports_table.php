<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hostname');
            $table->string('serial_number');
            $table->string('merk');
            $table->string('model');
            $table->string('pdu');
            $table->integer('uspace');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->string('petugas');
            $table->string('ruangan');
            $table->string('rack');
            $table->string('installer');
            $table->string('keterangan');
            $table->unsignedBigInteger('perangkat_id');
            $table->foreign('perangkat_id')->references('id')->on('perangkats');
            $table->unsignedBigInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendors');
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
        Schema::dropIfExists('reports');
    }
}
