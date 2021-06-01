@extends('layout.master')

@section('sub_title')
    Tambah Petugas DC
@endsection

@section('content')


<div>
        <form action="/petugas" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan name">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>

@endsection