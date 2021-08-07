<?php

    include "connection.php";
        $less_id =$_GET['les_id'];
        
        $lesson_name = $_POST['name'];
        

        $maxsize = 5242880; // 5MB
        
       $name = $_FILES['video']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["video"]["name"];

       

        
               
       $sql = $con->prepare("UPDATE lesson SET 

        name =?, video=?
    
        WHERE id=$less_id"); 
        $sql->execute([$lesson_name,$target_file]);


          

          if($sql){
            header('location: ../Teacher/lesson_list.php?do=edit');
          }
        
        
       
      ?>