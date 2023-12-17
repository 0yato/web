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


    <link rel="stylesheet" href="css_files/admin.css/prompt.css">

     <link rel="stylesheet" href="css_files/admin.css/blocks.css">
      <link rel="stylesheet" href="css_files/admin.css/table.css">
     <link rel="stylesheet" href="css_files/admin.css/dashboard.css">
     <link rel="stylesheet" href="css_files/admin.css/body.css">
</head>
<body>
    



<div class="container">
<form action="admin-backend.php" method="get">

</form>


<div class="dashboard"> 
    <p>dashboard</p>
<i class="fa-solid fa-chart-line"></i>
</div>
<?php 
$db_server="localhost";
$db_user='root';
$db_password='';
$db_name='web';
$conn=new mysqli($db_server,$db_user,$db_password,$db_name);
 $sql1000="SELECT * FROM `user`";
 $sql2000="SELECT * FROM `car`";
 $sql3000="SELECT * FROM `type`";
$result1000=$conn->query($sql1000);
$result2000=$conn->query($sql2000);
$result3000=$conn->query($sql3000);
$conn->close();
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="blocks">
    <button name="user-btn" class="users"><i class="fa-solid fa-user"></i><div class="info"><h2 id="userNum"><?php echo $result1000->num_rows ?></h2> <h3>user</h3></div></button>
    <button name="car-btn" class="car"><i class="fa-solid fa-car"></i><div class="info"><h2 id="carNum"><?php echo $result2000->num_rows ?></h2> <h3>cars</h3></div></button>
    <button name="marka-btn" class="marka"><i class="fa-brands fa-superpowers"></i><div class="info"><h2 id="markaNum"><?php echo $result3000->num_rows ?></h2> <h3>marka</h3></div></button>

</form>




<div class="dashboard"> 
    <p>tables</p>
<i class="fa-solid fa-chart-line"></i>
</div>
<?php 
if(isset($_POST["user-btn"])||isset($_POST["search-user"])){
    
?>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" class="search">
        
        <input id="search" type="text" autocomplete="off" name="search-value-user" value="<?php if(isset($_POST["search-user"]))echo $_POST['search-value-user'];?>">
        <input id="search-by-id" type="number" autocomplete="off" placeholder="search by id..." name="search-value-id" value="<?php if(isset($_POST["search-user"]))echo $_POST['search-value-id'];?>">

        <input type="submit" name="search-user" value="SEARCH" style="flex-basis: 150px;
        cursor:pointer; margin-left:10px; background-color:transparent;color:snow;">
        </form>
<table>
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
    if(isset($_POST["search-user"])&&!empty($_POST["search-value-id"])){
     $userid=$_POST["search-value-id"];
        $sql ="SELECT * FROM `user` WHERE  `id` LIKE '%$userid%'";

    }
    else if(isset($_POST["search-user"])&&!empty($_POST["search-user"])){
        $userr=$_POST['search-value-user'];
        $iddd=intval($_POST['search-value-user']);
        $sql ="SELECT * FROM `user` WHERE  `name` LIKE '%$userr%' OR `state` LIKE '%$userr%'";
    }
    else{
        $sql="SELECT * FROM `user`";
}
    
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
        
        
        $stmt->close();
        $conn->close();
        echo "<p>".$num."</p>";
       ?>
       <form action="">
        <button class="show-btn">show</button>
        <input style="display:none;" name="" type="text" value="<?php echo $row['id'];?>"  >
       </form>



</td>
        <td><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>

<p>
<?php  echo  $row['id']; ?>
</p>

</td>

        <td class="prompt"><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
     <?php echo  $row['state'];?>

     <input style="display: none;"  type="text" value="<?php echo$row['id'];?>">
</td>
    </tr>
    <?php 
    }
    ?>
</table>

