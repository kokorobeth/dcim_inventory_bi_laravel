@extends('layout.master')

@section('sub_title')
    
@endsection

@section('content')

<div>
    <form action="/vendor" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Vendor</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Vendor">
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