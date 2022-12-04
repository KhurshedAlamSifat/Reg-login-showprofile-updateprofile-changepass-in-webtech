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
        <a class="active" href="profile.php">Profile</a>
        <a href="updateprofile.php">Update Profile</a>
        <a href="searchnurse.php">Search Nurse</a>
        <a href="changepass.php">Change Password</a>
        
        <a class="logout" href="logout.php">logout</a>
    </div>
    <div class="panel">
        
        <?php

        $name=$gender=$age=$email=$phn=$address="";
        $connection = new db();
        $conobj=$connection->opencon();
        $userQuery=$connection->CheckUser($_SESSION["email"],$_SESSION["password"],"patient",$conobj);
        
        if ($userQuery->num_rows > 0) 
        {
            while($row = $userQuery->fetch_assoc()) 
            {
                $name=$row["fname"];
                $gender=$row["gender"];
                $age=$row["age"];
                $email=$row["email"];
                $phn=$row["phn"];
                $address=$row["adrs"];
            }
        }else 
        {
            echo "0 results";
        }
        

        ?>
        <br><br><br>
        <h1>
        <table>
            <tr><td>Name</td><td></td><td>&nbsp;&nbsp;<?php echo" : ". $name;?></td></tr>
            <tr><td>Email</td><td></td><td>&nbsp;&nbsp;<?php echo" : ". $email;?></td></tr>
            <tr><td>Gender</td><td></td><td>&nbsp;&nbsp;<?php echo" : ". $gender;?></td></tr>
            <tr><td>Age</td><td></td><td>&nbsp;&nbsp;<?php echo" : ". $age;?></td></tr>
            <tr><td>Phone no</td><td></td><td>&nbsp;&nbsp;<?php echo" : ". $phn;?></td></tr>
            <tr><td>Address</td><td></td><td>&nbsp;&nbsp;<?php echo" : ". $address;?></td></tr>
        </table></h1>
    </div>
    </body>
</html>