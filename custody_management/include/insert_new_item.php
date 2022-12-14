<?php

    include "connection.php";
      
        
        $item_name = $_POST['item_name'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $image = $_POST['image'];
        $user_id = $_POST['user_id'];
        
        
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif'); 
        
        $image = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image)); 

        $sql1 = "INSERT INTO items (item_name,img,type,description,quantity) VALUES ('$item_name','$imgContent','$type','$description','$quantity')";

        $reselt1=$con->exec($sql1);
        
        $sql22 =$con->prepare("SELECT * FROM items WHERE item_name=? AND type=? AND description=? AND quantity=? ");
        $sql22->execute(array($item_name,$type,$description,$quantity));
        
        $row22 =$sql22->fetch();
        $i_id= $row22['item_id'];
        $sql2 = "INSERT INTO user_item (user_id,item_id ,quantity) VALUES ('$user_id','$i_id','$quantity')";

        $reselt2=$con->exec($sql2);
        if($reselt1 and $reselt2){
        header('location: ../insert_item.php?do=success#sign');
        }
        
        
   
       
      ?>