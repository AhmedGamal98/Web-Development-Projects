<?php
    include "connection.php";

    $id = $_GET['id']; // get id through query string
    $description  = $_POST['description'];
    
    $sql =$con->prepare("SELECT * FROM farm_activities where farmer_id=?");
    $sql->execute(array($id));
    
    $row =$sql->fetch();
    if($row){
        $sql = $con->prepare("UPDATE farm_activities set description =? WHERE farmer_id=$id"); 
        $sql->execute(array($description));
        if($sql)
        {           
            header("location: ../farmer/farmer_profile.php?do=farm_edit#farme_act"); // redirects to all records page
            exit;	
        }
    }
    else
    {
        $sql1 = "INSERT INTO farm_activities (description,farmer_id) VALUES ('$description','$id')";
        $reselt=$con->exec($sql1);
        if($reselt){
        header("location: ../farmer/farmer_profile.php?do=farm_edit#farme_act"); 
    }
}
    
    ?>