<!DOCTYPE html>
<html>
<head>
	<title>LOG IN PAGE</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>

</head>

<body>
		<div class="container">
			<img src="images/user.svg" class="loginImage">

			<h1 class="title">LOG IN</h1>
			
			<p id="msg"></p>
			
		<form method="POST" id="userForm">

		<div id="loginAlert"></div>

		<div class="tbox">
			<label class="label">Username:</label>
			<input type="text" placeholder="Input your username" id="username" name="user">
		</div>

		<p></p>

		<input type="hidden" name="event" value="login">

		<div class="tbox">
			<label class="label">Password:</label>
			<input type="password" placeholder="Input your password" id="password" name="pw">
		</div>

		<p></p>

		<button id="submit" class="loginBtn" name="login">LOGIN</button>

			</form>

			<div id="result"></div>
			
			<a href="passwordChange.php" class="forgot">FORGOT PASSWORD?</a>

			<a href="register.php" class="create">CREATE ACCOUNT</a>
			

		</div>
</body>
</html>