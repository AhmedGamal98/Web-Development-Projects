<?php

    include "connection.php";
      
    try{
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email =$_POST['email'];
        $password =$_POST['password'];

        

          $sql = "INSERT INTO customer (fname,lname,phone,email,password) VALUES ('$fname','$lname','$phone','$email','$password')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../login.php?do=register-done');
          }
        
        }
        catch (PDOException $e) {
            header('location: ../sign_up_customer.php?do=repeated');
        } catch (Exception $e) {
          header('location: ../sign_up_customer.php?do=repeated');
        } 
      ?>