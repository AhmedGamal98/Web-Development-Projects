<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $title = $_POST['pr_title'];
    
    
 

        $sql = $con->prepare("UPDATE problem_title SET 

    pr_title =?

    WHERE pr_id=$id"); 

    $sql->execute([$title]);
    header('location: ../admin/problem_title.php?do=edit');

    ?>
