<?php
session_start(); 
include('../Control/updatecheck.php');
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
        <a class="active" href="updateprofile.php">Update Profile</a>        
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
        
    

        <section class ="copy">
                <div class="Customerlogin-form-container">
                    <form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                        <h3>Edit Profile</h3>
                        <span>Fullname</span>
                        <input type="text" name="name" class="box"  value=<?php echo $name;?> >
                        <!-- <p style="color:red" id="errname"></p> -->

                        <span>Age</span>
                        <input type="text" name="age" class="box" value=<?php echo $age;?>>

                        <span>Phone</span>
                        <input type="text" name="phone" class="box" value=<?php echo $phn;?> >
                        
                        <span>Address</span>
                        <input type="text" name="address" class="box" value=<?php echo $address;?>>
                        <!-- <p style="color:red" id="erradd"></p> -->

                        <input type="submit" name = "update"value="Update" class="btn">
                    </form>
            </section>
    </div>
    </body>
</html>