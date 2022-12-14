<?php
    include "connection.php";
    session_start();

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql1 =$con->prepare("SELECT *  FROM admin WHERE email=? AND password=?");
        $sql1->execute(array($email,$pass));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();

        $sql2 =$con->prepare("SELECT *  FROM farmer WHERE email=?  AND password=?");
        $sql2->execute(array($email,$pass));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();

        $sql3 =$con->prepare("SELECT *  FROM customer WHERE email=?  AND password=?");
        $sql3->execute(array($email,$pass));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();

        if($count1>0){
            $_SESSION['id'] = $row1['admin_id'];
            $_SESSION['username'] = $row1['username'];
            $_SESSION['email'] =$row1['email'];
            $_SESSION['password'] = $row1['password'];
            $_SESSION['user_type'] = 'admin';
            header('location: ../admin/index.php');  
        }
        elseif($count2>0){
            if($row2['status'] == 1){
            $_SESSION['id'] = $row2['farmer_id'];
            $_SESSION['fname'] = $row2['fname'];
            $_SESSION['lname'] = $row2['lname'];
            $_SESSION['phone'] = $row2['phone'];
            $_SESSION['street_name'] = $row2['street_name'];
            $_SESSION['img'] = $row2['img'];
            $_SESSION['email'] = $row2['email'];
            $_SESSION['password'] = $row2['password'];
            $_SESSION['status'] = $row2['status'];
            $_SESSION['user_type'] = 'farmer';

            header('location: ../farmer/index.php');  
            }
            elseif($row2['status'] == -1){
                header('location: ../login.php?do=block');
            }
            elseif($row2['status'] == 0){
                header('location: ../login.php?do=pending');
            }
        }
        
        elseif($count3>0){
            $_SESSION['id'] = $row3['customer_id'];
            $_SESSION['fname'] = $row3['fname'];
            $_SESSION['lname'] = $row3['lname'];
            $_SESSION['email'] =$row3['email'];
            $_SESSION['phone'] =$row3['phone'];
            $_SESSION['password'] = $row3['password'];
            $_SESSION['user_type'] = 'customer';
            header('location: ../customer/index.php');  
        }

        else{
            header('location: ../login.php?do=error');
        } 
?>