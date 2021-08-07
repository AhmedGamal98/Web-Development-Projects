<?php
    include "connection.php";

    session_start();
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $email =$_POST['email'];
    $pass = $_POST['password'];
    if($pass == ""){
        $pass = $_SESSION['password'];
        $sql = $con->prepare("UPDATE admin SET 

    name =?, email=?, password=? 

    WHERE id=$id"); 
    $sql->execute([$name,$email,$pass]);
    }
    else{
    $pass =sha1($pass);
    $sql = $con->prepare("UPDATE admin SET 

    name =?, email=?, password=? 

    WHERE id=$id"); 
    $sql->execute([$name,$email,$pass]);
    }
    
    if($sql)
    {      
        session_destroy();
        $sql = $con->prepare("SELECT * FROM admin WHERE id=$id"); 
        $sql->execute();
        $row =$sql->fetch();
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];

        
        
        header("location:../Admin/profile.php?do=success"); 
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

