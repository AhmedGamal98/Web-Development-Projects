<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    
    
    
 

        $sql = $con->prepare("UPDATE doctor SET 

    status =1

    WHERE id=$id"); 

    $sql->execute();
    header('location: ../hospital/index.php?do=enable');

    ?>
