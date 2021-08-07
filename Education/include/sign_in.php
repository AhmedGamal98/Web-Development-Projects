<?php
    include "connection.php";
    session_start();

        $email = $_POST['email'];
        $pass = $_POST['password'];
        $hashed_pass = sha1($pass);

        $sql1 =$con->prepare("SELECT *  FROM student WHERE email=? AND password=?");
        $sql1->execute(array($email,$hashed_pass));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();


        $sql2 =$con->prepare("SELECT *  FROM teacher WHERE email=?  AND password=?");
        $sql2->execute(array($email,$hashed_pass));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();


        $sql3 =$con->prepare("SELECT *  FROM admin WHERE email=?  AND password=?");
        $sql3->execute(array($email,$hashed_pass));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();

        if($count1>0){
                $_SESSION['id'] = $row1['id'];
                $_SESSION['name'] = $row1['name'];
                $_SESSION['phone'] = $row1['phone'];
                $_SESSION['gender'] = $row1['gender'];
                $_SESSION['email'] =$row1['email'];
                $_SESSION['password'] = $row1['password'];
                $_SESSION['class_id'] = $row1['class_id'];
            header('location: ../index.php');  
        }
        elseif($count2>0){
            if($row2['flag'] == 1){
                $_SESSION['id'] = $row2['teacher_id'];
                $_SESSION['name'] = $row2['name'];
                $_SESSION['phone'] = $row2['phone'];
                $_SESSION['email'] =$row2['email'];
                $_SESSION['password'] = $row2['password'];
                
                
                
                header('location: ../Teacher/profile.php'); 
            }
            elseif($row2['flag'] == 0){
                header('location: ../index.php?do=error3');
            }
            elseif($row2['flag'] == 2){
                header('location: ../index.php?do=error4');
            }
             
        }
        elseif($count3>0){
            $_SESSION['id'] = $row3['id'];
            $_SESSION['name'] = $row3['name'];
            $_SESSION['email'] = $row3['email'];
            $_SESSION['password'] = $row3['password'];

            header('location: ../Admin/profile.php');  
        }
        else{
            header('location: ../index.php?do=error2');
        } 
      ?>