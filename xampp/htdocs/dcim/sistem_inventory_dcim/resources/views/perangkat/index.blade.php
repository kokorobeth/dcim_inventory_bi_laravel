@extends('layout.master')

@section('sub_title')
    Data Perangkat
@endsection

@section('content')
    <a href="/perangkat/create" class="btn btn-primary my-2">Tambah</a>
    <a href="/toolsin/export_excel" class="btn btn-success my-3" target="_blank">Export Excel</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hostname</th>
            <th scope="col">Serial Number</th>
            <th scope="col">Model</th>
            <th scope="col">Merk</th>
            <th scope="col">PDU</th>
            <th scope="col">U Space</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Petugas</th>
            <th scope="col">Vendor</th>
            <th scope="col">Ruangan</th>
            <th scope="col">Rack</th>
            <th scope="col">Installer</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($perangkat as $key=>$value)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$value->hostname}}</td>
                    <td>{{$value->serial_number}}</td>
                    <td>{{$value->model}}</td>
                    <td>{{$value->merk->name}}</td>
                    <td>{{$value->pdu}}</td>
                    <td>{{$value->uspace}}</td>
                    <td>{{$value->tgl_masuk}}</td>
                    <td>{{$value->petugas->name}}</td>
                    <td>{{$value->vendor->name}}</td>
                    <td>{{$value->ruangan->name}}</td>
                    <td>{{$value->rack}}</td>
                    <td>{{$value->installer}}</td>
                    <td>{{$value->keterangan}}</td>
                    <td>
                        <form action="/perangkat/{{$value->id}}" method="POST">
                            <a href="/perangkat/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach 
            {{-- @empty
                <tr colspan="3">
                    <td>No data</td>
                </tr>   --}}
                        
        </tbody>
    </table>
    @push('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css"/>
    @endpush
    @push('script')
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
      });
    </script>
    @endpush
@endsection