<?php

    include "connection.php";
      
        try{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = sha1($_POST['password']);
        $phone = $_POST['phone'];
        $flag = 0;
         

          $sql = "INSERT INTO teacher (name,phone,email,password,flag) VALUES ('$name','$phone','$email','$pass','$flag')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../index.php?do=success');
          }
        
        
    }
        catch (PDOException $e) {
            header('location: ../index.php?do=error');
        } catch (Exception $e) {
          header('location: ../index.php?do=error');
        }   
       
      ?>