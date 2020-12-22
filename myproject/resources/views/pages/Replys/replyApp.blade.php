@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div>
  <h1>Trang phản hồi người dùng</h1>
</div>
<table class="table"> 
    <thead>
      <tr>
        <th>Titel </th>
        <th>Time Post</th>
        <th>decription</th>
      </tr>

    </thead>
    <tbody>
    @foreach($arrays as $phanhoi)
        <tr>
            <td>{{$phanhoi['noidung']}}</td>
            <td>{{$phanhoi->user->username}}</td>
            <td>
                <form action="{{route('newspaper.destroyReplyApp',$phanhoi['id'])}}" method="POST">
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