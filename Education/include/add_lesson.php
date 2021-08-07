<?php

    include "connection.php";
    
        $sub_id = $_GET['id'];
        $lesson_name = $_POST['name'];
        

        $maxsize = 5242880; // 5MB
        
       $name = $_FILES['video']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["video"]["name"];

       

        
               
        $sql = "INSERT INTO lesson(name,video,subject_id) VALUES('$lesson_name','$target_file','$sub_id')";


          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../Teacher/lesson_list.php?do=success');
          }
        
        
       
      ?>