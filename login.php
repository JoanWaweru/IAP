<!DOCTYPE html>
<html>
<head>
	<title>LOG IN PAGE</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
		<div class="container">
			<img src="images/user.svg" class="loginImage">

			<h1 class="title">LOG IN</h1>
	

		<form action="accountCreation.php" method="POST">
		<div class="tbox">
			<label class="label">Username:</label>
			<input type="text" placeholder="Input your username" value="" name="user">
		</div>

		<p></p>

		<input type="hidden" name="event" value="login">


		<div class="tbox">
			<label class="label">Password:</label>
			<input type="password" placeholder="Input your password" value="" name="pw">
		</div>

		<p></p>

		<button class="loginBtn">LOGIN</button>

			</form>

			
			<a href="passwordChange.php" class="forgot">FORGOT PASSWORD?</a>

			<a href="register.php" class="create">CREATE ACCOUNT</a>
			

		</div>
</body>
</html>