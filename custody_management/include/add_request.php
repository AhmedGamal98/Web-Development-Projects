<?php

    include "connection.php";
    session_start();
        
        $quantity = $_POST['quantity'];
        $post_id = $_POST['post_id'];
        $item_id = $_POST['item_id'];
        $from_id = $_POST['from_id'];
        $to_id = $_POST['to_id'];


            $sql =$con->prepare("SELECT * FROM posts where  post_id = ?");
            $sql->execute(array($post_id));
            $row =$sql->fetch();
    
            if($quantity <=0){
                
                header('location: ../user/create_request.php?do=less&id='.$post_id.'');
            }
            elseif($quantity > $row['quantity']){
               
                header('location: ../user/create_request.php?do=more&id='.$post_id.'');
            }
            elseif($quantity <= $row['quantity']){
                $sql1 = "INSERT INTO requests (post_id,item_id ,from_user_id ,to_user_id ,quantity) VALUES ('$post_id','$item_id','$from_id','$to_id','$quantity')";
                $reselt=$con->exec($sql1);
            
                if($reselt){
                   
                header('location: ../user/my_requests.php?do=add');
            }
            }
        
        
       

        
        
        
   
       
      ?>