<?php

    include "connection.php";
    
         $sub_id = $_GET['id'];
        $std_id = $_POST['std_id'];
        
        $sql3 =$con->prepare("SELECT id  FROM results WHERE std_id=?");
        $sql3->execute(array($std_id));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();
        if($count3>0){
          header('location: ../Teacher/add_result.php?do=error');

        }else{
            $std_id = $_POST['std_id'];
            $class_id = $_POST['class_id'];
            $d_1 = $_POST['d_1'];
            $d_2 = $_POST['d_2'];
            $d_3 = $_POST['d_3'];
            $d_4 = $_POST['d_4'];
            $d_5 = $_POST['d_5'];
            $d_6 = $_POST['d_6'];
            $total = $_POST['total'];


        $sql = "INSERT INTO results (first_exam,second_exam,third_exam,trem_one,term_two,final,	total,std_id,subject_id,class_id ) VALUES ('$d_1','$d_2','$d_3','$d_4','$d_5','$d_6','$total','$std_id','$sub_id','$class_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../Teacher/result_list.php?do=success');
          }
        }