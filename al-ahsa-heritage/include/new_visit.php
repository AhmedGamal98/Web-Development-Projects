<?php

    include "connection.php";
    session_start();
    
        $date = $_POST['date'];
        $farmer_id = $_POST['farmer_id'];
        $customer_id = $_SESSION['id'];
        
        

          $sql = "INSERT INTO reservation (customer_id,farmer_id,date) VALUES ('$customer_id','$farmer_id','$date')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../customer/index.php?do=success&id='.$farmer_id.'');
          }
        
        
      ?>