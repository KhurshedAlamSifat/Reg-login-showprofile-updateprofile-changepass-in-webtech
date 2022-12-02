<?php
session_start(); 
include('../Control/updatecheck.php');
if(empty($_SESSION["customeremail"]))
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
        <title>24/7 Inernet Service Provider</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../Style/style.css">
    </head>
    <body>
    <header class="header">
        <div class="header-1">
        <a href="#" class="logo"> <i><img src="../../../Logo/logo.png"></i> </a>
        </div>
    </header>
    <hr class="line"></hr>
    <div class="sidebar">
        <a href="home.php">Profile</a>
        <a class="active" href="updateprofile.php">Update Profile</a>        
        <a href="product.php">View Product</a>
        <a href="">Buy Internet Offer</a>
        <a href="#complainntact">Add complain</a>
        <a class="logout" href="../../Logout/logout.php">logout</a>
    </div>
    <div class="panel">
        <h2>Update Profile</h2>
        
    

        <section class ="copy">
                <div class="Customerlogin-form-container">
                    <form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                        <h3>Edit Profile</h3>
                        <span>Fullname</span>
                        <input type="text" name="customername" class="box"   id="customername">
                        <p style="color:red" id="errname"></p>
                        <table><tr><td><span>Gender</span></td></tr>
                        <tr><td><input type="radio" name="customergender"  value="Male" id="customergender1"><span>Male</span></td>
                        <td><input type="radio" name="customergender"  value="Female" id="customergender2"><span>Female</span></td></tr></table>
                        <p style="color:red" id="errgender"></p>
                        
                        <span>Address</span>
                        <input type="text" name="customeraddress" class="box" id="customeraddress">
                        <p style="color:red" id="erradd"></p>

                        <input type="submit" name = "customerupdate"value="Update" class="btn">
                    </form>
            </section>
    </div>
    </body>
</html>