<!DOCTYPE html>
<html>
<head>
	<title>isHere - Register</title>
	<link rel="stylesheet" type="text/css" href="css/loginsignin.css">
</head>
<body>
	<div class="register-container">
		<form action="" method="post">
			<h1>Register</h1>
			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<label for="password-confirm"><b>Confirm Password</b></label>
			<input type="password" placeholder="Confirm Password" name="password-confirm" required>

			<button type="submit">Register</button>
			<p>Already have an account? <a href="{{ url('/login') }}">Login</a></p>
		</form>
	</div>
</body>
</html>
