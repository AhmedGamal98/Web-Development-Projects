<?php
    include "connection.php";
    session_start();

        $email = $_POST['email'];


        $sql1 =$con->prepare("SELECT *  FROM admin WHERE email=? ");
        $sql1->execute(array($email));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();


        $sql2 =$con->prepare("SELECT *  FROM hospital WHERE email=? ");
        $sql2->execute(array($email));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();

        $sql3 =$con->prepare("SELECT *  FROM doctor WHERE email=?");
        $sql3->execute(array($email));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();

        $sql4 =$con->prepare("SELECT *  FROM patient WHERE email=?  ");
        $sql4->execute(array($email));
        $row4 =$sql4->fetch();
        $count4 = $sql4->rowCount();


        if($count1>0){

            header('location: ../forget.php?do=success');  
        }
        elseif($count2>0){
                if($row2['status'] == 1){
                    
                    header('location: ../forget.php?do=success');
                }
                elseif($row2['status'] == 0){
                    header('location: ../forget.php?do=block_hos');
                }   
                 
             
        }
        elseif($count3>0){
            if($row3['status'] == 1){
                header('location: ../forget.php?do=success');  
            }
            elseif($row3['status'] == 0){
                header('location: ../forget.php?do=block_doc');
            }    
        }
        elseif($count4>0){

            header('location: ../forget.php?do=success');  

  
        }
         
        else{
            header('location: ../forget.php?do=error');
        } 
      ?>