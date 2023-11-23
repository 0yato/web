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
   
<div class="nav" id="nav">




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
    <a href="home.php" id="a1" class="menu-item"><i class="fa-solid fa-house"></i><li>Home</li></a>
    <a href="profile.php" id="a2" class="menu-item"><i class="fa-solid fa-user"></i><li>Profile</li></a>
    <a href="cars.php" id="a3" class="menu-item"><i class="fa-solid fa-car"></i><li>Cars</li></a>
    <a href="post.php" id="a4" class="menu-item"><i class="fa-solid fa-pen"></i><li>Create post</li></a>
    <a href="admin.php" class="menu-item" id="a5"  <?php 
    
    if($_SESSION["username"]=="osama amma"){

    }
    else{
    echo "style='display: none;'";
    
    }
    ?>
    
    ><i class="fa-solid fa-screwdriver-wrench" ></i><li>Admin control</li></a>
    <a href="index.html" class="menu-item" ><i class="fa-solid fa-right-from-bracket"></i><li>Logout</li></a>
   </ul>
</div>
 
<script src="javascript/nav-script/nav.js"></script>
<script src="javascript/nav-script/color.js"></script>

</body>
</html>


