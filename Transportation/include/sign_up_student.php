<?php

    include "connection.php";
      
        try{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = sha1($_POST['password']);
        $adress = strtoupper($_POST['adress']);
        $phone = $_POST['phone'];
        $flag = 0;

        $sql = "INSERT INTO student (username,phone,adress,email,pass,flag) VALUES ('$name','$phone','$adress','$email','$pass','$flag')";

        $reselt=$con->exec($sql);

        if($reselt){
          header('location: ../login.php?do=success');
        }
        
    }
        catch (PDOException $e) {
            header('location: ../login.php?do=error');
        } catch (Exception $e) {
          header('location: ../login.php?do=error');
        }   
        
      ?>