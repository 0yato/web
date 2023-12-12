<?php
include("nav.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css_files/profile.css/design.css">
<link rel="stylesheet" href="css_files/profile.css/scroll.css">
<link rel="stylesheet" href="css_files/profile.css/alerts.css">

    <link rel="stylesheet" href="css_files/profile.css/body.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car X</title>
    <link rel="shortcut icon" type="x-icon" href="image/logo1.png">
    <style>
        .nav{
            background-image: linear-gradient(180deg, #1e3c72 10%, #2a5298 90%);

}
.nav ul a{
    border: none;
    background-color: #1e3c72;
    border: 3px #243b5e solid;
}


    #a2{
    background-color: var(--darks);
letter-spacing: 5px;
border: 3px #243b5e solid;
}

#a2 > i{
    color: #2a5298;
}

::-webkit-scrollbar{
    width: 12px;
}
::-webkit-scrollbar-thumb{
    background-color:  #2a5298;
    border-radius: 5px;
}
</style>
</head>
<body>
    <div class="body2">
        <div class="top">
           <img class="design d1" src="image/car100.jpg" alt="">
           <img class="design d2" src="image/car101.jpg" alt="">
           <img class="design d3" src="image/car102.jpg" alt="">
           <img class="design d4" src="image/car103.jpg" alt="">
           
         <?php  echo '<img src="data:image/png;base64 ,'.base64_encode($_SESSION['image']).'">';?>

            <h2 class="name"><?php echo $_SESSION['userName'];?></h2>
            <h4>id: <?php echo $_SESSION['id'] ;?></h4>
            <button id="change-btn">change password</button>
           
        </div>

<div class="text">
    <h2>Your cars</h2>
</div>


        <div  class="scroll">
        <?php
         for ($i=0; 15 >$i  ; $i++) { 
         ?>



         <div class="card">

         </div>
         <?php
}
?>
        </div>
    </div>
    <div class="back" id="pass-page" style="display: none;">
       
    </div>
    <form action="profile.php" method="post" id="form-password">
        <i id="xx" class="fa-solid fa-plus"></i>
            <h2>Change Password</h2>
            <input type="text" name="confirm_password" required autocomplete="off" placeholder="Confirm password....">
            <input type="text" name="new_password" required autocomplete="off" placeholder="New Password....">
            <input type="submit" id="btn" value="Change" name="set_pass">
            
        </form>


        <?php 
if(isset( $_POST['set_pass'])){
    $confirm=$_POST['confirm_password'];
if( sha1($confirm)==$_SESSION['password']){
$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="web";
$new=sha1($_POST['new_password']);
$conn=@ new mysqli($db_server,$db_user,$db_pass,$db_name);
$id =$_SESSION['id'];
$sql="UPDATE `user` SET `password` =?  WHERE `user`.`id` =? ";
$stmt=$conn->prepare($sql);
$stmt->bind_param("si", $new, $_SESSION['id']);
$stmt->execute();


$stmt->close();
$conn->close();
?>
<div class="alert" id="salert">
    <div>
<i class="fa-solid fa-check"></i>
    <h2 class="textt">your password has been successfully changed</h2>
    <button id="close-btn">close</button>
    </div>
</div>
<?php
}
else{
    ?>
<div class="alert" id="nalert">
    <div>
<i class="fa-solid fa-x"></i>
    <h2 class="texttt">your old password is not correct</h2>
    <button id="close-btnn" class="close">close</button>
    </div>
</div>

<?php
}
}

?>


    <script src="javascript/profile-script/password.js"></script>
    <script src="javascript/profile-script/alerts.js"></script>

</body>
</html>

