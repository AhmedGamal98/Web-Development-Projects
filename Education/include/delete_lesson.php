<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $del = $con->prepare("delete from lesson where id = '$id'"); // delete query
    $del->execute();
    if($del)
    {
        
        header("location:../Teacher/lesson_list.php?do=delete"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

