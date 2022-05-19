<?php
    include "connection.php";

    $prs_id = $_GET['prs_id']; 
    $res_id = $_GET['res_id']; 
    $std_id = $_GET['std_id']; 
    $nf_id = $_GET['nf_id']; 

    
    $sql1 = $con->prepare("UPDATE problems SET 

    is_solved =4

    WHERE prs_id=$prs_id"); 

    $sql1->execute();

    $sql1 = $con->prepare("UPDATE notification SET 

    accept =1

    WHERE nf_id=$nf_id"); 

    $sql1->execute();

    
    
 

    header('location: ../receiver/chat.php?std_id='.$std_id.'&prs_id='.$prs_id.'');

    ?>
