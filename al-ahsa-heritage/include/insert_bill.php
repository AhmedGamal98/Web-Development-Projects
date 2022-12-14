<?php
require_once('connection.php');
session_start();
$id = $_SESSION['id'];
for ($x = 1; $x <= $_SESSION['counter']; $x++) {
    $quantity = $_POST['r_quantity'.$x.''];
    $product_id = $_POST['product_id'.$x.''];
    $price = $_POST['price'.$x.''];
    $total_price= $price * $quantity;

    $_SESSION['q'.$x.''] = $_POST['r_quantity'.$x.''];
    $_SESSION['pi'.$x.''] = $_POST['product_id'.$x.''];
    $_SESSION['p'.$x.''] = $_POST['price'.$x.''];

    $sql1 =$con->prepare("SELECT * FROM product where product_id=?");
    $sql1->execute(array($product_id));
    $row1 =$sql1->fetch();
    $farmer_id = $row1['farmer_id'];

    if($quantity <= 0){
        header('location: ../cart.php?do=less');
        break;
    }
    elseif($quantity > $row1['quantity']){
        header('location: ../cart.php?do=more');
        break;
    }
    elseif($quantity <= $row1['quantity']){
        $sql = "INSERT INTO bills (customer_id,product_id,farmer_id,quantity,total_price) VALUES ('$id','$product_id','$farmer_id','$quantity','$total_price')";
        $reselt=$con->exec($sql);
    
    }
    
}

if($sql){
    header('location: ../customer/choose_method.php'); // redirects to all records page
}

if($_SESSION['counter'] == 0){
    header('location: ../cart.php'); // redirects to all records page
}




?>