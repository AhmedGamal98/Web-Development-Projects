<?php
    include "connection.php";

    $prs_id = $_GET['prs_id']; // get id through query string

    
    
    
 

        $sql = $con->prepare("UPDATE problems SET 

    is_solved =5

    WHERE prs_id=$prs_id"); 

    $sql->execute();
    header('location: ../student/create.php');

    ?>
