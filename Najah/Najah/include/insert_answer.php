<?php
    include "connection.php";
      session_start();
      $id = $_SESSION['user_id'];
      $one = $_POST['one'];
      $two = $_POST['two'];
      $three = $_POST['three'];
      $four = $_POST['four'];
      $five = $_POST['five'];
      $six = $_POST['six'];
      $seven = $_POST['seven'];
      $eight= $_POST['eight'];
      $nine = $_POST['nine'];
      $ten = $_POST['ten'];
      
      if($one == ''){
        header('location: ../entrepreneur/prediction.php?do=error');
      }
      elseif($two == ''){
        header('location: ../entrepreneur/prediction.php?do=error');
      }
      elseif($three == ''){
        header('location: ../entrepreneur/prediction.php?do=error');
      }
      elseif($four == ''){
        header('location: ../entrepreneur/prediction.php?do=error');
      }
      elseif($five == ''){
        header('location: ../entrepreneur/prediction.php?do=error');
      }
      elseif($six == ''){
        header('location: ../entrepreneur/prediction.php?do=error');
      }
      elseif($seven == ''){
        header('location: ../entrepreneur/prediction.php?do=error');
      }
      elseif($eight == ''){
        header('location: ../entrepreneur/prediction.php?do=error');
      }
      elseif($nine == ''){
        header('location: ../entrepreneur/prediction.php?do=error');
      }
      elseif($ten == ''){
        header('location: ../entrepreneur/prediction.php?do=error');
      }
      else{
        $sql = "INSERT INTO answer (one,two,three,four,five,six,seven,eight,nine,ten,user_id) VALUES ('$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten','$id')";
    
        $reselt=$con->exec($sql);
       
        if($reselt){
          header('location: ../entrepreneur/result.php');
        }
      }
        

        
        
   
        
      //}  
      ?>