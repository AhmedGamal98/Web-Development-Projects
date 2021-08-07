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
		.blog .blog__item .blog__item__text a:hover{
			
			color: #F3BD00
			
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
				<li class="active"><a href="information.php">Information</a></li>
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
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Latest Information</span>
                        <h2>Information</h2>
                    </div>
                    <div class="blog__large">
                        <div class="blog__large__pic">
                            <img src="Drive/imgs/12.jpg" alt="">
                        </div>
                        <div class="blog__large__text">
                            <span>Information</span>
                            <h4 style="font-weight:bold">In General</h4>
                            <p>
								Every part in a car has a lifespan and hence, when the time comes you will have to change it before it causes you problems with the car. Here is a detailed schedule of car maintenance appointments to maintain your car and ensure your safety while driving.
							</p>
                            <!--<a href="#">Read more</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="Drive/imgs/13.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Information 1</span>
                            <h5 style="font-weight:bold">Topic 1: What is the basic periodic maintenance schedule for all types of cars?</h5>
                            <p>
								Every part in a car has a lifespan and hence, when the time comes you will have to change it before it causes you problems with the car. Here is a detailed schedule of car maintenance appointments to maintain your car and ensure your safety while driving.
						    </p>
							<a href="information.php">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="Drive/imgs/14.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Information 2</span>
                            <h5 style="font-weight:bold">Topic 2: The Basics of Learning to Drive a Car</h5>
                            <p>
								It is necessary to know the basics of learning to drive a car, after learning the traffic signs and laws that we must follow on the roads, to avoid traffic accidents, and most importantly, in the beginning, knowing that driving a car is not difficult for women.
							</p>
							<a href="information2.php">Read more</a>
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="Drive/imgs/15.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Information 3</span>
                            <h5 style="font-weight:bold">Topic 3: Common mistakes in driving a car</h5>
                            <p>
								
									Some people think that once you obtain a driver’s license, you can drive professionally without errors, but driving needs many other experiences that help gain a lot of experiences that make you avoid some mistakes that expose you to my lady and those with you in danger. We refer to many common mistakes that you must know so that you can avoid them, dear driver, so we will mention in this topic what you should know about common mistakes in driving a car, so follow us.

							</p>
							<a href="information3.php">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="Drive/imgs/16.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Information 4</span>
                            <h5 style="font-weight:bold">Topics 4 : steps when buying your first car</h5>
                            <p>
								Before starting cars, determine the purchase amount, even if the purchase is in installments, you can pay the installment amount that you can pay a month after covering all fees for the financial degree. Car charges, car charges, expenses, expenses, and general contracts are also valid for the car.
							</p>
							<a href="information4.php">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="Drive/imgs/17.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Information 5</span>
                            <h5 style="font-weight:bold">Topics 5 :Ways to get rid of fears of women driving a car </h5>
                            <p>
								
								The woman may be surprised after buying the car that she suffers from a phobia of driving, which is represented by extreme fear or excessive anxiety, and the reason may be her exposure to a traffic accident before or the exposure of one of her close relatives to a traffic accident.

							</p>
							<a href="information5.php">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="Drive/imgs/18.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Information 6</span>
                            <h5 style="font-weight:bold">Topics 6 Woman driving etiquette</h5>
                            <p>
								While driving the car, you must follow the two directions surrounding the car in order to ensure that a pedestrian appears suddenly, as some female drivers focus on the front direction only while neglecting the sides and this may lead to serious consequences.
							</p>
							<a href="information6.php">Read more</a>
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="Drive/imgs/23.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Information 7</span>
                            <h5 style="font-weight:bold">Topics 7 : Important advice to maintain the car Important tips for maintaining the car: </h5>
                            <p>
								It is known that the Arab countries, especially the Gulf countries, have high temperatures, especially in the summer, so the car must be preserved in hot weather to avoid any malfunctions. 
							</p>
							<a href="information7.php">Read more</a>
                        </div>
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