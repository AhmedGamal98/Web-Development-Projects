<?php

/*session_start();
if(!(isset($_SESSION['Password']))){
	header('Location:login.php');
}*/

?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="admin/layouts/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="admin/layouts/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="layouts/css/front.css" rel="stylesheet" type="text/css" media="all"/>		
<!--js-->
<script src="admin/layouts/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="admin/layouts/css/font-awesome.css" rel="stylesheet">
<link href="layouts/css/jquery-ui.css" rel="stylesheet">		
<link href="layouts/css/jquery.selectBoxIt.css" rel="stylesheet">	
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="layouts/css/daterangepicker.css">		
<!--//charts-->
</head>
<body>	
<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="homepage.php"><img src="admin/layouts/images/logo.jpg" alt="Forsah" width="60%" height="70px"></a>
				</div>
			  </div><!-- /.container-fluid -->
			</nav>	
<?php

   session_start();

    include('connect.php');
	$id = $_POST["id"];
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
	$password2 = $_POST["password2"];
	$hashedPass1 = sha1($password1);	
	$hashedPass2 = sha1($password2);
	$city = $_POST["city"];
	$age = $_POST["age"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
	$type = $_POST["type"];
	
if(isset($_POST["terms"]) == 1){	
if($type == 1){
	
if($hashedPass1 == $hashedPass2){
	
$sql=$con->prepare("SELECT * FROM creator WHERE 
 Email=? AND Password=?");
$sql->execute(array($email,$hashedPass1));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $hashedPass1 != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM  creator");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["Email"] && $hashedPass1 == $pat["Password"])
        {
            echo '
			
	  
	<div class="container" style="margin-top:50px">
	  <div class="alert alert-info role="alert">
		  <strong>Error!</strong> Incorrect Email Or Password Please Try Again
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
    </div>
	</div>  
	<div class="signup-page-main">
	
	<div class="container text-center center-block" style="width:230px">
		<div class="" style="margin-bottom:30px;width:20px;float:left;margin-top:5px">
			
			<i style="font-weight:bold; font-size:28px;color:#B75E21" class="fa fa-sign-out fa-5x"></i>
			
		</div>
		<div style="width:170px;margin-left:20px">
			<h1 class="text-center log" style="">Sign Up</h1>
		</div>
	</div>
	
     <div class="signup-main">  	
			<div class="signup-block">
				<form class="login" action="insert.php" method="post">
					<div class="ast">
						<!--<label style="margin-right:5px">National ID</label>-->
					    <input type="text" name="id" class="id" placeholder="Enter Your National ID" required="">
					    <i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>National ID</strong></div>
					    <div class="alert alert-danger custom-alert">National ID Must Be <strong>10 digits Only</strong></div>
						<div class="alert alert-danger number-alert">National ID Must Be Contains <strong>Characters Only</strong></div>
						<div class="alert alert-danger one-alert">National ID Must Be Start by <strong> Number 1</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:8px">First Name</label>-->
						<input type="text" name="firstname" class="first" placeholder="Enter Your First Name" required="">
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>First Name</strong></div>
						<div class="alert alert-danger number-alert">Please First Name Must Be Contains <strong>Characters Only</strong></div>	
					</div>
					<div class="ast">
						<!--<label style="margin-right:10px">Last Name</label>-->
						<input type="text" name="lastname" class="last" placeholder="Enter Your Last Name" required="">
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>Last Name</strong></div>
						<div class="alert alert-danger number-alert">Please Last Name Must Be Contains <strong>Characters Only</strong></div>	
					</div>
					<div class="ast">
						<!--<label style="margin-right:43px">Email</label>-->
						<input  type="text" name="email" class="email" placeholder="Email" required="">
						<i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Email</strong></div>
						<div class="alert alert-danger long-alert">Please Your E-mail Must Be Contains <strong>@</strong></div>
						<div class="alert alert-danger custom-alert">Please Your E-mail Must Be Contains <strong>.com</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:17px">Password</label>-->
						<input  type="password" name="password1" class="password" class="lock" placeholder="Password" required="">
						<i class="fa fa-check check check-pass"></i>
						<i class="fa fa-close close close-pass"></i>
						<i class="show-pass fa fa-eye fa-2x"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Password</strong></div>
						<div class="alert alert-danger long-alert">Please Password Must Be  <strong>6 digits</strong></div>
						<div class="alert alert-danger custom-alert">Please Password Must Be Contains<strong>One Uppercase Character</strong></div>
						<div class="alert alert-danger lower-alert">Please Password Must Be Contains<strong>One Lowercase Character</strong></div>
						<div class="alert alert-danger number-alert">Please Password Must Be Contains<strong>One Number</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:25px">Confirm</label>-->
						<input  type="password" name="password2" class="password2" class="lock" placeholder="Confirm Password" required="">
						<i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Password Can\'t Be <strong></strong>Empty</div>
						<div class="alert alert-danger long-alert">Password doesn\'t <strong>Match</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:54px">City</label>-->
						<!--<input type="text" name="city" class="city" placeholder="Enter Your City" required="">-->
						<select name="city" class="form-control gender star" required="">
						<option value="">City</option>
						<option>Al-Reyad</option>
						<option>Afif</option>
						<option value="Abha">Abha</option>
						<option value="Al Bukayriyah">Al Bukayriyah</option> 
						<option value="Al-Hareeq">Al-Hareeq</option> 
						<option value="Al-Gwei\'iyyah">Al-Gwei\'iyyah</option> 
						<option value="Al-\'Ula">Al-\'Ula</option>
						<option value="Baljurashi">Baljurashi</option> 
						<option value="Bisha">Bisha</option> 
						<option value="Buraydah">Buraydah</option> 
						<option value="Bahah">Bahah</option> 
						<option value="Dammam">Dammam</option> 
						<option value="Dhahran">Dhahran</option>
						<option value="Diriyah">Diriyah</option> 
						<option value="Dawadmi">Dawadmi</option> 
						<option value="Hautat Sudair">Hautat Sudair</option>
						<option value="Hofuf">Hofuf</option> 
						<option value="Hafr Al-Batin">Hafr Al-Batin</option> 
						<option value="AlJawf">AlJawf</option>
						<option value="Jeddah">Jeddah</option>
						<option value="Jizan">Jizan</option> 
						<option value="Jubail">Jubail</option> 
						<option value="Khafji">Khafji</option>
						<option value="Khamis Mushayt">Khamis Mushayt</option> 
						<option value="Khobar">Khobar</option> 
						<option value="Majma\'ah">Majma\'ah</option> 
						<option value="Al-Mubarraz">Al-Mubarraz</option> 
						<option value="Mecca">Mecca</option> 
						<option value="Medina">Medina</option> 
						<option value="Muzahmiyya">Muzahmiyya</option> 
						<option value="Najran">Najran</option> 
						<option value="Al-Namas">Al-Namas</option> 
						<option value="Qadeimah">Qadeimah</option> 
						<option value="Qatif">Qatif</option> 
						<option value="Qunfudhah">Qunfudhah</option> 
						<option value="Rass Tanura">Rass Tanura</option>
						<option value="Riyadh">Riyadh</option> 
						<option value="Sakakah">Sakakah</option>
						<option value="Sharurah">Sharurah</option> 
						<option value="Shaqraa">Shaqraa</option> 
						<option value="Taif">Taif</option> 
						<option value="Tabuk">Tabuk</option>
						<option value="Tanomah">Tanomah</option> 
						<option value="Unaizah">Unaizah</option> 
						<option value="Uyun Aljiwa">Uyun Aljiwa</option>
						<option value="Wadi AlDawasir">Wadi AlDawasir</option>
						<option value="Yanbu">Yanbu</option>
						<option value="Zulfi">Zulfi</option>
					 </select>
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <!--<div class="alert alert-danger empty-alert">Please Write Your  <strong>City</strong></div>
						<div class="alert alert-danger number-alert">Please Your City Must Be <strong>Characters Only</strong></div>-->
						<div class="alert alert-danger empty-alert">Please Select Your <strong>City</strong></div>	
					</div>
					<div class="ast">
						<!--<label style="margin-right:57px">Age</label>-->
						<input  type="text" name="age" class="age js-datepicker" placeholder="Enter Your Age" required="" autocomplete="off">
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Write Your <strong>Age</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:40px">Phone</label>-->
						<input  type="text" name="phone" class="phone" placeholder="Enter Your Phone Number" required="">
						<i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Phone Number</strong></div>
						<div class="alert alert-danger long-alert">Please Phone Number Must Contains  <strong>10 digits only</strong></div>
						<div class="alert alert-danger custom-alert">Please Phone Number Must be Contains  <strong>Numbers Only</strong></div>
						<div class="alert alert-danger zero-alert">Please Phone Number Must Be Start <strong>05 Numbers</strong></div>
					</div>
					<div class="ast" style="margin-top:10px;margin-bottom:30px">
						<!--<label>Gender</label>-->
						<div>
							<select class="form-control gender star" style="margin-bottom: 10px" name="gender">
							  <option value="0">Enter Your Gender</option>
							  <option value="1">Male</option>
							  <option value="2">Female</option>
							</select>
						</div>
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Select Your <strong>Gender</strong></div>
					</div>	
					<div class="ast">
						<!--<label>Type</label>-->
						<div>
							<select class="form-control type star" style="margin-bottom: 10px" name="type">
							  <option value="0">Type</option>
							  <option value="1">creator</option>	
							  <option value="2">investor</option>
							</select>
						</div>
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Select Your <strong>Type</strong></div>
					</div>
					<div class="ast">
						 <div style="width:100%;margin-top:30px;margin-bottom:15px">
							 <input type="checkbox" name="terms" value="1" style="width:5%;height:20px;font-size:14px;float:left">
					         <label style="color:#000;width:90%;float:right"><span></span>I agree to <a href="terms.php" style="text-decoration:none;color:#000">the terms And Conditions</a></label>
						 </div>
					</div>
					<input style="background-color:#FAD7A0;color:#000" type="submit" name="Sign In" value="Sign up">														
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="login.php"> Sign In here.</a></h4>
				</div>
			</div>
    </div>
</div>
	 
							
';
        }
        
    }
    
} else{
	

	
	  $sql = "INSERT INTO creator (nationalid , Fname, Lname, City , Age , Gender , Email , Password , PhoneNum , Type , Bio) VALUES ('$id' , '$fname', '$lname', '$city', '$age', '$gender', '$email' , '$hashedPass1' , '$phone' , '$type' , 'I am a Creator')";

      $con->exec($sql);
    
	
      //header('Location:login.php');
	
	
	
	        $sql = $con->prepare("SELECT * FROM creator WHERE nationalid=$id");
			$sql->execute();
			$rows = $sql->fetchAll();

			foreach($rows as $pat)
			{

				if($id == $pat["nationalid"] && $hashedPass1 == $pat["Password"])
				{
					$_SESSION['creatorid'] = $pat['nationalid'];
					$_SESSION['fname'] = $pat['Fname'];
					$_SESSION['lname'] = $pat['Lname'];
					$_SESSION['password'] = $pat['Password'];
					$_SESSION['add'] = $pat['City'];
					$_SESSION['mail'] = $pat['Email'];
					$_SESSION['phone'] = $pat['PhoneNum'];
					$_SESSION['type'] = $pat['Type'];
					header('Location:homepage.php');
				}
			}
	
	 
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
}
}else if($type == 2){
	
	
	
if($hashedPass1 == $hashedPass2){
	
$sql=$con->prepare("SELECT * FROM investor WHERE 
 Email=? AND Password=?");
$sql->execute(array($email,$hashedPass1));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $hashedPass1 != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM  investor");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["Email"] && $hashedPass1 == $pat["Password"])
        {
            echo '
			
	  
	<div class="container" style="margin-top:50px">
	  <div class="alert alert-info role="alert">
		  <strong>Error!</strong> Incorrect Email Or Password Please Try Again
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
    </div>
	</div>  
	<div class="signup-page-main">
	
	<div class="container text-center center-block" style="width:230px">
		<div class="" style="margin-bottom:30px;width:20px;float:left;margin-top:5px">
			
			<i style="font-weight:bold; font-size:28px;color:#B75E21" class="fa fa-sign-out fa-5x"></i>
			
		</div>
		<div style="width:170px;margin-left:20px">
			<h1 class="text-center log" style="">Sign Up</h1>
		</div>
	</div>
	
     <div class="signup-main">  	
			<div class="signup-block">
				<form class="login" action="insert.php" method="post">
					<div class="ast">
						<!--<label style="margin-right:5px">National ID</label>-->
					    <input type="text" name="id" class="id" placeholder="Enter Your National ID" required="">
					    <i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>National ID</strong></div>
					    <div class="alert alert-danger custom-alert">National ID Must Be <strong>10 digits Only</strong></div>
						<div class="alert alert-danger number-alert">National ID Must Be Contains <strong>Characters Only</strong></div>
						<div class="alert alert-danger one-alert">National ID Must Be Start by <strong> Number 1</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:8px">First Name</label>-->
						<input type="text" name="firstname" class="first" placeholder="Enter Your First Name" required="">
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>First Name</strong></div>
						<div class="alert alert-danger number-alert">Please First Name Must Be Contains <strong>Characters Only</strong></div>	
					</div>
					<div class="ast">
						<!--<label style="margin-right:10px">Last Name</label>-->
						<input type="text" name="lastname" class="last" placeholder="Enter Your Last Name" required="">
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>Last Name</strong></div>
						<div class="alert alert-danger number-alert">Please Last Name Must Be Contains <strong>Characters Only</strong></div>	
					</div>
					<div class="ast">
						<!--<label style="margin-right:43px">Email</label>-->
						<input  type="text" name="email" class="email" placeholder="Email" required="">
						<i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Email</strong></div>
						<div class="alert alert-danger long-alert">Please Your E-mail Must Be Contains <strong>@</strong></div>
						<div class="alert alert-danger custom-alert">Please Your E-mail Must Be Contains <strong>.com</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:17px">Password</label>-->
						<input  type="password" name="password1" class="password" class="lock" placeholder="Password" required="">
						<i class="fa fa-check check check-pass"></i>
						<i class="fa fa-close close close-pass"></i>
						<i class="show-pass fa fa-eye fa-2x"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Password</strong></div>
						<div class="alert alert-danger long-alert">Please Password Must Be  <strong>6 digits</strong></div>
						<div class="alert alert-danger custom-alert">Please Password Must Be Contains<strong>One Uppercase Character</strong></div>
						<div class="alert alert-danger lower-alert">Please Password Must Be Contains<strong>One Lowercase Character</strong></div>
						<div class="alert alert-danger number-alert">Please Password Must Be Contains<strong>One Number</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:25px">Confirm</label>-->
						<input  type="password" name="password2" class="password2" class="lock" placeholder="Confirm Password" required="">
						<i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Password Can\'t Be <strong></strong>Empty</div>
						<div class="alert alert-danger long-alert">Password doesn\'t <strong>Match</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:54px">City</label>-->
						<!--<input type="text" name="city" class="city" placeholder="Enter Your City" required="">-->
						<select name="city" class="form-control gender star" required="">
						<option value="">City</option>
						<option>Al-Reyad</option>
						<option>Afif</option>
						<option value="Abha">Abha</option>
						<option value="Al Bukayriyah">Al Bukayriyah</option> 
						<option value="Al-Hareeq">Al-Hareeq</option> 
						<option value="Al-Gwei\'iyyah">Al-Gwei\'iyyah</option> 
						<option value="Al-\'Ula">Al-\'Ula</option>
						<option value="Baljurashi">Baljurashi</option> 
						<option value="Bisha">Bisha</option> 
						<option value="Buraydah">Buraydah</option> 
						<option value="Bahah">Bahah</option> 
						<option value="Dammam">Dammam</option> 
						<option value="Dhahran">Dhahran</option>
						<option value="Diriyah">Diriyah</option> 
						<option value="Dawadmi">Dawadmi</option> 
						<option value="Hautat Sudair">Hautat Sudair</option>
						<option value="Hofuf">Hofuf</option> 
						<option value="Hafr Al-Batin">Hafr Al-Batin</option> 
						<option value="AlJawf">AlJawf</option>
						<option value="Jeddah">Jeddah</option>
						<option value="Jizan">Jizan</option> 
						<option value="Jubail">Jubail</option> 
						<option value="Khafji">Khafji</option>
						<option value="Khamis Mushayt">Khamis Mushayt</option> 
						<option value="Khobar">Khobar</option> 
						<option value="Majma\'ah">Majma\'ah</option> 
						<option value="Al-Mubarraz">Al-Mubarraz</option> 
						<option value="Mecca">Mecca</option> 
						<option value="Medina">Medina</option> 
						<option value="Muzahmiyya">Muzahmiyya</option> 
						<option value="Najran">Najran</option> 
						<option value="Al-Namas">Al-Namas</option> 
						<option value="Qadeimah">Qadeimah</option> 
						<option value="Qatif">Qatif</option> 
						<option value="Qunfudhah">Qunfudhah</option> 
						<option value="Rass Tanura">Rass Tanura</option>
						<option value="Riyadh">Riyadh</option> 
						<option value="Sakakah">Sakakah</option>
						<option value="Sharurah">Sharurah</option> 
						<option value="Shaqraa">Shaqraa</option> 
						<option value="Taif">Taif</option> 
						<option value="Tabuk">Tabuk</option>
						<option value="Tanomah">Tanomah</option> 
						<option value="Unaizah">Unaizah</option> 
						<option value="Uyun Aljiwa">Uyun Aljiwa</option>
						<option value="Wadi AlDawasir">Wadi AlDawasir</option>
						<option value="Yanbu">Yanbu</option>
						<option value="Zulfi">Zulfi</option>
					 </select>
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <!--<div class="alert alert-danger empty-alert">Please Write Your  <strong>City</strong></div>
						<div class="alert alert-danger number-alert">Please Your City Must Be <strong>Characters Only</strong></div>-->
						<div class="alert alert-danger empty-alert">Please Select Your <strong>City</strong></div>	
					</div>
					<div class="ast">
						<!--<label style="margin-right:57px">Age</label>-->
						<input  type="date" name="age" class="age form-control" placeholder="Enter Your Age"  autocomplete="off">
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Write Your <strong>Age</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:40px">Phone</label>-->
						<input  type="text" name="phone" class="phone" placeholder="Enter Your Phone Number" required="">
						<i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Phone Number</strong></div>
						<div class="alert alert-danger long-alert">Please Phone Number Must Contains  <strong>10 digits only</strong></div>
						<div class="alert alert-danger custom-alert">Please Phone Number Must be Contains  <strong>Numbers Only</strong></div>
						<div class="alert alert-danger zero-alert">Please Phone Number Must Be Start <strong>05 Numbers</strong></div>
					</div>
					<div class="ast" style="margin-top:10px;margin-bottom:30px">
						<!--<label>Gender</label>-->
						<div>
							<select class="form-control gender star" style="margin-bottom: 10px" name="gender">
							  <option value="0">Enter Your Gender</option>
							  <option value="1">Male</option>
							  <option value="2">Female</option>
							</select>
						</div>
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Select Your <strong>Gender</strong></div>
					</div>	
					<div class="ast">
						<!--<label>Type</label>-->
						<div>
							<select class="form-control type star" style="margin-bottom: 10px" name="type">
							  <option value="0">Type</option>
							  <option value="1">creator</option>	
							  <option value="2">investor</option>
							</select>
						</div>
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Select Your <strong>Type</strong></div>
					</div>
					<div class="ast">
						 <div style="width:100%;margin-top:30px;margin-bottom:15px">
							 <input type="checkbox" name="terms" value="1" style="width:5%;height:20px;font-size:14px;float:left">
					         <label style="color:#000;width:90%;float:right"><span></span>I agree to <a href="terms.php" style="text-decoration:none;color:#000">the terms And Conditions</a></label>
						 </div>
					</div>
					<input style="background-color:#FAD7A0;color:#000" type="submit" name="Sign In" value="Sign up">														
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="login.php"> Sign In here.</a></h4>
				</div>
			</div>
    </div>
</div>
	 
							
';
        }
        
    }
    
} else{
	

	
	  $sql = "INSERT INTO investor (nationalid , Fname, Lname, City , Age , Gender , Email , Password , PhoneNum , Type , Bio) VALUES ('$id' , '$fname', '$lname', '$city', '$age', '$gender', '$email' , '$hashedPass1' , '$phone' , '$type' , 'I am a Investor')";

      $con->exec($sql);
    
	
      //header('Location:login.php');
	
	        $sql = $con->prepare("SELECT * FROM investor WHERE nationalid=$id");
			$sql->execute();
			$rows = $sql->fetchAll();

			foreach($rows as $pat)
			{

				if($id == $pat["nationalid"] && $hashedPass1 == $pat["Password"])
				{
					$_SESSION['investorid'] = $pat['nationalid'];
					$_SESSION['fname'] = $pat['Fname'];
					$_SESSION['lname'] = $pat['Lname'];
					$_SESSION['password'] = $pat['Password'];
					$_SESSION['add'] = $pat['City'];
					$_SESSION['mail'] = $pat['Email'];
					$_SESSION['phone'] = $pat['PhoneNum'];
					$_SESSION['type'] = $pat['type'];
					header('Location:homepage.php');
				}
			}
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
}
	
	
	
}
}else{
	
	echo '<div class="container" style="margin-top:50px">
	  <div class="alert alert-info role="alert">
		  <strong>Error!</strong> You Must Agree About terms And Conditions
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
    </div>
	</div>';
	echo '<div class="signup-page-main">
	
	<div class="container text-center center-block" style="width:230px">
		<div class="" style="margin-bottom:30px;width:20px;float:left;margin-top:5px">
			
			<i style="font-weight:bold; font-size:28px;color:#B75E21" class="fa fa-sign-out fa-5x"></i>
			
		</div>
		<div style="width:170px;margin-left:20px">
			<h1 class="text-center log" style="">Sign Up</h1>
		</div>
	</div>
	
     <div class="signup-main">  	
			<div class="signup-block">
				<form class="login" action="insert.php" method="post">
					<div class="ast">
						<!--<label style="margin-right:5px">National ID</label>-->
					    <input type="text" name="id" class="id" placeholder="Enter Your National ID" required="">
					    <i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>National ID</strong></div>
					    <div class="alert alert-danger custom-alert">National ID Must Be <strong>10 digits Only</strong></div>
						<div class="alert alert-danger number-alert">National ID Must Be Contains <strong>Characters Only</strong></div>
						<div class="alert alert-danger one-alert">National ID Must Be Start by <strong> Number 1</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:8px">First Name</label>-->
						<input type="text" name="firstname" class="first" placeholder="Enter Your First Name" required="">
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>First Name</strong></div>
						<div class="alert alert-danger number-alert">Please First Name Must Be Contains <strong>Characters Only</strong></div>	
					</div>
					<div class="ast">
						<!--<label style="margin-right:10px">Last Name</label>-->
						<input type="text" name="lastname" class="last" placeholder="Enter Your Last Name" required="">
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>Last Name</strong></div>
						<div class="alert alert-danger number-alert">Please Last Name Must Be Contains <strong>Characters Only</strong></div>	
					</div>
					<div class="ast">
						<!--<label style="margin-right:43px">Email</label>-->
						<input  type="text" name="email" class="email" placeholder="Email" required="">
						<i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Email</strong></div>
						<div class="alert alert-danger long-alert">Please Your E-mail Must Be Contains <strong>@</strong></div>
						<div class="alert alert-danger custom-alert">Please Your E-mail Must Be Contains <strong>.com</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:17px">Password</label>-->
						<input  type="password" name="password1" class="password" class="lock" placeholder="Password" required="">
						<i class="fa fa-check check check-pass"></i>
						<i class="fa fa-close close close-pass"></i>
						<i class="show-pass fa fa-eye fa-2x"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Password</strong></div>
						<div class="alert alert-danger long-alert">Please Password Must Be  <strong>6 digits</strong></div>
						<div class="alert alert-danger custom-alert">Please Password Must Be Contains<strong>One Uppercase Character</strong></div>
						<div class="alert alert-danger lower-alert">Please Password Must Be Contains<strong>One Lowercase Character</strong></div>
						<div class="alert alert-danger number-alert">Please Password Must Be Contains<strong>One Number</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:25px">Confirm</label>-->
						<input  type="password" name="password2" class="password2" class="lock" placeholder="Confirm Password" required="">
						<i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Password Can\'t Be <strong></strong>Empty</div>
						<div class="alert alert-danger long-alert">Password doesn\'t <strong>Match</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:54px">City</label>-->
						<!--<input type="text" name="city" class="city" placeholder="Enter Your City" required="">-->
						<select name="city" class="form-control gender star" required="">
						<option value="">City</option>
						<option>Al-Reyad</option>
						<option>Afif</option>
						<option value="Abha">Abha</option>
						<option value="Al Bukayriyah">Al Bukayriyah</option> 
						<option value="Al-Hareeq">Al-Hareeq</option> 
						<option value="Al-Gwei\'iyyah">Al-Gwei\'iyyah</option> 
						<option value="Al-\'Ula">Al-\'Ula</option>
						<option value="Baljurashi">Baljurashi</option> 
						<option value="Bisha">Bisha</option> 
						<option value="Buraydah">Buraydah</option> 
						<option value="Bahah">Bahah</option> 
						<option value="Dammam">Dammam</option> 
						<option value="Dhahran">Dhahran</option>
						<option value="Diriyah">Diriyah</option> 
						<option value="Dawadmi">Dawadmi</option> 
						<option value="Hautat Sudair">Hautat Sudair</option>
						<option value="Hofuf">Hofuf</option> 
						<option value="Hafr Al-Batin">Hafr Al-Batin</option> 
						<option value="AlJawf">AlJawf</option>
						<option value="Jeddah">Jeddah</option>
						<option value="Jizan">Jizan</option> 
						<option value="Jubail">Jubail</option> 
						<option value="Khafji">Khafji</option>
						<option value="Khamis Mushayt">Khamis Mushayt</option> 
						<option value="Khobar">Khobar</option> 
						<option value="Majma\'ah">Majma\'ah</option> 
						<option value="Al-Mubarraz">Al-Mubarraz</option> 
						<option value="Mecca">Mecca</option> 
						<option value="Medina">Medina</option> 
						<option value="Muzahmiyya">Muzahmiyya</option> 
						<option value="Najran">Najran</option> 
						<option value="Al-Namas">Al-Namas</option> 
						<option value="Qadeimah">Qadeimah</option> 
						<option value="Qatif">Qatif</option> 
						<option value="Qunfudhah">Qunfudhah</option> 
						<option value="Rass Tanura">Rass Tanura</option>
						<option value="Riyadh">Riyadh</option> 
						<option value="Sakakah">Sakakah</option>
						<option value="Sharurah">Sharurah</option> 
						<option value="Shaqraa">Shaqraa</option> 
						<option value="Taif">Taif</option> 
						<option value="Tabuk">Tabuk</option>
						<option value="Tanomah">Tanomah</option> 
						<option value="Unaizah">Unaizah</option> 
						<option value="Uyun Aljiwa">Uyun Aljiwa</option>
						<option value="Wadi AlDawasir">Wadi AlDawasir</option>
						<option value="Yanbu">Yanbu</option>
						<option value="Zulfi">Zulfi</option>
					 </select>
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <!--<div class="alert alert-danger empty-alert">Please Write Your  <strong>City</strong></div>
						<div class="alert alert-danger number-alert">Please Your City Must Be <strong>Characters Only</strong></div>-->
						<div class="alert alert-danger empty-alert">Please Select Your <strong>City</strong></div>		
					</div>
					<div class="ast">
						<!--<label style="margin-right:57px">Age</label>-->
						<input  type="date" name="age" class="age form-control" placeholder="Enter Your Age"  autocomplete="off">
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Write Your <strong>Age</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:40px">Phone</label>-->
						<input  type="text" name="phone" class="phone" placeholder="Enter Your Phone Number" required="">
						<i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Phone Number</strong></div>
						<div class="alert alert-danger long-alert">Please Phone Number Must Contains  <strong>10 digits only</strong></div>
						<div class="alert alert-danger custom-alert">Please Phone Number Must be Contains  <strong>Numbers Only</strong></div>
						<div class="alert alert-danger zero-alert">Please Phone Number Must Be Start <strong>05 Numbers</strong></div>
					</div>
					<div class="ast" style="margin-top:10px;margin-bottom:30px">
						<!--<label>Gender</label>-->
						<div>
							<select class="form-control gender star" style="margin-bottom: 10px" name="gender">
							  <option value="0">Enter Your Gender</option>
							  <option value="1">Male</option>
							  <option value="2">Female</option>
							</select>
						</div>
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Select Your <strong>Gender</strong></div>
					</div>	
					<div class="ast">
						<!--<label>Type</label>-->
						<div>
							<select class="form-control type star" style="margin-bottom: 10px" name="type">
							  <option value="0">Type</option>
							  <option value="1">creator</option>	
							  <option value="2">investor</option>
							</select>
						</div>
						<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Select Your <strong>Type</strong></div>
					</div>
					<div class="ast">
						 <div style="width:100%;margin-top:30px;margin-bottom:15px">
							 <input type="checkbox" name="terms" value="1" style="width:5%;height:20px;font-size:14px;float:left">
					         <label style="color:#000;width:90%;float:right"><span></span>I agree to <a href="terms.php" style="text-decoration:none;color:#000">the terms And Conditions</a></label>
						 </div>
					</div>
					<input style="background-color:#FAD7A0;color:#000" type="submit" name="Sign In" value="Sign up">														
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="login.php"> Sign In here.</a></h4>
				</div>
			</div>
    </div>
</div>';
	
	
	
	
}
		
		
		
		
	
	//insert condition
/*if($role == "Admin"){
	
	
if($type == "Super Admin"){	
	
 $super = $_POST["super"];
	
 if($super == "Super Admin"){	
	
$sql=$con->prepare("SELECT * FROM admin WHERE 
 E-mail=? AND Password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["E-mail"] && $password == $pat["Password"])
        {
            echo '
			
	  
	  <div class="alert alert-danger role="alert">
		  <strong>خطأ!</strong> هذا البريد الالكتروني أو الباسورد ربما مستخدمين من قبل. من فضلك ادخل بريد الكتروني أو باسورد من جديد.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
    </div>
	<div class="design" dir="rtl" style="height:auto">
	
 <form class="login" action="insert.php" method="post">
	 
  <h4 class="text-center">انشاء حساب جديد</h4> 
  <div class="ast">
	  <input class="form-control first" type="text" placeholder="الاسم الأول" name="first" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">الاسم الأول مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert">  الاسم الأول لا يقل عن<strong>8 حروف </strong></div>
	  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control last" type="text" placeholder="اسم العائلة" name="last" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert">  اسم العائلة لا يقل عن<strong>8 حروف </strong></div>
	  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
  </div>	 
  <div class="ast">
	  <input class="form-control username" type="text" placeholder="اسم المستخدم" name="username" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert">  اسم المستخدم لا يقل عن <strong>8 حروف </strong></div>
	  <div class="alert alert-danger long-alert">  اسم المستخدم يجب أن يحتوي علي <strong>حروف فقط</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="كلمة المرور" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>10 حروف</strong></div>
	  <div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
	  <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>
	  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>5 أرقام.</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="new-password" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control address" type="text" placeholder="العنوان" name="address" autocomplete="new-password" required="required"/>
	  <i class="fa fa-home"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control phone" type="text" placeholder="رقم الهاتف" name="phone" autocomplete="new-password" required="required"/>
	  <i class="fa fa-phone"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون علي الأقل  <strong>10 أرقام</strong></div>
	  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
	  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
  </div>	 
  <input class="btn btn-primary btn-block button" type="submit" value="انشاء"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:15px">
	  <span>هل أنت عضو؟ </span><a style="text-decoration:none" href="login.php">سجل الان</a>
  </div>	 
 </form>
</div>   
							
';
        }
        
    }
    
} else{
	
	
	
	  $sql = "INSERT INTO admin (First name, Last name, Phone , E-mail , Store Address , User name , Password) VALUES ('$fname', '$lname', '$phone', '$email', '$address', '$username' , '$hashedPass')";

      $con->exec($sql);
    
	
      //header('Location:login.php');
	
	  echo '
	  
	  
	  <div class="alert alert-info role="alert">
		  <strong> بخدماتنا </strong> تم انشاء حسابك بنجاح مرحبا بك في نقرة واحدة.كوم سجل الدخول الان لتستمتع.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
     </div>
	 <div class="design" dir="rtl" style="height:auto">
	
 <form class="login" action="homepage.php" method="post">
	 
  <h4 class="text-center">تسجيل الدخول</h4> 
  <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="username" autocomplete="off" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="كلمة المرور" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>10 حروف</strong></div>
	  <div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
	  <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>
	  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>5 أرقام.</strong></div>
  </div>
  <input class="btn btn-primary btn-block button" type="submit" value="دخول"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold">
	  <span>هل أنت لا تمتلك حساب؟ </span><a style="text-decoration:none" href="signup.php">انشاء حساب الان</a>
  </div>
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:20px">
	  <span>هل نسيت كلمة المرور؟ </span><a style="text-decoration:none" href="resetpassword.php">اعادة تعيين الان</a>
  </div>	 
 </form>
</div>	 
	  
	  
	  ';
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
 
 }else if($super == "Normal Admin"){
	 
	 
	 
$sql=$con->prepare("SELECT * FROM admin WHERE 
 email=? AND admin_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["admin_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
	   
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
																<a class="coll" data-toggle="collapse" data-target="#admin">Admin Role</a>
															
															  <div class="collapse border-bottom px-lg-8" id="admin">
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="super" required="">
								
                                                                    <option>Super Admin</option>
                                                                    <option selected="selected">Normal Admin</option>									
                                                                </select>
															   </div>
															   <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	
	  $sql = "INSERT INTO admin (first_name, last_name, address , email , phone_number , gender , age , admin_password , image , name , super , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$super' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	 
	 
	 
	 
 }
}else{
	
	
$sql=$con->prepare("SELECT * FROM admin WHERE 
 email=? AND admin_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["admin_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
	   
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
																
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $superr = "Normal Admin";
	
	
	  $sql = "INSERT INTO admin (first_name, last_name, address , email , phone_number , gender , age , admin_password , image , name , super , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$superr' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
}
 
 
 
 }else if($role == "Customer Servant"){
	
	
//=========== Start  Customer servant =================================//
	
$sql=$con->prepare("SELECT * FROM customer_servant WHERE 
 email=? AND servant_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM customer_servant");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["servant_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">   
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
	   
	   
							<!-- /login
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $sql = "INSERT INTO customer_servant (first_name, last_name, address , email , phone_number , gender , age , servant_password , image , name , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
	
	
	
	
	
	
	
	//=========== End Customer servant ====================================//
	
}else if($role == "Deliverer"){
	
	
	
	
	
	//=========== Start  Deliverer =================================//
	
$sql=$con->prepare("SELECT * FROM deliverer WHERE 
 email=? AND deliverer_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM deliverer");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["deliverer_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
																
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $sql = "INSERT INTO deliverer (first_name, last_name, address , email , phone_number , gender , age , deliverer_password , image , name , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
	
	
	
	
	
	
	
	//=========== End Deliverer ====================================//
	
	
	
	
	
	
}else if($role == "Client"){
	
	
	
	
	//=========== Start  client =================================//
	
$sql=$con->prepare("SELECT * FROM client WHERE 
 email=? AND client_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM client");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["client_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	<div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $sql = "INSERT INTO client (first_name, last_name, address , email , phone_number , gender , age , client_password , image , name) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
	
	
	
	
	
	
	
	//=========== End client ====================================//
	
	
	
}

	
	//insert condition
	
	
	
    /*$sql = "INSERT INTO client (first_name, last_name, address , email , phone_number , gender , age , client_password , image , name) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name')";

    $con->exec($sql);
    
	
    header('Location:login.php');
	

    $con=null;*/
    
?>
	
	
	
  <!-- Start Footer -->
         <div class="footer">
			 <div class="container">
				 <div class="row">
					 <div class="col-md-12">
						 <!-- Start Help -->
						 <div class="contact text-center">
							 <div class="container">
								 <div class="row">
									 <div class="col-md-6 con">
										 <h3 style="color:#D68910">Contact</h3>
										 <p><i style="color:#D68910" class="fa fa-envelope-o"></i> contact@Fursah.com</p>
										 <p><i style="color:#D68910" class="fa fa-phone"></i> +966 545446161</p>
									 </div>
									 <!--<div class="col-md-4 con">
										 <h3>Pages</h3>
										 <p><a href="about.php" style="text-decoration:none;color:#FFF">About Us</a></p>
										 <p><a href="contact.php" style="text-decoration:none;color:#FFF">Contact Us</a></p>
									 </div>-->
									 <div class="col-md-6 con">
										 <h3 style="color:#D68910">More</h3>
										 <p><a href="terms.php" style="text-decoration:none;color:#FFF">Terms</a></p>
										 <p><a href="terms.php" style="text-decoration:none;color:#FFF">Privacy</a></p>
									 </div>
								 </div>
							 </div>
						 </div>
						 <!-- End Help -->
					 </div>
					 <div class="col-md-12 copy text-center">
						 Copyrights &copy; All Rights Reserved 2021 <span style="color:#D68910">FURSAH</span>
					 </div>
				 </div>
			 </div>
         </div>
       <!-- End Footer -->	
<!--scrolling js-->
		<script src="admin/layouts/js/jquery.nicescroll.js"></script>
		<script src="admin/layouts/js/scripts.js"></script>
	    <script src="layouts/js/front.js"></script>
	     <script src="layouts/js/jquery-ui.min.js"></script>
	    <script src="layouts/js/jquery.selectBoxIt.min.js"></script>	
		<!--//scrolling js-->
<script src="admin/layouts/js/bootstrap.js"> </script>
<script src="layouts/js/moment.min.js"></script>
<script src="layouts/js/daterangepicker.js"></script>
<script src="layouts/js/global.js"></script>	
<!-- mother grid end here-->
</body>
</html>


                      
						
	