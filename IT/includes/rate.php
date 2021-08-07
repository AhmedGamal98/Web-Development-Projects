<?php
  
  include "connection.php";
    $t_id = $_GET['id'];
    
    $rating = $_POST['rating'];
    
    $sql =$con->prepare("SELECT *  FROM rate WHERE tr_id=?");
    $sql->execute([$t_id]);
    $row =$sql->fetch();
    $count = $sql->rowCount();
    if($count>0){
        $sql1 = $con->prepare("UPDATE rate SET 

        rate =?
    
        WHERE tr_id=$t_id ");

        $sql1->execute([$rating]);

          if($sql1){
            header('location: ../it/show_tr.php?tr_id='.$t_id);
          }
    }else{
        $sql2 = $con->prepare("INSERT INTO rate (rate,tr_id) VALUES (?,?)");

        $sql2->execute([$rating,$t_id]);

          if($sql2){
            header('location: ../it/show_tr.php?tr_id='.$t_id);
          }
    }
    

    
?>