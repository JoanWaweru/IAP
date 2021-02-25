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
	<link rel="stylesheet" type="text/css" href="homePage.css">
</head>
<body>
		<div class="container">
			<img src="images/user1.jpg" class="loginImage">

			<h1 class="title">MY PROFILE</h1>
	

		<form action="http://localhost/lab/accountCreation.php" method="POST">
			<div class="tbox">
			    <label class="label">Username:</label>
				<br><br>
			    <?php
					echo $username;
				?>
		    </div>

            <p></p>

		<button class="loginBtn" value="logout" name="event">LOGOUT</button>

			</form>
			

		</div>
</body>
</html>