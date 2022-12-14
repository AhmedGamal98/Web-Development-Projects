<?php
require_once('connection.php');
session_start();


$product_id = $_POST['product_id'];

$customer_id = $_POST['customer_id'];
$sql = "INSERT INTO temp_cart (product_id,customer_id) VALUES ('$product_id','$customer_id')";
$reselt=$con->exec($sql);
if($reselt){
    header('location: ../temp_cart.php'); // redirects to all records page
    exit;	
}

?>