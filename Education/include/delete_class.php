<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $del = $con->prepare("delete from class where id = '$id'"); // delete query
    $del->execute();
    if($del)
    {
        
        header("location:../Admin/class_list.php?do=delete"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

