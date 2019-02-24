<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">			
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pass">			
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login<button>
		</div>
		<p>Not a member? <a href="index.html">Sign up</a></p>

	</form>
</body>
</html>
