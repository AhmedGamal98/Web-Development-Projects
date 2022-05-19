<?php
    include "connection.php";

    $id = $_GET['pr_id']; // get id through query string

    $department = $_POST['department'];
   

 
    $sql = $con->prepare("UPDATE problems SET 

    prs_unit =?, status = 0

    WHERE prs_id=$id"); 

    $sql->execute([$department]);
    header('location: ../receiver/index.php?do=change');
    
    
    
 

        

    ?>
