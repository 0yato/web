<?php 
$db_server="localhost";
$db_user="root";
$db_pass='';
$db_name="web";
$conn=@ new mysqli($db_server,$db_user,$db_pass,$db_name);
$id =$_GET['idPrompt'];
$sql="UPDATE `user` SET `state` = 'admin' WHERE `user`.`id` =$id ";
$conn->query($sql);
$conn->close();
header("location:admin.php");
?>