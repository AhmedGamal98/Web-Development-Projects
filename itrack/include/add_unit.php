<?php

    include "connection.php";
      session_start();
        
        $unit = $_POST['unit_title'];
       
        try{
          $sql = "INSERT INTO unit (unit_title) VALUES ('$unit')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../admin/units.php?do=add');
          }
        }
        catch(PDOException $e){
          header('location: ../admin/add_unit.php?do=repeated');
        }
       
      ?>