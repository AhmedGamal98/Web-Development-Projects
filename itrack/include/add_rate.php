<?php

    include "connection.php";
      session_start();
        $prs_id=$_POST['prs_id'];
        $std_id=$_SESSION['id'];
        $comment = $_POST['comment'];
        echo $prs_id;
        echo $comment;
        echo $std_id;
        

          $sql = "INSERT INTO rate (comment,pr_id,std_id) VALUES ('$comment','$prs_id','$std_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../student/solutions.php?do=add');
          }
        
       
      ?>