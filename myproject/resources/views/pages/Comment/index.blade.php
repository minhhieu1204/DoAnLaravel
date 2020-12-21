@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div>
  <h1>Đây là Trang chủ Ranting app.</h1>
</div>
<table class="table"> 
    <thead>
      <tr>
        <th>Nội dung bình luận</th>
      </tr>

    </thead>
    <tbody>
    @foreach($dscmt as $item)
        <tr>
            <td>{{$item['noidungbinhluan']}}</td>
            <td><a href="{{route('newspaper.commentedit',$item['id'])}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a></td>
            <td>
                <form action="{{route('cmt.delete',$item['id'])}}" method="POST">
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