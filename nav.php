<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>








    <link rel="stylesheet" href="css_files/nav.css/nav.css">




    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car X</title>
    <link rel="shortcut icon" type="x-icon" href="image/logo1.png">
</head>
<body>
   
<div class="nav">




    <div class="logo">
   <div id="name">carx</div>
   <div id="x">x </div>
   </div>


   <hr>


   <div class="user">
    <img src="image/logo1.svg" alt="">
    <h2>Osama</h2>
   </div>
   <hr>
   <ul>
    <a href="home.php" class="menu-item"><i class="fa-solid fa-house"></i><li>Home</li></a>
    <a href="profile.php" class="menu-item"><i class="fa-solid fa-user"></i><li>Profile</li></a>
    <a href="cars.php" class="menu-item"><i class="fa-solid fa-car"></i><li>Cars</li></a>
    <a href="post-create.php" class="menu-item"><i class="fa-solid fa-image"></i><li>Generate Image</li></a>
    <a href="admin.php" class="menu-item"   <?php 
    
    if($_SESSION["username"]=="osama ammar"){

    }
    else{
    echo "style='display: none;'";
    
    }
    ?>
    
    ><i class="fa-solid fa-screwdriver-wrench"></i><li>Admin control</li></a>
    <a href="index.html" class="menu-item" ><i class="fa-solid fa-right-from-bracket"></i><li>Logout</li></a>
   </ul>
</div>
 
<script src="javascript/nav-script/nav.js"></script>
</body>
</html>


