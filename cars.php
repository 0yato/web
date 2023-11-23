<?php
include("nav.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
<script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>




      
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
   
   
   
   <div class="info hied">
    <h3 class="">price$</h3>
    <h3 class="">drive km</h3>
     <h3 class="">kind</h3>
     <h3>date</h3>
     </div>

    
<a href="#" class="hied">contact</a>

     <h2 class="username hied">user name</h2>
    <div class="type hied">
    <h4 class="hied">type</h4>
    <img src="image/mercedec-logo.png" alt="" class="marka hied">
    </div>
 </div>
 <?php
     }
 ?>
    </div>
    
</div>
</body>
</html>