@extends('layout.master')

@section('sub_title')
    Tambah Nama Ruangan
@endsection

@section('content')


<div>
        <form action="/ruangan" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Ruangan</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Ruangan">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah Ruangan</button>
        </form>
</div>

@endsection