<?php

    include "connection.php";
      session_start();
        $id = $_SESSION["id"];
        $hospital = $_POST['hospital'];
        $doctor = $_POST['doctor'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        try{
          $sql = "INSERT INTO appointment (date,time,patient_id,doctor_id) VALUES ('$date','$time','$id','$doctor')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../patient/index.php?do=success');
          }
        }
        catch (Exception $e){
          header('location: ../patient/add_appointment.php?do=should');
        }
       
      ?>