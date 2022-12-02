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
        
        <a class="logout" href="logout.php">logout</a>
    </div>
    <div class="panel">
        <h2>Profile Dashboard</h2>
        
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
        <h5> Hi <p class ="font"><?php echo $name." !";?></p></h5><br><br><br>
        <h7 class ="font1">Gender: <?php echo $gender;?></h7><br>
        <h7 class ="font1">Age: <?php echo $age;?></h7><br>
        <h7 class ="font1">E-mail: <?php echo $email;?></h7><br>
        <h7 class ="font1">Phone no: <?php echo $phn;?></h7><br>
        <h7 class ="font1">Location: <?php echo $address;?></h7><br>
    </div>
    </body>
</html>