<?php
session_start();
$_SESSION['state']='none';

?>
<!DOCTYPE html>
<html lang="en">
<head>


<script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" type="x-icon" href="image/logo1.svg">



<link rel="stylesheet" href="css_files/signup.css/form.css">
<link rel="stylesheet" href="css_files/signup.css/signup-inputs.css">





    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPOTLIGHT</title>
</head>
<body>

<?php 

if ($_SESSION['signup-state']==true) {
    echo '
        <div class="success" id="successMessage">
            <i class="fa-solid fa-check"></i>
            <p>Congratulations! Your account has been successfully created. Click anywhere to continue.</p>
        </div>';
    $_SESSION['signup-state'] = false;
}

?>

<video src="image\vid\signup.mp4" autoplay  loop></video>

    <form action="signup-backend.php" method="post" enctype="multipart/form-data">
    <a href="index.php"><i class="fa-solid fa-arrow-left"></i></a>
     <h2>Sign Up</h2>
     <div class="id-div">
        <p>your id Is : <b>
        <?php
        
        $db_server="localhost";
 $db_user="root";
 $db_password="";
 $db_name="web";
 $conn2=@ new mysqli( $db_server, $db_user, $db_password,$db_name);
 if ($conn2->connect_error){
    die("Connection failed: ". $conn2->connect_error);
 }
 $sql="SELECT COUNT(*) AS num FROM user";
 $result=$conn2->query($sql);
 $row=$result->fetch_assoc();
 $num=$row['num']+1000;
 $_SESSION['num_of_users']=$num;
 echo $num;
 $conn2->close();

 ?>  
    
        
        
        
        
        </b> </p>
     </div>
     <div class="profile-image">
        <div class="image">
        <img src="image/default-profile.jpg" id="profile" alt="">
        </div>
        <input id="profile-pic" required type="file" name="image" value="image/default-profile.jpg" style="display: none;">
        <label for="profile-pic"><i class="fa-solid fa-plus open-card" ></i></label>
     </div>
     







    <div class="input-div">
    <i class="fa-solid fa-user"></i> 
    
    <input type="text" id="username" name="username" value="<?php if($_SESSION['state']=="false"){ echo $_POST['username'] ;}?>" autocomplete="off" required>
    </div>

    <div class="input-div">
    <i class="fa-solid fa-eye" id="show1" style="display: none;"></i>
    <i class="fa-solid fa-eye-slash" id="unshow1"></i>
   
    <input type="password" name="password" value="<?php if($_SESSION['state']=="false"){ echo $_POST['username'] ;}?>" autocomplete="off" required id="password">
    </div>

    







     <button name="create-btn">Create account</button>




     <p>Already have an account ?, <a href="login.php">Login</a> </p>





    </form>




<script src="javascript/signup-script/showpass.js"></script>
</body>
</html>


