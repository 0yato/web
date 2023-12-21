<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css_files/admin.css/table.css">
    <link rel="stylesheet" href="css_files/user-cars.css/body.css">
    <script src="https://kit.fontawesome.com/2861b4e4c1.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="https://localhost/web/web/admin.php">
<i class="fa-solid fa-arrow-up"></i></a>
    <table style="width: 100%;">
        <tr>
            <th style="width: 30%;">pic</th>
            <th style="width: 70%;">Edit Info</th>
        </tr>
        <?php 
        session_start();
        if(isset($_POST['edit-btn'])|| $_SESSION['edit']){
         $db_server="localhost";
         $db_user="root";
         $db_pass="";
         $db_name="web";
         
         $conn=@ new mysqli($db_server,$db_user,$db_pass,$db_name);
         if($_SERVER['REQUEST_METHOD'] === 'POST'){
         $user_id=$_POST["userId"];
         $_SESSION['uid']=$_POST["userId"];
         }
         else{
            $user_id= $_SESSION['uid'];
         }
         
         $sql="SELECT * FROM `car` WHERE `user_id` = $user_id";
         $result=$conn->query($sql);
         $conn->close();
        
         while ($row=$result->fetch_assoc()){
        ?>
        
        <tr>
            <td class="showImage">
<?php echo '<img src="data:image/png;base64 ,'.base64_encode($row['car_image']).'">';?>
            </td>
            <td class="elements">
                <form action="edit-backend.php"  method="post"class="eee">
               <div class="element">
                <label for="name">Name:</label>
                <input id="name" name="name" type="text" value="<?php echo $row['car_name'] ; ?>">
               </div>
               <div class="element">
                <label for="price">Price:</label>
                <input id="price" name="price" type="text" value="<?php echo $row['price'] ; ?>">
               </div>
               <div class="element">
                <label for="Model">Model:</label>
                <input id="Model" name="Model" type="text" value="<?php echo $row['date'] ; ?>">
               </div>
               <div class="element">
                <label for="Fuel">Fuel:</label>
                <input id="Fuel" name="Fuel" type="text" value="<?php echo $row['fuel'] ; ?>">
               </div>
               <div class="element">
                <label for="Color">Color:</label>
                <input id="Color" name="Color" type="text" value="<?php echo $row['Color'] ; ?>">
               </div>
               <button id="edit" name="edit">Edit</button>
               <input style="display: none;" type="text" name="carIdd" value="<?php echo$row['car_id'];?>">

               </form>
            </td>
        </tr>


<?php  }
}?>
    </table>
    <?php if(!($_SERVER['REQUEST_METHOD'] === 'POST')){?>
<div class="alert-div" id="alter">
    <div class="alert">
    <i class="fa-solid fa-check"></i>
    <p>the edit was applied</p>
    </div>
    </div>
    <?php  }?>
    <script>
        let alert = document.getElementById("alter");
        alert.onclick = function(){
            alert.style.display = 'none';
        }
    </script>
</body>
</html>