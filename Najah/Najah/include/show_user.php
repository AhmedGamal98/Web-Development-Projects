<?php
    include "connection.php";
    session_start();

    $id = $_GET['id']; 

    $sql = $con->prepare("SELECT * FROM users WHERE id=?"); 

    $sql->execute(array($id));
    $row =$sql->fetch();
    $_SESSION['username'] = $id;
    $_SESSION['password'] = $row['pass'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phone'] = $row['phone'];
    header('location: ../admin/user_profile.php');