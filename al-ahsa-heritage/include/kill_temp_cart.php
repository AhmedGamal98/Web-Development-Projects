<?php
    include "connection.php";
    session_start();
    $id = $_SESSION['temp_customer_id']; // get id through query string

    $del = $con->prepare("delete from temp_cart where customer_id = '$id'"); // delete query
    $del->execute();
    if($del)
    {
        
        header("location:../login.php?do=first"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

