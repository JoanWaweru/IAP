<?php
	require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION PAGE</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
		<div class="container">
			<img src="images/register.svg" class="signUpImage">

			<h1 class="title">REGISTRATION</h1>
	

		<form method="POST" action="http://localhost/lab/accountCreation.php">
		<div class="tbox">

			<label class="label">Full Name:</label>
			<input type="text" placeholder="Input your full name" value="" name="fullName">
		</div>

			<input type="hidden" name="event" value="register">

		<p></p>

		<div class="tbox">
			<label class="label">Email:</label>
			<input type="text" placeholder="Input your email address" value="" name="email">
		</div>

		<p></p>

		<div class="tbox">
			<label class="label">Username:</label>
			<input type="text" placeholder="Input your username" value="" name="user">
		</div>

		<p></p>

		<div class="tbox">
			<label class="label">Password:</label>
			<input type="password" placeholder="Input your password" value="" name="pw">
		</div>

		<p></p>

		<div class="tbox">
			<label class="label">City of Residence:</label>
			<input type="text" placeholder="Input your city" value="" name="residence">
		</div>

		<p></p>

		<!-- <div class="tbox">
			<label class="label">Profile Photo:</label>
			<input type="hidden" name="size" value="1000000">
				<div>
				  	  <input type="file" name="image">
				</div>
		</div> -->

		<p></p>

		<h2><button class="loginBtn" name="register">REGISTER</button></h2>

			</form>

			

			<a href="login.php" class="forgot">GO TO LOGIN PAGE</a>

		</div>
		
</body>
</html>