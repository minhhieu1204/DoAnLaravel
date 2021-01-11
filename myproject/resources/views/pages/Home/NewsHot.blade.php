@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div>
  <h1>Đây là trang tin nóng.</h1>
</div>
<table class="table"> 
    <thead>
      <tr>
        <th>Id</th>
        <th>Name newspaper</th>
        
      </tr>

    </thead>
    <tbody>
    @foreach($arrays as $baiviet)
        <tr>
            <td>{{$baiviet['id']}}</td>
            <td>{{$baiviet->tenBaiViet->tieude}}</td>
            <td>
                <form action="{{route('newspaper.delete_hot',$baiviet['id'])}}" method="GET">
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