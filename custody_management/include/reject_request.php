<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $sql = $con->prepare("UPDATE requests set status = -1 WHERE request_id=$id"); 
    $sql->execute();
    if($sql)
    {           
        header("location:../user/requests_list.php?do=reject"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

