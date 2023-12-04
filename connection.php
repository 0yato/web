<?php
$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="web";
$conn="";
try {
$conn=mysqli_connect($db_server
                           ,$db_user,
                           $db_pass,
                           $db_name);
                           if($conn){
                            
                           }
                           else{
                           echo "not connected";
                           }    }
                           catch(Exception $e){
                            echo $e->getMessage();
                           }   

?>