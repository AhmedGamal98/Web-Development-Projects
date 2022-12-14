<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string
    $post_id = $_GET['post_id']; // get id through query string

    $del = $con->prepare("delete from comments where comment_id = '$id'"); // delete query
    $del->execute();
    if($del)
    {
        
        header("location:../user/post_content.php?do=delete_c&id=".$post_id.""); // redirects to all records page
        exit;	
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
    ?>

