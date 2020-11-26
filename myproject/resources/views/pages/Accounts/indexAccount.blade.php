@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div >
  <h1 style="text-align:center;">Manager Account</h1>
</div>
<table class="table">
<a href="{{route('newspaper.addAccount')}}"><button class="btn btn-primary btn-sm">Create Account</button></a>
    <thead>
      <tr>
        <th>Username </th>
        <th>Password</th>
        <th>Email</th>
        <th>Date</th>
      </tr>

    </thead>
    <tbody>
    
    @foreach($arrays as $account)
        <tr>
            <td>{{$account['username']}}</td>
            <td>{{$account['password']}}</td>
            <td>{{$account['email']}}</td>
            <td>{{$account['ngaysinh']}}</td>

            <td><a href="{{route('newspaper.editAccount',$account['id'])}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a></td>
            <td>
                <form action="{{route('newspaper.destroyAccount',$account['id'])}}" method="POST">
                @csrf
                @method('DELETE')
               <button onclick="onCheck()"  type="submit" class="btn btn-primary btn-sm" >Delete</button>
                </form> 
            </td>
        </tr> 
    @endforeach
    </tbody>

 </table>
@endsection
<script>
  function onCheck(){
    alert('Xóa thành Công');
  }
</script>