<!DOCTYPE html>
<html>
<head>
	<title>isHere - Login</title>
	<link rel="stylesheet" type="text/css" href="css/loginsignin.css">
</head>
<body>
	<div class="login-container">
		<form action="" method="post">
			<h1>Login</h1>
			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<button type="submit">Login</button>
			<p>Don't have an account? <a href="{{ url('/register') }}">Register</a></p>
		</form>
	</div>
</body>
</html>
