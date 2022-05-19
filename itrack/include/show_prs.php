<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    
    
    
 

        $sql = $con->prepare("UPDATE problems SET 

    prs_show =0

    WHERE prs_id=$id"); 

    $sql->execute();
    header('location: ../receiver/index.php?do=hide');

    ?>
