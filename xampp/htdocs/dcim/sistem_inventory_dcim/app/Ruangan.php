<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = "ruangans";
    protected $fillable = ['name', 'ruangan_id'];

    public function perangkat() {
        return $this->hasMany('App\Perangkat');
    }
}
