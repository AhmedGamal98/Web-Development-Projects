<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string
    $title = $_POST['title'];
    $message = $_POST['message'];

    $sql = $con->prepare("UPDATE announcment set ann_title =?, ann_message=? WHERE ann_id=$id"); 
    $sql->execute(array($title, $message));
    if($sql)
    {           
        header("location: ../admin/announcements.php?do=edit"); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

