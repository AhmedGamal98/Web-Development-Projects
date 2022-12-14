<?php
    include "connection.php";
    session_start();
    $customer_id = $_SESSION['id']; // get id through query string
    $id =$_GET['id'];
    $del = $con->prepare("delete from cart where cart_id = '$id'"); // delete query
    $del->execute();
    if($del)
    {
        
        header("location:../cart.php"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

