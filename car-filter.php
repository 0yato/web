<?php
include("connection.php");
$sql="SELECT * FROM type";
$result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>


<link rel="stylesheet" href="css_files/filters.css/range.css">
<link rel="stylesheet" href="css_files/filters.css/filter.css">
<script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cars.php" method="post">
        <div class="search">
          <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>  <input autocomplete="off" type="text" name="" id="search">
        </div>
        <div class="filter-icon"><i class="fa-solid fa-filter"></i>filter</div>
<div class="filter">
     
     <div class="opt">
        <div class="s">
        <label for="c">company</label>
        <select name="" id="c">
        <option value="none">None</option>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<option>{$row['type_description']}</option>";
}
           
            ?>
        </select>
        </div>
        <div class="s">
        <label for="t">company</label>
        <select name="" id="t">
            <option value="none">None</option>
            <option value="Rent">Rent</option>
            <option value="Sell">Sell</option>
        </select>
        </div>
     </div>
     <div class="range">
        <label for="price">price:</label>
        <p id="prisep" style="background:green;">0$</p>
     <input id="price" type="range" min="0" max="200000">
     </div>
     <div class="range">
        <label for="drive">driven:</label>
        <p id="drivep" style="background:orange;">0km</p>
     <input id="drive" type="range" min="0" max="200000"> 
     </div>
    </div>
<div class="button">
    <input type="submit" value="Search">
    <input type="submit" value="Reset">
</div>

    </form>
</body>
</html>

<?php

mysqli_close($con);
?>