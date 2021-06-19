<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perangkat;
use App\Vendor;
use App\Petugas;
use App\Ruangan;
use App\Merk;

use App\Exports\ToolsinExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ToolsInController extends Controller
{
    public function index() {
        $toolsin = Perangkat::all();
        return view('perangkat.index', compact('perangkat', 'vendor', 'petugas', 'ruangan', 'merk'));
    }

    public function export_excel() {
        return Excel::download(new ToolsinExport, 'toolsin.xlsx');
    }
}
