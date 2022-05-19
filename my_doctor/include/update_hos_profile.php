<?php
    include "connection.php";
    session_start();
    
        $id= $_SESSION['id'];
        $name= $_POST['name'];
        $address= $_POST['address'];
        $pass= $_POST['password'];

        if($pass == ""){
            $sql = $con->prepare("UPDATE hospital SET 

            name =?, location=?

            WHERE id=$id"); 

            $sql->execute([$name,$address]);
            
        }else{
            $sql = $con->prepare("UPDATE hospital SET 

            name =?, location=?, password=?

            WHERE id=$id"); 

            $sql->execute([$name,$address,$pass]);
        }



        if($sql){
            session_destroy();
            $sql1 =$con->prepare("SELECT * FROM hospital where id=?");
            $sql1->execute([$id]);
                            
            $row =$sql1->fetch();

            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['hos_name'] = $row['name'];
            $_SESSION['hos_email'] =$row['email'];
            $_SESSION['hos_password'] = $row['password'];
            $_SESSION['status'] =$row['status'];
            $_SESSION['location'] = $row['location'];
            header('location: ../hospital/user-profile.php?do=edit');
            }
 

        

    ?>
