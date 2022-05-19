<?php

    include "connection.php";
      session_start();
        
        $name = $_POST['name'];
        $age = $_POST['age'];
        $id = $_POST['id'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        try{

          $sql = "INSERT INTO patient (name,age,patient_id,phone,gender,email,password) VALUES ('$name','$age','$id','$phone','$gender','$email','$password')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../sign_in.php?do=reg_success');
          }
          
        }
          catch (Exception $e){
            header('location: ../sign_up.php?do=should');
          }

       
?>