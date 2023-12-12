<?php
include("nav.php");
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
    $db_server='localhost';
    $db_user='root';
    $db_password='';
    $db_name='web';
    $conn=@ new mysqli( $db_server, $db_user, $db_password,$db_name);
    $sql = "SELECT * FROM car";
    $result = $conn->query($sql);
     
    while($row=$result->fetch_assoc()){
     
//

 ?>
     <div class="card" style="background-image: url(<?php echo'data:image/png;base64,' .base64_encode($row['car_image']);?>">
   


<i class="fa-solid fa-plus open-card" ></i>
<?php
echo '<img id="card-image" class="car-image hied" src="data:image/png;base64 ,'.base64_encode($row['car_image']).'">';

?>
    <h2 class="car-name"><?php echo $row['car_name'];?></h2>
<p class="id hied"><?php echo  $row['car_id']  ;?></p>
<p class="hied descc"> <?php  echo $row['description'] ;?></p>
    <h3 class="hied">Price : <?php echo $row['price']." $" ;?></h3>
    <h3 class="hied">driven:<?php echo $row['driven']. "km";?></h3>
    <?php 
 $db_server = 'localhost';
 $db_user = 'root';
 $db_password = '';
 $db_name = 'web';
 $conn3 = new mysqli($db_server, $db_user, $db_password, $db_name);
 $kind = intval($row['kind_id']);
 $sql3 = "SELECT * FROM kind WHERE kind_id = $kind";
 $result3 = $conn3->query($sql3);
     $row3 = $result3->fetch_assoc();
?>
    <h3 class="hied">For <?php echo $row3['kind_description'];?></h3>
    <?php 
     $conn3->close();
    ?>
     <h3 class="hied">Modle: <?php echo $row['date'];?></h3>
     <h3 class="hied">Fuel type: <?php echo $row['fuel'];?></h3>
     <h3 class="hied">Engine Size: <?php echo $row['Engine size'];?></h3>
     <h3 class="hied">Color: <?php echo $row['Color'];?></h3>
     <h3 class="hied">VIN: <?php echo $row['VIN'];?></h3>
<a href="#" class="hied"><?php echo $row['contact'] ;?></a>
<?php 
 $db_server = 'localhost';
 $db_user = 'root';
 $db_password = '';
 $db_name = 'web';
 $conn2 = new mysqli($db_server, $db_user, $db_password, $db_name);
 $id = intval($row['user_id']);
 $sql2 = "SELECT * FROM user WHERE id = $id";
 $result2 = $conn2->query($sql2);
     $row2 = $result2->fetch_assoc();
?>
    <h2 class=" hied"><?php echo $row2['name']; ?></h2>
<?php
 $conn2->close();
?>

    <h4 class="hied">type</h4>
    <?php 
 $db_server = 'localhost';
 $db_user = 'root';
 $db_password = '';
 $db_name = 'web';
 $conn4 = new mysqli($db_server, $db_user, $db_password, $db_name);
 $type = intval($row['type_id']);
 $sql4 = "SELECT * FROM Type WHERE type_id = $type";
 $result4 = $conn4->query($sql4);
     $row4 = $result4->fetch_assoc();
     echo '<img  class="marka hied" src="data:image/png;base64 ,'.base64_encode($row4['type_image']).'">';
     $conn4->close();
?>

    
   
    
    
    <h3 class="hied"><?php echo $row['user_id'];?></h3>
 </div>
 <?php
     }
 ?>
    </div>
    
</div>









<div class="car-selected" id="car-selected" style="z-index: -1;">
<i class="fa-solid fa-plus" id="close-btn" style="display: none;"></i>
<img src="image\home-image\c4.jpg" alt="" class="image-selected" id="image-selected">



<div class="info-card" id="info-card">




<div class="name-info">
<h2  class="name-info-name">car name</h2>
<img id="car-logo" src="image/mercedec-logo.png" alt="" class="car-logo-info">
</div>




<div class="info-selected">
<h3 class="type-info-rent">for Rent</h3>
    <div class="continar">
    
    <h3 class="model-info">model:2021</h3>
    <h3 class="color-info">color: <div class="color-of-car"></div></h3>

<h3 class="fuel-info">fuel:</h3>
     <h3 class="Engine-size-info">Engine size:</h3>
     <h3 class="driven-info"> Driven: <b>40,000km</b> </h3>
     <h3 class="Vin-info"> </h3>
     </div>
<p class="description-info">
    <b>Description:</b> <span class="description-info2"> Lorem ipsum, dolor sit amet 
    consectetur adipisicing elit. Aliquid itaque eum ut
     labore deleniti ipsam, rerum alias, rem aperiam 
     possimus nobis. Similique laborum, modi neque 
     consequuntur illum pariatur quod cum ipsum cumque
      sunt error, nisi nulla, veritatis unde quia ducimus.</p>
      </span>
</div>





<div class="pay-info">
<h4 class="id-info"><b>Account ID</b>: <span class="userid">1507</span> </h4>
<h3 class="owner-name"><b> Owner</b>: <p class="username"></p></h3>
    
</div>


<div class="contact-info-div">
<h2 class="mony-info">$200,000</h2>
<h3><b>car id:</b> <p class="car_id_info"></p></h3>
<br>

</div>
<div class="btnnn"><a href="" class="contact-info">Contact Here !</a></div>
</div>

<!--close of info card-->








</div>

<script src="javascript/cars-script/open.js"></script>
</body>
</html>