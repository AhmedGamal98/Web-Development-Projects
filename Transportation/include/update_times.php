<?php

    include "connection.php";
      session_start();
      if($_SESSION['flag'] == 0){
        header('location: ../profile.php?do=permission3');
      }
      elseif($_SESSION['flag'] == 1){
        $one = $_POST['1_in'];
        $two = $_POST['1_out'];

        $three = $_POST['2_in'];
        $four = $_POST['2_out'];

        $five = $_POST['3_in'];
        $six = $_POST['3_out'];

        $seven = $_POST['4_in'];
        $eight = $_POST['4_out'];

        $nine = $_POST['5_in'];
        $ten = $_POST['5_out'];
       

        $std_id = $_SESSION['id'];
        

        $sql = $con->prepare("UPDATE book SET 

        1_in =?,1_out=?,2_in=?, 2_out=?,3_in =?,3_out=?,4_in=?, 4_out=?,5_in =?,5_out=?
    
        WHERE std_id=$std_id"); 
        $sql->execute([$one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten]);

         

          if($sql){
            header('location: ../profile.php?do=update');
          }
        
        }
      ?>