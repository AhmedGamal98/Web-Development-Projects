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
<!--inner block start here-->
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
						<div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
						<div class="alert alert-danger long-alert">Password doesn't <strong>Match</strong></div>
					</div>
					<div class="ast">
						<!--<label style="margin-right:54px">City</label>-->
						<!--<input type="text" name="city" class="city" placeholder="Enter Your City" required="">-->
						<select name="city" class="form-control gender star" required="">
						<option value="">City</option>
						<option value="Al_Reyad">Al-Reyad</option>
						<option value="Afif">Afif</option>
						<option value="Abha">Abha</option>
						<option value="Al Bukayriyah">Al Bukayriyah</option> 
						<option value="Al-Hareeq">Al-Hareeq</option> 
						<option value="Al-Gwei'iyyah">Al-Gwei'iyyah</option> 
						<option value="Al-'Ula">Al-'Ula</option>
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
						<option value="Majma'ah">Majma'ah</option> 
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
<!--inner block end here-->
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


                      
						
