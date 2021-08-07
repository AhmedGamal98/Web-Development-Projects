<?php
    include "connection.php";

    session_start();
    $id = $_SESSION['it_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email =$_SESSION['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_SESSION['password'];
    if($_POST['password'] == ""){

        $sql = $con->prepare("UPDATE it SET 

    it_name =?,it_phone=?, it_email=?, it_pass=? 

    WHERE it_id=$id"); 
    $sql->execute([$name,$phone,$email,$pass2]);
    }
    else{
        $sql = $con->prepare("UPDATE it SET 

        it_name =?,it_phone=?, it_email=?, it_pass=? 
    
        WHERE it_id=$id"); 
        $sql->execute([$name,$phone,$email,$pass1]);
    }
    
    if($sql)
    {      
        session_destroy();
        $sql = $con->prepare("SELECT * FROM it WHERE it_id=$id"); 
        $sql->execute();
        $row =$sql->fetch();
        session_start();
        $_SESSION['it_id'] = $row['it_id'];
        $_SESSION['it_name'] = $row['it_name'];
        $_SESSION['phone'] = $row['it_phone'];
        $_SESSION['email'] =$row['it_email'];
        $_SESSION['password'] = $row['it_pass'];

        
        
        header("location:../it/profile.php?do=success"); 
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>
