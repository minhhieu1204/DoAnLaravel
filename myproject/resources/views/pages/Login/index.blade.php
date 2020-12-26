@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div>
  <h1>Đăng nhập: </h1>
</div>

<div class="col-6">

  <form action="{{route('login.login')}}" method="POST" >
    @csrf
    <div class="form-group">
      <label for="text">Username: </label>
      <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
<script>
  @if(session('thongbao')=='2')
    alert('Vui lòng kiểm tra thông tin đăng nhập');
  @endif
</script>
@endsection