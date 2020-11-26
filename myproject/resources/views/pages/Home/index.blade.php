@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div>
  <h1>Đây là Trang chủ.</h1>
</div>
<table class="table"> 
    <thead>
      <tr>
        <th>Name Newspaper </th>
        <th>Description</th>
        <th>Content</th>
        <th>Category</th>
      </tr>
    </thead>
    <tbody>
    @foreach($arrays as $baiviet)
        <tr>
           <td> <a  href="{{route('newspaper.detail',$baiviet['id'])}}">{{$baiviet['tieude']}}</a></td>
            <td>{{$baiviet['mota']}}</td>
            <td>{{$baiviet['noidung']}}</td>
            <td>{{$baiviet->chuyenMuc->tenchuyenmuc}}</td>
            <td><a href="{{route('newspaper.create')}}"><button type="button" class="btn btn-primary btn-sm">Create</button></a></td>
            <td><a href="{{route('newspaper.edit',$baiviet['id'])}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a></td>
            <td>
                <form action="{{route('newspaper.destroyAccount',$baiviet['id'])}}" method="POST">
                @csrf
                @method('DELETE')
               <button  type="submit" class="btn btn-primary btn-sm" >Delete</button>
                </form> 
            </td>
        </tr> 
    </tbody>
    @endforeach
 </table>
@endsection