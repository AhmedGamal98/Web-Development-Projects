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

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dreams Template">
    <meta name="keywords" content="Dreams, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information</title>

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
	
	<style>
		.pagination__option .activ{
			
			background-color: #0C2B4B;
			color: #FFF
			
		}
		.blug ol li{
			
			margin-bottom: 50px
			
		}
	</style>
	
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
                <li><a href="homepage">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li class="active"><a href="info.php">Information</a></li>
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
							<li class="active"><a href="info.php">Information</a></li>
							<li><a href="packages.php">Packages</a></li>
							<li><a href="trainners.php">Trainners</a></li>
							<li><a href="tests.php">Tests</a></li>
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
                        <span>Information</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
				<div class="" style="width:1130px;height:500px">
					<img src="Drive/imgs/23.jpg" style="width:100%;height:80%" alt="">
				</div>
				<h3 style="font-weight:bold;color:#F3BD00;padding-bottom:30px;display:block">Topics 7 : Important advice to maintain the car Important tips for maintaining the car: 

</h3>
				
				<p style="color:#0C2B4B;margin-top:20px">
					
					It is known that the Arab countries, especially the Gulf countries, have high temperatures, especially in the summer, so the car must be preserved in hot weather to avoid any malfunctions. </p>
			
				<p>Continue to constantly supply your car with engine oil as it works to reduce the temperature of the engine by reducing the friction of parts with each other, as high temperatures increase the fluidity of the oil, which reduces its efficiency and exposes the engine to malfunctions, so always make sure to choose the oil with a high density and viscosity Or what your car dealer recommends. </p>
			
				
				<p>Do not forget to check the Freon gas inside the air conditioner periodically, and charge it when necessary.  </p>
				
				<p>In order not to be surprised by a complete breakdown in the car, you should check the efficiency of all car filters, whether for oil, air or fuel, and replace the damaged ones. </p>
				
				
				<p>In the winter the car is not affected much by the temperature, but you must clean it and the cables connected to it regularly in the summer. </p>
			
				
                <div class="col-lg-12" style="margin-top:50px">
                    <div class="pagination__option">
                        <a href="information.php">1</a>
                        <a href="information2.php">2</a>
                        <a href="information3.php">3</a>
						<a href="information4.php">4</a>
						<a href="information5.php">5</a>
                        <a href="information6.php">6</a>
						<a class="activ" href="information7.php">7</a>
                    </div>
                </div>
				
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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
</body>

</html>