<?php
    include "connection.php";
    session_start();
    $id = $_GET['id']; // get id through query string
    $s_id= $_SESSION['id'];
    $t = 'approve';
    
    
 

    $sql = $con->prepare("UPDATE std_not SET 

    std_is_read =1

    WHERE pr_id=$id and std_id = $s_id and type=? "); 

    $sql->execute([$t]);
    header('location: ../student/track-inner.php?id='.$id.'');

    ?>
