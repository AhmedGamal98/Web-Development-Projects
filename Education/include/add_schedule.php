<?php

    include "connection.php";
    
        
        $class_id = $_POST['class_id'];
        
        $sql3 =$con->prepare("SELECT id  FROM schedule WHERE class_id=?");
        $sql3->execute(array($class_id));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();
        if($count3>0){
          header('location: ../Admin/add_schedule.php?do=error');

        }
        else{
        $subject1 = $_POST['1_1'];
        $subject2 = $_POST['1_2'];
        $subject3 = $_POST['1_3'];
        $subject4 = $_POST['1_4'];
        $subject5 = $_POST['1_5'];
        $subject6 = $_POST['1_6'];

        $subject7 = $_POST['2_1'];
        $subject8 = $_POST['2_2'];
        $subject9 = $_POST['2_3'];
        $subject10 = $_POST['2_4'];
        $subject11 = $_POST['2_5'];
        $subject12 = $_POST['2_6'];

        $subject13 = $_POST['3_1'];
        $subject14 = $_POST['3_2'];
        $subject15 = $_POST['3_3'];
        $subject16 = $_POST['3_4'];
        $subject17 = $_POST['3_5'];
        $subject18 = $_POST['3_6'];

        $subject19 = $_POST['4_1'];
        $subject20 = $_POST['4_2'];
        $subject21 = $_POST['4_3'];
        $subject22 = $_POST['4_4'];
        $subject23 = $_POST['4_5'];
        $subject24 = $_POST['4_6'];

        $subject25 = $_POST['5_1'];
        $subject26 = $_POST['5_2'];
        $subject27 = $_POST['5_3'];
        $subject28 = $_POST['5_4'];
        $subject29 = $_POST['5_5'];
        $subject30 = $_POST['5_6'];

        $sunday = "sunday";
        $monday = "monday";
        $tuesday = "tuesday";
        $wednesday = "wednesday";
        $thursday ="thursday";

        $one ="one";
        $two ="two";
        $three = "three";
        $four = "four";
        $five ="five";
        $six = "six";

         if($subject1 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$one','$sunday','$class_id')";
            $reselt=$con->exec($sql);
         }
         elseif($subject1 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$one','$sunday','$subject1','$class_id')";
            $reselt=$con->exec($sql);
         }  

         if($subject2 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$two','$sunday','$class_id')";
          $reselt=$con->exec($sql);
         }
         elseif($subject2 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$two','$sunday','$subject2','$class_id')";
          $reselt=$con->exec($sql);
         }
          
         if($subject3 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$three','$sunday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject3 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$three','$sunday','$subject3','$class_id')";
            $reselt=$con->exec($sql);
        }
          
        if($subject4 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$four','$sunday','$class_id')";
            $reselt=$con->exec($sql);
        }
        elseif($subject4 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$four','$sunday','$subject4','$class_id')";
            $reselt=$con->exec($sql); 
        }
          
        if($subject5 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$five','$sunday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject5 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$five','$sunday','$subject5','$class_id')";
            $reselt=$con->exec($sql);
        } 
          
        if($subject6 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$six','$sunday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject6 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$six','$sunday','$subject6','$class_id')";
            $reselt=$con->exec($sql);
        }
          
        if($subject7 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$one','$monday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject7 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$one','$monday','$subject7','$class_id')";
            $reselt=$con->exec($sql);
        }
        if($subject8 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$two','$monday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject8 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$two','$monday','$subject8','$class_id')";
            $reselt=$con->exec($sql);
        }
        if($subject9 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$three','$monday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject9 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$three','$monday','$subject9','$class_id')";
            $reselt=$con->exec($sql);
        }

        if($subject10 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$four','$monday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject10 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$four','$monday','$subject10','$class_id')";
            $reselt=$con->exec($sql);
        } 

        if($subject11 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$five','$monday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject11 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$five','$monday','$subject11','$class_id')";
            $reselt=$con->exec($sql);
        }
        if($subject12 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$six','$monday','$class_id')";
            $reselt=$con->exec($sql);
        }
        elseif($subject12 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$six','$monday','$subject12','$class_id')";
          $reselt=$con->exec($sql);
        }

        if($subject13 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$one','$tuesday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject13 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$one','$tuesday','$subject13','$class_id')";
          $reselt=$con->exec($sql);
        }
        if($subject14 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$two','$tuesday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject14 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$two','$tuesday','$subject14','$class_id')";
          $reselt=$con->exec($sql);
        }

        if($subject15 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$three','$tuesday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject15 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$three','$tuesday','$subject15','$class_id')";
          $reselt=$con->exec($sql);
        }
        if($subject16 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$four','$tuesday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject16 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$four','$tuesday','$subject16','$class_id')";
          $reselt=$con->exec($sql);
        }

        if($subject17 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$five','$tuesday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject17 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$five','$tuesday','$subject17','$class_id')";
          $reselt=$con->exec($sql);
        }
        if($subject18 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$six','$tuesday','$class_id')";
            $reselt=$con->exec($sql);
        }
        elseif($subject18 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$six','$tuesday','$subject18','$class_id')";
            $reselt=$con->exec($sql);
        }

        if($subject19 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$one','$wednesday','$class_id')";
            $reselt=$con->exec($sql);
  
        }
        elseif($subject19 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$one','$wednesday','$subject19','$class_id')";
          $reselt=$con->exec($sql);

        }
        if($subject20 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$two','$wednesday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject20 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$two','$wednesday','$subject20','$class_id')";
          $reselt=$con->exec($sql);
        }

        if($subject21 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$three','$wednesday','$class_id')";
            $reselt=$con->exec($sql);
        }
        elseif($subject21 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$three','$wednesday','$subject21','$class_id')";
          $reselt=$con->exec($sql);
        }
        if($subject22 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$four','$wednesday','$class_id')";
          $reselt=$con->exec($sql);

        }
        elseif($subject22 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$four','$wednesday','$subject22','$class_id')";
          $reselt=$con->exec($sql);

        }

        if($subject23 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$five','$wednesday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject23 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$five','$wednesday','$subject23','$class_id')";
          $reselt=$con->exec($sql);
        }

        if($subject24 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$six','$wednesday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject24 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$six','$wednesday','$subject24','$class_id')";
            $reselt=$con->exec($sql);
        }
        if($subject25 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$one','$thursday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject25 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$one','$thursday','$subject25','$class_id')";
          $reselt=$con->exec($sql);
        }

        if($subject26 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$two','$thursday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject26 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$two','$thursday','$subject26','$class_id')";
          $reselt=$con->exec($sql);
        }

        if($subject27 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$three','$thursday','$class_id')";
            $reselt=$con->exec($sql);
        }
        elseif($subject27 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$three','$thursday','$subject27','$class_id')";
          $reselt=$con->exec($sql);
        }
        if($subject28 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$four','$thursday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject28 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$four','$thursday','$subject28','$class_id')";
          $reselt=$con->exec($sql);
        }

        if($subject29 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$five','$thursday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject29 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$five','$thursday','$subject29','$class_id')";
          $reselt=$con->exec($sql);
        }
        if($subject30 == ""){
            $sql = "INSERT INTO schedule (session_name,session_day,class_id) VALUES ('$six','$thursday','$class_id')";
          $reselt=$con->exec($sql);
        }
        elseif($subject30 != ""){
            $sql = "INSERT INTO schedule (session_name,session_day,subject_id,class_id) VALUES ('$six','$thursday','$subject30','$class_id')";
          $reselt=$con->exec($sql);
        }
          


          if($reselt){
            header('location: ../Admin/schedule_list.php?do=success');
          }

        }
        
       
      ?>