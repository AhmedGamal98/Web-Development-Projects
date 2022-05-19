<?php

    include "connection.php";
      session_start();
        
        $title = $_POST['title'];
        $des = $_POST['des'];
        

          $sql = "INSERT INTO announcement (title,des) VALUES ('$title','$des')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../admin/announce.php?do=success');
          }
        
       
      ?>