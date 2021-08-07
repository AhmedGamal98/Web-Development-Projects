<?php

    include "connection.php";
    $id = $_GET['id'];
    
    $response = $_POST['response'];

        
    $sql = $con->prepare("UPDATE suggest SET 

        response =?,state=?
    
        WHERE id=$id ");

        $sql->execute([$response,1]);

          if($sql){
            header('location: ../company/suggestion.php?do=added');
          }

    

       
      ?>