<?php

    include "connection.php";
      session_start();
        $id=$_SESSION['id'];
        $doc_id= $_POST['doc_id'];
        $rate = $_POST['rating'];
        
        echo $id;
        echo $doc_id;
        echo $rate;
        
          $sql = "INSERT INTO rate (rate,doctor_id,patient_id) VALUES ('$rate','$doc_id','$id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../patient/index.php?do=rate');
          }
        
       
      ?>