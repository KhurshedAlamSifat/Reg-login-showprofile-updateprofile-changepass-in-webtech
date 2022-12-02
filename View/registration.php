<?php 
include "../Control/regcheck.php";
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
        <link rel="stylesheet" href="../CSS/registration.css">
    </head>
    <body>
    <header class="header">

<div class="header-1">
    <a href="" class="logo"> <i><img src="../Logo/logo.png"></i> </a>
    
</div>
</header>
<hr class="line">
        <div class="split-screen">
            
            <div class="right">
            <section class ="copy">
                <div class="login-form-container">
                    <form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                        <h3>Sign in</h3>
                        <span>Fullname</span>
                        <input type="text" name="name" class="box" placeholder="enter your fullname" id="name">
                        <p style="color:red" id="errname"></p>
                        <table><tr><td><span>Gender</span></td></tr>
                        <tr><td><input type="radio" name="gender"  value="Male" id="gender1"><span>Male</span></td>
                        <td><input type="radio" name="gender"  value="Female" id="gender2"><span>Female</span></td></tr></table>
                        <p style="color:red" id="errgender"></p>

                        <span>Age</span>
                        <input type="number" name="age" class="box" placeholder="enter your age" id="age">
                        <p style="color:red" id="errage"></p>

                        <span>E-mail</span>
                        <input type="email" name="email" class="box" placeholder="enter your email" id="email">
                        <p style="color:red" id="erremail"></p>
                        
                        <span>Phone no</span>
                        <input type="text" name="phone" class="box" placeholder="enter your phone no" id="phone">
                        <p style="color:red" id="errphn"></p>

                        <span>Address</span>
                        <input type="text" name="address" class="box" placeholder="enter your address" id="address">
                        <p style="color:red" id="erradd"></p>


                        <span>Password</span>
                        <input type="password" name="pass" class="box" placeholder="enter your password" id="pass">
                        <p style="color:red" id="errpass"></p>
                        <div class="checkbox">
                            <input type="checkbox" name="" id="remember-me">
                            <label for="remember-me"> Agreed to terms and conditions</label>
                        </div>
                        <input type="submit" name = "signup"value="sign up" class="btn">
                        <p>want to go back ? <a href="login.php">click here</a></p>
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
       </hr><hr class="line2"></hr>
       
      <script src="../JS/reg.js"></script>
    </body>
</html>