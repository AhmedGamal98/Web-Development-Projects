<?php
    include "connection.php";

    session_start();
    $id = $_SESSION['id'];
    $name = $_SESSION['username'];
    $phone= $_POST['phone'];
    $adress = $_SESSION['adress'];
    $email =$_SESSION['email'];
    $pass = $_POST['password'];
    
    if($pass == ""){
        $pass = $_SESSION['password'];
        $sql = $con->prepare("UPDATE student SET 

    username =?,phone=?,adress=?, email=?, pass=? 

    WHERE id=$id"); 
    $sql->execute([$name,$phone,$adress,$email,$pass]);
    }
    else{
    $pass =sha1($pass);
    $sql = $con->prepare("UPDATE student SET 

    username =?,phone=?,adress=?, email=?, pass=? 

    WHERE id=$id"); 
    $sql->execute([$name,$phone,$adress,$email,$pass]);
    }
    
    if($sql)
    {      
        session_destroy();
        $sql = $con->prepare("SELECT * FROM student WHERE id=$id"); 
        $sql->execute();
        $row =$sql->fetch();
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['email'] =$row['email'];
        $_SESSION['password'] = $row['pass'];
        $_SESSION['adress'] =$row['adress'];
        $_SESSION['adress'] =$row['adress'];
        $_SESSION['flag'] =$row['flag'];

        
        
        header("location:../profile.php?do=success"); 
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

