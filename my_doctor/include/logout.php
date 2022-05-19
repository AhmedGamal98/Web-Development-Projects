<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['pat_name']);
unset($_SESSION['pat_email']);
unset($_SESSION['pat_password']);
unset($_SESSION['phone']);
unset($_SESSION['age']);
unset($_SESSION['gender']);
unset($_SESSION['patient_id']);

unset($_SESSION['id']);
unset($_SESSION['doc_name']);
unset($_SESSION['doc_email']);
unset($_SESSION['doc_password']);
unset($_SESSION['status']);
unset($_SESSION['phone']);
unset($_SESSION['age']);
unset($_SESSION['doctor_id']);
unset($_SESSION['hospital_id']);


unset($_SESSION['id']);
unset($_SESSION['admin_email']);
unset($_SESSION['admin_password']);

unset($_SESSION['id']);
unset($_SESSION['hos_name']);
unset($_SESSION['hos_email']);
unset($_SESSION['hos_password']);
unset($_SESSION['status']);
unset($_SESSION['loaction']);

session_destroy();
header("Location:../sign_in.php");
?>