<?php
    include "connection.php";

    session_start();
    $id = $_SESSION['tr_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email =$_SESSION['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_SESSION['password'];
    if($_POST['password'] == ""){

        $sql = $con->prepare("UPDATE trainee SET 

    tr_name =?,tr_phone=?, tr_email=?, tr_pass=? 

    WHERE tr_id=$id"); 
    $sql->execute([$name,$phone,$email,$pass2]);
    }
    else{
        $sql = $con->prepare("UPDATE trainee SET 

        tr_name =?,tr_phone=?, tr_email=?, tr_pass=? 
    
        WHERE tr_id=$id"); 
        $sql->execute([$name,$phone,$email,$pass1]);
    }
    
    if($sql)
    {      
        session_destroy();
        $sql = $con->prepare("SELECT * FROM trainee WHERE tr_id=$id"); 
        $sql->execute();
        $row =$sql->fetch();
        session_start();
        $_SESSION['tr_id'] = $row['tr_id'];
        $_SESSION['tr_name'] = $row['tr_name'];
        $_SESSION['phone'] = $row['tr_phone'];
        $_SESSION['email'] =$row['tr_email'];
        $_SESSION['password'] = $row['tr_pass'];

        
        
        header("location:../trainee/profile.php?do=success"); 
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>
