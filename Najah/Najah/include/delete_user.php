<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $del = $con->prepare("delete from users where id = '$id'"); // delete query
    $del->execute();
    if($del)
    {
        
        header("location:../admin/user_list.php?do=deleted"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>