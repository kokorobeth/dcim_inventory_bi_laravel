<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "reports";
    protected $fillable = [
        'perangkat_id',
        'vendor_id',
        'hostname',
        'serial_number',
        'merk',
        'model',
        'pdu',
        'uspace',
        'tgl_masuk',
        'tgl_keluar',
        'petugas',
        'ruangan',
        'rack',
        'installer',
        'keterangan'
    ];

    public function vendor() {
        return $this->belongsTo('App\Vendor');
    }

    public function perangkat() {
        return $this->belongsTo('App\Perangkat');
    }
}
