<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string

        $name= $_POST['name'];
        $address= $_POST['address'];
        $price= $_POST['price'];
    
    
 

        $sql = $con->prepare("UPDATE service SET 

    name =?, address=?, price=?

    WHERE id=$id"); 

    $sql->execute([$name,$address,$price]);
    header('location: ../hospital/service_list.php?do=edit');

    ?>
