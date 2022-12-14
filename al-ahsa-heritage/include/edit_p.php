<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_quantity = $_POST['p_quantity']; 
    $p_desc = $_POST['p_desc'];
    $framer_id = $_POST['farmer_id'];
    

    
    if(!empty($_FILES['image']['tmp_name'])){
        
        
        
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif'); 
        
        $image = $_FILES['image']['tmp_name']; 
        $imgContent = file_get_contents($image); 

        $sql = $con->prepare("UPDATE product set product_name =?, price=?, quantity =?, description =?, img=?  WHERE product_id=$id"); 
        $sql->execute(array($p_name, $p_price, $p_quantity, $p_desc,$imgContent));


        
        if($sql)
        {       
            header('location: ../farmer/index.php?do=edit'); // redirects to all records page
            exit;	
        }
        else
        {
            echo "Error deleting record"; // display error message if not delete
        }
        
    }
    else{
        $sql = $con->prepare("UPDATE product set product_name =?, price=?, quantity =?, description =?  WHERE product_id=$id"); 
        $sql->execute(array($p_name, $p_price, $p_quantity, $p_desc));

        
        if($sql)
        {      
            
             header('location: ../farmer/index.php?do=edit'); // redirects to all records page
            exit;	
        }
        else
        {
            echo "Error deleting record"; // display error message if not delete
        }
    }
   
    ?>