<?php
session_start();

unset($_SESSION["emp_id"]);


unset($_SESSION["emp_name"]);

unset($_SESSION['phone']);
unset($_SESSION["email"]);
unset($_SESSION["password"]);
session_destroy();
header("Location:../index.php");
?>