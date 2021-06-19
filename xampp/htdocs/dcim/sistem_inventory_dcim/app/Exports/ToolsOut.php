<?php

namespace App\Exports;

use App\PerangkatOut;
use Maatwebsite\Excel\Concerns\FromCollection;

class ToolsOut implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PerangkatOut::all();
    }
}
