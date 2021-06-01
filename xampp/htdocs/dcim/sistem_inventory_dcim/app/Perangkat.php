<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    protected $table = "perangkats";
    protected $fillable = [
        'hostname', 
        'serial_number', 
        'model', 
        'merk_id',
        'pdu',
        'uspace',
        'tgl_masuk',
        'petugas',
        'ruangan',
        'rack',
        'installer',
        'keterangan'
    ];

    public function merk() {
        return $this->belongsTo('App\Merk');
    }

    public function report() {
        return $this->hasMany('App\Report');
    }
}
