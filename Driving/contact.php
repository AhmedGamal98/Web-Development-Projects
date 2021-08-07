<?php

session_start();
if(isset($_SESSION["password"])){
	
	
$password = $_SESSION['password'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$type = $_SESSION['type'];	
if($type == "trainee"){
	
	$traineeid = $_SESSION['traineeid'];
	
}else{
	
	
	$trainnerid = $_SESSION['trainnerid'];
	
}	
	
}



?>
<!DOCTYPE html>
<html lang="zxx">
 <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;

}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dreams Template">
    <meta name="keywords" content="Dreams, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

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
                 <li class="active"><a href="homepage.php">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="information.php">Information</a></li>
				<li><a href="#">Packages</a></li>
				<li><a href="#">Trainners</a></li>
				<li><a href="test.php">Tests</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
       <?php
						
						
						if(isset($_SESSION["password"])){
						
						
						 if($type == "trainner"){
							 
							 
							 echo '<div class="header__right__btn">
                            <a href="trainner/profile.php" class="primary-btn">Your Profile</a>
                            </div>';
							 
							 
							 
						 }elseif($type == "trainee"){
							 
							 
							 
							 echo '<div class="header__right__btn">
                            <a href="trainee/profile.php" class="primary-btn">Your Profile</a>
                            </div>';
							 
						 }
						
						
						?>
	
                           
	                        
	                    <?php
                         }else{ ?>
							
							<div class="header__right__btn">
                            <a href="signin.php" class="primary-btn">get Started</a>
                            </div>
							
							
							
						<?php	
						}
						
						
						?>
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
                <div class="col-lg-5">
                    <div class="header__right">
                         <?php
						
						
						if(isset($_SESSION["password"])){
						
						
						 if($type == "trainner"){
							 
							 
							 echo '<div class="header__right__btn">
                            <a href="trainner/profile.php" class="primary-btn">Your Profile</a>
                            </div>';
							 
							 
							 
						 }elseif($type == "trainee"){
							 
							 
							 
							 echo '<div class="header__right__btn">
                            <a href="trainee/profile.php" class="primary-btn">Your Profile</a>
                            </div>';
							 
						 }
						
						
						?>
	
                           
	                        
	                    <?php
                         }else{ ?>
							
							<div class="header__right__btn">
                            <a href="signin.php" class="primary-btn">get Started</a>
                            </div>
							
							
							
						<?php	
						}
						
						
						?>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="homepage.php"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="contact__address">
                        <h4>Contact info</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <p>Soudia - Reyad</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <p><span>Mon - Sat : 8:00am - 5:00pm</span><span>Sunday: Closed</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="contact__form login">
                        <h4>Leave a message</h4>
                        <form action="contact.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 ast">
                                    <input type="text" class="first" name="fname" placeholder="First Name" readonly="">
									<i class="fa fa-check check"></i>
									<i class="fa fa-close close"></i>
									<div class="alert alert-danger empty-alert">Please Fill Your <strong>First Name</strong></div>
									<div class="alert alert-danger number-alert">Please First Name Must Be Contains <strong>Characters Only</strong></div>	
                                </div>
                                <div class="col-lg-6 ast">
                                    <input type="text" class="email" name="email" placeholder="Email" readonly="">
									<i class="fa fa-check check"></i>
									<i class="fa fa-close close"></i>
									<div class="alert alert-danger empty-alert">Please Fill Your <strong>Email</strong></div>
									<div class="alert alert-danger long-alert">Please Your E-mail Must Be Contains <strong>@</strong></div>
									<div class="alert alert-danger custom-alert">Please Your E-mail Must Be Contains <strong>.com</strong></div>
                                </div>
                            </div>
                            <div class="ast">
								<textarea class="first" placeholder="Your message" name="message" required=""></textarea>
								<div class="alert alert-danger empty-alert">Please Fill Your <strong>Message</strong></div>
								<div class="alert alert-danger number-alert">Please Mesage Must Be Contains <strong>Characters Only</strong></div>	
							</div>
                            <button type="submit" class="site-btn" name="contact">Send Message</button>
                        </form>
                        <?php
 
if(isset($_POST["contact"]))
{
echo '<script language="javascript">';
echo ' alert("Thanks, we hope that you like our services"); ';
echo 'window.location.href = "contact.php";';
echo '</script>';

}
?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
</body>

</html>