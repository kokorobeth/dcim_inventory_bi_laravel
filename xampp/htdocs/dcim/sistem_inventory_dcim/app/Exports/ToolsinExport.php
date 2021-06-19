<?php

namespace App\Exports;

use App\Perangkat;
use App\Petugas;
use App\Vendor;
use App\Ruangan;
use App\Merk;

use Maatwebsite\Excel\Concerns\FromCollection;

class ToolsinExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Perangkat::all();
    }
}
