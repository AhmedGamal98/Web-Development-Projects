<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dreams Template">
    <meta name="keywords" content="Dreams, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="Drive/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/style.css" type="text/css">
	<link rel="stylesheet" href="css/front.css" type="text/css">
	
	
	<!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	
	
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__search">
            <i class="fa fa-search search-switch"></i>
        </div>
        <div class="offcanvas__logo">
            <a style="color: #FFF" href="./index.html"><i class="fa fa-car"></i> Women’s Drive Training System</a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                 <li class="active"><a href="homepage">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="information.php">Information</a></li>
				<li><a href="#">Packages</a></li>
				<li><a href="#">Trainners</a></li>
				<li><a href="test.php">Tests</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
            <a href="login.php" class="primary-btn">Get Started</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a style="color: #FFF" href="homepage.php"><i class="fa fa-car"></i> Women’s Drive Training System</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <nav class="header__menu" style="width:800px">
                        <ul>
                            <li><a href="homepage.php">Home</a></li>
                            <li><a href="homepage.php">About Us</a></li>
							<li><a href="info.php">Information</a></li>
							<li><a href="packages.php">Packages</a></li>
							<li><a href="trainners.php">Trainners</a></li>
							<li><a href="tests.php">Tests</a></li>
                            <!--<li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./instructor.html">Instructor</a></li>
                                    <li><a href="./pricing.html">Pricing</a></li>
                                    <li><a href="./faq.html">FAQ</a></li>
                                    <li><a href="./course-details.html">Course Details</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </nav>
                </div>
                <!--<div class="col-lg-5">
                    <div class="header__right">
                        <div class="header__right__btn">
                            <a href="login.php" class="primary-btn">Get Started</a>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
<?php

   //session_start();

    include('connect.php');
    $fname = $_POST["first"];
    $lname = $_POST["last"];
    $email = $_POST["email"];
    $password1 = $_POST["password"];
	$password2 = $_POST["password1"];
	$hashedPass1 = sha1($password1);	
	$hashedPass2 = sha1($password2);
	$phone = $_POST["phone"];
	$type = $_POST["type"];
	
