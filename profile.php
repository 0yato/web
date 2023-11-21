<?php
include("nav.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="css_files/profile.css/body.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car X</title>
    <link rel="shortcut icon" type="x-icon" href="image/logo1.png">
    <style>
    #a2{
    background-color: var(--darks);
letter-spacing: 5px;
}
</style>
</head>
<body>
    <div class="body2">
        <div class="top">
            <img src="image/logo1.svg" alt="">
            <button id="change-btn">change password</button>
        </div>
        <div  class="bottom">
         
        </div>
    </div>
    <div class="back" id="pass-page" style="display: none;">
       
    </div>
    <form action="profile.php" method="post" id="form-password">
        <i id="xx" class="fa-solid fa-plus"></i>
            <h2>Change Password</h2>
            <input type="text" required autocomplete="off" placeholder="New Password....">
            <input type="submit" id="btn" value="Change">
            
        </form>





    <script src="javascript/profile-script/password.js"></script>
</body>
</html>