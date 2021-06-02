<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = "petugas";
    protected $fillable = ['name', 'petugas_id'];

    public function perangkat() {
        return $this->hasMany('App\Perangkat');
    }
}
