<?php

    include "connection.php";
      $std_id= $_GET['id'];
      $date = $_GET['date'];
      $tc_id = $_GET['tc_id'];

      
        
        
        
        $sql = "INSERT INTO notify (date,std_id,tc_id) VALUES ('$date','$std_id','$tc_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../company/pay_schedule.php?do=sent');
          }


?>