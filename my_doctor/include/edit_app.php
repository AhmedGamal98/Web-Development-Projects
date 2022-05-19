<?php
    include "connection.php";

    $id = $_GET['app_id']; // get id through query string

        
        $date= $_POST['date'];
        $time= $_POST['time'];
    
    
 

        $sql = $con->prepare("UPDATE appointment SET 

     date=?, time=?

    WHERE id=$id"); 

    $sql->execute([$date,$time]);
    header('location: ../doctor/index.php?do=edit');

    ?>
