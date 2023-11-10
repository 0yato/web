<?php  
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="css_files/login.css/animation.css">
    <link rel="stylesheet" href="css_files/login.css/login-form.css">
    <link rel="stylesheet" href="css_files/login.css/nav.css">
    <link rel="shortcut icon" type="x-icon" href="image/logo1.png">




    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Car X</title>
</head>
<body>
    <div class="nav">
        <img src="image/logo1.svg" alt="">
      
      <a href="index.html">  
        <i class="fa-solid fa-arrow-left fa-bounce"></i>
   
</a>
    </div>


    <form action="login.php" method="post" class="login-form">
        <h2>login</h2>
        <div class="divcon username">
            <i class="fa-solid fa-user"></i> 
            <input type="text" name="userName" required autocomplete="off">
            <p>UserName</p>
            <div class="slide"></div>
        </div>

        <div class="divcon password">
            <i class="fa-solid fa-lock"></i>
           
            <input type="password" id="password-input" name="password" required autocomplete="off">
           
            <p>password</p>
            <div class="slide"></div>
            <div class="eye">
                <i class="fa-solid fa-eye" id="show-password"></i>
                <i class="fa-solid fa-eye-slash" id="unshow-password"></i>
            </div>
            
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
            <p id="os">Don`t have an account?<a href="signup.html">Register now!</a></p>
        </div>
    </form>



    <script src="javascript/login-script/show/unshow-password.js"></script>
</body>
</html>

