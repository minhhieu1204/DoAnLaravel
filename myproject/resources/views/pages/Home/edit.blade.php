@extends('layouts.Menu_Footer')
@section('content')
<div class="container " >
@foreach($arrays as $news)
    <form action="{{route('newspaper.update',$news['id'])}}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Name newspaper </label>
        <input type="text" name="name" value="{{$news['name']}}"> 
        <label for="description">Description</label>
        <input type="text" name="description" value="{{$news['description']}}">
        <label for="content">Content</label>
        <input type="text" name="content" value="{{$news['content']}}">
        <input type="submit" value="update">
    </form>
@endforeach
</div>
@endsection