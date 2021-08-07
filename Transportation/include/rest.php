<?php
    include "connection.php";
        
        $email = $_POST['email'];

        $sql1 =$con->prepare("SELECT *  FROM student WHERE email=? ");
        $sql1->execute(array($email));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();


        $sql2 =$con->prepare("SELECT *  FROM tc WHERE email=? ");
        $sql2->execute(array($email));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();
        if($count1>0){
            header('location: ../login.php?do=rest');  
        }
        elseif($count2>0){
            header('location: ../login.php?do=rest');  
        }
        else{
            header('location: ../reset_pass.php?do=error');
        } 
      ?>