<?php
session_start();
if(isset($_POST['create'])){
$db_server="localhost";
$db_user="root";
$db_password="";
$db_name="web";
$conn=@ new mysqli($db_server,$db_user,$db_password,$db_name);

//$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$img= addslashes(file_get_contents($_FILES["carImage"]["tmp_name"]));

$kind=$_POST['carState'];
$type=$_POST['carMarka'];

$name=$_POST['carName'];
$price=$_POST['carPrice'];
$distance=$_POST['carDriven'];
$model=$_POST['carModel'];
$description=$_POST['carDesc'];
$contact=$_POST['carContact'];
$engine=$_POST['carEngine'];
$vin=$_POST['carVin'];
$color=$_POST['carColor'];
$fuel=$_POST['carFuel'];
$owner=$_SESSION['id'];


$sql="INSERT INTO `car` (`car_id`, `type_id`, `user_id`,`car_image`,`description`, `contact`, `car_name`, `price`, `kind_id`, `driven`, `date`, `fuel`, `Engine size`, `Color`, `VIN`)
 VALUES (NULL, '$type', '$owner', '$img','$description', '$contact',' $name', '$price', '$kind', '$distance', '$model', '$fuel', '$engine', '$color', '$vin')";
 try{
$conn->query($sql);
$conn->commit();
$conn->close();
$_SESSION['post-create'] ="create";
header("Location: post.php");
 }
 catch(Exception $e){
echo $e->getMessage(); 

}
}

?>