<?php
    include "connection.php";
    session_start();
    $customer_id = $_SESSION['id'];
    $fname  = $_POST['fname'];
    $lname  = $_POST['lname'];
    $phone  = $_POST['phone'];
    $email  = $_SESSION['email'];
    $form_password  = $_POST['password'];
    $session_password = $_SESSION['password'];

    if($form_password == ""){
        

            $sql = $con->prepare("UPDATE customer set fname =?, lname=?, phone =?,  password=?  WHERE customer_id =$customer_id"); 
            $sql->execute(array($fname, $lname, $phone,  $session_password));
            if($sql)
            {     
                session_destroy();  
                $sql2 =$con->prepare("SELECT *  FROM customer WHERE email=? ");
                $sql2->execute(array($email));
                $row2 =$sql2->fetch();
                session_start();
                $_SESSION['id'] = $row2['customer_id'];
                $_SESSION['fname'] = $row2['fname'];
                $_SESSION['lname'] = $row2['lname'];
                $_SESSION['email'] =$row2['email'];
                $_SESSION['phone'] =$row2['phone'];
                $_SESSION['password'] = $row2['password'];
                $_SESSION['user_type'] = 'customer';
                
                
                header('location: ../customer/customer_profile.php?do=customer_edit'); // redirects to all records page
                exit;	
            }
            else
            {
                echo "Error deleting record"; // display error message if not delete
            }
        }
        

        
    
    else{
       

            $sql = $con->prepare("UPDATE customer set fname =?, lname=?, phone =?,  password=?  WHERE customer_id=$customer_id"); 
            $sql->execute(array($fname, $lname, $phone, $form_password));
            if($sql)
            {     
                session_destroy();  
                $sql2 =$con->prepare("SELECT *  FROM customer WHERE email=? ");
                $sql2->execute(array($email));
                $row2 =$sql2->fetch();
                session_start();
                $_SESSION['id'] = $row2['customer_id'];
                $_SESSION['fname'] = $row2['fname'];
                $_SESSION['lname'] = $row2['lname'];
                $_SESSION['email'] =$row2['email'];
                $_SESSION['phone'] =$row2['phone'];
                $_SESSION['password'] = $row2['password'];
                $_SESSION['user_type'] = 'customer';
                
                header('location: ../customer/customer_profile.php?do=customer_edit'); // redirects to all records page
                exit;	
            }
            else
            {
                echo "Error deleting record"; // display error message if not delete
            }
        }
        

    

    ?>