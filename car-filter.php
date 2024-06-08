<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="css_files/filters.css/range.css">
<link rel="stylesheet" href="css_files/filters.css/filter.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="fra333"></div>
    <form id="form" action="cars.php" method="get">
        <div class="search">
          <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label> 
           <input name="search-text" autocomplete="off" type="text" placeholder="Search here..."  id="search">
        </div>
        <div class="filter-icon" id="filter"><i class="fa-solid fa-filter"></i>filter</div>
<div class="filter" id="divv">
     
     <div class="opt">
        <div class="s">
        <label for="c">company</label>
        <select  id="c" value="" name="company">
        <option value="none">None</option>
     
        <?php
           $db_server="localhost";
           $db_user="root";
           $db_pass="";
           $db_name="web";
           
           $conn=@ new mysqli($db_server,$db_user,$db_pass,$db_name);
           
           $sql = "SELECT * FROM `type`";

           $result=$conn->query($sql);
           while ($row = $result->fetch_assoc()){
           ?>
         <option value="<?php echo $row['type_id'];?>"><?php echo $row['type_description'];?></option>

           <?php 
           }
           ?>
        
        </select>
        </div>







        <div class="s">
        <label for="t">States</label>
        <select name="states" id="t">
            <option value="none">None</option>
          <?php 
          $sql="SELECT * FROM `kind`";
          $result=$conn->query($sql);
          while($row=$result->fetch_assoc()){
          ?>

<option value="<?php echo $row['kind_id'];?>"><?php echo $row['kind_description'];?></option>

<?php 
          }
?>
        </select>
        </div>

        <div class="s">
    <label for="fuel-type">Fuel</label>
    <select name="fuel" id="fuel-type">
        <option value="none">none</option>
        <option value="Deziel">deziel</option>
        <option value="electric">electric</option>
        <option value="benzene">benzene</option>
    </select>
    </div>




     </div>







     <div class="range">
        <label for="price">price:</label>
        <p id="prisep" style="background:green;">0$</p>
     <input step="1000" id="price" name="pricee" value="0" type="range" min="0" max="200000">
     <p class="s2000">+200,000$  </p>
     </div>










     <div class="range">
        <label for="drive">driven:</label>
        <p id="drivep" style="background:orange;">0km</p>
     <input step="1000" id="drive" value="0" name="km" type="range" min="0" max="200000"> 
     <p class="s2000">+200000 km  </p>
     </div>


<div class="new-filter">

<div class="date">
<label for="date">model</label>
<input type="number"  id="date" name="date" class="date">

    </div>
    
    <div class="date">
        <label id="label-engine-size" for="engine-size">engine size</label>
        <input type="number" id="engine-size" name="es" class="engine-size">
        <p id="cc">Cc</p>
    </div>


</div>





     <div class="button">
    <input type="submit" value="Search" name="search">
    <div class="reset" id="reset">Reset</div>
</div>








    </div>


    </form>


      
    <script src="javascript/filter-script/filter.js"></script>
</body>
</html>

