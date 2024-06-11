<?php
session_start();
if($_SESSION['you-login'] ==false){
  header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">








    <link rel="stylesheet" href="css_files/nav.css/nav.css">




    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPOTLIGHT</title>
    <link rel="shortcut icon" type="x-icon" href="image/logo1.svg">
</head>
<body>
   
<div class="nav" id="nav">




    <div class="logo">
   <div id="name">carx</div>
   <div id="x">x </div>
   </div>


   <hr>


   <div class="user">
    <?php
 
  echo '<img src="data:image/png;base64 ,'.base64_encode($_SESSION['image']).'">';
    ?>
    
    <h2><?php echo $_SESSION['userName'];?></h2>
   </div>
   <hr>
   <ul>
    <a href="home.php" id="a1" class="menu-item"><i class="fa-solid fa-house"></i><li>Home</li></a>
    <a href="profile.php" id="a2" class="menu-item"><i class="fa-solid fa-user"></i><li>Profile</li></a>
    <a href="cars.php" id="a3" class="menu-item"><i class="fa-solid fa-car"></i><li>Cars</li></a>
    <a href="post.php" id="a4" class="menu-item"><i class="fa-solid fa-pen"></i><li>Create</li></a>
    <a href="admin.php" class="menu-item" id="a5"  <?php 
    
    if( $_SESSION['user-state']=='admin'){

    }
    else{
    echo "style='display: none;'";
    
    }
    ?>
    
    ><i class="fa-solid fa-screwdriver-wrench" ></i><li>Admin </li></a>
    <a href="destroy.php" class="menu-item" ><i class="fa-solid fa-right-from-bracket"></i><li>Logout</li></a>
   </ul>
</div>
 
<script src="javascript/nav-script/nav.js"></script>
<script src="javascript/nav-script/color.js"></script>

</body>
</html>


