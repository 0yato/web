<?php
include("nav.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>

.nav{
            background-color: #123;

}
.nav ul a{
    border: none;
    box-shadow: 0px 0px 2px 0px snow;
    background-color: #123;
    border: 3px solid snow;
}
.nav ul a:hover{
  background-color:  rgba(255, 250, 250, 0.189);
}
    #a5{
    background-color: #123;
letter-spacing: 5px;
}
#a5:hover{
    background-color:  rgba(255, 250, 250, 0.089);
}
#a5 > i{
    color: #123457;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



     <link rel="stylesheet" href="css_files/admin.css/blocks.css">
      <link rel="stylesheet" href="css_files/admin.css/table.css">
     <link rel="stylesheet" href="css_files/admin.css/dashboard.css">
     <link rel="stylesheet" href="css_files/admin.css/body.css">
</head>
<body>
    



<div class="container">
<form action="admin-backend.php" method="get"></form>


<div class="dashboard"> 
    <p>dashboard</p>
<i class="fa-solid fa-chart-line"></i>
</div>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="blocks">
    <button name="user-btn" class="users"><i class="fa-solid fa-user"></i><div class="info"><h2>321</h2> <h3>user</h3></div></button>
    <button name="car-btn" class="car"><i class="fa-solid fa-car"></i><div class="info"><h2>200</h2> <h3>cars</h3></div></button>
    <button name="marka-btn" class="marka"><i class="fa-brands fa-superpowers"></i><div class="info"><h2>40</h2> <h3>marka</h3></div></button>
</form>




<div class="dashboard"> 
    <p>tables</p>
<i class="fa-solid fa-chart-line"></i>
</div>
<?php 
if(isset($_POST["user-btn"])){
?>

<table >
    <tr>
        <th style="width: 20%;">picture</th>
        <th style="width: 30%;">name</th>
        <th>car </th>
        <th>dd</th>
    </tr>
    <?php 
    for( $i=10; $i>0;$i--){
    ?>
    <tr>
        <td> </td>
        <td>aa</td>
        <td>aa</td>
        <td>aa</td>
    </tr>
    <?php 
    }
}
    ?>
</table>
</div>








</body>
</html>