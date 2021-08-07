<?php  

$do = isset($_GET['do'])?  $_GET['do'] : "Info";

session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login.php');


}

$id = $_SESSION['creatorid'];

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
<link href="layouts/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="layouts/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="layouts/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="layouts/css/font-awesome.css" rel="stylesheet"> 
<link href="layouts/css/daterangepicker.css" rel="stylesheet" type="text/css" media="all"/>		
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main" style="border-bottom:2px solid #000">
					<!--<div class="header-left">
							<div class="logo-name">
									 <a href="homepage.php"><img id="logo" src="layouts/images/logo.jpg" width="150px" height="70px" alt="Logo"/>
								  </a> 								
						    </div>
							<div class="clearfix"> </div>
						 </div>-->
						 <div class="header-right" style="height:75px">
							 <a href="profile.php" class="pull-right" style="text-decoration:none;font-size:26px;color:#B75E21;margin-left:15px;margin-top:0"><i class="fa fa-user"></i></a> 
							<?php
										   
							include('../connect.php');  						  
							 $stmt = $con->prepare("SELECT * FROM requests WHERE read_activity= ? AND creator_id= ?");
							 $stmt->execute(array(0 , $id));
							 $row = $stmt->fetch();
							 $count = $stmt->rowCount();
							 
							 if($count > 0){

							if($row["read_activity"] == 0 && $count > 0){

						 
							 echo '<a class="pull-right" style="font-size:24px;margin-top:0" href="requisition.php"><i class="fa fa-bell"></i><span class="badge blue">' . $count . '</span></a>';
							 
							 }else{
								
								echo '<a class="pull-right" style="font-size:24px;margin-top:0" href="requisition.php"><i class="fa fa-bell"></i></a>';
								
							}
							 }else{
								 
								 
								 echo '<a class="pull-right" style="font-size:24px;margin-top:0" href="requisition.php"><i class="fa fa-bell"></i></a>';
								 
							 }
							 
							 ?>
							 <!--<div class="profile_details_left"><!--notifications of menu start
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="requisition.php?do=Show_request&investorid=1">
												<div class="user_img"><img src="layouts/images/avatar.jpeg" width="60px" height="50px" style="border-radius:50%" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="requisition.php?do=Show_request&investorid=1">
												<div class="user_img"><img src="layouts/images/avatar.jpeg" width="60px" height="50px" style="border-radius:50%" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="requisition.php?do=Show_request&investorid=1">
												<div class="user_img"><img src="layouts/images/avatar.jpeg" width="60px" height="50px" style="border-radius:50%" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>		
								</ul>
								<div class="clearfix"> </div>
							</div>-->
							 <!--<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="layouts/images/avatar.jpeg" width="50px" height="50px" style="border-radius:50%" alt=""> </span> 
												<div class="user-name">
													<p>Ahmed</p>
													<span>Creator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="../homepage.php"><i class="fa fa-cogs"></i> Fursah</a> </li> 
											<li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="../login.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>-->
							 
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block" style="margin-left:50px;margin-top:30px">
   <div class="boost-icons">
	   
	   <?php if($do == "Info"){ 
	   
	   
	 include('../connect.php');  						  
	 $stmt = $con->prepare("SELECT * FROM creator WHERE nationalid= ? LIMIT 1");
	 $stmt->execute(array($id));
	 $row = $stmt->fetch();
	 $count = $stmt->rowCount();				  
							  
	if($count > 0){
	   
	   
	   
	   
	   ?>

<div class="inner-block" style="margin-top:0;padding-top:0">
    <div class="inbox">
		  <i class="fa fa-user fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">Account Information</h2>
			  <span style="display:block;margin-left:70px">Creator</span>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Update" method="post">
					  <input class="form-control" type="hidden" name="creatorid" autocomplete="off" value="<?php echo $id; ?>" required/>
					  <div class="details">
						  <div class="col-md-7">
							  <div class="in">
								  <label>First Name</label>
								  <input class="form-control" type="text" name="first" autocomplete="off" value="<?php echo $row["Fname"]; ?>" required/>
							  </div>
							  <div class="in">
								  <label>Last Name</label>
								  <input class="form-control" type="text" name="last" autocomplete="off" value="<?php echo $row["Lname"]; ?>" required/>
							  </div>
							  <div class="in">
								  <label>ID</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
								  <?php
								 	if($row['id_check'] == 0) {
										echo'<input type="checkbox" name="id_check" value="1" class="custom-control-input" id="custom-switch-1">';
									 }else{
										echo'<input type="checkbox" name="id_check" value="0" class="custom-control-input" id="custom-switch-1" checked>';
									 }
								  ?>
										
										<label class="custom-control-label" for="custom-switch-1"></label>
								  </div>
								  <input class="form-control" type="text" name="id" autocomplete="off" value="<?php echo $row["nationalid"]; ?>" required/>
							  </div>
							  <div class="in">
								  <label>Age</label>
								  <input class="form-control" type="date" name="age" autocomplete="off" value="<?php echo $row["Age"]; ?>"/>
							  </div>
							  <div class="in">
								  <label>Email</label>
								  <input class="form-control" type="email" name="email" autocomplete="off" value="<?php echo $row["Email"]; ?>" required/>
							  </div>
							  <div class="in">
								  <label>Gender</label>
								  <select class="form-control" name="gender" required>
									  <?php
		                               
		                              if($row["Gender"] == "Male"){ 
		
		                              ?>
									  <option selected value="Male">Male</option>
									  <option value="Female">Female</option>
									  <?php }elseif($row["Gender"] == "Female"){ ?>
									  <option value="Male">Male</option>
									  <option selected value="Female">Female</option>
									  <?php } ?>
								  </select>
							  </div>
							  <div class="in">
								  <label>City</label>
								  <input class="form-control" type="text" name="city" autocomplete="off" value="<?php echo $row["City"]; ?>" required/>
								<!--<select name="city" class="form-control gender star" required="">
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
							 </select>-->
							  </div>
							  <div class="in">
								  <label>Phone Number</label>
								  <input class="form-control" type="tel" name="phone" autocomplete="off" value="<?php echo $row["PhoneNum"]; ?>" required/>
							  </div>
							  <div class="in">
								  <label>Password</label>
								  <input class="form-control" type="hidden" name="old-password" autocomplete="off" value="<?php echo $row["Password"]; ?>" required/>
								  <input class="form-control" type="password" name="password" autocomplete="off"/>
							  </div>
							  <div class="in">
								  <label>Bio</label>
								   <!-- Switch -->
								  <div class="custom-control custom-switch">
								  <?php
								 	if($row['bio_check'] == 0) {
										echo'<input type="checkbox" name="bio_check" value="1" class="custom-control-input" id="custom-switch-3">';
									 }else{
										echo'<input type="checkbox" name="bio_check" value="0" class="custom-control-input" id="custom-switch-3" checked>';
									 }
								  ?>
										
										
										<label class="custom-control-label" for="custom-switch-3"></label>
								  </div>
								  <textarea class="form-control" name="bio" required><?php echo $row["Bio"]; ?></textarea>
						    </div>
						  </div>
					  </div>
					 
					  <div class="buttons pull-right">
						  <!--<button style="border:1px solid #D68910;color:#D68910" type="submit" name="edit" class="btn btn-primary edit">Edit</button>-->
						  <button style="border:1px solid #D68910;color:#D68910" type="submit" name="save" class="btn btn-primary edit">Save</button>
						  <a style="border:1px solid #D68910;color:#D68910" href="" class="btn btn-danger cancel">Cancel</a>
					  </div>
				  </form>
			  </div>
		  </div>
          <div class="clearfix"> </div>     
    </div>
</div>
	   
	   <?php } ?>
	   
	   <?php  }elseif($do == "Update"){
		
		 
	       include('../connect.php');  
     	//echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			//Get Varaiables from Post Method
			
			$id       = $_POST["creatorid"];
			$first    = $_POST["first"];
			$last     = $_POST["last"];
			$email    = $_POST["email"];
			$phone  = $_POST["phone"];
			$age    = $_POST["age"];
			$city = $_POST["city"];
			$gender = $_POST["gender"];
			$bio = $_POST["bio"];
			
			if(isset($_POST["id_check"])){
				$id_c = 1;
			}else{
				$id_c =0;
			}
			if(isset($_POST["bio_check"])){
				$bio_c = 1;
			}else{
				$bio_c =0;
			}

			/*if(isset($_POST["cv_check"])){
				$cv_c = 1;
			}else{
				$cv_c =0;
			}*/

		
				
			
			
			
			
			$nationalid = $_POST["id"];
			//$cv = $_POST["cv"];
			
			//Password Trick
			
		   //$pass = empty($_POST['new-password']) ? $_POST['old-password'] : sha1($_POST['new-password']);
			
			if(empty($_POST['password'])){
				
				$password = $_POST['old-password'];
				
			}else{
				
				$password = sha1($_POST['password']);
			}
			
			
			//Validate Form By Server site
			
			$formErrors = array();
			
			if(empty($first)){
				
				$formErrors[] = "First Name Must Be Written";
				
			}
			if(empty($last)){
				
				$formErrors[] = "Last Name Must Be Written";
				
			}
			if(empty($bio)){
				
				$formErrors[] = "Your Bio Must Be Written";
				
			}
			if(empty($age)){
				
				$formErrors[] = "Age Must Be Written";
				
			}
			if(empty($city)){
				
				$formErrors[] = "City Must Be Written";
				
			}
			if(empty($phone)){
				
				$formErrors[] = "Phone Number Must Be Written";
				
			}
			if(empty($nationalid)){
				
				$formErrors[] = "National ID Must Be Written";
				
			}
			
			//Loop into errors array and echo it
			
			foreach($formErrors as $error){
				
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM creator WHERE nationalid= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				
				
				echo "<div style='margin-left:20px' class='alert alert-danger'>" . $error . "
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
				</div>";
				
				echo '<div class="inner-block" style="margin-top:0;padding-top:0">
    <div class="inbox">
		  <i class="fa fa-user fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">Account Information</h2>
			  <span style="display:block;margin-left:70px">Creator</span>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Update" method="post">
					  <input class="form-control" type="hidden" name="creatorid" autocomplete="off" value="' . $id . '"/>
					  <div class="details">
						  <div class="col-md-7">
							  <div class="in">
								  <label>First Name</label>
								  <input class="form-control" type="text" name="first" autocomplete="off" value="' . $row["Fname"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Last Name</label>
								  <input class="form-control" type="text" name="last" autocomplete="off" value="' . $row["Lname"] . '" required/>
							  </div>
							  <div class="in">
								  <label>ID</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
								  <input type="checkbox" name="id_check" value="1" class="custom-control-input" id="custom-switch-1">
										<label class="custom-control-label" for="custom-switch-1"></label>
								  </div>
								  <input class="form-control" type="text" name="id" autocomplete="off" value="' . $row["nationalid"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Age</label>
								  <input class="form-control" type="date" name="age" autocomplete="off" value="' . $row["Age"] . '"/>
							  </div>
							  <div class="in">
								  <label>Email</label>
								  <input class="form-control" type="email" name="email" autocomplete="off" value="' . $row["Email"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Gender</label>
								  <select class="form-control" name="gender" required>';
									 
		                               
		                              if($row["Gender"] == "Male"){ 
		
		                              
									  echo '<option selected value="Male">Male</option>
									  <option value="Female">Female</option>';
									   }elseif($row["Gender"] == "Female"){
									  echo '<option value="Male">Male</option>
									  <option selected value="Female">Female</option>';
									  }
								  echo '</select>
							  </div>
							  <div class="in">
								  <label>City</label>
								  <input class="form-control" type="text" name="city" autocomplete="off" value="' . $row["City"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Phone Number</label>
								  <input class="form-control" type="tel" name="phone" autocomplete="off" value="' . $row["PhoneNum"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Password</label>
								  <input class="form-control" type="password" name="password" autocomplete="off" value="' . $row["Password"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Bio</label>
								   <!-- Switch -->
								  <div class="custom-control custom-switch">
								  <input type="checkbox" name="bio_check" value="1" class="custom-control-input" id="custom-switch-3">
										<label class="custom-control-label" for="custom-switch-3"></label>
								  </div>
								  <textarea class="form-control" name="bio" required>' . $row["Bio"] . '</textarea>
						    </div>
						  </div>
					  </div>
					 
					  <div class="buttons pull-right">
						  <!--<button style="border:1px solid #D68910;color:#D68910" type="submit" name="edit" class="btn btn-primary edit">Edit</button>-->
						  <button style="border:1px solid #D68910;color:#D68910" type="submit" name="save" class="btn btn-primary edit">Save</button>
						  <a style="border:1px solid #D68910;color:#D68910" href="" class="btn btn-danger cancel">Cancel</a>
					  </div>
				  </form>
			  </div>
		  </div>
          <div class="clearfix"> </div>     
    </div>
</div>';
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Update the Database with this info
				
				$stmt2 = $con->prepare("SELECT * FROM creator WHERE Email = ? AND nationalid != ?");
				
				$stmt2->execute(array( $email , $id));
				
				$count = $stmt2->rowCount();
				
				if($count > 0){
					
					
				 //include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM creator WHERE nationalid= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
					
					
		   echo "<div style='margin-left:20px' class='alert alert-danger'>
		   
		   These Values are Found Before Please Try Again
		   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
		   </div>";
					
			echo '<div class="inner-block" style="margin-top:0;padding-top:0">
    <div class="inbox">
		  <i class="fa fa-user fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">Account Information</h2>
			  <span style="display:block;margin-left:70px">Creator</span>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Update" method="post">
					  <input class="form-control" type="hidden" name="creatorid" autocomplete="off" value="' . $id . '"/>
					  <div class="details">
						  <div class="col-md-7">
							  <div class="in">
								  <label>First Name</label>
								  <input class="form-control" type="text" name="first" autocomplete="off" value="' . $row["Fname"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Last Name</label>
								  <input class="form-control" type="text" name="last" autocomplete="off" value="' . $row["Lname"] . '" required/>
							  </div>
							  <div class="in">
								  <label>ID</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
								  <input type="checkbox" name="id_check" value="1" class="custom-control-input" id="custom-switch-1">
										<label class="custom-control-label" for="custom-switch-1"></label>
								  </div>
								  <input class="form-control" type="text" name="id" autocomplete="off" value="' . $row["nationalid"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Age</label>
								  <input class="form-control" type="date" name="age" autocomplete="off" value="' . $row["Age"] . '"/>
							  </div>
							  <div class="in">
								  <label>Email</label>
								  <input class="form-control" type="email" name="email" autocomplete="off" value="' . $row["Email"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Gender</label>
								  <select class="form-control" name="gender" required>';
									   if($row["Gender"] == "Male"){ 
		
		                              
									  echo '<option selected value="Male">Male</option>
									  <option value="Female">Female</option>';
									   }elseif($row["Gender"] == "Female"){
									  echo '<option value="Male">Male</option>
									  <option selected value="Female">Female</option>';
									  }
								  echo '</select>
							  </div>
							  <div class="in">
								  <label>City</label>
								  <input class="form-control" type="text" name="city" autocomplete="off" value="' . $row["City"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Phone Number</label>
								  <input class="form-control" type="tel" name="phone" autocomplete="off" value="' . $row["PhoneNum"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Password</label>
								  <input class="form-control" type="password" name="password" autocomplete="off" value="' . $row["Password"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Bio</label>
								   <!-- Switch -->
								  <div class="custom-control custom-switch">
								  <input type="checkbox" name="bio_check" value="1" class="custom-control-input" id="custom-switch-3">
										<label class="custom-control-label" for="custom-switch-3"></label>
								  </div>
								  <textarea class="form-control" name="bio" required>' . $row["Bio"] . '</textarea>
						    </div>
						  </div>
					  </div>
					 
					  <div class="buttons pull-right">
						  <!--<button style="border:1px solid #D68910;color:#D68910" type="submit" name="edit" class="btn btn-primary edit">Edit</button>-->
						  <button style="border:1px solid #D68910;color:#D68910" type="submit" name="save" class="btn btn-primary edit">Save</button>
						  <a style="border:1px solid #D68910;color:#D68910" href="" class="btn btn-danger cancel">Cancel</a>
					  </div>
				  </form>
			  </div>
		  </div>
          <div class="clearfix"> </div>     
    </div>
</div>';
					
					
				}else{
					
						/*if(empty($_POST['cv'])){
							$b =0;*/
							$stmt = $con->prepare("UPDATE creator SET Fname = ?, Lname = ? , Email = ? , Age = ?, PhoneNum = ?, Password = ? , Bio = ? , City = ?, Gender = ? , bio_check = ? , id_check=?  WHERE nationalid = ?");
							$stmt->execute(array($first , $last , $email , $age , $phone , $password , $bio , $city , $gender ,$bio_c,$id_c,  $id));
		
							/*}else{
		
							$stmt = $con->prepare("UPDATE creator SET Fname = ?, Lname = ? , Email = ? , Age = ?, PhoneNum = ?, Password = ? , Bio = ? , CV = ? , City = ? , Gender = ? , bio_check = ?,cv_check=? ,id_check=?  WHERE nationalid = ?");
							$stmt->execute(array($first , $last , $email , $age , $phone , $password , $bio , $cv , $city , $gender , $bio_c,$cv_c,$id_c,  $id));
							}*/
					
					
					
					
					
					

					// echo success message
					
					
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM creator WHERE nationalid= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();

					echo '<div style="margin-left:20px" class="alert alert-success">
					Updated Successfully For Your Data
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="inner-block" style="margin-top:0;padding-top:0">
    <div class="inbox">
		  <i class="fa fa-user fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">Account Information</h2>
			  <span style="display:block;margin-left:70px">Creator</span>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Update" method="post">
					  <input class="form-control" type="hidden" name="creatorid" autocomplete="off" value="' . $id . '"/>
					  <div class="details">
						  <div class="col-md-7">
							  <div class="in">
								  <label>First Name</label>
								  <input class="form-control" type="text" name="first" autocomplete="off" value="' . $row["Fname"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Last Name</label>
								  <input class="form-control" type="text" name="last" autocomplete="off" value="' . $row["Lname"] . '" required/>
							  </div>
							  <div class="in">
								  <label>ID</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">';
								  if($row['id_check'] == 0) {
									echo'<input type="checkbox" name="id_check" value="1" class="custom-control-input" id="custom-switch-1">';
								 }else{
									echo'<input type="checkbox" name="id_check" value="0" class="custom-control-input" id="custom-switch-1" checked>';
								 }
										echo'
										<label class="custom-control-label" for="custom-switch-1"></label>
								  </div>
								  <input class="form-control" type="text" name="id" autocomplete="off" value="' . $row["nationalid"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Age</label>
								  <input class="form-control" type="date" name="age" autocomplete="off" value="' . $row["Age"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Email</label>
								  <input class="form-control" type="email" name="email" autocomplete="off" value="' . $row["Email"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Gender</label>
								  <select class="form-control" name="gender">';
									   if($row["Gender"] == "Male"){ 
		
		                              
									  echo '<option selected value="Male">Male</option>
									  <option value="Female">Female</option>';
									   }elseif($row["Gender"] == "Female"){
									  echo '<option value="Male">Male</option>
									  <option selected value="Female">Female</option>';
									  }
								  echo '</select>
							  </div>
							  <div class="in">
								  <label>City</label>
								  <input class="form-control" type="text" name="city" autocomplete="off" value="' . $row["City"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Phone Number</label>
								  <input class="form-control" type="tel" name="phone" autocomplete="off" value="' . $row["PhoneNum"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Password</label>
								  <input class="form-control" type="password" name="password" autocomplete="off" value="' . $row["Password"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Bio</label>
								   <!-- Switch -->
								  <div class="custom-control custom-switch">';
								  if($row['bio_check'] == 0) {
									echo'<input type="checkbox" name="bio_check" value="1" class="custom-control-input" id="custom-switch-3">';
								 }else{
									echo'<input type="checkbox" name="bio_check" value="0" class="custom-control-input" id="custom-switch-3" checked>';
								 }
								 echo'
										<label class="custom-control-label" for="custom-switch-3"></label>
								  </div>
								  <textarea class="form-control" name="bio" required>' . $row["Bio"] . '</textarea>
						    </div>
						  </div>
					  </div>
					  
					  <div class="buttons pull-right">
						  <!--<button style="border:1px solid #D68910;color:#D68910" type="submit" name="edit" class="btn btn-primary edit">Edit</button>-->
						  <button style="border:1px solid #D68910;color:#D68910" type="submit" name="save" class="btn btn-primary edit">Save</button>
						  <a style="border:1px solid #D68910;color:#D68910" href="" class="btn btn-danger cancel">Cancel</a>
					  </div>
				  </form>
			  </div>
		  </div>
          <div class="clearfix"> </div>     
    </div>
</div>';
					
				}
				
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>You can not Browse This Page</div>";
			
		}
		
		//echo "</div>";
	
		
		
		
		}elseif($do == "Save"){ ?>
		
		
		    <div class="container">
				<div class="alert alert-danger">Deleted Successfully</div>
	        </div>
		
		
		<?php } ?>
	   
     </div>
