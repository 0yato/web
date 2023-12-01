
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



<video src="image\vid\signup.mp4" autoplay loop></video>

    <form action="" method="post">
    <a href="index.html"><i class="fa-solid fa-arrow-left"></i></a>
     <h2>Sign Up</h2>
     <div class="id-div">
        <p>your id Is : <b>2000</b> </p>
     </div>
     <div class="profile-image">
        <div class="image">
        <img src="image/default-profile.jpg" id="profile" alt="">
        </div>
        <input id="profile-pic" type="file" style="display: none;">
        <label for="profile-pic"><i class="fa-solid fa-plus open-card" ></i></label>
     </div>
     







    <div class="input-div">
    <i class="fa-solid fa-user"></i> 
    
    <input type="text" id="username" name="username" autocomplete="off" required>
    </div>

    <div class="input-div">
    <i class="fa-solid fa-eye" id="show1" style="display: none;"></i>
    <i class="fa-solid fa-eye-slash" id="unshow1"></i>
   
    <input type="password" name="password" autocomplete="off" required id="password">
    </div>

    







     <button name="create-btn">Create account</button>




     <p>Already have an account ?, <a href="login.php">Login</a> </p>





    </form>








<script src="javascript/signup-script/showpass.js"></script>
</body>
</html>