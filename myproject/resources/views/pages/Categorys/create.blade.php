@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
    <form action="{{route('hihi.store')}}" method="post">
        @csrf	
        <div class="form-group">
            <label for="title">Tên chuyên mục </label>
            <input type="text" name="title" class="form-control"> 
        </div>
        <input type="submit" value="create">
    </form>
@endsection