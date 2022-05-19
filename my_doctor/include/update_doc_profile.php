<?php
    include "connection.php";
    session_start();
    
        $id= $_SESSION['id'];
        $name= $_POST['name'];
        $age= $_POST['age'];
        $phone= $_POST['phone'];
        $pass= $_POST['password'];

        if($pass == ""){
            $sql = $con->prepare("UPDATE doctor SET 

            name =?, age=?, phone=?

            WHERE id=$id"); 

            $sql->execute([$name,$age,$phone]);
            
        }else{
            $sql = $con->prepare("UPDATE doctor SET 

            name =?, age=?, phone=?, password=?

            WHERE id=$id"); 

            $sql->execute([$name,$age,$phone,$pass]);
        }



        if($sql){
            session_destroy();
            $sql1 =$con->prepare("SELECT * FROM doctor where id=?");
            $sql1->execute([$id]);
                            
            $row =$sql1->fetch();

            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['doc_name'] = $row['name'];
            $_SESSION['doc_email'] =$row['email'];
            $_SESSION['doc_password'] = $row['password'];
            $_SESSION['status'] =$row['status'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['age'] = $row['age'];
            $_SESSION['doctor_id'] = $row['doctor_id'];
            $_SESSION['hospital_id'] = $row['hospital_id'];
            header('location: ../doctor/user-profile.php?do=edit');
            }
 

        

    ?>
