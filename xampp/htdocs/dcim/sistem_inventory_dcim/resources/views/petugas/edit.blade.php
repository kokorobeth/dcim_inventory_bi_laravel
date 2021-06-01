@extends('layout.master')

@section('sub_title')
    
@endsection

@section('content')
    <div>
        <form action="/petugas/{{$petugas->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" value="{{$petugas->name}}" name="name" id="name" placeholder="Masukkan Nama">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
</div>
@endsection