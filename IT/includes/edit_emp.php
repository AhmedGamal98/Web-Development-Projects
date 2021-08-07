<?php
    include "connection.php";

    session_start();
    $id = $_SESSION['emp_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email =$_SESSION['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_SESSION['password'];
    if($_POST['password'] == ""){

        $sql = $con->prepare("UPDATE employee SET 

    emp_name =?,emp_phone=?, emp_email=?, emp_pass=? 

    WHERE emp_id=$id"); 
    $sql->execute([$name,$phone,$email,$pass2]);
    }
    else{
        $sql = $con->prepare("UPDATE employee SET 

        emp_name =?,emp_phone=?, emp_email=?, emp_pass=? 
    
        WHERE emp_id=$id"); 
        $sql->execute([$name,$phone,$email,$pass1]);
    }
    
    if($sql)
    {      
        session_destroy();
        $sql = $con->prepare("SELECT * FROM employee WHERE emp_id=$id"); 
        $sql->execute();
        $row =$sql->fetch();
        session_start();
        $_SESSION['emp_id'] = $row['emp_id'];
        $_SESSION['emp_name'] = $row['emp_name'];
        $_SESSION['phone'] = $row['emp_phone'];
        $_SESSION['email'] =$row['emp_email'];
        $_SESSION['password'] = $row['emp_pass'];

        
        
        header("location:../employee/profile.php?do=success"); 
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>
