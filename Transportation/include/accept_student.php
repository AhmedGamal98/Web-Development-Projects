<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $sql = $con->prepare("UPDATE book set book_flag = 1 WHERE std_id=$id"); // delete query
    $sql->execute();
    if($sql)
    {   
        $sql2 = $con->prepare("UPDATE student set flag = 1 WHERE id=$id"); // delete query
        $sql2->execute();
        
        header("location:../company/std_request.php?do=accept"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

