@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data User</h1>
    <form class="form-horizontal" action="adduser" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="name" value="" style="background-color : white;">
            </div>
        </div>
        <div class="form-group row" style="margin-top : 10px">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="email" value="" style="background-color : white;">
            </div>
        </div>
        <div class="form-group row" style="margin-top : 10px">
            <label for="role" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="role" value="" style="background-color : white;">
            </div>
        </div>
        <div class="form-group row" style="margin-top : 10px">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="password" value="" style="background-color : white;">
            </div>
        </div>
        <br>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Tambah</button>
        <a class="btn btn-primary" href="/datauser" role="button">Batal</a>
    </form>
</div>
@endsection