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
        'petugas_id',
        'vendor_id',
        'pdu',
        'uspace',
        'tgl_keluar',
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
