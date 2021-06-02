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
        'petugas_id',
        'vendor_id',
        'pdu',
        'uspace',
        'tgl_masuk',
        'petugas',
        'ruangan_id',
        'rack',
        'installer',
        'keterangan'
    ];

    public function merk() {
        return $this->belongsTo('App\Merk');
    }

    public function petugas() {
        return $this->belongsTo('App\Petugas');
    }
    public function vendor() {
        return $this->belongsTo('App\Vendor');
    }
    public function ruangan() {
        return $this->belongsTo('App\Ruangan');
    }
}
