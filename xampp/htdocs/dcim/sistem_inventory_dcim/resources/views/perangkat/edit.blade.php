@extends('layout.master')

@section('title')
    Edit Perangkat Ke - {{$perangkat->id}}
@endsection

@section('content')
<div>
        <form action="/perangkat/{{$perangkat->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="hostname">Host Name</label>
                <input type="text" class="form-control" value="{{$perangkat->hostname}}" name="hostname" id="title">
                @error('hostname')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="serial_number">Serial Number</label>
                <input type="text" class="form-control" value="{{$perangkat->serial_number}}" name="serial_number" id="title">
                @error('serial_number')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="model">Model</label>
                <input type="text" class="form-control" value="{{$perangkat->model}}" name="model" id="title">
                @error('model')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="merk_id">Merk</label>
                <select name="merk_id" id="" class="form-control">
                    <option value="">-</option>
                    @foreach ($merk as $value)
                        @if ($value->id == $perangkat->merk_id)
                        <option value="{{$value->id}}" selected>{{$value->name}}</option>
                        @else 
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endif
                    @endforeach
                </select>
                @error('merk_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="pdu">PDU</label>
                <input type="text" class="form-control" value="{{$perangkat->pdu}}" name="pdu" id="title">
                @error('pdu')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="uspace">U-Space</label>
                <input type="text" class="form-control" value="{{$perangkat->uspace}}" name="uspace" id="title">
                @error('uspace')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="tgl_masuk">Tanggal Masuk</label>
                <input type="text" class="form-control" value="{{$perangkat->tgl_masuk}}" name="tgl_masuk" id="title">
                @error('tgl_masuk')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="petugas_id">Petugas</label>
                <select name="petugas_id" id="" class="form-control">
                <option value="">-</option>
                    @foreach ($nm_petugas as $value)
                        @if ($value->id == $perangkat->petugas_id)
                        <option value="{{$value->id}}" selected>{{$value->name}}</option>
                        @else 
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endif
                    @endforeach
                </select>
                @error('petugas_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="vendor_id">Vendor</label>
                <select name="vendor_id" id="" class="form-control">
                <option value="">-</option>
                    @foreach ($nm_vendor as $value)
                        @if ($value->id == $perangkat->vendor_id)
                        <option value="{{$value->id}}" selected>{{$value->name}}</option>
                        @else 
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endif
                    @endforeach
                </select>
                @error('vendor_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="ruangan_id">Ruangan</label>
                <select name="ruangan_id" id="" class="form-control">
                    <option value="">-</option>
                        @foreach ($nm_ruangan as $value)
                            @if ($value->id == $perangkat->ruangan_id)
                            <option value="{{$value->id}}" selected>{{$value->name}}</option>
                            @else 
                            <option value="{{$value->id}}">{{$value->name}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('ruangan_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                <label for="rack">Rack</label>
                <input type="text" class="form-control" value="{{$perangkat->rack}}" name="rack" id="title">
                @error('rack')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="installer">Installer</label>
                <input type="text" class="form-control" value="{{$perangkat->installer}}" name="installer" id="title">
                @error('installer')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" value="{{$perangkat->keterangan}}" name="keterangan" id="title">
                @error('keterangan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            <button type="submit" class="btn btn-primary my-5">Edit perangkat</button>
        </form>
</div>
@endsection
