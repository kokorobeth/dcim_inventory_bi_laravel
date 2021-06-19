@extends('layout.master')

@section('sub_title')
    Add Perangkat
@endsection

@section('content')


<div>
        <form action="/perangkat" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="hostname">Host Name</label>
                <input type="text" class="form-control" name="hostname" id="hostname" placeholder="Masukkan Hostname" autocomplete="off">
                @error('hostname')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="serial_number">Serial Number</label>
                <input type="text" class="form-control" name="serial_number" id="serial_number" placeholder="Masukkan Serial Number" autocomplete="off">
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
                <input type="text" class="form-control" name="model" id="model" placeholder="Masukkan Model" autocomplete="off">
                @error('model')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="pdu">PDU</label>
                <input type="text" class="form-control" name="pdu" id="pdu" placeholder="Masukkan PDU" autocomplete="off">
                @error('pdu')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="uspace">U-Space</label>
                <input type="number" class="form-control" name="uspace" id="uspace" placeholder="Masukkan U-Space" autocomplete="off">
                @error('uspace')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="tgl_masuk">Tanggal Masuk</label>
                <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk" placeholder="Tanggal Masuk" autocomplete="off">
                @error('tgl_masuk')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="petugas">Petugas</label>
                <select name="petugas_id" id="" class="form-control">
                    <option value="">-</option>
                    @foreach ($nm_petugas as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
                @error('petugas_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="vendor">Vendor</label>
                <select name="vendor_id" id="" class="form-control">
                    <option value="">-</option>
                    @foreach ($nm_vendor as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
                @error('vendor_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="ruangan">Ruangan</label>
                <select name="ruangan_id" id="" class="form-control">
                    <option value="">-</option>
                    @foreach ($nm_ruangan as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
                @error('ruangan_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="rack">Rack</label>
                <input type="text" class="form-control" name="rack" id="rack" placeholder="Masukkan Rack" autocomplete="off">
                @error('rack')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="installer">Installer</label>
                <input type="text" class="form-control" name="installer" id="installer" placeholder="Masukkan Pemasang" autocomplete="off">
                @error('installer')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" autocomplete="off">
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