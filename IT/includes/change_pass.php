<?php
    include "connection.php";

    $id = $_GET['id'];
    $email = $_GET['email'];

    $pass = $_POST['pass'];
    
        $sql1 =$con->prepare("SELECT *  FROM it WHERE it_email=? AND it_id=?");
        $sql1->execute(array($email,$id));
        $row1 =$sql1->fetch();
        $count1 = $sql1->rowCount();


        $sql2 =$con->prepare("SELECT *  FROM employee WHERE emp_email=? AND emp_id=?");
        $sql2->execute(array($email,$id));
        $row2 =$sql2->fetch();
        $count2 = $sql2->rowCount();


        $sql3 =$con->prepare("SELECT *  FROM trainee WHERE tr_email=? AND tr_id=?");
        $sql3->execute(array($email,$id));
        $row3 =$sql3->fetch();
        $count3 = $sql3->rowCount();

        if($count1>0){

            $sql = $con->prepare("UPDATE it SET 

            it_pass=?

            WHERE it_id=$id"); 

            $sql->execute([$pass]);
            

                
                
                header("location:../sign_in.php?do=change"); 
        }
        elseif($count2>0){

            $sql = $con->prepare("UPDATE employee SET 

            emp_pass=?

            WHERE emp_id=$id"); 

            $sql->execute([$pass]);
            

                
                
            header("location:../sign_in.php?do=change");           
        }
        elseif($count3>0){

                $sql = $con->prepare("UPDATE trainee SET 

                tr_pass=?

                WHERE tr_id=$id"); 

                $sql->execute([$pass]);
                

                    
                    
                header("location:../sign_in.php?do=change");  
                    }
       
      
 

        

    ?>
