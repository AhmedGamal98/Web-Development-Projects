<?php

    include "connection.php";
      session_start();
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = sha1($_POST['password']);
        $adress = strtoupper($_POST['adress']);
        $tc_id = $_SESSION['id'];

          $sql = "INSERT INTO driver (name,adress,phone,email,password,tc_id) VALUES ('$name','$adress','$phone','$email','$pass','$tc_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../company/driver.php?do=success');
          }
        
       
      ?>