<?php
include('../Model/model.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['signin'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Insert your email or password";
}
else
{
$email=$_POST['email'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->opencon();

$userQuery=$connection->CheckUser($email,$password,"patient",$conobj);

if ($userQuery->num_rows > 0) {
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;

   }
else {
$error = "Email or Password is invalid";
}
$connection->closecon($conobj);

}
}


?>