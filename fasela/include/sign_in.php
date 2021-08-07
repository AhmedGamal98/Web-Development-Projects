<?php
    include "connection.php";
    session_start();

        $email = $_POST['email'];
        $pass = $_POST['password'];
        $hashed_pass = sha1($pass);

        $sql1 =$con->prepare("SELECT *  FROM admin WHERE email=? AND password=?");
        $sql1->execute(array($email,$pass));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();


        $sql2 =$con->prepare("SELECT *  FROM users WHERE email=?  AND password=?");
        $sql2->execute(array($email,$hashed_pass));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();

        if($count1>0){
            $_SESSION['admin_id'] = $row1['admin_id'];
            $_SESSION['name'] = $row1['username'];
            $_SESSION['type'] ="admin";
            $_SESSION['email'] =$row1['email'];
            $_SESSION['password'] = $row1['password'];
            
            header('location: ../admin/index.php');  
        }
        elseif($count2>0){
            
                $_SESSION['user_id'] = $row2['user_id'];
                $_SESSION['name'] = $row2['username'];
                $_SESSION['email'] =$row2['email'];
                $_SESSION['password'] = $row2['password'];
                $_SESSION['type'] = $row2['type'];
                $_SESSION['city'] = $row2['city'];
                $_SESSION['street'] = $row2['street'];
                $_SESSION['phone'] = $row2['phone'];
                $_SESSION['image'] =$row2['image'];
                
                 
            
            if($row2['type'] == 'user'){
                header('location: ../user/index.php');
            }
            elseif($row2['type'] == 'advisor'){
                header('location: ../advisor/index.php');
            }
        }   
		else{
			header('location: ../login.php?do=error');
		}
        
      ?>