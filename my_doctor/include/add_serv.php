<?php

    include "connection.php";
      session_start();
        $hos_id=$_SESSION['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $price = $_POST['price'];


        try{
          $sql = "INSERT INTO service (name,address,price,hospital_id) VALUES ('$name','$address','$price','$hos_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../hospital/service_list.php?do=success');
          }
        }
        catch (Exception $e){
          header('location: ../hospital/add_service.php?do=should');
        }
       
      ?>