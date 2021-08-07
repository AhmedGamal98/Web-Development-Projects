<?php
    include "connection.php";

    session_start();
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $adress = $_SESSION['adress'];
    $phone = $_POST['phone'];
    $email =$_SESSION['email'];
    $pass = $_POST['password'];
    if($pass == ""){
        $pass = $_SESSION['password'];
        $sql = $con->prepare("UPDATE driver SET 

    name =?,adress=?,phone=?, email=?, password=? 

    WHERE id=$id"); 
    $sql->execute([$name,$adress,$phone,$email,$pass]);
    }
    else{
    $pass =sha1($pass);
    $sql = $con->prepare("UPDATE driver SET 

    name =?,adress=?,phone=?, email=?, password=? 

    WHERE id=$id"); 
    $sql->execute([$name,$adress,$phone,$email,$pass]);
    }
    
    if($sql)
    {      
        session_destroy();
        $sql = $con->prepare("SELECT * FROM driver WHERE id=$id"); 
        $sql->execute();
        $row =$sql->fetch();
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['adress'] = $row['adress'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['tc_id'] = $row['tc_id'];

        
        
        header("location:../driver/driver_profile.php?do=success"); 
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

