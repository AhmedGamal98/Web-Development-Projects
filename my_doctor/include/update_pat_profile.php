<?php
    include "connection.php";
    session_start();
    
        $id= $_SESSION['id'];
        $name= $_POST['name'];
        $age= $_POST['age'];
        $phone= $_POST['phone'];
        $pass= $_POST['password'];

        if($pass == ""){
            $sql = $con->prepare("UPDATE patient SET 

            name =?, age=?, phone=?

            WHERE id=$id"); 

            $sql->execute([$name,$age,$phone]);
            
        }else{
            $sql = $con->prepare("UPDATE patient SET 

            name =?, age=?, phone=?, password=?

            WHERE id=$id"); 

            $sql->execute([$name,$age,$phone,$pass]);
        }



        if($sql){
            session_destroy();
            $sql1 =$con->prepare("SELECT * FROM patient where id=?");
            $sql1->execute([$id]);
                            
            $row =$sql1->fetch();

            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['pat_name'] = $row['name'];
            $_SESSION['pat_email'] =$row['email'];
            $_SESSION['pat_password'] = $row['password'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['age'] = $row['age'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['patient_id'] = $row['patient_id'];
            header('location: ../patient/user-profile.php?do=edit');
            }
 

        

    ?>
