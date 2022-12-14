<?php

    include "connection.php";
    session_start();
        
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];
        $p_quantity = $_POST['p_quantity'];
        $p_desc = $_POST['p_desc'];
        $image = $_POST['image'];
        $framer_id = $_SESSION['id'];
        
        
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif'); 
        
        $image = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image)); 

        $sql = "INSERT INTO product (product_name,price,quantity,description,img,farmer_id) VALUES ('$p_name','$p_price','$p_quantity','$p_desc','$imgContent','$framer_id')";

        $reselt=$con->exec($sql);
        
        
        if($reselt){
        header('location: ../farmer/index.php?do=add');
        }
        
        
   
       
      ?>