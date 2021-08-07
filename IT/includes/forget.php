<?php
    include "connection.php";


        $email = $_POST['email'];

        $sql1 =$con->prepare("SELECT *  FROM it WHERE it_email=?");
        $sql1->execute(array($email));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();


        $sql2 =$con->prepare("SELECT *  FROM employee WHERE emp_email=?");
        $sql2->execute(array($email));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();


        $sql3 =$con->prepare("SELECT *  FROM trainee WHERE tr_email=?");
        $sql3->execute(array($email));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();

        if($count1>0){

            header('location: ../edit_pass.php?id='.$row1['it_id'].'&email='.$row1['it_email'].'');  
        }
        elseif($count2>0){

            header('location: ../edit_pass.php?id='.$row2['emp_id'].'&email='.$row2['emp_email'].'');            
        }
        elseif($count3>0){

            header('location: ../edit_pass.php?id='.$row3['tr_id'].'&email='.$row3['tr_email'].'');    
        }
        else{
            header('location: ../forget_pass.php?do=error');
        } 
      ?>