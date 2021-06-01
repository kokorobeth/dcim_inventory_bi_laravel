<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerangkatOut extends Model
{
    protected $table = "perangkatout";
    protected $fillable = [
        'hostname', 
        'serial_number', 
        'model', 
        'merk_id',
        'pdu',
        'uspace',
        'tgl_keluar',
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
