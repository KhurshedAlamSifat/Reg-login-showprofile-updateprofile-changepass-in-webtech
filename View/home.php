<?php
session_start(); 
include('../Model/model.php');
if(empty($_SESSION["email"]))
{
header("Location: login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Health Care</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../CSS/dashboard.css">
    </head>
    <body>
    <header class="header">
        <div class="header-1">
        <a href="#" class="logo"> <i><img src="../Logo/logo.png"></i> </a>
        </div>
    </header>
    <hr class="line"></hr>
    <div class="sidebar">
        <a class="active" href="home.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="updateprofile.php">Update Profile</a>
        
        <a class="logout" href="logout.php">logout</a>
    </div>
    <div class="panel">
       

        
        <?php

        // $name=$email=$gender=$address="";
        // $connection = new db();
        // $conobj=$connection->opencon();
        // $userQuery=$connection->CheckUser($_SESSION["customeremail"],$_SESSION["customerpass"],"customer",$conobj);
        
        // if ($userQuery->num_rows > 0) 
        // {
        //     while($row = $userQuery->fetch_assoc()) 
        //     {
        //         $name=$row["fname"];
        //         $email=$row["mail"];
        //         $gender=$row["gender"];
        //         $address=$row["adres"];
        //     }
        // }else 
        // {
        //     echo "0 results";
        // }
        
        

        ?>
         <h1> <?php $_SESSION["email"]; ?></h1>
    </div>
    </body>
</html>