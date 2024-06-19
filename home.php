<?php 
include("nav.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css_files/home.css/parallax.css">
    <link rel="stylesheet" href="css_files/home.css/types.css">
    <link rel="stylesheet" href="css_files/home.css/marka.css">

    <link rel="stylesheet" href="css_files/home.css/body.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>



    #a1{
    background-color: gray;
letter-spacing: 5px;

}
#a1 > i{
    color: #5C5C5C;
}
</style>
</head>
<body>
    <div class="body2">
    <div class="parallax">
<video src="image/vid/car-loop-vid.mp4" loop autoplay width="100%"></video>

<h1>SPOTLIGHT</h1><h1>SPOTLIGHT</h1><h1>SPOTLIGHT</h1>
<h1 id="real">SPOTLIGHT</h1>
    </div>






    <div class="info" >
        <img id="info-img" src="image/home-image/info222.jpg" alt="">
<p id="p1">In this time, cars have become a necessity in this life, but searching for the right car can sometimes be difficult, so here we are to save your time and find your personal car. <br>Discover a wide range of vehicles that cater to every taste and budget – your perfect match is just a few clicks away.</p>
    </div>








    <div class="car-card">
    
    <img id="i1" src="image/car100.jpg" alt="" class="imgs">
    <img id="i2" src="image/car101.jpg" alt="" class="imgs">
    <img id="i3" src="image/home-image/c4.jpg" alt="" class="imgs">
    <img id="i4" src="image/home-image/c5.jpg" alt="" class="imgs">
    </div>




    <div class="marka">
    <h2>Trending Brands on Our Platform</h2>
    <div class="marka-list"> 


<?php
$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="web";

$conn=@ new mysqli($db_server,$db_user,$db_pass,$db_name);

$sql = "SELECT * FROM `type`";
$result=$conn->query($sql);

while($row = $result->fetch_assoc()){
?>




     <div class="marka-list-item">
        <?php 
          echo '<img src="data:image/png;base64 ,'.base64_encode($row['type_image']).'">';

        ?>
        
        <p><?php echo $row["type_description"];  ?></p>
    </div>
    <?php
}
$conn->close();
    ?>
    </div>
</div>



    <div class="final">

    <video src="image/vid/car-loop-vid.mp4" loop autoplay width="100%"></video>
        
<img src="image/home-image/white-car.jpg" alt="">
<a href="cars.php">Explore now</a>
    </div>
    </div>
    <script src="javascript/home-script/scroll.js"></script>
    <script src="javascript/home-script/whoosh.js"></script>

</body>
</html>
