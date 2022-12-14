<?php

    include "connection.php";
    session_start();
        
        $id= $_GET['id'];
        
        $sql =$con->prepare("SELECT * FROM requests where request_id=?");
        $sql->execute(array($id));
        $row =$sql->fetch();
        $to_user_id = $row['to_user_id'];
        $from_user_id = $row['from_user_id'];
        $item_id = $row['item_id'];
        $quantity = $row['quantity'];


        $sql1 =$con->prepare("SELECT * FROM user_item where user_id=? and item_id = ?");
        $sql1->execute(array($row['to_user_id'],$row['item_id']));
        $row1 =$sql1->fetch();

        $new_q = $row1['quantity'] - $row['quantity'];
        $sql = $con->prepare("UPDATE user_item set quantity = ? WHERE id=?"); 
        $sql->execute(array($new_q,$row1['id']));


        $sql2 =$con->prepare("SELECT * FROM user_item where user_id=? and item_id = ?");
        $sql2->execute(array($row['from_user_id'],$row['item_id']));
        $row2 =$sql2->fetch();
        $count = $sql2->rowCount();
        if($count > 0){
            $new_q = $row2['quantity'] + $row['quantity'];
            $sql = $con->prepare("UPDATE user_item set quantity = ? WHERE id=?"); 
            $sql->execute(array($new_q,$row2['id']));
        }else{
            $sql1 = "INSERT INTO user_item (user_id,item_id,quantity) VALUES ('$from_user_id','$item_id','$quantity')";
            $reselt=$con->exec($sql1);
        }
        
        $sql3 =$con->prepare("SELECT * FROM posts where user_id=? and item_id = ?");
        $sql3->execute(array($row['to_user_id'],$row['item_id']));
        $row3 =$sql3->fetch();
        $q = $row3['quantity'] - $quantity;
        if($q <= 0){
            
            $del = $con->prepare("delete from posts where post_id = ?"); // delete query
            $del->execute(array($row3['post_id']));
        }
        else{
            $sql = $con->prepare("UPDATE posts set quantity = ? WHERE post_id=?"); 
            $sql->execute(array($q, $row3['post_id']));
    
        }
       

        $sql = $con->prepare("UPDATE requests set status = 1 WHERE request_id=$id"); 
        $sql->execute();

        
        
            if($sql){
                
            header('location: ../user/requests_list.php?do=add');
        }
        
        
    

        
        
        
   
       
      ?>