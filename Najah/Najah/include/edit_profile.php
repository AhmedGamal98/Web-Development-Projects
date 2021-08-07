<?php
    include "connection.php";

    session_start();
    $id = $_SESSION['user_id'];
    $name = $_SESSION['username'];
    $phone = $_POST['phone'];
    $email =$_SESSION['email'];
    $pass = $_POST['password'];
    if($pass == ""){
        $pass = $_SESSION['password'];
        $sql = $con->prepare("UPDATE users SET 

    username =?,phone=?, email=?, pass=? 

    WHERE id=$id"); 
    $sql->execute([$name,$phone,$email,$pass]);
    }
    else{
    $pass =sha1($pass);
    $sql = $con->prepare("UPDATE users SET 

    username =?,phone=?, email=?, pass=? 

    WHERE id=$id"); 
    $sql->execute([$name,$phone,$email,$pass]);
    }
    
    if($sql)
    {      
        session_destroy();
        $sql = $con->prepare("SELECT * FROM users WHERE id=$id"); 
        $sql->execute();
        $row =$sql->fetch();
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['pass'];
        $_SESSION['user_type'] = $row['user_type'];

        
        
        header("location:../entrepreneur/profile.php?do=success"); 
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

