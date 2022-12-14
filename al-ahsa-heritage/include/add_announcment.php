<?php

    include "connection.php";
    session_start();
    
        $title = $_POST['title'];
        $message = $_POST['message'];
        $admin_id = $_SESSION['id'];
        
        

          $sql = "INSERT INTO announcment (ann_title,ann_message,admin_id) VALUES ('$title','$message','$admin_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../admin/announcements.php?do=success');
          }
        
        
      ?>