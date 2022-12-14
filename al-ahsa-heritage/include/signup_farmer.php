<?php

    include "connection.php";
      
    try{
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $Street_Name =$_POST['street_name'];
        $email =$_POST['email'];
        $password =$_POST['password'];


        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif'); 
        
        $image = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image));
        

          $sql = "INSERT INTO farmer (fname,lname,phone,street_name,img,email,password) VALUES ('$fname','$lname','$phone','$Street_Name','$imgContent','$email','$password')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../login.php?do=register-done');
          }
        
        }
        catch (PDOException $e) {
            header('location: ../sign_up_farmer.php?do=repeated');
        } catch (Exception $e) {
          header('location: ../sign_up_farmer.php?do=repeated');
        } 
      ?>