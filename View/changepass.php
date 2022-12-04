<?php
session_start(); 
include('../Control/changepasscontrol.php');
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
        <a href="home.php"><i class="material-icons"></i>Home</a>
        <a href="profile.php">Profile</a>
        <a href="updateprofile.php">Update Profile</a>        
        <a href="">Search Nurse</a>
        <a a class="active" href="changepass.php">Change Password</a>
        
        <a class="logout" href="logout.php">logout</a>
    </div>
    <div class="panel">

        
    

        <section class ="copy">
                <div class="Customerlogin-form-container">
                    <form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                        <h3>Change Password</h3>
                        <span>Old Password</span>
                        <input type="password" name="oldpass" class="box"  placeholder="enter your old password" >
                        <!-- <p style="color:red" id="errname"></p> -->

                        <br><br><br><br>
                        <span>New Password</span>
                        <input type="password" name="newpass" class="box" placeholder="enter your new password">

                        <span>Confirm Password</span>
                        <input type="password" name="confirmpass" class="box" placeholder="enter your confirm password">
                        
                        <p style="color:red"><?php echo $error; ?></p>

                        <input type="submit" name = "changepass"value="Change" class="btn">
                    </form>
            </section>
    </div>
    </body>
</html>