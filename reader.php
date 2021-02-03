<?php
require_once 'user.php';
require_once 'connect.php';

$conn = new database();
$servername = "localhost";
$pdo = $conn->connect($servername);

if(isset($_POST['register'])){
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$user = $_POST['user'];
	$pw = $_POST['pw'];
	$residence = $_POST['residence'];
	$image = $_FILES['image'];

	$username = new User($fname, $email, $residence, $user, $pw, $image);
	$user->setFullName($fname);
	echo $user->register($pdo);

}else{
	$user1 = $_POST['user'];
	$password = $_POST['pw'];
	$user = new User($user1, $password);
	echo $user->login($pdo);
}

?>