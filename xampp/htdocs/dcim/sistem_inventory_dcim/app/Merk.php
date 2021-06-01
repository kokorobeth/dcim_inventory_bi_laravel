<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = "merks";
    protected $fillable = ['name', 'merk_id'];

    public function perangkat() {
        return $this->hasMany('App\Perangkat');
    }
}
