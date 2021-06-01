@extends('layout.master')

@section('sub_title')
    List Ruangan
@endsection

@section('content')
    <a href="/ruangan/create" class="btn btn-primary my-2">Tambah</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Ruangan</th>
            <th scopte="col">Petugas ID</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($ruangan as $key=>$value)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$value->name}}</td>
                    <td>
                        <form action="/ruangan/{{$value->id}}" method="POST">
                            {{-- <a href="/ruangan/{{$value->id}}" class="btn btn-info">Show</a> --}}
                            <a href="/ruangan/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
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