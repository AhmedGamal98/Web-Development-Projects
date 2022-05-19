<?php

    include "connection.php";
      session_start();
        
        $name = $_POST['emp_name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $dep = $_POST['department'];
        try{
          $sql = "INSERT INTO receiver (res_name,res_email,res_password,res_department) VALUES ('$name','$email','$pass','$dep')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../admin/employees.php?do=success');
          }
        }
        catch(PDOException $e){
          header('location: ../admin/add_employee.php?do=repeated');
        }
          
        
       
      ?>