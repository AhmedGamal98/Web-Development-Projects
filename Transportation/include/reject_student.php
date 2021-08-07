<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $sql = $con->prepare("UPDATE book set book_flag = 2 WHERE std_id=$id"); // delete query
    $sql->execute();
    if($sql)
    {
        
        header("location:../company/std_request.php?do=delete"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

