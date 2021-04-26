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
	<title>Order Page</title>

	<link rel="stylesheet" type="text/css" href="http://localhost/IAP/order.css">	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/IAP/js/order.js"></script>

</head>
<body>
    <div class="container">

	<h1 class="title">Yummy Tummy</h1>

	<h2>Order Now!</h2>
	
	<form method="POST" action="http://localhost/IAP/accountCreation.php" class="ajax">

      <div class="tbox">
       
       <input type="hidden" name="event" value="order" >

      <label for="dname">Food Dish</label><br>
      <input type="text" placeholder="Input your preferred dish" name="dishName" id="dname">
       <br>

      <label for="amount">Quantity</label><br>
      <input type="number" placeholder="Amount" name="amount" id="amount">
       <br>

       <div id="result"></div>

       <button type="submit" name="register" class="loginBtn">ORDER</button>

    </div>


    </form>

  </div>

</body>
</html>