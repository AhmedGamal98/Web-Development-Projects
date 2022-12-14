<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string
    $status = $_POST['status']; // get id through query string

    if($status == "In Progress"){
        $sql = $con->prepare("UPDATE bills set status = 0 WHERE bill_id=$id"); 
        $sql->execute();
        if($sql)
        {           
            header("location:../farmer/requests.php?do=edit"); // redirects to all records page
            exit;	
        }
        else
        {
            echo "Error deleting record"; // display error message if not delete
        }
    }
    elseif($status == "Shipped"){
        $sql = $con->prepare("UPDATE bills set status = -1 WHERE bill_id=$id"); 
        $sql->execute();
        if($sql)
        {           
            header("location:../farmer/requests.php?do=edit"); // redirects to all records page
            exit;	
        }
        else
        {
            echo "Error deleting record"; // display error message if not delete
        }
    }
    elseif($status == "Delivered"){
        $sql = $con->prepare("UPDATE bills set status = 1 WHERE bill_id=$id"); 
        $sql->execute();
        if($sql)
        {           
            header("location:../farmer/requests.php?do=edit"); // redirects to all records page
            exit;	
        }
        else
        {
            echo "Error deleting record"; // display error message if not delete
        }
    }
    
    ?>

