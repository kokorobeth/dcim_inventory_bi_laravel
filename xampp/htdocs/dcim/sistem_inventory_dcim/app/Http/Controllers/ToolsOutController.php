<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PerangkatOut;

use App\Exports\ToolsOut;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ToolsOutController extends Controller
{
    public function index() {
        $toolsin = PerangkatOut::all();
        return view('perangkatout', ['perangkatout' => $toolsout]);
    }

    public function export_excel() {
        return Excel::download(new ToolsOut, 'toolsout.xlsx');
    }
}
