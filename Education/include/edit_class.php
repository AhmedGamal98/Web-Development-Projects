<?php
    include "connection.php";
    $id = $_GET['id'];
    $name = $_POST['class_name'];
    $flag =0;
    $sql =$con->prepare("SELECT name  FROM class");
    $sql->execute();
    $rows =$sql->fetchAll($con::FETCH_ASSOC);

    foreach ($rows as $row){
        if($row['name'] == $name){
            $flag = 1;
        }
    }
    if($flag == 1){
        header('location: ../Admin/edit_class.php?do=error&&id='.$id);
    }
    else{
        $sql = $con->prepare("UPDATE class SET 

        name =?
    
        WHERE id=$id"); 
        $sql->execute([$name]);
        if($sql)
        {   
            header("location:../Admin/class_list.php?do=edit"); 
            exit;	
        }

    }

    ?>

