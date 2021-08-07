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
					<img src="Drive/imgs/14.jpg" style="width:100%;height:80%" alt="">
				</div>
				<h3 style="font-weight:bold;color:#F3BD00;padding-bottom:30px;display:block">Topic 2: The Basics of Learning to Drive a Car</h3>
				<h3 style="font-weight:bold;color:#0C2B4B;margin-right:30px">Lifestyle • One-Eyed Jocelyn • 30.10.2020
                </h3>
				<h3 style="font-weight:bold;color:#0C2B4B">The basics of learning to drive a car</h3>
				<p style="color:#0C2B4B;margin-top:20px">
					
					It is necessary to know the basics of learning to drive a car, after learning the traffic signs and laws that we must follow on the roads, to avoid traffic accidents, and most importantly, in the beginning, knowing that driving a car is not difficult for women</p>
				  	
				<p>In this article, we will explain to you the basics of learning to drive, bearing in mind that beginners should seek the help of those with experience.</p>
				
				<h3 style="font-weight:bold;color:#F3BD00;padding-bottom:30px">The most important basics for beginners in the world of car driving are:</h3>
				
				<p>First, you have to know the driving devices in the car: the three pedals: the right for the gasoline, the ones in the half for the brakes, and the one in the left for the brake. These pedals are the basis for controlling the car by two legs.</p>
				
				<p>The steering wheel, hand brake and transmission, with this the car is hand-operated.</p>
				<p>Secondly, and before starting the car, you must make sure of your sitting position, as well as check the interior and the two mirrors outside the car, so that you are aware of everything that happens outside the car and see cars, pedestrians and the road.</p>
				
				<p>When operating, release the handbrake, then press the brake pedal firmly. Then change the transmission mode to the first, then start the car with the key. Now press the two pedals for the fuel and the clutch at the same time, and lift your leg slowly off the clutch and relatively press on the fuel, so the car moves. And finally, pay attention to the speed</p>
				
				<p>With this, you will have learned the basics of learning to drive, so be careful on the roads, respect the laws and signs, and do not speed up.</p>
				
				<p>With this, you will have learned the basics of learning to drive a car, be careful on the roads and respect the laws and signs, and for a perfect experience, know the clothes that can hinder you during long hours driving.</p>
				
				
				<h4>The original source:</h4>
				<p style="color:#00F">https://www.yasmina.com/article/%D8%A7%D8%B3%D8%A7%D8%B3%D9%8A%D8%A7%D8%AA-%D8%AA%D8%B9%D9%84%D9%85-%D9%82%D9%8A%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A%D8%A7%D8%B1%D8%A9-2887594</p>
                 
				
                <div class="col-lg-12" style="margin-top:50px">
                    <div class="pagination__option">
                        <a href="information.php">1</a>
                        <a class="activ" href="information2.php">2</a>
                        <a href="information3.php">3</a>
                        <a href="information4.php">Next</a>
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