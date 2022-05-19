<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    
    
    
 

        $sql = $con->prepare("UPDATE hospital SET 

    status =0

    WHERE id=$id"); 

    $sql->execute();
    header('location: ../admin/index.php?do=block');

    ?>
