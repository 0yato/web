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
    <button name="delete-btn" class="delete"><i class="fa-solid fa-trash"></i><div class="info"><h2>200</h2> <h3>deleted posts</h3></div></button>

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
        <th style="width: 25%;">name</th>
        <th style="width: 25%;">cars </th>
        <th style="width: 10%;">id</th>
        <th style="width: 10%;">type</th>
    </tr>
    <?php 
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="web";
    $conn=@ new mysqli($db_server,$db_user,$db_pass,$db_name);
    $sql="SELECT * FROM `user`";
    $result =$conn->query($sql);
    $conn->close();

    while($row = $result->fetch_assoc()){
    ?>
    <tr>
        <td><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
        <div class="p-image">
       <?php echo '<img src="data:image/png;base64 ,'.base64_encode($row['image']).'">';?>
       </div>
  
  
  
  
    </td>
             <td><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
  
  
            <?php  echo $row['name'];?>
  
  
            </td>
        <td class="col-show"><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
       <?php 
        $db_server="localhost";
        $db_user="root";
        $db_pass="";
        $db_name="web";
        $conn=@ new mysqli($db_server,$db_user,$db_pass,$db_name);
        $sql="SELECT * FROM `car` WHERE `user_id`=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("s",$row['id']);
        $stmt->execute();
        $result2 = $stmt->get_result();
        $num=$result2->num_rows;
        echo $num;
        
        $stmt->close();
        $conn->close();
       ?>
       <form action="">
        <button class="show-btn">show</button>
        <input style="display: none;" type="text" value="<?php echo $row['id'];?>"  >
       </form>



</td>
        <td><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>


<?php  echo  $row['id']; ?>


</td>
</td>
        <td><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
     <?php echo  $row['state'];?>




</td>
    </tr>
    <?php 
    }
}
    ?>
</table>
</div>






<script src="javascript/admin-script/hover.js"></script>

</body>
</html>