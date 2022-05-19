<?php
    include "connection.php";
    session_start();

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql1 =$con->prepare("SELECT *  FROM admin WHERE admin_email=? AND admin_password=?");
        $sql1->execute(array($email,$pass));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();


        $sql2 =$con->prepare("SELECT *  FROM student WHERE std_email=?  AND std_password=?");
        $sql2->execute(array($email,$pass));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();


        $sql3 =$con->prepare("SELECT *  FROM receiver WHERE res_email=?  AND res_password=?");
        $sql3->execute(array($email,$pass));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();


        if($count1>0){
            $_SESSION['id'] = $row1['id'];
            $_SESSION['admin_name'] = $row1['admin_name'];
            $_SESSION['email'] =$row1['admin_email'];
            $_SESSION['password'] = $row1['admin_password'];
            header('location: ../admin/index.php');  
        }
        elseif($count2>0){
            
                $_SESSION['id'] = $row2['std_id'];
                $_SESSION['name'] = $row2['std_name'];
                $_SESSION['email'] =$row2['std_email'];
                $_SESSION['password'] = $row2['std_password'];
                $_SESSION['level'] =$row2['std_level'];
                $_SESSION['major'] = $row2['std_major'];
                
                header('location: ../student/index.php'); 
             
        }
        elseif($count3>0){
            $_SESSION['id'] = $row3['res_id'];
            $_SESSION['res_name'] = $row3['res_name'];
            $_SESSION['email'] = $row3['res_email'];
            $_SESSION['password'] = $row3['res_password'];
            $_SESSION['department'] = $row3['res_department'];

            header('location: ../receiver/index.php');  
        }
         
        else{
            header('location: ../login.php?do=error');
        } 
      ?>