<?php

    include "connection.php";
      session_start();
      $tc_id = $_GET['tc_id'];
      if($_SESSION['flag'] == 1){
        header('location: ../book.php?id='.$tc_id.'do=permission');
      }
      elseif($_SESSION['flag'] == 0){
        if(isset($_POST['1_in'])){
          $one = $_POST['1_in'];
          echo $_POST['1_in'];
        }
        else{
          $one = NULL;
        }

        if(isset($_POST['1_out'])){
          $two = $_POST['1_out'];
          echo $_POST['1_out'];
        }
        else{
          $two = NULL;
        }

        if(isset($_POST['2_in'])){
          $three = $_POST['2_in'];
        }
        else{
          $three = NULL;
        }

        if(isset($_POST['2_out'])){
          $four = $_POST['2_out'];
        }
        else{
          $four = NULL;
        }

        if(isset($_POST['3_in'])){
          $five = $_POST['3_in'];
        }
        else{
          $five = NULL;
        }

        if(isset($_POST['3_out'])){
          $six = $_POST['3_out'];
        }
        else{
          $six = NULL;
        }

        if(isset($_POST['4_in'])){
          $seven = $_POST['4_in'];
        }
        else{
          $seven = NULL;
        }

        if(isset($_POST['4_out'])){
          $eight = $_POST['4_out'];
        }
        else{
          $eight = NULL;
        }

        if(isset($_POST['5_in'])){
          $nine = $_POST['5_in'];
        }
        else{
          $nine = NULL;
        }

        if(isset($_POST['5_out'])){
          $ten = $_POST['5_out'];
        }
        else{
          $ten = NULL;
        }

        $date = date("Y-m-d");
        $tc_id = $_GET['tc_id'];
        $p_id = $_GET['p_id'];
        $std_id = $_GET['std_id'];
        $b_flag = 0;
        

         if($one > $two){
          header('location: ../book.php?tc_id='.$tc_id.'&p_id='.$p_id.'&do=fail1');
         }
         elseif($three > $four){
          header('location: ../book.php?tc_id='.$tc_id.'&p_id='.$p_id.'&do=fail2');
         }
         elseif($five > $six){
          header('location: ../book.php?tc_id='.$tc_id.'&p_id='.$p_id.'&do=fail3');
         }
         elseif($seven > $eight){
          header('location: ../book.php?tc_id='.$tc_id.'&p_id='.$p_id.'&do=fail4');
         }
         elseif($nine > $ten){
          header('location: ../book.php?tc_id='.$tc_id.'&p_id='.$p_id.'&do=fail5');
         }elseif(($one == NULL && $two == NULL) && ($three==NULL && $four==NULL) && ($five==NULL && $six==NULL) &&($seven==NULL && $eight==NULL) && ($nine==NULL && $ten==NULL)){
          header('location: ../book.php?tc_id='.$tc_id.'&p_id='.$p_id.'&do=must');
         }
         else{
          $sql = "INSERT INTO book (date,tc_id,std_id,book_flag,package_id,1_in,1_out,2_in,2_out,3_in,3_out,4_in,4_out,5_in,5_out) VALUES ('$date','$tc_id','$std_id','$b_flag','$p_id','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../payment.php');
          }
         }
        

        

          
      }
       
      ?>