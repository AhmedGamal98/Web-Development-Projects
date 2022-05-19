<?php

    include "connection.php";
      session_start();
        
        $hospital_name = $_POST['hospital_name'];
        $location = $_POST['location'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        try{
          $sql = "INSERT INTO hospital (name,location,email,password) VALUES ('$hospital_name','$location','$email','$password')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../admin/index.php?do=success');
          }
        }
        catch (Exception $e){
          header('location: ../admin/add_hospital.php?do=should');
        }
       
      ?>