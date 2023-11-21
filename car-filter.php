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
    <form id="form" action="cars.php" method="get">
        <div class="search">
          <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>  <input name="sss" autocomplete="off" type="text"  id="search">
        </div>
        <div class="filter-icon" id="filter"><i class="fa-solid fa-filter"></i>filter</div>
<div class="filter" id="divv">
     
     <div class="opt">
        <div class="s">
        <label for="c">company</label>
        <select name="" id="c">
        <option value="none">None</option>
     
       
           <option>here</option>

           
        
        </select>
        </div>







        <div class="s">
        <label for="t">States</label>
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
     <input step="1000" id="price" value="0" type="range" min="0" max="200000">
     <p class="s2000">+200,000$  </p>
     </div>










     <div class="range">
        <label for="drive">driven:</label>
        <p id="drivep" style="background:orange;">0km</p>
     <input step="1000" id="drive" value="0" type="range" min="0" max="200000"> 
     <p class="s2000">+200000 km  </p>
     </div>








     <div class="button">
    <input type="submit" value="Search" name="d">
    <div class="reset" id="reset">Reset</div>
</div>








    </div>


    </form>


      
    <script src="javascript/filter-script/filter.js"></script>
</body>
</html>

