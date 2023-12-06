<?php
session_start();
 $db_server="localhost";
 $db_user="root";
 $db_password="";
 $db_name="web";

if(isset($_POST['create-btn'])){
  
    if(!empty($_POST['username'])&&!empty($_POST['password'])  ){
        $_SESSION['state']='true';
     $username=$_POST['username'];
     $password=sha1($_POST['password']);
     $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $id=$_SESSION['num_of_users'];
    $state="user";
    
   $db=@new mysqli($db_server,$db_user,$db_password,$db_name);
   try{

   $sql="INSERT INTO `user` (`id`, `name`, `password`, `image`,`state`) VALUES ('$id', '$username', '$password', '$image','$state')";

   $db->query($sql);
   $db->commit();
   $db->close();
   $_SESSION['signup-state']=true;
   header('location:signup.php');
   }
   catch(Exception $e){
    $_SESSION['signup-state']=false;
    header('location:signup.php');
}

    }
    else{
      

    }
}

?>