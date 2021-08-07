<?php
    include "connection.php";
      //if(isset($_POST['create'])){
        session_start();
        $id = $_GET['id'];
        $pass = $_POST['password'];
        $hased_pass = sha1($pass);
        $sql =$con->prepare("UPDATE users SET pass=? WHERE id=?");
        $sql->execute([$hased_pass,$id]);


        header('location: ../sign_in.php?do=rest');
                
             
      ?>