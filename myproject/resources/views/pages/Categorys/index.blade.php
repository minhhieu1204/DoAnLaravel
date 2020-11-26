@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div>
  <h1>Đây là Trang chủ categorys.</h1>
</div>
<table class="table"> 
    <thead>
      <tr>
        <th>Tên chuyên mục </th>
      </tr>

    </thead>  
    <tbody>
    @foreach($dscategory as $ds)
        <tr>
            <td>{{$ds['tenchuyenmuc']}}</td>
            <td><a href="{{route('hihi.create')}}"><button type="button" class="btn btn-primary btn-sm">Create</button></a></td>
            <td><a href="{{route('hihi.update',$ds['id'])}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a></td>
            <td>
                <form action="{{route('hihi.delete',$ds['id'])}}" method="POST">
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