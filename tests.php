<?php
include("nav.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
<script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>



<link rel="stylesheet" href="css_files/car.css/car-selected-animation.css">

<link rel="stylesheet" href="css_files/car.css/car-selected.css">
      <link rel="stylesheet" href="css_files/car.css/card.css">
      <link rel="stylesheet" href="css_files/car.css/cards.css">


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
    #a3{
    background-color: gray;
letter-spacing: 5px;

}
#a3 > i{
    color: #5C5C5C;
}
::-webkit-scrollbar{
    width: 12px;
}
::-webkit-scrollbar-thumb{
    background-color: #222;
    border-radius: 5px;
}
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <div class="body2">







    <?php
    include("car-filter.php");
    ?>











    <div class="cards">
    <?php 
     for($i=16;$i > 0;$i--){ ?>
<div class="card" style="background-image: url('image/car<?php echo ($i+1)?>.jpg');">
   


<i class="fa-solid fa-plus"></i>
    <h2 class="car-name">name</h2>


<div class="anime"></div>
<p class="id hied">id</p>
<img  src="image/car-slide9.jpg" alt="" class="car-image hied">
<p class="hied">description Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem illo impedit commodi perferendis saepe nam possimus fugit placeat ipsam autem voluptatibus sint veniam quae repudiandae non vel suscipit fuga ipsum, recusandae voluptatum, ducimus iste magni porro. Illo blanditiis facilis quia. Inventore consectetur, possimus quisquam delectus sapiente nisi. Accusantium animi, voluptate laudantium itaque neque odit iste expedita velit fuga illo delectus.</p>
   
   
   
  
    <h3 class="hied">price$</h3>
    <h3 class="hied">drive km</h3>
     <h3 class="hied">kind</h3>
     <h3 class="hied">date</h3>
     

    
<a href="#" class="hied">contact</a>

     <h2 class="username hied">user name</h2>
    
    <h4 class="hied">type</h4>
    <img src="image/mercedec-logo.png" alt="" class="marka hied">
    
 </div>
 <?php
     }
 ?>
    </div>
    
</div>









<div class="car-selected">
<img src="image\home-image\c4.jpg" alt="" class="image-selected">



<div class="info-card">




<div class="name-info">
<h2 class="name-info-name">car name</h2>
<img src="image/mercedec-logo.png" alt=""  class="car-logo-info">
</div>




<div class="info-selected">
    <h3 class="type-info-rent">for Rent</h3>
    <h3 class="model-info">model:2021</h3>
<h3 class="driven-info"> Driven: 40,000km</h3>
<p class="description-info">
    <b>Description:</b> Lorem ipsum, dolor sit amet 
    consectetur adipisicing elit. Aliquid itaque eum ut
     labore deleniti ipsam, rerum alias, rem aperiam 
     possimus nobis. Similique laborum, modi neque 
     consequuntur illum pariatur quod cum ipsum cumque
      sunt error, nisi nulla, veritatis unde quia ducimus.</p>

</div>





<div class="pay-info">
    <h2 class="mony-info">$200,000</h2>
    <h4 class="id-info"><b> ID</b> : 1507</h4>
</div>


<div class="contact-info-div">
<h3 class="owner-name"><b> Owner </b>: osama ammar</h3>

<a href="" class="contact-info">Contact Here !</a>

</div>

</div>

<!--close of info card-->








</div>

<script src="javascript/cars-script/open.js"></script>
</body>
</html>