<form action="prompt.php" method="get" class="promptt" id="prompt-form" ">
<div class="prompt_window">
<i class="fa-solid fa-x " id="prompt-icon" ></i>
    <h2>Are you sure you want to make this user as admin?</h2>
    
    <button>Confirm</button>
</div>
<input type="text" value="" name="idPrompt" style="display:none;">
</form>











<?php }?>
<?php if(isset($_POST['marka-btn'])){
    ?>
    
<table>
    <tr>
        <th>marka</th>
        <th>name</th>
        <th>count</th>
      
    </tr>
<?php 
$db_server='localhost';
$db_user='root';
$db_pass='';
$db_name='web';

$conn=@ new mysqli($db_server,$db_user,$db_pass,$db_name);

$sql="SELECT * FROM `type`";
$result=$conn->query($sql);
while ($row=$result->fetch_assoc()){
?>
    <tr>
<td><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>

<?php echo '<img src="data:image/png;base64 ,'.base64_encode($row['type_image']).'">';?>
</td>
<td><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
<?php echo $row['type_description'];?>
</td>
<td><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
<?php
$db_server='localhost';
$db_user='root';
$db_pass='';
$db_name='web';
$type_id=$row["type_id"];
$conn10=@ new mysqli($db_server,$db_user,$db_pass,$db_name);
$sql10="SELECT type_id, COUNT(*) as car_count
FROM car
Where type_id=$type_id
GROUP BY type_id;";
$result10=$conn10->query($sql10);
$row10=$result10->fetch_assoc();
if($row10 !==Null){
echo  $row10['car_count'];
}
else{
    echo 0;
}
$conn10->close();
?>
</td>

    </tr>
    <?php }?>
</table>
    <?php } ?>



    <?php 
    if(isset($_POST['car-btn'])|| isset($_POST['search'])){
    $db_server='localhost';
    $db_user='root';
    $db_pass='';
    $db_name='web';
    $conn=@ new mysqli($db_server,$db_user,$db_pass,$db_name);
    if(isset($_POST['search'])){
$value=$_POST['search-value'];
$value2=intval($_POST['search-value']);
        $sql="SELECT * FROM `car` WHERE `car_name` LIKE '%$value%'  ";

    }
    else{
    $sql="SELECT * FROM `car`";
    }
    ?>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" class="search">
        
<input id="search" type="text" autocomplete="off" name="search-value" >
<input type="submit" name="search" value="SEARCH" style="flex-basis: 150px;
cursor:pointer; margin-left:10px; background-color:transparent;color:snow;">
</form>
<table>
<tr>
    <th style="width: 30%;">Name</th>
    <th style="width:10%;">Marka</th>
    <th style="width: 22.5%;">Price</th>
    <th style="width: 22.5%;">Travel</th>
    <th style="width: 15%;">fuel</th>

</tr>
<?php 

 $result=$conn->query($sql);
while($row=$result->fetch_assoc()){
?>
<tr>
    <td><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
        <?php  echo $row['car_name'] ;?></td>
    <td><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
        <?php 
        $type_id=$row['type_id'];
        $sql2="SELECT `type_image` FROM `type` WHERE `type_id` = '$type_id'";
        $result2=$conn->query($sql2);
        $answer=$result2->fetch_assoc();
        echo '<img src="data:image/png;base64 ,'.base64_encode($answer['type_image']).'">';?></td>
    <td class="price-data"><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
       <p>
    <?php  echo $row['price']." $" ;?>
    </p>
</td>
    <td class="driven-data"><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
    <p>  
    <?php  echo $row['driven']. ' KM' ;?>
    </p>
</td>
    <td><audio class="sound" style="" src="image/sounds/hover-effect.mp3" ></audio>
        <?php  echo $row['fuel'] ;?></td>
</tr>

<?php }?>
</table>




<?php 
}
?>
</div>






<script src="javascript/admin-script/hover.js"></script>
<script src="javascript/admin-script/prompt.js"></script>
<script src="javascript/admin-script/animation.js"></script>
</body>
</html>