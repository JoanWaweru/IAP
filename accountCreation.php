<?php 
include_once 'user.php';
include_once 'connect.php';

$con = new DBConnector();

$pdo = $con->connectToDB();

$event = $_POST['event'];

if ($event == "register") {     
       //register   
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $residence = $_POST['residence'];
    $pw = $_POST['pw'];
    $user = $_POST['user'];
    $user = new User($user, $pw);
    $user->setFullName($fullName);
    $user->setResidence($residence);
    $user->setEmail($email);
    echo $user->register($pdo);

} else if($event=="login"){
         //login 
         session_start();
    $user = $_POST['user'];
    $pw = $_POST['pw'];
    $user = new User($user, $pw);
    echo $user->login($pdo);

} else if($event=="changePassword"){
    //change password
    $user = $_POST['user'];
    $pw = $_POST['pw'];
    $newPw = $_POST['newPw'];
    $user = new User($user, $pw);
    $user->setNewPassword($newPw);
    echo $user->changePassword($pdo);

} else if($event=="logout"){
    //logout
    session_start();
    User::logOut();

} else if($event=="order"){
    //order
    session_start();
    $dishName = $_POST['dishName'];
    $amount = $_POST['amount'];
	echo "<script language='javascript'>
                    alert('⚠Oops! This feature is currently unavailable☹.Come back soon!');
                    window.location.href = 'http://localhost/IAP/homePage.php'; 
                    </script>";

}
 ?>