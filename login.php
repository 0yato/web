<?php
include("connection.php");

session_start();
$_SESSION['valid-user']=false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>

dmdfm
    <link rel="stylesheet" href="css_files/login.css/vid.css">

    <link rel="stylesheet" href="css_files/login.css/animation.css">
    <link rel="stylesheet" href="css_files/login.css/login-form.css">
    <link rel="stylesheet" href="css_files/login.css/nav.css">
    <link rel="shortcut icon" type="x-icon" href="image/logo0.svg">




    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SPOTLIGHT</title>
</head>
<body>
  <audio src="image\sounds\storm2.mp3" autoplay loop style="display: hidden;"></audio>
  <video class="vid1" id="vid1"   autoplay loop src="image\vid\login-vid.mp4"></video>


    <form action="login.php" method="post" class="login-form">
    <a href="index.php" class="bbb">  
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
            $db_server="localhost";
            $db_user="root";
            $db_password="";
            $db_name="web";
            $conn=@ new mysqli( $db_server, $db_user, $db_password,$db_name);
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);

$user=intval($_POST["userName"]);
$password=$_POST["password"];

while( $row = $result->fetch_assoc()){
if($row['id']==$user && $row['password']==sha1($password)){
        $_SESSION['valid-user']=true;
        $_SESSION['id']=$user;
        $_SESSION['userName']=$row['name'];
        $_SESSION['password']=$row['password'];
        $_SESSION['image']=$row['image'];
        $_SESSION['you-login'] =true;
        $_SESSION['user-state']=$row['state'];
        $_SESSION['post_create']='nothing';
        header("location:home.php");
}

}
if(!$_SESSION['valid-user']){
    echo '<p class="error">Please enter a valid user name and password.</p>';
  }


}
 $conn->close();

?>



            
         
            <button name="login-btn">login</button>
            <p id="os">Don`t have an account?<a href="signup.php">Register now!</a></p>
        </div>
    </form>



    <script src="javascript/login-script/show/unshow-password.js"></script>
    <script src="javascript/login-script/show/mute.js"></script>
</body>
</html>