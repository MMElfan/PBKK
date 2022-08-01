@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered" style="background-color : white;">
        <thead style="background-color : #F2F4F4;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Genre</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Photo</th>
                <th scope="col">Update At</th>
                <th scope="col" width="80"><a href="contents/create">Tambah</a></th>
            </tr>
        <tbody>
            @php ($no = 1)
            @foreach ($contents as $content )
            <tr>
                <td scope="row">{{ $no++ }}</td>
                <td>{{$content->get_category['category']}}</td>
                <td>{{$content['title']}}</td>
                <td>{{ substr($content->content,0,150)."..." }}</td>
                <td>
                    <img src="uploads/{{$content['photo']}}" width="120px">
                </td>
                <td>{{$content['updated_at']}}</td>
                <td>
                    <a href="/contents/{{$content['id']}}/edit">Edit</a>
                    <a href="/contents/{{$content['id']}}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </thead>
    </table>
</div>
@endsection