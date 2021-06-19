<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perangkat;
use App\Merk;
use App\Petugas;
use App\Vendor;
use App\Ruangan;

use App\Exports\ToolsinExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PerangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkat = Perangkat::all();
        return view('perangkat.index', compact('perangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merks = Merk::all();
        $nm_petugas = Petugas::all();
        $nm_vendor = Vendor::all();
        $nm_ruangan = Ruangan::all();
        return view('perangkat.create', compact('merks', 'nm_petugas', 'nm_vendor', 'nm_ruangan'));
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
            'hostname' => 'required',
            'serial_number' => 'required',
            'model' => 'required',
            'merk_id' => 'required',
            'petugas_id' => 'required',
            'vendor_id' => 'required',
            'pdu' => 'required',
            'uspace' => 'required',
            'tgl_masuk' => 'required',
            'ruangan_id' => 'required',
            'rack' => 'required',
            'installer' => 'required',
            'keterangan' => 'required'
        ]);

        $perangkat = Perangkat::create([
            'hostname' => $request->hostname,
            'serial_number' => $request->serial_number,
            'model' => $request->model,
            'merk_id' => $request->merk_id,
            'petugas_id' => $request->petugas_id,
            'vendor_id' => $request->vendor_id,
            'pdu' => $request->pdu,
            'uspace' => $request->uspace,
            'tgl_masuk' => $request->tgl_masuk,
            'ruangan_id' => $request->ruangan_id,
            'rack' => $request->rack,
            'installer' => $request->installer,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/perangkat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $perangkat = Perangkat::find($id);
        // return view('perangkat.show', compact('perangkat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merk = Merk::all();
        $nm_petugas = Petugas::all();
        $nm_vendor = Vendor::all();
        $nm_ruangan = Ruangan::all();
        $perangkat = Perangkat::findorfail($id);
        return view('perangkat.edit', compact('perangkat', 'merk', 'nm_petugas', 'nm_vendor', 'nm_ruangan'));
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
        $perangkat = Perangkat::where('id', $id)->update([
            'hostname' => $request['hostname'],
            'serial_number' => $request['serial_number'],
            'model' => $request['model'],
            'merk_id' => $request['merk_id'],
            'petugas_id' => $request['petugas_id'],
            'vendor_id' => $request['vendor_id'],
            'pdu' => $request['pdu'],
            'uspace' => $request['uspace'],
            'tgl_masuk' => $request['tgl_masuk'],
            'ruangan_id' => $request['ruangan_id'],
            'rack' => $request['rack'],
            'installer' => $request['installer'],
            'keterangan' => $request['keterangan']
        ]);
        return redirect('/perangkat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perangkat = Perangkat::destroy($id);
        return redirect('/perangkat');
    }

    public function export_excel() {
        return Excel::download(new ToolsinExport, 'toolsin.xlsx');
        // return (new ToolsinExport)->download('toolsIn.xlsx');
    }
}
