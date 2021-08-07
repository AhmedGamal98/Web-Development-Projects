<?php

    include "connection.php";
      session_start();

      if($_SESSION['flag'] == 0){
        header('location: ../profile.php?do=permission');
      }
      elseif($_SESSION['flag'] == 1){
        $std_id = $_SESSION['id'];
        $sql1 =$con->prepare("SELECT tc_id  FROM book WHERE std_id=?");
        $sql1->execute(array($std_id));
        $row1 =$sql1->fetch();
        $comment = $_POST['comment'];
        $date = date("Y-m-d");
        $rate = $_POST['rating'];
        $tc_id = $row1['tc_id'];
        
        $sql = "INSERT INTO comment (comment,date,rate,tc_id,std_id) VALUES ('$comment','$date','$rate','$tc_id','$std_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../profile.php?do=comment');
          }

      }

       
      ?>