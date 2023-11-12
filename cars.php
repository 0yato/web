<?php
include("nav.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    

      <link rel="stylesheet" href="css_files/car.css/filter.css">
      <link rel="stylesheet" href="css_files/car.css/card.css">
      <link rel="stylesheet" href="css_files/car.css/cards.css">


      <style>
    #a3{
    background-color: var(--darks);
letter-spacing: 5px;
}
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <div class="body2">
    <div class="filter">

    </div>

    <div class="cards">
     <?php for($i=16;$i > 0;$i--){ ?>
<div class="card" style="background-image: url('image/car<?php echo ($i+1)?>.jpg');">
   

</div>

     <?php
     }
     ?>
    </div>
    
</div>
</body>
</html>