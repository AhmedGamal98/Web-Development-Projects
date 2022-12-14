<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $sql = $con->prepare("UPDATE users set status = 0 WHERE user_id=$id"); 
    $sql->execute();
    if($sql)
    {           
        header("location:../admin/index.php?do=block"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

