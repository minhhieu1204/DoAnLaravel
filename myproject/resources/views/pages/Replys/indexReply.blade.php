@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div>
  <h1>Đây là Trang reply.</h1>
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
    @foreach($arrays as $baocao)
        <tr>
            <td>{{$baocao['noidung']}}</td>
            <td>{{$baocao->user->username}}</td>
            <td>
                <form action="{{route('newspaper.destroyReplyBaiViet',$baocao['id'])}}" method="POST">
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