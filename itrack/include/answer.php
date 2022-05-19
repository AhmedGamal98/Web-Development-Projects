<?php
    include "connection.php";
    session_start();
    $id = $_GET['pr_id']; // get id through query string

    $solution = $_POST['solution'];
  
    if($solution == " "){
        header('location: ../receiver/problem-inner.php?id='.$id.'&do=erorr');
    }
    elseif($solution != " "){
        $sql = $con->prepare("UPDATE problems SET 

    prs_solution =?, res_id=?,is_solved=1

    WHERE prs_id=$id"); 

    $sql->execute([$solution,$_SESSION['id']]);


    $sql1 =$con->prepare("SELECT * FROM problems where prs_id=?");
    $sql1->execute([$id]);
                                
    $row =$sql1->fetch();
    
    $s_id = $row['prs_std_id'];
    $r_id= $_SESSION['id'];
    $t = 'answer';    
    $sql2 = "INSERT INTO std_not (std_id,res_id,pr_id,type,std_is_read) VALUES ('$s_id','$r_id','$id','$t','0')";

    $reselt=$con->exec($sql2);
    header('location: ../receiver/index.php?do=success');
    }
    
    
 

        

    ?>
