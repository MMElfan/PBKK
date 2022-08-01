@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Genre Game</h1>
    <table class="table table-bordered" style="background-color : white;">
        <thead style="background-color : #F2F4F4;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Genre</th>
                <th scope="col">Created At</th>
                <th scope="col">Update At</th>
                <th scope="col"><a href="categories/create">Tambah</th>
            </tr>
        </thead>
        <tbody>
            @php ($no = 1)
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{$category->category}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                <td>
                    <a href="/categories/{{$category->id}}">Edit</a>
                    |
                    <a href="/categories/{{$category->id}}/edit">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection