<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dreams Template">
    <meta name="keywords" content="Dreams, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sign Us</title>


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
    <!-- Header Section End -->
<div class="container" style="margin-bottom:50px;height:auto">
      <div class="card card-register mx-auto mt-5">
        <div style="background-color:#F3BD00;color:#FFF" class="card-header">Register an Account</div>
        <div class="card-body login">
          <form action="signup-conn.php" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="firstName" name="first" class="form-control first"  required="required">
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
                <input type="email" id="inputEmail" name="email" class="form-control email" required="required">
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