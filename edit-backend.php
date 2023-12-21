<?php
session_start();
if(isset($_POST['edit'])){
    $_SESSION['edit']=true;
 $db_server="localhost";

 $db_user="root";
 $db_pass="";
 $db_name="web";
 $conn=@ new mysqli($db_server,$db_user,$db_pass,$db_name);
 $car_id =$_POST['carIdd'];
$car_color =$_POST['Color'];
$car_fuel =$_POST['Fuel'];
$car_model =$_POST['Model'];
$car_price =intval($_POST['price']);
 $car_name =$_POST['name'];
 $sql="UPDATE `car` SET `car_name` = '$car_name ', `price` = '$car_price', `date` = '$car_model', `fuel` = '$car_fuel ', `Color` = '$car_color' WHERE `car`.`car_id` = $car_id ";
if($conn->query($sql)){
$conn->close();
$_SESSION['sts']=true;
header("location:user-cars.php");
}
else{
    echo "Error";
    $conn->close();
}



}
?>