<!DOCTYPE html>
<html>
<head>
	<title>isHere - Register</title>
	<link rel="stylesheet" type="text/css" href="css/loginsignin.css">
</head>
<body>
	<div class="register-container">
		<form action="{{ url('/register') }}" method="post">
			{!! csrf_field() !!}
			<h1>Register</h1>
			<label for="name"><b>Name</b></label>
			<input type="text" placeholder="Enter Name" name="name" required>

			<label for="email"><b>Email</b></label>
			<input type="email" placeholder="Enter Email" name="email" required>
{{-- 
			<label for="email_verified_at" hidden><b>Email Verified At</b></label>
			<input type="datetime-local" name="email_verified_at" value="{{ now()->format('Y-m-d H:i:s') }}" hidden> --}}

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<button type="submit">Register</button>
			<p>Already have an account? <a href="{{ url('/login') }}">Login</a></p>
			<p>Go to Homepage <a href="{{ url('/') }}">Home</a></p>
		</form>
	</div>
</body>
</html>
