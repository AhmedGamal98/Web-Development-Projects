<?php

    include "connection.php";
    
         $res_id = $_GET['id'];
        
        
        
            $std_id =$_POST['std_id'];
            $d_1 = $_POST['d_1'];
            $d_2 = $_POST['d_2'];
            $d_3 = $_POST['d_3'];
            $d_4 = $_POST['d_4'];
            $d_5 = $_POST['d_5'];
            $d_6 = $_POST['d_6'];
            $total = $_POST['total'];


            $sql = $con->prepare("UPDATE results SET 

            first_exam =?, second_exam=?, 	third_exam=?, trem_one=?, term_two=?,final=?,total=?
        
            WHERE id=$res_id"); 
            $sql->execute([$d_1 ,$d_2,$d_3,$d_4,$d_5,$d_6, $total]);

          if($sql){
            header('location: ../Teacher/result_list.php?do=edit');
          }
        