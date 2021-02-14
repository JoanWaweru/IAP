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
			    <input type="text" placeholder="Input your username" value="" name="user">
		    </div>

            <p></p>

		<input type="hidden" name="event" value="logout">

		<button class="loginBtn">LOGOUT</button>

			</form>
			

		</div>
</body>
</html>