if($type == 1){
	
if($hashedPass1 == $hashedPass2){
	
$sql=$con->prepare("SELECT * FROM trainner WHERE 
 Email=? AND Password=?");
$sql->execute(array($email,$hashedPass1));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $hashedPass1 != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM  trainner");
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
	<div class="container" style="margin-bottom:50px;height:auto">
      <div class="card card-register mx-auto mt-5">
        <div style="background-color:#F3BD00;color:#FFF" class="card-header">Register an Account</div>
        <div class="card-body login">
          <form action="signup-conn.php" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="firstName" name="first" class="form-control first" required="required" autofocus="autofocus">
					<i class="fa fa-check check"></i>
					<i class="fa fa-close close"></i>
					<div class="alert alert-danger empty-alert">Please Fill Your <strong>First Name</strong></div>
					<div class="alert alert-danger number-alert">Please First Name Must Be Contains <strong>Characters Only</strong></div>	  
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="lastName" name="last" class="form-control last" required="required">
					<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>Last Name</strong></div>
						<div class="alert alert-danger number-alert">Please Last Name Must Be Contains <strong>Characters Only</strong></div>	  
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group ast">
                <input type="email" id="inputEmail" name="email" class="form-control email"  required="required">
				  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Email</strong></div>
						<div class="alert alert-danger long-alert">Please Your E-mail Must Be Contains <strong>@</strong></div>
						<div class="alert alert-danger custom-alert">Please Your E-mail Must Be Contains <strong>.com</strong></div>
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="password" id="inputPassword" name="password" class="form-control password" required="required">
					  <i class="fa fa-check check check-pass"></i>
						<i class="fa fa-close close close-pass"></i>
						<i class="show-pass fa fa-eye fa-2x"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Password</strong></div>
						<div class="alert alert-danger long-alert">Please Password Must Be  <strong>6 digits</strong></div>
						<div class="alert alert-danger custom-alert">Please Password Must Be Contains<strong>One Uppercase Character</strong></div>
						<div class="alert alert-danger lower-alert">Please Password Must Be Contains<strong>One Lowercase Character</strong></div>
						<div class="alert alert-danger number-alert">Please Password Must Be Contains<strong>One Number</strong></div>
					    <div class="alert alert-info" style="margin-top:5px">Password Must Be Contains<strong>One Uppercase letter and one lowercase letter and one number</strong></div>
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="password" id="confirmPassword" name="password1" class="form-control password2"  required="required">
					  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Password Can\'t Be <strong></strong>Empty</div>
						<div class="alert alert-danger long-alert">Password doesn\'t <strong>Match</strong>
						</div>
						<div class="alert alert-info" style="margin-top:5px">Password Must Be Contains<strong>One Uppercase letter and one lowercase letter and one number</strong></div>
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
				<div class="col-md-12" style="margin-top:10px">
					<div class="form-group">
					  <div class="form-label-group">
						  <select type="password" id="inputType" name="type" class="form-control" required="required">
							  <option value="0">Type</option>
							  <option value="1">Trainner</option>
							  <option value="2">Trainee</option>
						  </select>
					  </div>
					</div>
				</div>
				<div class="col-md-12" style="margin-top:10px">
					<div class="form-group">
					  <div class="form-label-group ast">
						  <input type="text" id="phone" name="phone" class="form-control phone"  required="required">
						  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Phone Number</strong></div>
						<div class="alert alert-danger long-alert">Please Phone Number Must Contains  <strong>10 digits only</strong></div>
						<div class="alert alert-danger custom-alert">Please Phone Number Must be Contains  <strong>Numbers Only</strong></div>
						<div class="alert alert-danger zero-alert">Please Phone Number Must Be Start <strong>05 Numbers</strong></div>
                          <label for="phone">Phone Number</label>
					  </div>
					</div>
				</div>  
              </div>
            </div>
            <input style="background-color:#F3BD00;border:none" type="submit" class="btn btn-primary btn-block" value="Register"/>
          </form>
          <div class="text-center">
            <a style="color:#F3BD00" class="d-block small mt-3" href="signin.php">Login Page</a>
            <a style="color:#F3BD00" class="d-block small" href="reset-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
	 
							
';
        }
        
    }
    
} else{
	

	
	  $sql = "INSERT INTO trainner (Firstname , Lastname, Email, Phone , Password) VALUES ('$fname' , '$lname', '$email', '$phone', '$hashedPass1')";

      $con->exec($sql);
    
	
      //header('Location:login.php');
	
	  echo '
			
	  
	<div class="container" style="margin-top:50px">
	  <div class="alert alert-info role="alert">
		  <strong>Done!</strong> You Are Registered Successfully. You are now in request list wait until admin accept you.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
    </div>
	</div>  
	<div class="container" style="margin-bottom:50px;height:auto">
      <div class="card card-register mx-auto mt-5">
        <div style="background-color:#F3BD00;color:#FFF" class="card-header">Register an Account</div>
        <div class="card-body login">
          <form action="signup-conn.php" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="firstName" name="first" class="form-control first"  required="required" autofocus="autofocus">
					<i class="fa fa-check check"></i>
					<i class="fa fa-close close"></i>
					<div class="alert alert-danger empty-alert">Please Fill Your <strong>First Name</strong></div>
					<div class="alert alert-danger number-alert">Please First Name Must Be Contains <strong>Characters Only</strong></div>	  
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="lastName" name="last" class="form-control last" required="required">
					<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>Last Name</strong></div>
						<div class="alert alert-danger number-alert">Please Last Name Must Be Contains <strong>Characters Only</strong></div>	  
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group ast">
                <input type="email" id="inputEmail" name="email" class="form-control email"  required="required">
				  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Email</strong></div>
						<div class="alert alert-danger long-alert">Please Your E-mail Must Be Contains <strong>@</strong></div>
						<div class="alert alert-danger custom-alert">Please Your E-mail Must Be Contains <strong>.com</strong></div>
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="password" id="inputPassword" name="password" class="form-control password"  required="required">
					  <i class="fa fa-check check check-pass"></i>
						<i class="fa fa-close close close-pass"></i>
						<i class="show-pass fa fa-eye fa-2x"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Password</strong></div>
						<div class="alert alert-danger long-alert">Please Password Must Be  <strong>6 digits</strong></div>
						<div class="alert alert-danger custom-alert">Please Password Must Be Contains<strong>One Uppercase Character</strong></div>
						<div class="alert alert-danger lower-alert">Please Password Must Be Contains<strong>One Lowercase Character</strong></div>
						<div class="alert alert-danger number-alert">Please Password Must Be Contains<strong>One Number</strong></div>
					    <div class="alert alert-info" style="margin-top:5px">Password Must Be Contains<strong>One Uppercase letter and one lowercase letter and one number</strong></div>
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="password" id="confirmPassword" name="password1" class="form-control password2"  required="required">
					  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Password Can\'t Be <strong></strong>Empty</div>
						<div class="alert alert-danger long-alert">Password doesn\'t <strong>Match</strong></div>
						<div class="alert alert-info" style="margin-top:5px">Password Must Be Contains<strong>One Uppercase letter and one lowercase letter and one number</strong></div>
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
				<div class="col-md-12" style="margin-top:10px">
					<div class="form-group">
					  <div class="form-label-group">
						  <select type="password" id="inputType" name="type" class="form-control" required="required">
							  <option value="0">Type</option>
							  <option value="1">Trainner</option>
							  <option value="2">Trainee</option>
						  </select>
					  </div>
					</div>
				</div>
				<div class="col-md-12" style="margin-top:10px">
					<div class="form-group">
					  <div class="form-label-group ast">
						  <input type="text" id="phone" name="phone" class="form-control phone"  required="required">
						  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Phone Number</strong></div>
						<div class="alert alert-danger long-alert">Please Phone Number Must Contains  <strong>10 digits only</strong></div>
						<div class="alert alert-danger custom-alert">Please Phone Number Must be Contains  <strong>Numbers Only</strong></div>
						<div class="alert alert-danger zero-alert">Please Phone Number Must Be Start <strong>05 Numbers</strong></div>
                          <label for="phone">Phone Number</label>
					  </div>
					</div>
				</div>  
              </div>
            </div>
            <input style="background-color:#F3BD00;border:none" type="submit" class="btn btn-primary btn-block" value="Register"/>
          </form>
          <div class="text-center">
            <a style="color:#F3BD00" class="d-block small mt-3" href="signin.php">Login Page</a>
            <a style="color:#F3BD00" class="d-block small" href="reset-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
	 
							
';
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
}
}elseif($type == 2){
	
	
	
if($hashedPass1 == $hashedPass2){
	
$sql=$con->prepare("SELECT * FROM trainee WHERE 
 Email=? AND Password=?");
$sql->execute(array($email,$hashedPass1));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $hashedPass1 != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM  trainee");
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
	<div class="container" style="margin-bottom:50px;height:auto">
      <div class="card card-register mx-auto mt-5">
        <div style="background-color:#F3BD00;color:#FFF" class="card-header">Register an Account</div>
        <div class="card-body login">
          <form action="signup-conn.php" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="firstName" name="first" class="form-control first" placeholder="First name" required="required" autofocus="autofocus">
					<i class="fa fa-check check"></i>
					<i class="fa fa-close close"></i>
					<div class="alert alert-danger empty-alert">Please Fill Your <strong>First Name</strong></div>
					<div class="alert alert-danger number-alert">Please First Name Must Be Contains <strong>Characters Only</strong></div>	  
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="lastName" name="last" class="form-control last" placeholder="Last name" required="required">
					<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>Last Name</strong></div>
						<div class="alert alert-danger number-alert">Please Last Name Must Be Contains <strong>Characters Only</strong></div>	  
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group ast">
                <input type="email" id="inputEmail" name="email" class="form-control email" placeholder="Email address" required="required">
				  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Email</strong></div>
						<div class="alert alert-danger long-alert">Please Your E-mail Must Be Contains <strong>@</strong></div>
						<div class="alert alert-danger custom-alert">Please Your E-mail Must Be Contains <strong>.com</strong></div>
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="password" id="inputPassword" name="password" class="form-control password" placeholder="Password" required="required">
					  <i class="fa fa-check check check-pass"></i>
						<i class="fa fa-close close close-pass"></i>
						<i class="show-pass fa fa-eye fa-2x"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Password</strong></div>
						<div class="alert alert-danger long-alert">Please Password Must Be  <strong>6 digits</strong></div>
						<div class="alert alert-danger custom-alert">Please Password Must Be Contains<strong>One Uppercase Character</strong></div>
						<div class="alert alert-danger lower-alert">Please Password Must Be Contains<strong>One Lowercase Character</strong></div>
						<div class="alert alert-danger number-alert">Please Password Must Be Contains<strong>One Number</strong></div>
					    <div class="alert alert-info" style="margin-top:5px">Password Must Be Contains<strong>One Uppercase letter and one lowercase letter and one number</strong></div>
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="password" id="confirmPassword" name="password1" class="form-control password2" placeholder="Confirm password" required="required">
					  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Password Can\'t Be <strong></strong>Empty</div>
						<div class="alert alert-danger long-alert">Password doesn\'t <strong>Match</strong></div>
						<div class="alert alert-info" style="margin-top:5px">Password Must Be Contains<strong>One Uppercase letter and one lowercase letter and one number</strong></div>
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
				<div class="col-md-12" style="margin-top:10px">
					<div class="form-group">
					  <div class="form-label-group">
						  <select type="password" id="inputType" name="type" class="form-control" required="required">
							  <option value="0">Type</option>
							  <option value="1">Trainner</option>
							  <option value="2">Trainee</option>
						  </select>
					  </div>
					</div>
				</div>
				<div class="col-md-12" style="margin-top:10px">
					<div class="form-group">
					  <div class="form-label-group ast">
						  <input type="text" id="phone" name="phone" class="form-control phone" placeholder="Phone Number" required="required">
						  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Phone Number</strong></div>
						<div class="alert alert-danger long-alert">Please Phone Number Must Contains  <strong>10 digits only</strong></div>
						<div class="alert alert-danger custom-alert">Please Phone Number Must be Contains  <strong>Numbers Only</strong></div>
						<div class="alert alert-danger zero-alert">Please Phone Number Must Be Start <strong>05 Numbers</strong></div>
                          <label for="phone">Phone Number</label>
					  </div>
					</div>
				</div>  
              </div>
            </div>
            <input style="background-color:#F3BD00;border:none" type="submit" class="btn btn-primary btn-block" value="Register"/>
          </form>
          <div class="text-center">
            <a style="color:#F3BD00" class="d-block small mt-3" href="signin.php">Login Page</a>
            <a style="color:#F3BD00" class="d-block small" href="reset-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
	 
							
';
        }
        
    }
    
} else{
	

	
	  $sql = "INSERT INTO trainee (Firstname , Lastname, Email, Phone , Password) VALUES ('$fname' , '$lname', '$email', '$phone' , '$hashedPass1')";

      $con->exec($sql);
    
	
      //header('Location:login.php');
	
	  echo '
			
	  
	<div class="container" style="margin-top:50px">
	  <div class="alert alert-info role="alert">
		  <strong>Done!</strong> You Are Registered Successfully. Welcome To You In Women’s Drive Training System
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
    </div>
	</div>  
	<div class="container" style="margin-bottom:50px;height:auto">
      <div class="card card-register mx-auto mt-5">
        <div style="background-color:#F3BD00;color:#FFF" class="card-header">Register an Account</div>
        <div class="card-body login">
          <form action="signup-conn.php" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="firstName" name="first" class="form-control first" placeholder="First name" required="required" autofocus="autofocus">
					<i class="fa fa-check check"></i>
					<i class="fa fa-close close"></i>
					<div class="alert alert-danger empty-alert">Please Fill Your <strong>First Name</strong></div>
					<div class="alert alert-danger number-alert">Please First Name Must Be Contains <strong>Characters Only</strong></div>	  
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="lastName" name="last" class="form-control last" placeholder="Last name" required="required">
					<i class="fa fa-check check"></i>
					    <i class="fa fa-close close"></i>
					    <div class="alert alert-danger empty-alert">Please Fill Your <strong>Last Name</strong></div>
						<div class="alert alert-danger number-alert">Please Last Name Must Be Contains <strong>Characters Only</strong></div>	  
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group ast">
                <input type="email" id="inputEmail" name="email" class="form-control email" placeholder="Email address" required="required">
				  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Email</strong></div>
						<div class="alert alert-danger long-alert">Please Your E-mail Must Be Contains <strong>@</strong></div>
						<div class="alert alert-danger custom-alert">Please Your E-mail Must Be Contains <strong>.com</strong></div>
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="password" id="inputPassword" name="password" class="form-control password" placeholder="Password" required="required">
					  <i class="fa fa-check check check-pass"></i>
						<i class="fa fa-close close close-pass"></i>
						<i class="show-pass fa fa-eye fa-2x"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Password</strong></div>
						<div class="alert alert-danger long-alert">Please Password Must Be  <strong>6 digits</strong></div>
						<div class="alert alert-danger custom-alert">Please Password Must Be Contains<strong>One Uppercase Character</strong></div>
						<div class="alert alert-danger lower-alert">Please Password Must Be Contains<strong>One Lowercase Character</strong></div>
						<div class="alert alert-danger number-alert">Please Password Must Be Contains<strong>One Number</strong></div>
					    <div class="alert alert-info" style="margin-top:5px">Password Must Be Contains<strong>One Uppercase letter and one lowercase letter and one number</strong></div>
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="password" id="confirmPassword" name="password1" class="form-control password2" placeholder="Confirm password" required="required">
					  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Password Can\'t Be <strong></strong>Empty</div>
						<div class="alert alert-danger long-alert">Password doesn\'t <strong>Match</strong></div>
						<div class="alert alert-info" style="margin-top:5px">Password Must Be Contains<strong>One Uppercase letter and one lowercase letter and one number</strong></div>
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
				<div class="col-md-12" style="margin-top:10px">
					<div class="form-group">
					  <div class="form-label-group">
						  <select type="password" id="inputType" name="type" class="form-control" required="required">
							  <option value="0">Type</option>
							  <option value="1">Trainner</option>
							  <option value="2">Trainee</option>
						  </select>
					  </div>
					</div>
				</div>
				<div class="col-md-12" style="margin-top:10px">
					<div class="form-group">
					  <div class="form-label-group ast">
						  <input type="text" id="phone" name="phone" class="form-control phone" placeholder="Phone Number" required="required">
						  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Phone Number</strong></div>
						<div class="alert alert-danger long-alert">Please Phone Number Must Contains  <strong>10 digits only</strong></div>
						<div class="alert alert-danger custom-alert">Please Phone Number Must be Contains  <strong>Numbers Only</strong></div>
						<div class="alert alert-danger zero-alert">Please Phone Number Must Be Start <strong>05 Numbers</strong></div>
                          <label for="phone">Phone Number</label>
					  </div>
					</div>
				</div>  
              </div>
            </div>
            <input style="background-color:#F3BD00;border:none" type="submit" class="btn btn-primary btn-block" value="Register"/>
          </form>
          <div class="text-center">
            <a style="color:#F3BD00" class="d-block small mt-3" href="signin.php">Login Page</a>
            <a style="color:#F3BD00" class="d-block small" href="reset-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
	 
							
';
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
}
	
	
	
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
         <footer class="footer">
        <div class="text-center">
			<div class="footer__copyright__text" style="border:none;margin-top:0;padding-top:0">
				<p>Copyright &copy; 2021 All rights reserved <a href="homepage.php" target="_blank"> Women’s Drive Training System</a></p>
			</div>
		</div>
    </footer>

    <!-- Js Plugins -->
    <script src="Drive/js/jquery-3.3.1.min.js"></script>
    <script src="Drive/js/bootstrap.min.js"></script>
    <script src="Drive/js/jquery.nice-select.min.js"></script>
    <script src="Drive/js/jquery.magnific-popup.min.js"></script>
    <script src="Drive/js/jquery-ui.min.js"></script>
    <script src="Drive/js/jquery.slicknav.js"></script>
    <script src="Drive/js/owl.carousel.min.js"></script>
    <script src="Drive/js/main.js"></script>
	<script src="js/front.js"></script>
	
	
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	
</body>

</html>