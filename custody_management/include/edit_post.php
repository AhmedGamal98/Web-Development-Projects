<?php

    include "connection.php";
    session_start();
        
        $item_id = $_POST['item_id'];
        $post_id = $_POST['post_id'];
        $quantity = $_POST['quantity'];
        $info = $_POST['info'];
        $user_id = $_SESSION['id'];
        
        $sql =$con->prepare("SELECT * FROM user_item where user_id = ? AND item_id = ?");
        $sql->execute(array($user_id,$item_id));
        $row =$sql->fetch();

        if($quantity <=0){
            
            header('location: ../user/edit_post.php?do=less&id='.$post_id.'');
        }
        elseif($quantity > $row['quantity']){
            
            header('location: ../user/edit_post.php?do=more&id='.$post_id.'');
        }
        elseif($quantity <= $row['quantity']){
            $sql22 = $con->prepare("UPDATE posts set info=?, quantity=? WHERE post_id=$post_id"); 
            $sql22->execute(array($info,$quantity));
        
            if($sql22){
                
            header('location: ../user/my_posts.php?do=edit&id='.$post_id.'');
        }
        }

        
        
        
   
       
      ?>