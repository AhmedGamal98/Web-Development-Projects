<?php
    include "connection.php";

    $id = $_GET['app_id']; // get id through query string

    
    
    
 

        $sql = $con->prepare("UPDATE appointment SET 

    status =0

    WHERE id=$id"); 

    $sql->execute();
    header('location: ../doctor/index.php?do=close');

    ?>
