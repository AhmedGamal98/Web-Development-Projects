<?php
    include "connection.php";
    session_start();

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql1 =$con->prepare("SELECT *  FROM admins WHERE email=? AND password=?");
        $sql1->execute(array($email,$pass));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();

        $sql2 =$con->prepare("SELECT *  FROM users WHERE email=?  AND password=?");
        $sql2->execute(array($email,$pass));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();

        if($count1>0){
            $_SESSION['id'] = $row1['admin_id'];
            $_SESSION['name'] = $row1['name'];
            $_SESSION['username'] = $row1['username'];
            $_SESSION['email'] =$row1['email'];
            $_SESSION['password'] = $row1['password'];
            $_SESSION['user_type'] = 'admin';
            header('location: ../admin/index.php');  
        }
        elseif($count2>0){
            if($row2['status'] == 1){
            $_SESSION['id'] = $row2['user_id'];
            $_SESSION['name'] = $row2['name'];
            $_SESSION['username'] = $row2['username'];
            $_SESSION['phone'] = $row2['phone'];
            $_SESSION['email'] = $row2['email'];
            $_SESSION['password'] = $row2['password'];
            $_SESSION['status'] = $row2['status'];
            $_SESSION['user_type'] = 'user';

            header('location: ../user/index.php');  
            }
            elseif($row2['status'] == 0){
                header('location: ../login.php?do=block#sign');
            }
        }
        else{
            header('location: ../login.php?do=error#sign');
        } 
?>