<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\PerangkatOut;
use App\Merk;

class PerangkatOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkatout = PerangkatOut::all();
        return view('perangkatout.index', compact('perangkatout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merks = Merk::all();
        return view('perangkatout.create', compact('merks'));
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
            'tgl_keluar' => 'required',
            'petugas' => 'required',
            'rack' => 'required',
            'ruangan' => 'required',
            'installer' => 'required',
            'keterangan' => 'required'
        ]);

        $perangkatout = PerangkatOut::create([
            'hostname' => $request->hostname,
            'serial_number' => $request->serial_number,
            'merk_id' => $request->merk_id,
            'model' => $request->model,
            'pdu' => $request->pdu,
            'uspace' => $request->uspace,
            'tgl_keluar' => $request->tgl_keluar,
            'petugas' => $request->petugas,
            'rack' => $request->rack,
            'ruangan' => $request->ruangan,
            'installer' => $request->installer,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/perangkatout');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
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
        $perangkatout = PerangkatOut::findorfail($id);
        return view('perangkatout.edit', compact('perangkatout', 'merk'));
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
        $perangkatout = PerangkatOut::where('id', $id)->update([
            'hostname' => $request['hostname'],
            'serial_number' => $request['serial_number'],
            'merk_id' => $request['merk_id'],
            'model' => $request['model'],
            'pdu' => $request['pdu'],
            'uspace' => $request['uspace'],
            'tgl_keluar' => $request['tgl_keluar'],
            'petugas' => $request['petugas'],
            'ruangan' => $request['ruangan'],
            'rack' => $request['rack'],
            'installer' => $request['installer'],
            'keterangan' => $request['keterangan']
        ]);
        return redirect('/perangkatout');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perangkatout = PerangkatOut::destroy($id);
        return redirect('/perangkatout');
    }
}
