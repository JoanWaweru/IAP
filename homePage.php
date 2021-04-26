<?php
	session_start();
	if(isset ($_SESSION['user'])){
		$username = $_SESSION['user'];
	}else{
		echo "Session not found!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/IAP/homePage.css">
</head>
<body>
		<div class="container">
			<img src="images/user1.jpg" class="loginImage">

			<h1 class="title">MY PROFILE</h1>

			<h2 class="title">Yummy Tummy</h2>
	

		<form action="http://localhost/IAP/order.php" method="POST">
			<div class="tbox">

			    <label class="label">Username:</label>
				<br><br>

			    <?php
					echo $username;
				?>

		    </div>

		    <input type="hidden" name="event" value="order">

			<p> <button class="loginBtn" value="order" name="event">MAKE AN ORDER</button> </p>
			
		</form>

			<form action="http://localhost/IAP/accountCreation.php" method="POST">

			<input type="hidden" name="event" value="logout">

			<p> <button class="loginBtn" value="logout" name="event">LOGOUT</button></p>

			</form>
			

		</div>
</body>
</html>