</div>
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		    <a style="height:200px"  href="../homepage.php"><img id="logo" src="layouts/images/logo.jpg" width="66%" height="70px" style="margin-top:10px;margin-left:16px;margin-top:16px" alt="Logo"/></a>
		    <hr style="border-bottom:2px solid #000;margin-bottom:0">
		    <div class="menu">
		      <ul id="menu" >
		        <li class="activ"><a href="profile.php"><i class="fa fa-user"></i><span>My Account Information</span></a></li>
		        <li><a href="ideas.php"><i class="fa fa-lightbulb-o"></i><span>Ideas</span></a></li>
		        <li><a href="requisition.php"><i class="fa fa-envelope-o"></i><span>My Requisition Lists</span></a></li>
				  <li><a href="applications.php"><i class="fa fa-envelope"></i><span>My Application Lists</span></a></li>
				  <li><a href="../homepage.php"><i class="fa fa-home"></i><span>My Home Page</span></a></li>
				  <li><a href="chat.php"><i class="fa fa-comments"></i><span>Chat</span></a></li>
				  <li><a href="../logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
		      </ul>
		    </div>
	 </div>	
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<!--scrolling js-->
		<script src="layouts/js/jquery.nicescroll.js"></script>
		<script src="layouts/js/scripts.js"></script>
	    <script src="layouts/js/moment.min.js"></script>
	    <script src="layouts/js/daterangepicker.js"></script>
	    <script src="layouts/js/global.js"></script>
		<!--//scrolling js-->
<script src="layouts/js/bootstrap.js"> </script>
	
<!-- mother grid end here-->
</body>
</html>


                      
						
