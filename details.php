<!DOCTYPE html>
<html>
    <head>
    <title>LOGOUT</title>
	<link rel="stylesheet" type="text/css" href="login.css">
        <body>
        <form action="http://localhost/lab/accountCreation.php" method="POST">
            <div class="tbox">
			    <label class="label">Username:</label>
			    <input type="text" placeholder="Input your username" value="" name="user">
		    </div>

            <p></p>
            
            <input type="hidden" name="event" value="logout">

            <button class="loginBtn">LOGOUT</button>
        </form>

</body>
</head>
</html>