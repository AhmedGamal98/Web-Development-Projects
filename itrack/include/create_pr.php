<?php

    include "connection.php";
      session_start();
        
        $pr_title = $_SESSION['pr'];
        $unit_title = $_POST['unit_title'];
        $description = $_SESSION['des'];
        $id =$_SESSION["id"];
        

       

        $sql = "INSERT INTO problems (prs_title,prs_unit,prs_description,prs_std_id) VALUES ('$pr_title','$unit_title','$description','$id')";

        $reselt=$con->exec($sql);


       

        unset($_SESSION["pr"]);
        unset($_SESSION["des"]);

        if($reselt){
            header('location: ../student/create_done.php');
        }
        
       
      ?>