<?php

    include "connection.php";
      session_start();
        
        $cardnum = $_POST['cardnum'];
        $cardexp = $_POST['cardexp'];
        $cardcvc = $_POST['cardcvc'];
        $cardname = $_POST['cardname'];
        $std_id = $_SESSION['id'];
        
        $sql = "INSERT INTO payment (card_num,card_exp,cvc,name,std_id) VALUES ('$cardnum','$cardexp','$cardcvc','$cardname','$std_id')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../profile.php?do=pay');
          }


?>