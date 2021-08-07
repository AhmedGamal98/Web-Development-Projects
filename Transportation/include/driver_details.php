<?php
    include "connection.php";
    session_start();

    $id = $_GET['id']; 

    $sql = $con->prepare("SELECT * FROM book WHERE std_id=?"); 

    $sql->execute(array($id));
    $row =$sql->fetch();
    $_SESSION['1_in'] = $row['1_in'];
    $_SESSION['1_out'] = $row['1_out'];
    $_SESSION['2_in'] = $row['2_in'];
    $_SESSION['2_out'] = $row['2_out'];
    $_SESSION['3_in'] = $row['3_in'];
    $_SESSION['3_out'] = $row['3_out'];
    $_SESSION['4_in'] = $row['4_in'];
    $_SESSION['4_out'] = $row['4_out'];
    $_SESSION['5_in'] = $row['5_in'];
    $_SESSION['5_out'] = $row['5_out'];
    
    header('location: ../driver/schedule_details.php');