<?php
	require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="homePage.css">
</head>
<body>
		<div class="container">
			<img src="images/user1.jpg" class="loginImage">

			<h1 class="title">MY PROFILE</h1>
	

		<form>
		<div class="tbox">
			<p></p>
			<label class="label">Full Name:</label><p></p>
			<label style="color: grey;">Consumita Wamuklo</label>
		</div>

		<div class="tbox">
			<p></p>
			<label class="label">Email:</label><p></p>
			<label style="color: grey;">wamunsita@gmail.com</label>
		</div>

		<div class="tbox">
			<p></p>
			<label class="label">Password:</label><p></p>
			<label style="color: grey;">wamukloishere123</label>
		</div>

		<p></p>

		<a href="login.php" class="loginBtn">LOGOUT</a>

		<?php
			$object = new database;
			$object->connect();
		?>
		
			</form>
			

		</div>
</body>
</html>