<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $sql = $con->prepare("UPDATE teacher set flag = 1 WHERE teacher_id=$id"); // delete query
    $sql->execute();
    if($sql)
    {
        
        header("location:../admin/teacher_request_list.php?do=accept"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>
