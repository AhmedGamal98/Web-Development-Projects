<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $del = $con->prepare("delete from unit where unit_id = '$id'"); // delete query
    $del->execute();
    if($del)
    {
        
        header("location:../admin/units.php?do=delete"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

