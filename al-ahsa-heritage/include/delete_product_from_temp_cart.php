<?php
    include "connection.php";
    session_start();
    $customer_id = $_SESSION['temp_customer_id']; // get id through query string
    $id =$_GET['id'];
    $del = $con->prepare("delete from temp_cart where cart_id = '$id'"); // delete query
    $del->execute();
    if($del)
    {
        
        header("location:../temp_cart.php"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

