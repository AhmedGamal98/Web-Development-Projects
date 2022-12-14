<?php

    include "connection.php";
    session_start();
        
        $comment = $_POST['comment'];
        $user_id = $_POST['user_id'];
        $post_id = $_POST['post_id'];
        
        
        $sql1 = "INSERT INTO comments (comment,user_id,post_id) VALUES ('$comment','$user_id','$post_id')";
        $reselt=$con->exec($sql1);
    
        if($reselt){
            
        header('location: ../user/post_content.php?do=add&id='.$post_id.'');
        }
            

        
        
        
   
       
      ?>