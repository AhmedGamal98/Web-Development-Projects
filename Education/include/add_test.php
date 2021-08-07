<?php

    include "connection.php";
    
        $sub_id = $_GET['id'];
        $class_id = $_POST['class'];
        $name =$_POST['test_name'];

        $first =$_POST['first'];
        $d_first =$_POST['d_first'];

        $second =$_POST['second'];
        $d_second =$_POST['d_second'];

        $third =$_POST['third'];
        $d_third =$_POST['d_third'];

        $fourth =$_POST['fourth'];
        $d_fourth =$_POST['d_fourth'];

        $fifth =$_POST['fifth'];
        $d_fifth =$_POST['d_fifth'];

        $time =$_POST['time'];
        $total =$_POST['total'];

       

        
               
        $sql = "INSERT INTO exam(exam_name,first_question,first_degree,second_question,second_degree,third_question,third_degree,fourth_question,fourth_degree,fifth_question,fifth_degree,duration,total_degree,class_id,subject_id) VALUES('$name','$first','$d_first','$second','$d_second','$third','$d_third','$fourth','$d_fourth','$fifth','$d_fifth','$time','$total','$class_id','$sub_id')";


          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../Teacher/test_list.php?do=success');
          }
        
        
       
      ?>