<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report = Report::all();
        return view('report.index', compact('report'));
    }

    // public function export_excel()
	// {
	// 	return Excel::download(new ReportExport, 'report.xlsx');
	// }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'hostname' => 'required|unique:reports',
            'perangkat_id' => 'required',
            'vendor_id' => 'required',
            'serial_number' => 'required',
            'merk' => 'required',
            'model' => 'required',
            'pdu' => 'required',
            'uspace' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
            'petugas' => 'required',
            'ruangan' => 'required',
            'rack' => 'required',
            'isntaller' => 'required',
            'keterangan' => 'required',
        ]);

        $report = Report::create([
            'hostname' => $request['hostname'],
            'perangkat_id' => $request['perangkat_id'],
            'vendor_id' => $request['vendor_id'],
            'serial_number' => $request['serial_number'],
            'merk' => $request['merk'],
            'model' => $request['model'],
            'pdu' => $request['pdu'],
            'uspace' => $request['uspace'],
            'tgl_masuk' => $request['tgl_masuk'],
            'tgl_keluar' => $request['tgl_keluar'],
            'petugas' => $request['petugas'],
            'ruangan' => $request['ruangan'],
            'rack' => $request['rack'],
            'isntaller' => $request['isntaller'],
            'keterangan' => $request['keterangan']
        ]);
        return redirect('/report');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $petugas = Petugas::find($id);
        // return view('petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $petugas = Petugas::where('id', $id)->update([
        //     'name' => $request['name']
        // ]);
        // return redirect('/petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::destroy($id);
        return redirect('/report');
    }
}

