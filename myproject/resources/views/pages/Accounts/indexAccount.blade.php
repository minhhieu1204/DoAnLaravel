@extends('layouts.Menu_Footer')
@section('content')

<div class="container">
<div >
  <h1 style="text-align:center;">Manager Account</h1>
</div>
<a href="{{route('newspaper.addAccount')}}"><button class="btn btn-primary btn-sm">Create Account</button></a>
<form action="" style="display:flex; justify-content:center;">
<input type="text" >
  <input type="submit" class="fa fa-search">
</form>
<table class="table">

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
 <div class="container" style="display:flex; justify-content:center;" >         
  <ul class="breadcrumb">
    {{$arrays->links()}}      
  </ul>
</div>
@endsection
<script>
  function onCheck(){
    alert('Xóa thành Công');
  }
</script>