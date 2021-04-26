<!DOCTYPE html>
<html>
<head>
	<title>CHANGE PASSWORD</title>

	<link rel="stylesheet" type="text/css" href="http://localhost/IAP/passwordChange.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/IAP/js/passwordChange.js"></script>
</head>
<body>
		<div class="container">
			<img src="images/password.svg" class="passwordImage">

			<h1 class="title">CHANGE PASSWORD</h1>
	

		<form action="http://localhost/IAP/accountCreation.php" method="POST">
		<div class="tbox">
			<label class="label">Username:</label>
			<input type="text" placeholder="Input your username" value="" name="user">
		</div>

		<p></p>

		<input type="hidden" name="event" value="changePassword">

		<div class="tbox">
			<label class="label">Initial Password:</label>
			<input type="password" placeholder="Input your current password" value="" name="pw">
		</div>

		<p></p>

		<div class="tbox">
			<label class="label">New Password:</label>
			<input type="password" placeholder="Input your new password" value="" name="newPw">
		</div>

		<p></p>

		<h2><button class="loginBtn" name="changePassword">CHANGE PASSWORD</button></h2>

			</form>

			<div id="result"></div>

			<!-- <a href="login.php" class="create">GO BACK TO LOGIN PAGE</a> -->

		</div>
</body>
</html>