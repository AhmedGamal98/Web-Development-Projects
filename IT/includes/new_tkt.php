<?php
  session_start();
  include "connection.php";
    $type= $_POST['type'];
    $desc = $_POST['desc'];
    $rate = $_POST['rate'];

    
    
    try{
	  
	  
        $sql2 = $con->prepare("INSERT INTO ticket (tkt_type,tkt_rate,description,emp_id) VALUES (?,?,?,?)");

        $sql2->execute([$type,$rate,$desc,$_SESSION['emp_id']]);

          if($sql2){
            header('location: ../employee/tickets.php?do=add');
          }
        
    }
   catch(PDOException $e){
       
    echo "Server Error";
       
   }

    

    
?>