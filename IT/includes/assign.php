<?php
  
  include "connection.php";
    $t_id = $_GET['t_id'];
    
    $assign = $_POST['assign'];
    

        
    $sql = $con->prepare("UPDATE ticket SET 

        tr_id=?
    
        WHERE tkt_id=$t_id ");

        $sql->execute([$assign]);

          if($sql){
            header('location: ../it/show_tk.php?do=assign&tk_id='.$t_id);
          }

    
?>