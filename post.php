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
#a4 >i{
    color:#e46962 ;
}


::-webkit-scrollbar{
    width: 12px;
}
::-webkit-scrollbar-thumb{
    background-color:  #b3261e;
    border-radius: 5px;
}



</style>
</head>
<body>



<form action="post-backend.php" method="post" enctype="multipart/form-data">
    <div class="car-id">
        <h2>The car id: <?php 
        $db_server='localhost';
        $db_user='root';
        $db_pass='';
        $db_name='web';
        $conn=@ new mysqli($db_server,$db_user,$db_pass,$db_name);
        $sql="SELECT * FROM `car`";
        $result=$conn->query($sql);
        $car_id=$result->num_rows +5001;
        echo $car_id ;
        $_SESSION['car_id']=$car_id;
        ?></h2>
    </div>
<div class="card" id="car-img">
<i class="fa-solid fa-plus"></i>
    <h2 class="car-name" id="label-name"></h2>
<img src="" id="temp-img" alt="" style="display: none;">
    </div>
    <div class="input-image">
    <label id="label-for-input-image" for="input-file">Upload An Image</label>    
    <input type="file" style="display: none;" required name="carImage" id="input-file" accept="image/png ,image/jpg, img/svg, image/jpeg">

    </div>
    <div class="inputs">
        <div class="contt">
        <div class="radio">
        <div class="r2">
         <div class="sell" id="sell">sell</div>
         <div class="rent" id="rent">rent</div>
        <input type="text" required  id="state-of-sell-rent" name="carState" style="display: none;">
         </div>
        </div>
        <div class="list">
            <h2>Company</h2>
            <select name="carMarka"  id="company-select">
            <option class="choce" value="none">none</option>
<?php

    $sql="SELECT * FROM `type`";
    $result=$conn->query($sql);
$conn->close();

while($row=$result->fetch_assoc()){
?>


                <option class="choce" value="<?php echo $row['type_id']; ?>"><?php echo $row['type_description']; ?></option>

                <?php
}
                ?>
                
              
            </select>
        </div>
        </div>
        <div class="texts-input">
        <div class="text-input">
            <label for="name-car">Car Name</label>
           <input autocomplete="off" name="carName" required type="text" id="name-car">
            <p id="name-count">/20</p>
        </div>
        <div class="text-input">
            <label for="price">Price</label>
            <input autocomplete="off" name="carPrice" required type="number" id="price">
            
        </div>      
          <div class="text-input">
            <label for="drive">distance travel</label>
            <input autocomplete="off" name="carDriven" required type="number" id="drive">
            
        </div>       
         <div class="text-input">
           
            <input autocomplete="off" required name="carModel"  id="model">
            <label for="model">model</label>
        </div>      
         
        <div class="text-input">
            <label for="contact">contact method</label>
            <input autocomplete="off" name="carContact" required type="url" id="contact">
            
        </div> 
        <div class="text-input">
            <label for="Engine">engine size</label>
            <input autocomplete="off" name="carEngine" required type="text" id="Engine">
            
        </div> 
        <div class="text-input">
            <label for="vin">Vin</label>
            <input autocomplete="off" name="carVin" required type="number" id="vin">
            
        </div> 
        <div class="text-input">
            <label for="fuel">fuel</label>
            <input autocomplete="off" name="carFuel" required type="text" id="fuel">
            
        </div> 
        <div class="text-input">
            <label for="color">color</label>
            <input autocomplete="off" name="carColor" required type="text" id="color">
            
        </div> 

        <div class="text-input">
            <label for="description">description</label>
           <textarea name="carDesc" required id="description"  cols="40" rows="6"></textarea>
           <p id="des-count">/300</p>
        </div>
        </div>
    </div>
    <input name="create" type="submit" class="btn" value="POST">
</form>
<?php
if($_SESSION['post_create']=='create'){
    echo "<h2> hiiiiiiiiiiiiiiiiiiiiiiiiidkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</h2>";
    $_SESSION['post_create']='nothing';

}
else if($_SESSION['post_create']=="not"){
echo "not";
    $_SESSION['post_create']='nothing';
}


?>



<script src="javascript/post-script/select.js"></script>

<script src="javascript/post-script/count-latter.js"></script>
<script src="javascript/post-script/upload-image.js"></script>
</body>
</html>

