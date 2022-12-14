<?php

    include "connection.php";
      
   
        $email =$_POST['email'];
        $password =$_POST['password'];

        
        $sql1 =$con->prepare("SELECT *  FROM admin WHERE email=?");
        $sql1->execute(array($email));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();

        $sql2 =$con->prepare("SELECT *  FROM farmer WHERE email=? ");
        $sql2->execute(array($email));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();

        $sql3 =$con->prepare("SELECT *  FROM customer WHERE email=? ");
        $sql3->execute(array($email));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();

        if($count1>0){
            $sql = $con->prepare("UPDATE admin set password = ? WHERE email=?"); 
            $sql->execute(array($password,$email));
            if($sql)
            {           
                header("location:../forget.php?do=done"); // redirects to all records page
                exit;	
            }
            
        }
        elseif($count2>0){
            $sql = $con->prepare("UPDATE farmer set password = ? WHERE email=?"); 
            $sql->execute(array($password,$email));
            if($sql)
            {           
                header("location:../forget.php?do=done"); // redirects to all records page
                exit;	
            }
        }
        
        elseif($count3>0){
            $sql = $con->prepare("UPDATE customer set password = ? WHERE email=?"); 
            $sql->execute(array($password,$email));
            if($sql)
            {           
                header("location:../forget.php?do=done"); // redirects to all records page
                exit;	
            }
        }

        else{
            header('location: ../forget.php?do=should');
        } 
      ?>