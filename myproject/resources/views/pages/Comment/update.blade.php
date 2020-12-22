@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
    <form action="{{route('cmt.handleupdates',$cmtt['id'])}}" method="POST">
        @method('PUT')
        @csrf	

        <div class="form-group">
            <label for="title">dau buoi</label>
            <input type="text" name="noidungbinhluan" class="form-control" value="{{$cmtt['noidungbinhluan']}}"> 
        </div>
        <input type="submit" value="Update">
    </form>
@endsection