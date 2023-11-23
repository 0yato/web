<?php 
include("nav.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css_files/home.css/parallax.css">

    <link rel="stylesheet" href="css_files/home.css/body.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.nav{
            background-image: linear-gradient(180deg, #222222 10%, #333333 90%);

}
.nav ul a{
    border: none;
    box-shadow: 0px 0px 2px 0px snow;
    background-color: #222;
    border: 3px solid snow;
}
.nav ul a:hover{
    background-color: rgba(128, 128, 128, 0.651);
}
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
<h1>carx</h1><h1>carx</h1><h1>carx</h1>
<h1 id="real">carx</h1>
    </div>






    <div class="info">
        <img src="image/home-image/info.jpg" alt="">
<p>In this time, cars have become a necessity in this life, but searching for the right car can sometimes be difficult, so here we are to save your time and find your personal car.</p>
    </div>



    <div class="car-card">
    
    <img id="i1" src="image/car100.jpg" alt="" class="imgs">
    <img id="i2" src="image/car101.jpg" alt="" class="imgs">
    <img id="i3" src="image/home-image/c4.jpg" alt="" class="imgs">
    <img id="i4" src="image/home-image/c5.jpg" alt="" class="imgs">
    </div>

    <div class="final">
<img src="image/home-image/white-car.jpg" alt="">
<a href="cars.php">Explore now</a>
    </div>
    </div>


    <script src="javascript/home-script/scroll.js"></script>
</body>
</html>
