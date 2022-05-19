<?php
    include "connection.php";
    session_start();

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql1 =$con->prepare("SELECT *  FROM admin WHERE email=? AND password=?");
        $sql1->execute(array($email,$pass));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();


        $sql2 =$con->prepare("SELECT *  FROM hospital WHERE email=?  AND password=?");
        $sql2->execute(array($email,$pass));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();

        $sql3 =$con->prepare("SELECT *  FROM doctor WHERE email=?  AND password=?");
        $sql3->execute(array($email,$pass));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();

        $sql4 =$con->prepare("SELECT *  FROM patient WHERE email=?  AND password=?");
        $sql4->execute(array($email,$pass));
        $row4 =$sql4->fetch();
        $count4 = $sql4->rowCount();


        if($count1>0){
            $_SESSION['id'] = $row1['id'];
            $_SESSION['admin_email'] =$row1['email'];
            $_SESSION['admin_password'] = $row1['password'];
            header('location: ../admin/index.php');  
        }
        elseif($count2>0){
                if($row2['status'] == 1){
                    $_SESSION['id'] = $row2['id'];
                    $_SESSION['hos_name'] = $row2['name'];
                    $_SESSION['hos_email'] =$row2['email'];
                    $_SESSION['hos_password'] = $row2['password'];
                    $_SESSION['status'] =$row2['status'];
                    $_SESSION['location'] = $row2['location'];
                    
                    header('location: ../hospital/index.php');
                }
                elseif($row2['status'] == 0){
                    header('location: ../sign_in.php?do=block_hos');
                }   
                 
             
        }
        elseif($count3>0){
            if($row3['status'] == 1){
                $_SESSION['id'] = $row3['id'];
                $_SESSION['doc_name'] = $row3['name'];
                $_SESSION['doc_email'] =$row3['email'];
                $_SESSION['doc_password'] = $row3['password'];
                $_SESSION['status'] =$row3['status'];
                $_SESSION['phone'] = $row3['phone'];
                $_SESSION['age'] = $row3['age'];
                $_SESSION['doctor_id'] = $row3['doctor_id'];
                $_SESSION['hospital_id'] = $row3['hospital_id'];
                
                header('location: ../doctor/index.php');
            }
            elseif($row3['status'] == 0){
                header('location: ../sign_in.php?do=block_doc');
            }    
        }
        elseif($count4>0){

                $_SESSION['id'] = $row4['id'];
                $_SESSION['pat_name'] = $row4['name'];
                $_SESSION['pat_email'] =$row4['email'];
                $_SESSION['pat_password'] = $row4['password'];
                $_SESSION['phone'] = $row4['phone'];
                $_SESSION['age'] = $row4['age'];
                $_SESSION['gender'] = $row4['gender'];
                $_SESSION['patient_id'] = $row4['patient_id'];
                
                header('location: ../patient/index.php');

  
        }
         
        else{
            header('location: ../sign_in.php?do=error');
        } 
      ?>