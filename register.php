<?php
	require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION PAGE</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/IAP/register.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/IAP/js/register.js"></script>
</head>
<body>
		<div class="container">
			<img src="images/register.svg" class="signUpImage">

			<h1 class="title">REGISTRATION</h1>
	

		<form method="POST" action="http://localhost/IAP/accountCreation.php">
			
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

			<div id="result"></div>

			<a href="http://localhost/IAP/login.php" class="forgot">GO TO LOGIN PAGE</a>

		</div>
		
</body>
</html>