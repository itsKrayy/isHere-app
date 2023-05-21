<!DOCTYPE html>
<html>
<head>
	<title>isHere - Login</title>
	<link rel="stylesheet" type="text/css" href="css/loginsignin.css">
</head>
<body>
	<div class="login-container">
		<form action="{{ url('/admin/login')}}" method="post" class="user">
			{!! csrf_field() !!}
			<h1>ADMIN Login</h1>
			<label for="email"><b>Admin Email:</b></label>
			{{-- <input type="text" placeholder="Enter Username" name="username" required> --}}
			<input type="text" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Admin Email" value="{{old('email')}}">

			<label for="password"><b>Password:</b></label>
			{{-- <input type="password" placeholder="Enter Password" name="password" required> --}}
			<input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password" value="{{old('email')}}">

			<button type="submit">Login</button>
			<p>Go to Homepage <a href="{{ url('/') }}">Home</a></p>
		</form>
	</div>
</body>
</html>
