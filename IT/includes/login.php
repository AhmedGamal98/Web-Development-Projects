<?php
    include "connection.php";
    session_start();

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql1 =$con->prepare("SELECT *  FROM it WHERE it_email=? AND it_pass=?");
        $sql1->execute(array($email,$pass));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();


        $sql2 =$con->prepare("SELECT *  FROM employee WHERE emp_email=?  AND emp_pass=?");
        $sql2->execute(array($email,$pass));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();


        $sql3 =$con->prepare("SELECT *  FROM trainee WHERE tr_email=?  AND tr_pass=?");
        $sql3->execute(array($email,$pass));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();

        if($count1>0){
            $_SESSION['it_id'] = $row1['it_id'];
            $_SESSION['it_name'] = $row1['it_name'];
            $_SESSION['phone'] = $row1['it_phone'];
            $_SESSION['email'] =$row1['it_email'];
            $_SESSION['password'] = $row1['it_pass'];
            header('location: ../it/trainees.php');  
        }
        elseif($count2>0){
            $_SESSION['emp_id'] = $row2['emp_id'];
            $_SESSION['emp_name'] = $row2['emp_name'];
            $_SESSION['phone'] = $row2['emp_phone'];
            $_SESSION['email'] =$row2['emp_email'];
            $_SESSION['password'] = $row12['emp_pass'];
            header('location: ../employee/tickets.php');           
        }
        elseif($count3>0){
            $_SESSION['tr_id'] = $row3['tr_id'];
            $_SESSION['tr_name'] = $row3['tr_name'];
            $_SESSION['phone'] = $row3['tr_phone'];
            $_SESSION['email'] =$row3['tr_email'];
            $_SESSION['password'] = $row3['tr_pass'];
            header('location: ../trainee/tickets.php');   
        }
        else{
            header('location: ../sign_in.php?do=error');
        } 
      ?>