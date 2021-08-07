<?php

    include "connection.php";
      session_start();
        
        $name = $_POST['name'];
        $price = $_POST['price'];
        $adress = strtoupper($_POST['adress']);
        $duration =$_POST['duration'];
        $tc_id = $_SESSION['id'];

          $sql = "INSERT INTO package (name,price,adress,duration,tc_id) VALUES ('$name','$price','$adress','$duration','$tc_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../company/package.php?do=success');
          }
        
       
      ?>