<!DOCTYPE html>
<html>
<head>
	<title>From Login</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/login.css">
</head>
<body>

<form action="login_proses.php" method="POST">
	<div class="login">
		<h3 style="color: white;">Login</h3>
		<div class= "input-group">
			<input type="text" required="" name="iauthorname">
			<span>Author Name</span>
		</div>
		<div class="input-group">
			<input type="password" required="" name="iauthorpassword">
			<span>Password</span>
		</div>
		<div class="input-group">
			<input type="submit" value="Login" name="tlogin">
		</div>
	</div>
</form>
