<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $sql = $con->prepare("UPDATE tc set flag = 2 WHERE id=$id"); // delete query
    $sql->execute();
    if($sql)
    {
        
        header("location:../admin/company_requst_list.php?do=reject"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>
