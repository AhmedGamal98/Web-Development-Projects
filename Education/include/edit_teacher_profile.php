<?php
    include "connection.php";

    session_start();
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email =$_POST['email'];
    $pass = $_POST['password'];
    if($pass == ""){
        $pass = $_SESSION['password'];
        $sql = $con->prepare("UPDATE teacher SET 

    name =?,phone=?, email=?, password=? 

    WHERE teacher_id=$id"); 
    $sql->execute([$name,$phone,$email,$pass]);
    }
    else{
    $pass =sha1($pass);
    $sql = $con->prepare("UPDATE teacher SET 

    name =?,phone=?, email=?, password=? 

    WHERE teacher_id=$id"); 
    $sql->execute([$name,$phone,$email,$pass]);
    }
    
    if($sql)
    {      
        session_destroy();
        $sql = $con->prepare("SELECT * FROM teacher WHERE teacher_id=$id"); 
        $sql->execute();
        $row =$sql->fetch();
        session_start();
        $_SESSION['id'] = $row['teacher_id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];

        
        
        header("location:../Teacher/profile.php?do=success"); 
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

