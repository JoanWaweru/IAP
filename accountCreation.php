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
}
 ?>