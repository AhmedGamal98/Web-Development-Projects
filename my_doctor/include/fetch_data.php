<?php
include "connection.php";
if(isset($_POST['get_option']))
{
    
    
    $id = $_POST['get_option'];
    $sql =$con->prepare("SELECT * FROM doctor where hospital_id=?");
    $sql->execute([$id]);
    
    $rows =$sql->fetchAll($con::FETCH_ASSOC);
    foreach ($rows as $row)
    {
        if($row['status'] == 1){
            echo "<option value='".$row['id']."'>".$row['name']."</option>";
        }
    
    }
    exit;
}
?>