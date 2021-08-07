<?php

    include "connection.php";
      
        try{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = sha1($_POST['password']);
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $class_id = NULL;

        $sql = "INSERT INTO student (name,phone,gender,email,password) VALUES ('$name','$phone','$gender','$email','$pass')";

        $reselt=$con->exec($sql);

        if($reselt){
          header('location: ../index.php?do=success');
        }
        
    }
        catch (PDOException $e) {
            header('location: ../index.php?do=error');
        } catch (Exception $e) {
          header('location: ../inxdex.php?do=error');
        }   
        
     ?>