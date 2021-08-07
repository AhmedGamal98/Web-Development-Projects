<?php
    include "connection.php";
      //if(isset($_POST['create'])){
        session_start();
        
        $email = $_POST['email'];

        $sql =$con->prepare("SELECT *  FROM users WHERE email=? ");
        $sql->execute(array($email));
        $row =$sql->fetch();
        $count = $sql->rowCount();
        if($count>0){
          
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];

            header('location: ../set_pass.php');
                
            
        }
        else{
            header('location: ../rest_password.php?do=success');
        } 
      ?>