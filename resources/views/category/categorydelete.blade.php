@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{url('categories')}}/{{$category['id']}}">
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Genre</label>
            <div class="col-sm-10">
                <input type="text" name="category" class="form-control" value="{{$category['category']}}" style="background-color : white;" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-auto">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary mb-3">Delete</button>
            </div>
        </div>
    </form>
</div>
@endsection('content')