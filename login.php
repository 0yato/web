<?php  
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="css_files/login.css/vid.css">

    <link rel="stylesheet" href="css_files/login.css/animation.css">
    <link rel="stylesheet" href="css_files/login.css/login-form.css">
    <link rel="stylesheet" href="css_files/login.css/nav.css">
    <link rel="shortcut icon" type="x-icon" href="image/logo1.svg">




    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Car X</title>
</head>
<body>
   <div class="mute" id="cont">
   <i class="fa-solid fa-volume-xmark" style="display: none;" id="mute"></i>
   <i class="fa-solid fa-volume-high"  id="muted"></i>
   </div>
  <video class="vid1" id="vid1"   autoplay loop src="image/vid/login-vid.mp4"></video>


    <form action="login.php" method="post" class="login-form">
    <a href="index.html" class="bbb">  
        <i class="fa-solid fa-arrow-left"></i>
   
</a>   
    <h2>login</h2>
        <p class="welcome">welcome again login into your account</p>
        <div class="divcon username">
            <i class="fa-solid fa-user"></i> 
            <input type="text" name="userName" required autocomplete="off">
            <p>User ID</p>
            <div class="slide"></div>
        </div>

        <div class="divcon password">
            
        <div class="eye">
                <i class="fa-solid fa-eye" id="show-password"></i>
                <i class="fa-solid fa-eye-slash" id="unshow-password"></i>
            </div>
            <input type="password" id="password-input" name="password" required autocomplete="off">
           
            <p>password</p>
            <div class="slide"></div>
           
            
        </div>

        
            
       
        <div class="btn">


<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->
<!--check here--------------------------------------------------->

        <?php
        if(isset($_POST['login-btn'])){
            
$user=strtolower($_POST["userName"]);
$pass = strtolower($_POST["password"]);
if($user=="osama ammar" && $pass=="oossaammaa1234"){
$_SESSION["username"]=$user;
header("location:home.php");
}
else{
    echo "<p>your user name is not Registered or the password is incorrect </p>";
}
}
?>



            
         
            <button name="login-btn">login</button>
            <p id="os">Don`t have an account?<a href="signup.php">Register now!</a></p>
        </div>
    </form>



    <script src="javascript/login-script/show/unshow-password.js"></script>
    <script src="javascript/login-script/show/mute.js"></script>
</body>
</html>