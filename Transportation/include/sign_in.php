<?php
    include "connection.php";
    session_start();

        $email = $_POST['email'];
        $pass = $_POST['password'];
        $hashed_pass = sha1($pass);

        $sql1 =$con->prepare("SELECT *  FROM student WHERE email=? AND pass=?");
        $sql1->execute(array($email,$hashed_pass));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();


        $sql2 =$con->prepare("SELECT *  FROM tc WHERE email=?  AND pass=?");
        $sql2->execute(array($email,$hashed_pass));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();


        $sql3 =$con->prepare("SELECT *  FROM administrator WHERE email=?  AND pass=?");
        $sql3->execute(array($email,$hashed_pass));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();

        $sql4 =$con->prepare("SELECT *  FROM driver WHERE email=?  AND password=?");
        $sql4->execute(array($email,$hashed_pass));
        $row4 =$sql4->fetch();
        $count4 = $sql4->rowCount();

        if($count1>0){
            $_SESSION['id'] = $row1['id'];
            $_SESSION['username'] = $row1['username'];
            $_SESSION['phone'] = $row1['phone'];
            $_SESSION['email'] =$row1['email'];
            $_SESSION['password'] = $row1['pass'];
            $_SESSION['adress'] =$row1['adress'];
            $_SESSION['adress'] =$row1['adress'];
            $_SESSION['flag'] =$row1['flag'];
            header('location: ../index.php');  
        }
        elseif($count2>0){
            if($row2['flag'] == 1){
                $_SESSION['id'] = $row2['id'];
                $_SESSION['name'] = $row2['com_name'];
                $_SESSION['adress'] = $row2['adress'];
                $_SESSION['commercial'] = $row2['com_record'];
                $_SESSION['email'] =$row2['email'];
                $_SESSION['password'] = $row2['pass'];
                $_SESSION['image'] =$row2['img'];
                
                header('location: ../company/driver.php'); 
            }
            elseif($row2['flag'] == 0){
                header('location: ../login.php?do=error3');
            }
            elseif($row2['flag'] == 2){
                header('location: ../login.php?do=error4');
            }
             
        }
        elseif($count3>0){
            $_SESSION['id'] = $row3['id'];
            $_SESSION['name'] = $row3['name'];
            $_SESSION['email'] = $row3['email'];
            $_SESSION['password'] = $row3['pass'];

            header('location: ../admin/company_list.php');  
        }elseif($count4>0){
            $_SESSION['id'] = $row4['id'];
            $_SESSION['name'] = $row4['name'];
            $_SESSION['adress'] = $row4['adress'];
            $_SESSION['phone'] = $row4['phone'];
            $_SESSION['email'] = $row4['email'];
            $_SESSION['password'] = $row4['password'];
            $_SESSION['tc_id'] = $row4['tc_id'];

            header('location: ../driver/driver_profile.php');  
        }
        else{
            header('location: ../login.php?do=error2');
        } 
      ?>