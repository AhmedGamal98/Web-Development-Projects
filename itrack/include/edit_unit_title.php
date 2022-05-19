<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $title = $_POST['unit_title'];
    
    
 

        $sql = $con->prepare("UPDATE unit SET 

    unit_title =?

    WHERE unit_id=$id"); 

    $sql->execute([$title]);
    header('location: ../admin/units.php?do=edit');

    ?>
