<?php
    include "connection.php";
      //if(isset($_POST['create'])){
        try{
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = sha1($_POST['password']);
        $user_type = 'user';

        $sql = "INSERT INTO users (username,phone,email,pass,user_type) VALUES ('$name','$phone','$email','$pass','$user_type')";
        //mysqli_query($con, $sql);
        $reselt=$con->exec($sql);
        //$statment = $con->prepare($sql);
        //$result = $statment->execute();
        if($reselt){
          header('location: ../sign_in.php?do=success');
        }
        
    }
        catch (PDOException $e) {
            header('location: ../sign_up.php?do=error');
        } catch (Exception $e) {
          header('location: ../sign_up.php?do=error');
        }   
      //}  
      ?>