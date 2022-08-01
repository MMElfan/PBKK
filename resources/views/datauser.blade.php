@extends('layouts.app')

@section('content')
<div class ="container">
    <h1>Data User</h1>
    <table class="table table-bordered" style="background-color : white;">
        <thead style="background-color : #F2F4F4;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col"><a href="/formuser">Tambah</a></th>
            </tr>
        </thead>
        <tbody>
            @php($i=1)
            @foreach ($datauser as $user)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="datauser/{{$user->id}}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection