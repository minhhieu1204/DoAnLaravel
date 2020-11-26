@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div>
  <h1 style="text-align:center">Create Account</h1> </br>
</div>
<div class="container" style="">
@foreach($arrays as $account)
	<form  action="{{route('newspaper.updateAccount',$account['id'])}}" method="POST">
		@method('PUT')
		@csrf
		<div class="row justify-content-md-center">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="width:100%; padding-left: 300px; padding-right: 200px;">
				<div class="login-screen">
					<div class="login-box">
						<div class="row gutters">
							
							<div class=" col-md-10 ">
								<div class="form-group">
									<input type="text" value="{{$account['username']}}" class="form-control" name="username" placeholder="User Name">
								</div>
							</div>
						
							<div class="col-md-10">
								<div class="form-group">
									<input type="email" value="{{$account['email']}}"  class="form-control" name="email" placeholder="Email Address">
								</div>
							</div>
							<div class="col-md-10">
								<div class="form-group">
									<input type="password" value="{{$account['password']}}" class="form-control" name="password" placeholder="Password">
								</div>
              </div>
            			  <div class="col-md-10">
								<div class="form-group">
									<input type="datetime-local" value="{{$account['ngaysinh']}}" class="form-control" name="Time" placeholder="Date of birth">
								</div>
							
								
              </div>
             			 <div class="col-md-10">
						<button type="submit" class="btn btn-primary btn-block">Update</button>
            	</div>
						</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</form>
	@endforeach
</div>
@endsection