<?php

    include "connection.php";
    
        $id = $_GET['id'];
        $name = $_POST['sub_name'];
        $teach_id = $_POST['teacher'];
        $sql = $con->prepare("UPDATE subject SET 

        subject_name =?, teacher_id=?
    
        WHERE id=$id"); 
        $sql->execute([$name,$teach_id]);
        if($sql)
        {   
            header("location:../Admin/subject_list.php?do=edit"); 
            exit;	
        }


?>