<?php

Class dbObj{
/* Database connection start */
var $dbhost = "localhost";
var $username = "root";
var $password = "";
var $dbname = "stores";
var $conn;
function getConnstring() {
$con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
	
//mysqli_set_charset($con , "utf8");	
mysqli_query($con , "SET CHARACTER SET 'utf8'");
mysqli_query($con , "SET SESSION collation_connection='utf8_general_ci'");	
	

//mysqli_query($con , "SET NAMES 'utf8'");
//mysqli_query($con , 'SET CHARACTER SET utf8');	

/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
} else {
$this->conn = $con;
}
return $this->conn;
}
}