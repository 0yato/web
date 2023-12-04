<?php
session_start();
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
    <title>Car X</title>
</head>
<body>



<video src="image\vid\signup.mp4"  loop></video>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
    <a href="index.html"><i class="fa-solid fa-arrow-left"></i></a>
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

<?php
$_SESSION['state']='none';
 $db_server="localhost";
 $db_user="root";
 $db_password="";
 $db_name="web";
if(isset($_POST['create-btn'])){
  
    if(!empty($_POST['username'])&&!empty($_POST['password'])  ){
        $_SESSION['state']='true';
     $username=$_POST['username'];
     $password=$_POST['password'];
     $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
   $db=@new mysqli($db_server,$db_user,$db_password,$db_name);
   $sql="INSERT INTO `user` (`id`, `name`, `password`, `image`) VALUES ('$num', '$username', '$password', '$image')";

$db->query($sql);
$db->commit();
$db->close();
echo '

        <div class="success" id="success" >
    <i class="fa-solid fa-check"></i>
    <p>Your account could not be created (click anywhere to continue)</p>
</div>';
    }
    else{
        $_SESSION['state']='false';
        echo '<div class="error" id="errormsg" >
        <i class="fa-solid fa-x-mark"></i>
        <p>Your account could not be created (click anywhere to continue)</p>
    </div>';

    }
}

?>


<script src="javascript/signup-script/showpass.js"></script>
</body>
</html>


