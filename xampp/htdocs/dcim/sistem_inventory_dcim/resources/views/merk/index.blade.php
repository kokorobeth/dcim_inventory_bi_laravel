@extends('layout.master')

@section('sub_title')
    List Merk
@endsection

@section('content')
    <a href="/merk/create" class="btn btn-primary my-2">Tambah</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Merk</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($merk as $key=>$value)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$value->name}}</td>
                    <td>
                        <form action="/merk/{{$value->id}}" method="POST">
                            <a href="/merk/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
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