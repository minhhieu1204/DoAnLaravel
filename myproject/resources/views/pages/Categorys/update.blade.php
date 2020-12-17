@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
    <form action="{{route('hihi.handleupdates',$category['id'])}}" method="POST">
        @method('PUT')
        @csrf	

        <div class="form-group">
            <label for="title">Tên chuyên mục </label>
            <input type="text" name="title" class="form-control" value="{{$category['tenchuyenmuc']}}"> 
        </div>
        <input type="submit" value="Update">
    </form>
@endsection