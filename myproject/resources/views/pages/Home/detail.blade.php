@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div>
  <h1>Đây là Trang chủ.</h1>
</div>
<table class="table"> 
    <thead>
      <tr>
        <th>Titel </th>
        <th>Description</th>
        <th>Content</th>
      </tr>

    </thead>
    <tbody>
    @foreach($arrays as $baiviet)
        <tr>
            <td>{{$baiviet['name']}}</td>
            <td>{{$baiviet['desription']}}</td>
            <td>{{$baiviet['content']}}</td>
            <td><a href="{{route('newspaper.create')}}"><button type="button" class="btn btn-primary btn-sm">Create</button></a></td>
            <td><a href="{{route('newspaper.edit',$baiviet['id'])}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a></td>
            <td>
                <form action="{{route('newspaper.destroy',$baiviet['id'])}}" method="POST">
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