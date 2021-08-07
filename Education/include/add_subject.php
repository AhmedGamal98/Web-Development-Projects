<?php

    include "connection.php";
    
        
        $name = $_POST['sub_name'];
        $teach_id = $_POST['teacher'];

        $sql3 =$con->prepare("SELECT id  FROM subject WHERE teacher_id=?");
        $sql3->execute(array($teach_id));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();
        if($count3>0){
          header('location: ../Admin/add_subject.php?do=error');

        }
        else{
          $sql = "INSERT INTO subject (subject_name,teacher_id) VALUES ('$name','$teach_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../Admin/subject_list.php?do=success');
          }

        }




          
        
       
      ?>