<?php
    include "connection.php";
    session_start();
    $farmer_id = $_GET['id']; // get id through query string
    $fname  = $_POST['fname'];
    $lname  = $_POST['lname'];
    $phone  = $_POST['phone'];
    $Street_Name  = $_POST['street_name'];
    $email  = $_SESSION['email'];
    $form_password  = $_POST['password'];
    $session_password = $_SESSION['password'];
    $status = $_SESSION['status'];

    if($form_password == ""){
        if(!empty($_FILES['image']['tmp_name'])){
            
            

            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            $allowTypes = array('jpg','png','jpeg','gif'); 
            
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = file_get_contents($image); 

            

            $sql = $con->prepare("UPDATE farmer set fname =?, lname=?, phone =?, street_name =?, img=?, password=?  WHERE farmer_id=$farmer_id"); 
            $sql->execute(array($fname, $lname, $phone, $Street_Name, $imgContent, $session_password));
            if($sql)
            {     
                session_destroy();  
                $sql2 =$con->prepare("SELECT *  FROM farmer WHERE email=? ");
                $sql2->execute(array($email));
                $row2 =$sql2->fetch();
                session_start();
                $_SESSION['id'] = $row2['farmer_id'];
                $_SESSION['fname'] = $row2['fname'];
                $_SESSION['lname'] = $row2['lname'];
                $_SESSION['phone'] = $row2['phone'];
                $_SESSION['street_name'] = $row2['street_name'];
                $_SESSION['img'] = $row2['img'];
                $_SESSION['email'] = $row2['email'];
                $_SESSION['password'] = $row2['password'];
                $_SESSION['status'] = $row2['status'];
                $_SESSION['user_type'] = 'farmer';
                
                header('location: ../farmer/farmer_profile.php?do=farmer_edit'); // redirects to all records page
                exit;	
            }
            else
            {
                echo "Error deleting record"; // display error message if not delete
            }
        }
        else{
            
            $sql = $con->prepare("UPDATE farmer set fname =?, lname=?, phone =?, street_name =?  WHERE farmer_id=$farmer_id"); 
            $sql->execute(array($fname, $lname, $phone, $Street_Name));

            if($sql)
            {      
                session_destroy();  
                $sql2 =$con->prepare("SELECT *  FROM farmer WHERE email=?");
                $sql2->execute(array($email));
                $row2 =$sql2->fetch();
                session_start();
                
                $_SESSION['id'] = $row2['farmer_id'];
                $_SESSION['fname'] = $row2['fname'];
                $_SESSION['lname'] = $row2['lname'];
                $_SESSION['phone'] = $row2['phone'];
                $_SESSION['street_name'] = $row2['street_name'];
                $_SESSION['img'] = $row2['img'];
                $_SESSION['email'] = $row2['email'];
                $_SESSION['password'] = $row2['password'];
                $_SESSION['status'] = $row2['status'];
                $_SESSION['user_type'] = 'farmer';
                
                header('location: ../farmer/farmer_profile.php?do=farmer_edit'); // redirects to all records page
                exit;	
            }
            else
            {
                echo "Error deleting record"; // display error message if not delete
            }
        }

        
    }
    else{
        if(!empty($_FILES['image']['tmp_name'])){
            session_destroy();
            

            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            $allowTypes = array('jpg','png','jpeg','gif'); 
            
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = file_get_contents($image); 

            $sql = $con->prepare("UPDATE farmer set fname =?, lname=?, phone =?, street_name =?, ,img=? ,password=?  WHERE farmer_id=$farmer_id"); 
            $sql->execute(array($fname, $lname, $phone, $Street_Name,$imgContent,$form_password));
            if($sql)
            {     
                session_destroy();  
                $sql2 =$con->prepare("SELECT *  FROM farmer WHERE email=? ");
                $sql2->execute(array($email));
                $row2 =$sql2->fetch();
                session_start();
                $_SESSION['id'] = $row2['farmer_id'];
                $_SESSION['fname'] = $row2['fname'];
                $_SESSION['lname'] = $row2['lname'];
                $_SESSION['phone'] = $row2['phone'];
                $_SESSION['street_name'] = $row2['street_name'];
                $_SESSION['img'] = $row2['img'];
                $_SESSION['email'] = $row2['email'];
                $_SESSION['password'] = $row2['password'];
                $_SESSION['status'] = $row2['status'];
                $_SESSION['user_type'] = 'farmer';
                
                header('location: ../farmer/farmer_profile.php?do=farmer_edit'); // redirects to all records page
                exit;	
            }
            else
            {
                echo "Error deleting record"; // display error message if not delete
            }
        }
        else{
            
            $sql = $con->prepare("UPDATE farmer set fname =?, lname=?, phone =?, street_name =?, password=?  WHERE farmer_id=$farmer_id"); 
            $sql->execute(array($fname, $lname, $phone, $Street_Name,$form_password));

            if($sql)
            {      
                session_destroy();  
                $sql2 =$con->prepare("SELECT *  FROM farmer WHERE email=? ");
                $sql2->execute(array($email));
                $row2 =$sql2->fetch();
                session_start();
                
                $_SESSION['id'] = $row2['farmer_id'];
                $_SESSION['fname'] = $row2['fname'];
                $_SESSION['lname'] = $row2['lname'];
                $_SESSION['phone'] = $row2['phone'];
                $_SESSION['street_name'] = $row2['street_name'];
                $_SESSION['img'] = $row2['img'];
                $_SESSION['email'] = $row2['email'];
                $_SESSION['password'] = $row2['password'];
                $_SESSION['status'] = $row2['status'];
                $_SESSION['user_type'] = 'farmer';
                
                header('location: ../farmer/farmer_profile.php?do=farmer_edit'); // redirects to all records page
                exit;	
            }
            else
            {
                echo "Error deleting record"; // display error message if not delete
            }
        }

    }

    ?>