<?php
    include "connection.php";

    $prs_id = $_GET['prs_id']; 
    $res_id = $_GET['res_id']; 
    $std_id = $_GET['std_id']; 
    

    
    $sql1 = $con->prepare("UPDATE std_not SET 

    res_is_read =1

    WHERE std_id=? and res_id=? and pr_id=?"); 

    $sql1->execute([$std_id,$res_id,$prs_id]);

    $sql1->execute();



    header('location: ../receiver/notifications.php?do=done');

    ?>
