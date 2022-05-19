<?php

    include "connection.php";
      session_start();
        
        $title = $_POST['pr_title'];
       
        try{

          $sql = "INSERT INTO problem_title (pr_title) VALUES ('$title')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../admin/problem_title.php?do=add');
          }
        }
        catch(PDOException $e){
          header('location: ../admin/add_problem.php?do=repeated');
        }
       
      ?>