<?php

    include "connection.php";
    
        
        $st_id = $_POST['st_id'];
        $class_id = $_POST['class'];

        $sql =$con->prepare("SELECT id,class_id  FROM student WHERE id=?");
        $sql->execute(array($st_id));
        $row =$sql->fetch();
        $count = $sql->rowCount();
        if($row['class_id'] == NULL){
            if($count>0){
                $sql = $con->prepare("UPDATE student SET 

                class_id =?
            
                WHERE id=$st_id"); 
                $sql->execute([$class_id]);
                if($sql)
                {   
                    header("location:../Admin/students.php?do=edit"); 
                    exit;	
            }
            }else{
                header("location:../Admin/add_student.php?do=error"); 
            }
        }elseif($row['class_id'] == $class_id){
            header("location:../Admin/add_student.php?do=error2"); 

        }
        elseif($row['class_id'] != NULL){
            header("location:../Admin/add_student.php?do=error3"); 

        }
       
      ?>