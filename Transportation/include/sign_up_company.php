<?php

    include "connection.php";
      
        //try{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $commercial = $_POST['commercial'];
        $pass = sha1($_POST['password']);
        $adress = strtoupper($_POST['adress']);
        
        $flag = 0;
        
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif'); 
        
        $image = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image)); 

        $sql = "INSERT INTO tc (com_name,adress,com_record,email,pass,img,flag) VALUES ('$name','$adress','$commercial','$email','$pass','$imgContent','$flag')";

        $reselt=$con->exec($sql);

        if($reselt){
            header('location: ../login.php?do=success');
        }
        
        
    //}
        /*catch (PDOException $e) {
            header('location: ../login.php?do=error');
        } catch (Exception $e) {
          header('location: ../login.php?do=error');
        }   
       */
      ?>