<?php

    include "connection.php";
    session_start();
        
        $item_id = $_POST['item_id'];
        $quantity = $_POST['quantity'];
        $info = $_POST['info'];
        $user_id = $_SESSION['id'];
        if($item_id > 0){
            $sql =$con->prepare("SELECT * FROM user_item where user_id = ? AND item_id = ?");
            $sql->execute(array($user_id,$item_id));
            $row =$sql->fetch();
    
            if($quantity <=0){
                
                header('location: ../user/create_post.php?do=less');
            }
            elseif($quantity > $row['quantity']){
               
                header('location: ../user/create_post.php?do=more');
            }
            elseif($quantity <= $row['quantity']){
                $sql1 = "INSERT INTO posts (user_id,item_id,info,quantity) VALUES ('$user_id','$item_id','$info','$quantity')";
                $reselt=$con->exec($sql1);
            
                if($reselt){
                   
                header('location: ../user/my_posts.php?do=add');
            }
            }
        }
        elseif($item_id == 0){
            header('location: ../user/create_post.php?do=should');
        }
       

        
        
        
   
       
      ?>