<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Perangkat;
use App\Merk;

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
        return view('perangkat.create', compact('merks'));
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
            'merk_id' => 'required',
            'model' => 'required',
            'pdu' => 'required',
            'uspace' => 'required',
            'tgl_masuk' => 'required',
            'petugas' => 'required',
            'rack' => 'required',
            'ruangan' => 'required',
            'installer' => 'required',
            'keterangan' => 'required'
        ]);

        $perangkat = Perangkat::create([
            'hostname' => $request->hostname,
            'serial_number' => $request->serial_number,
            'merk_id' => $request->merk_id,
            'model' => $request->model,
            'pdu' => $request->pdu,
            'uspace' => $request->uspace,
            'tgl_masuk' => $request->tgl_masuk,
            'petugas' => $request->petugas,
            'rack' => $request->rack,
            'ruangan' => $request->ruangan,
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
        $perangkat = Perangkat::findorfail($id);
        return view('perangkat.edit', compact('perangkat', 'merk'));
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
            'merk_id' => $request['merk_id'],
            'model' => $request['model'],
            'pdu' => $request['pdu'],
            'uspace' => $request['uspace'],
            'tgl_masuk' => $request['tgl_masuk'],
            'petugas' => $request['petugas'],
            'ruangan' => $request['ruangan'],
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
}
