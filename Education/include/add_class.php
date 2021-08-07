<?php

    include "connection.php";
    
        
        $name = $_POST['class_name'];

          $sql = "INSERT INTO class (name) VALUES ('$name')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../Admin/class_list.php?do=success');
          }
        
       
      ?>