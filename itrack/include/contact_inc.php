<?php
    include "connection.php";
    session_start();

        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (user_name,user_email,message) VALUES ('$name','$email','$message')";

          $reselt=$con->exec($sql);

          if($reselt){
            if(isset($_SESSION['res_name'])){
              header('location: ../receiver/contact.php?do=success');
            }
            elseif(isset($_SESSION['admin_name'])){
              header('location: ../admin/contact.php?do=success');
            }
            elseif(isset($_SESSION['name'])){
              header('location: ../student/contact.php?do=success');
            }
            else{
              header('location: ../contact.php?do=success');
            }
            
          }
      ?>