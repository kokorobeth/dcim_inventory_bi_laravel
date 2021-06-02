<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = "vendors";
    protected $fillable = ['name', 'vendor_id'];

    /**
     * One to Many Report
     */
    public function perangkat() {
        return $this->hasMany('App\Perangkat');
    }
}