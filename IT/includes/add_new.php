<?php
  
  include "connection.php";
    $name= $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    try{
	  
	  
        $sql2 = $con->prepare("INSERT INTO trainee (tr_name,tr_phone,tr_email,tr_pass) VALUES (?,?,?,?)");

        $sql2->execute([$name,$phone,$email,$password]);

          if($sql2){
            header('location: ../it/trainees.php?do=add');
          }
        
    }
   catch(PDOException $e){
       
    header('location: ../it/add.php?do=error');
       
   }

    

    
?>