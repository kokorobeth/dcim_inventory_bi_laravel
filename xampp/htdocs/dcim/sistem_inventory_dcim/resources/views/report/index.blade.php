@extends('layout.master')

@section('sub_title')
    List Petugas DC
@endsection

@section('content')
    <a href="/report/create" class="btn btn-success my-3" target="_blank"" class="btn btn-primary my-2">Export Laporan</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hostname</th>
            <th scope="col">perangkat ID</th>
            <th scope="col">Vendor ID</th>
            <th scope="col">Serial Number</th>
            <th scope="col">Merk</th>
            <th scope="col">Model</th>
            <th scope="col">PDU</th>
            <th scope="col">U-Space</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Tanggal Keluar</th>
            <th scope="col">Petugas</th>
            <th scope="col">Ruangan</th>
            <th scope="col">Rack</th>
            <th scope="col">Installer</th>
            <th scope="col">Keterangan</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($report as $key=>$value)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$value->hostname}}</td>
                    <td>{{$value->perangkat_id}}</td>
                    <td>{{$value->vendor_id}}</td>
                    <td>{{$value->serial_number}}</td>
                    <td>{{$value->merk}}</td>
                    <td>{{$value->model}}</td>
                    <td>{{$value->pdu}}</td>
                    <td>{{$value->uspace}}</td>
                    <td>{{$value->tgl_masuk}}</td>
                    <td>{{$value->tgl_keluar}}</td>
                    <td>{{$value->petugas}}</td>
                    <td>{{$value->ruangan}}</td>
                    <td>{{$value->rack}}</td>
                    <td>{{$value->installer}}</td>
                    <td>{{$value->keterangan}}</td>
                    <td>
                        <form action="/report/{{$value->id}}" method="POST">
                            <a href="/report/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/report/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr colspan="3">
                    <td>No data</td>
                </tr>  
            @endforelse              
        </tbody>
    </table>
@endsection