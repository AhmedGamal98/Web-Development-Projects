<?php

    include "connection.php";
      
        $std_id= $_GET['std_id'];
        $res_id= $_GET['res_id'];
        $prs_id= $_GET['prs_id'];

        

          $sql = "INSERT INTO notification (student_id,reciever_id,pr_id) VALUES ('$std_id','$res_id','$prs_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../student/solutions.php?do=request');
          }
        
       
      ?>