<?php
    include "connection.php";
    

        $email = $_POST['email'];
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../index.php#contact');
          }
      ?>