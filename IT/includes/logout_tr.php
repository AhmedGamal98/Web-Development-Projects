<?php
session_start();

unset($_SESSION["tr_id"]);

unset($_SESSION["tr_name"]);
unset($_SESSION['phone']);
unset($_SESSION["email"]);
unset($_SESSION["password"]);
session_destroy();
header("Location:../index.php");
?>