<?php 
 include "../Control/logincheck.php";
if(isset($_SESSION['email'])){
    header("location: home.php");
    }

    $msg="";
    
    setcookie("user_detect","visited",time()+86400*7, "/");
    
    setcookie("location","some location",time()+86400*7, "/");
    
    if(isset($_COOKIE["user_detect"]))
    
    {
    
        $msg= "You have visited this site before.";
    
    }
    
    else{$msg= "Hi! This is the first time you visiting this site.";}
    
    
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
        <link rel="stylesheet" href="../CSS/login.css">
    </head>
    <body>
    <header class="header">

<div class="header-1">
    <a href="../index.php" class="logo"> <i><img src="../Logo/logo.png"></i> </a>
    <div class="icons">
        <h2><?php echo $msg; ?></h2>
    </div>
</div>
</header>
<hr class="line">
        <div class="split-screen">
        
            <div class="right">
            <section class ="copy">
                <div class="login-form-container">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h3>Sign in</h3>
                        <span>E-mail</span>
                        <input type="email" name="email" class="box" placeholder="enter your email" id="">
                        <span>Password</span>
                        <input type="password" name="password" class="box" placeholder="enter your password" id="">
                        <div class="checkbox">
                            <input type="checkbox" name="" id="remember-me">
                            <label for="remember-me"> remember me</label>
                        </div>
                        <p style="color:red"><?php echo $error; ?></p>
                        <input type="submit" name = "signin" value="sign in" class="btn">
                        <p>forget password ? <a href="#">click here</a></p>
                        <p>don't have an account ? <a href="registration.php">create one</a></p>
                    </form>
                    <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <div class="credit"> created by <span>Golam Kader Chowdhury</span> | © 2022-2023 healthcare.com </div>
                </div>
            </section>
            </div>
        </div>
    </body>
</html>