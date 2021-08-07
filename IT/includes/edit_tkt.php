<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

    $type = $_POST['type'];
    $desc = $_POST['desc'];
    $rate = $_POST['rate'];
    
 

        $sql = $con->prepare("UPDATE ticket SET 

    tkt_type =?,tkt_rate=?, description=?

    WHERE tkt_id=$id"); 

    $sql->execute([$type,$rate,$desc]);
    

        
        
        header("location:../employee/show_tk.php?tk_id=".$id."&do=success"); 

    ?>
