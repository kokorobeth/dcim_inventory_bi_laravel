@extends('layout.master')

@section('sub_title')
    Tambah Data Keluar Perangkat
@endsection

@section('content')


<div>
        <form action="/perangkatout" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="hostname">Host Name</label>
                <input type="text" class="form-control" name="hostname" id="hostname" placeholder="Masukkan Hostname">
                @error('hostname')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="serial_number">Serial Number</label>
                <input type="text" class="form-control" name="serial_number" id="serial_number" placeholder="Masukkan Serial Number">
                @error('serial_number')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="merk_id">Merk</label>
                <select name="merk_id" id="" class="form-control">
                    <option value="">-</option>
                    @foreach ($merks as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
                @error('merk_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="model">Model</label>
                <input type="text" class="form-control" name="model" id="model" placeholder="Masukkan Model">
                @error('model')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="pdu">PDU</label>
                <input type="text" class="form-control" name="pdu" id="pdu" placeholder="Masukkan PDU">
                @error('pdu')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="uspace">U-Space</label>
                <input type="number" class="form-control" name="uspace" id="uspace" placeholder="Masukkan Serial Number">
                @error('uspace')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="tgl_keluar">Tanggal Keluar</label>
                <input type="date" class="form-control" name="tgl_keluar" id="tgl_keluar" placeholder="Tanggal Masuk">
                @error('tgl_keluar')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                {{-- <label for="tgl_keluar">Tanggal Keluar</label>
                <input type="date" class="form-control" name="tgl_keluar" id="tgl_keluar" placeholder="Tanggal Keluar">
                @error('tgl_keluar')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror --}}
                <label for="petugas">Petugas</label>
                <input type="text" class="form-control" name="petugas" id="petugas" placeholder="Masukkan Petugas">
                @error('petugas')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="ruangan">Ruangan</label>
                <input type="text" class="form-control" name="ruangan" id="ruangan" placeholder="Masukkan Serial Number">
                @error('ruangan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="rack">Rack</label>
                <input type="text" class="form-control" name="rack" id="rack" placeholder="Masukkan Rack">
                @error('rack')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="installer">Installer</label>
                <input type="text" class="form-control" name="installer" id="installer" placeholder="Masukkan Serial Number">
                @error('installer')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan">
                @error('keterangan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>

@endsection