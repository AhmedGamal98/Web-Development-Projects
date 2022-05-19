<?php
    include "connection.php";

    $std_id = $_GET['std_id']; 
    $res_id = $_GET['res_id']; 
    $chat_id = $_GET['chat_id']; 

    $del1 = $con->prepare("delete from chat_list where chat_list_id = '$chat_id'"); // delete query
    $del1->execute();

    $del2 = $con->prepare("delete from chat where student_id = '$std_id' and receiver_id ='$res_id'"); // delete query
    $del2->execute();
    if($del1 && $del2)
    {
        
        header("location:../receiver/chat_list.php?do=delete"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

