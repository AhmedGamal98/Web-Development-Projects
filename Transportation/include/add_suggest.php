<?php

    include "connection.php";
      session_start();

      if($_SESSION['flag'] == 0){
        header('location: ../profile.php?do=permission1');
      }
      elseif($_SESSION['flag'] == 1){
        $std_id = $_SESSION['id'];
        $sql1 =$con->prepare("SELECT tc_id  FROM book WHERE std_id=?");
        $sql1->execute(array($std_id));
        $row1 =$sql1->fetch();
        $suggest = $_POST['suggest'];
        
        $tc_id = $row1['tc_id'];
        
        $sql = "INSERT INTO suggest (suggest,tc_id,std_id) VALUES ('$suggest','$tc_id','$std_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../profile.php?do=suggest');
          }

      }

       
      ?>