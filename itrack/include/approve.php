<?php
    include "connection.php";

    

    $prs_id = $_POST['prs_id'];
    
    
 

        $sql = $con->prepare("UPDATE problems SET 

    is_solved =2, status=2

    WHERE prs_id=$prs_id");


    $sql->execute();

    $sql1 =$con->prepare("SELECT * FROM problems where prs_id=?");
    $sql1->execute([$prs_id]);
                                
    $row =$sql1->fetch();

    $s_id = $row['prs_std_id'];
    $r_id= $row['res_id'];
    $t = 'approve';    
    $sql2 = "INSERT INTO std_not (std_id,res_id,pr_id,type,std_is_read) VALUES ('$s_id','$r_id','$prs_id','$t','0')";

    $reselt=$con->exec($sql2);
    header('location: ../student/solutions.php?do=edit');

    ?>
