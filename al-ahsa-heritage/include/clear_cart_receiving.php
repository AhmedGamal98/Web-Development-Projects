<?php
require_once('connection.php');
session_start();
$id = $_SESSION['id'];

for ($x = 1; $x <= $_SESSION['counter']; $x++) {
    $quantity = $_SESSION['q'.$x.''];
    $product_id = $_SESSION['pi'.$x.''];
    $price = $_SESSION['p'.$x.''];
    $total_price= $price * $quantity;




    $sql1 =$con->prepare("SELECT * FROM product where product_id=?");
    $sql1->execute(array($product_id));
    $row1 =$sql1->fetch();
    $farmer_id = $row1['farmer_id'];

    $updated_q = $row1['quantity'] - $quantity;
    $sql = $con->prepare("UPDATE product set quantity = ? WHERE product_id=?"); 
    $sql->execute(array($updated_q,$product_id));
    
    
}
    $sql = $con->prepare("UPDATE bills set pay_status = 1 WHERE customer_id=$id"); 
    $sql->execute();

    $del = $con->prepare("delete from cart where customer_id = '$id'"); // delete query
    $del->execute();
    header('location: ../customer/done.php'); // redirects to all records page
    exit;	





?>