<?php
  
  include "connection.php";
    $t_id = $_GET['id'];
    
    $respond = $_POST['respond'];
    $status = $_POST['status'];

        
    $sql = $con->prepare("UPDATE ticket SET 

        respond =?,tkt_status=?
    
        WHERE tkt_id=$t_id ");

        $sql->execute([$respond,$status]);

          if($sql){
            header('location: ../trainee/show_tk.php?do=res&tk_id='.$t_id);
          }

    
?>