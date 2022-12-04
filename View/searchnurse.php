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
    <a href="home.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="updateprofile.php">Update Profile</a>
        <a class="active" href="searchnurse.php">Search Nurse</a>
        <a href="changepass.php">Change Password</a>
        
        <a class="logout" href="logout.php">logout</a>
    </div>
    <div class="panel">
    
        
        <span>Search products </span>
            <input type="text" id= "live_search1" autocomplete="off" class="box" placeholder="search nurse here...">
    
        <h1 id="result"></h1>

        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../JS/search.js"></script>
    </body>
</html>