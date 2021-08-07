<?php
session_start();
unset( $_SESSION['admin_id'] );
unset( $_SESSION['user_id'] );
unset($_SESSION['username']);
unset($_SESSION['phone']);
unset( $_SESSION['email']);
unset( $_SESSION['password']);
unset($_SESSION['user_type']);
header("Location:../sign_in.php");
?>