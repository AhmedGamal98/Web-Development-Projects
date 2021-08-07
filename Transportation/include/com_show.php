<?php
    include "connection.php";
    session_start();

    $id = $_GET['id']; 

    $sql = $con->prepare("SELECT * FROM tc WHERE id=?"); 

    $sql->execute(array($id));
    $row =$sql->fetch();
    $_SESSION['com_name'] = $row['com_name'];
    $_SESSION['password'] = sha1($row['pass']);
    $_SESSION['email'] = $row['email'];
    $_SESSION['adress'] = $row['adress'];
    $_SESSION['commercial'] = $row['com_record'];
    $_SESSION['image'] = $row['img'];
    header('location: ../admin/show_company_profile.php');