<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = "vendors";
    // protected $fillable = ['name'];
    protected $guarded = [];

    /**
     * One to Many Report
     */
    public function report() {
        return $this->hasMany('App\Report');
    }
}

