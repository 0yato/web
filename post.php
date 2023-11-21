<?php 
include("nav.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css_files/post.css/input.css">

<link rel="stylesheet" href="css_files/post.css/body.css">
<link rel="stylesheet" href="css_files/post.css/view.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>



    #a4{
    background-color: var(--darks);
letter-spacing: 5px;
}






</style>
</head>
<body>



<form action="post.php" method="post">
    <div class="car-id">
        <h2>The car id will be: 19</h2>
    </div>
<div class="card" id="car-img">
<i class="fa-solid fa-plus"></i>
    <h2 class="car-name" id="label-name"></h2>
<img src="" id="temp-img" alt="" style="display: none;">
    </div>
    <div class="input-image">
    <label id="label-for-input-image" for="input-file">Upload An Image</label>    
    <input type="file" style="display: none;" name="carImage" id="input-file" accept="image/png ,image/jpg, img/svg, image/jpeg">

    </div>
    <div class="inputs">
        <div class="radio">
        <div class="r2">
         <div class="sell" id="sell">sell</div>
         <div class="rent" id="rent">rent</div>
        <input type="text" value="none" id="state-of-sell-rent" name="carState" style="display: none;">
         </div>
        </div>
        <div class="list">
            <h2>Company</h2>
            <select name="carMarka" id="">
            <option value="none">none</option>
                <option value="">mersedese</option>
                <option value="">mosting</option>
                <option value="">ferrari</option>
                <option value="">Cadelac</option>
                <option value="">BMW</option>
            </select>
        </div>
        <div class="texts-input">
        <div class="text-input">
            <label for="name-car">Car Name</label>
           <input autocomplete="off" name="carName" required type="text" id="name-car">
            <p id="name-count">/20</p>
        </div>
        <div class="text-input">
            <label for="price">Price</label>
            <input autocomplete="off" name="carPrice" required type="text" id="price">
            
        </div>      
          <div class="text-input">
            <label for="drive">distance travel</label>
            <input autocomplete="off" name="carDriven" required type="text" id="drive">
            
        </div>       
         <div class="text-input">
           
            <input autocomplete="off" required name="carModel"  id="model">
            <label for="model">model</label>
        </div>      
          <div class="text-input">
            <label for="description">description</label>
           <textarea name="carDesc" required id="description"  cols="40" rows="6"></textarea>
           <p id="des-count">/300</p>
        </div>
        <div class="text-input">
            <label for="contact">contact method</label>
            <input autocomplete="off" name="carContact" required type="url" id="contact">
            
        </div> 
        </div>
    </div>
    <input name="create" type="submit" class="btn" value="POST">
</form>




<script src="javascript/post-script/select.js"></script>

<script src="javascript/post-script/count-latter.js"></script>
<script src="javascript/post-script/upload-image.js"></script>
</body>
</html>
<?php
if(isset($_POST["create"])){
$_SESSION["carId"]=19;
$_SESSION["carImage"]=$_POST["carImage"];
$_SESSION["carState"]=$_POST["carState"];
$_SESSION["carMarka"]=$_POST["carMarka"];
$_SESSION["carName"]=$_POST["carName"];
$_SESSION["carPrice"]=$_POST["carPrice"];
$_SESSION["carDriven"]=$_POST["carDriven"];
$_SESSION["carModel"]=$_POST["carModel"];
$_SESSION["carDesc"]=$_POST["carDesc"];
$_SESSION["carContact"]=$_POST["carContact"];

echo $_POST["carImage"]."<br>";
echo $_POST["carState"]."<br>";
echo $_POST["carMarka"]."<br>";
echo $_POST["carName"]."<br>";
echo $_POST["carPrice"]."<br>";
echo $_POST["carDriven"]."<br>";
echo $_POST["carModel"]."<br>";
echo $_POST["carDesc"]."<br>";
echo $_POST["carContact"]."<br>";

}


?>