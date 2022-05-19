<?php

    include "connection.php";
      session_start();
        $hos_id=$_SESSION['id'];
        $doc_name = $_POST['doc_name'];
        $age = $_POST['age'];
        $id = $_POST['id'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        try{
          $sql = "INSERT INTO doctor (name,age,doctor_id,phone,email,password,hospital_id) VALUES ('$doc_name','$age','$id','$phone','$email','$password','$hos_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../hospital/index.php?do=success');
          }
        }
        catch (Exception $e){
          header('location: ../hospital/add_doctor.php?do=should');
        }
       
      ?>