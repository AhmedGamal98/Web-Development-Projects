<?php

    include "connection.php";
      
    try{
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $email =$_POST['email'];
        $password =$_POST['password'];
        

          $sql = "INSERT INTO users (name,username,phone,email,password) VALUES ('$fullname','$username','$phone','$email','$password')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../insert_user.php?do=success#sign');
          }
        
        }
        catch (PDOException $e) {
            header('location: ../insert_user.php?do=repeated#sign');
        } catch (Exception $e) {
          header('location: ../insert_user.php?do=repeated#sign');
        } 
      ?>