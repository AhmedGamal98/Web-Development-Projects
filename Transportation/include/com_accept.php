<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $sql = $con->prepare("UPDATE tc set flag = 1 WHERE id=$id"); // delete query
    $sql->execute();
    if($sql)
    {
        
        header("location:../admin/company_requst_list.php?do=accept"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

