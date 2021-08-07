<?php
    include "connection.php";
      //if(isset($_POST['create'])){
    session_start();
        
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $hased_pass =  sha1($pass);

        $sql =$con->prepare("SELECT *  FROM users WHERE email=? AND pass=?");
        $sql->execute(array($email,$hased_pass));
        $row =$sql->fetch();
        $count = $sql->rowCount();
        if($count>0){
            if($row['email']==$email && $row['pass']==$hased_pass){
                if($row['user_type']=='user'){
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['phone'] = $row['phone'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['pass'];
                    $_SESSION['user_type'] = $row['user_type'];
                    header('location: ../entrepreneur/home.php');
                }
                elseif($row['user_type']=='admin'){
                    $_SESSION['admin_id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['phone'] = $row['phone'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['pass'];
                    $_SESSION['user_type'] = $row['user_type'];

                    header('location: ../admin/admin_home.php');
                }
            }
        }
        else{
            header('location: ../sign_in.php?do=error');
        } 
      ?>