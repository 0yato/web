<?php
$server="localhost";
$user="root";
$password="";
$database="web";

$con=mysqli_connect($server,$user,$password,$database);
if($con){
    
}
else{
    echo "there is an error in connection";
}
?>