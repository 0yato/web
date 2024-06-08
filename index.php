<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>
    
    




    <link rel="stylesheet" href="css_files/index.css/footer.css">
    <link rel="stylesheet" href="css_files/index.css/nav.css">
    <link rel="stylesheet" href="css_files/index.css/slider.css">
    <link rel="stylesheet" href="css_files/index.css/about.css">















    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Shop </title>
    <link rel="shortcut icon" type="x-icon" href="image/logo0.svg">

   
</head>
<body>
    


    <div class="nav">
        <img src="image/logo0.svg" alt="">
    
        <ul>
            <a href="#s"><li>home</li></a>
            <a href="#about"><li>about us</li></a>
        <a href="#footer"><li>contact</li></a>
        </ul>
        <div class="btn">
        <div class="login-btn">
           <a href="login.php"> login</a>
        </div>
       <div class="signup-btn">
           <a href="signup.php">sign up</a>
       </div>
    </div>
    <div class="nav-btn" id="navbtn">
        <i class="fa-solid fa-bars " id="open"></i>
        <i class="fa-regular fa-circle-xmark" id="close"></i>
    </div>
    </div>
    <div class="nav-2" id="nav2">
        <ul>
            <a href="#s"><li>home</li></a>
            <a href="#about"><li>about us</li></a>
            <a href="#footer"><li>contact</li></a>
            <a href="login.php"><li>login</li></a>
            <a href="signup.php"><li>sign up</li></a>
        </ul>
    </div>





    <div class="f" id="s">
        <div class="info">
            <div class="te">
              <p>The perfect car awaits you – explore our collection today!</p>
            </div>
            <a href="login.php">start now</a>
        </div>
        <div class="ss">
        <div class="s1">
            <img src="image/car-slide1.jpg" alt="">
            <img src="image/car-slide6.jpg" alt="">
            <img src="image/car-slide8.jpg" alt="">
            <img src="image/car-slide9.jpg" alt="">
        </div>
        </div>
        </div>



<hr id="breake">


<div class="about" id="about">
    <div class="text">
    <p>
        <b id="cccc">CarX</b>Welcome to our premier car marketplace, where your dream car awaits.
        <br> Browse through our extensive collection of cars from around the world, find the perfect match at the best price, and easily connect with sellers directly through our seamless communication link in every listing.
        <br> Start your journey with us today and drive home your ideal car!


    </p>
</div>
    <img style="clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%);" src="image/logo0.svg" alt="">
</div>































<?php
$_SESSION['signup-state']=false;
?>















  




<div class="footer" id="footer">
    <h2>Developers</h2>
    <div class="creator">


    <div class="card">
        <h2 class="name">Bisan Dweikat</h2>
        
        <div class="ce">CE | 119</div>
        <div class="line"></div>
        <h2 class="social">social</h2>
        <div class="icons">
           <a target="_blank" href="https://www.facebook.com/bisan.dweikat6.5/"> <i class="fa-brands fa-facebook"></i></a>
            <a target="_blank" href="https://x.com/BisanDweikat"><i class="fa-brands fa-x-twitter"></i></a>
           <a target="_blank" href="https://github.com/BisanDweikat"> <i class="fa-brands fa-github"></i></a>
           <a target="_blank" href=""><i class="fa-brands fa-instgram"></i></a>
           <a target="_blank" href="https://www.linkedin.com/in/bisan-dweikat-b0719b244/"><i class="fa-brands fa-LinkedIn"></i></a>
        </div>
    </div>
    <div class="card">
        <h2 class="name">Faiha Odeh </h2>
        
        <div class="ce">CE | 119</div>
        <div class="line"></div>
        <h2 class="social">social</h2>
        <div class="icons">
           <a target="_blank" href="https://www.facebook.com/profile.php?id=100002980662811"> <i class="fa-brands fa-facebook"></i></a>
            <a target="_blank" href="https://x.com/thman91702?s=09"><i class="fa-brands fa-x-twitter"></i></a>
           <a target="_blank" href="https://github.com/0yato"> <i class="fa-brands fa-github"></i></a>
        </div>
    </div>
</div>
    <div class="copyright">
<p>© car x | 2023-2024|,All rights reserved.</p>
    </div>
</div>















    <script src="javascript/index-script/nav.js"></script>
</body>
</html>