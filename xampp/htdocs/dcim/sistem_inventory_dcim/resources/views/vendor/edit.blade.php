@extends('layout.master')

@section('sub_title')
    Edit Vendor 
@endsection

@section('content')
<div>
    <form action="/vendor/{{$vendor->id}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" value="{{$vendor->name}}" name="name" id="name" placeholder="Masukkan Nama Vendor">
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection

