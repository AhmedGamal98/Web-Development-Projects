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
		.blug p{
			
			font-size: 18px
			
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
				<div class="" style="width:1130px;height:500px">
					<img src="Drive/imgs/13.jpg" style="width:100%;height:80%" alt="">
				</div>
				<h3 style="font-weight:bold;color:#F3BD00;padding-bottom:30px">Topic 1: What is the basic periodic maintenance schedule for all types of cars?</h3>
				<h5 style="font-weight:bold;color:#0C2B4B;margin-right:30px">Hind Salah
                </h5>
				<h5 style="font-weight:bold;color:#0C2B4B">04 October 2019</h5>
				<p style="color:#0C2B4B;margin-top:20px">
					Every part in a car has a lifespan and hence, when the time comes you will have to change it before it causes you problems with the car. Here is a detailed schedule of car maintenance appointments to maintain your car and ensure your safety while driving.</p>
				  	
                 <ol>
					 <li><h3 style="font-weight:bold;color:#F3BD00;font-size:17px">Engine oil :</h3>
Depending on how much you use the car, it is necessary to change the engine oil early, because overloading the engine causes the oil to burn quickly.
In general, it is always recommended to use the type of oil recommended by the manufacturer according to the type of car because it is the best for the engine. The engine oil is usually changed every 5,000 km or 9,000 km, depending on the type of oil.
</li>
					 <li><h3 style="font-weight:bold;color:#F3BD00;font-size:17px">Engine Oil Filter:</h3>
The oil filter is designed to remove contaminants from engine oil, transmission oil, lube oil, or hydraulic oil.
It is recommended to change it after every two times to change the oil. The service life of the oil filter is 6 months or 10,000 km.
</li>
					 <li><h3 style="font-weight:bold;color:#F3BD00;font-size:17px">Air filter:</h3>
The air filter is responsible for entering the clean air needed to burn the fuel in the car.
Many car owners tend to clean the filter when it becomes clogged as a result of dirt and dust, but experts advise not to clean it and replace it, because that will lead to damage. You should change the air filter every 20,000-30,000 km.
</li>
					 <li><h3 style="font-weight:bold;color:#F3BD00;font-size:17px">Tires:</h3>
Depending on the quality of the tires, the dates for changing it vary. High quality tires are recommended to be replaced every 40,000 - 50,000 km. As for low-quality tires, it is recommended to change them after 10,000 km. In general, apart from changing tires, you should always make sure to check the alignment and parallelism of the tires every 20,000-30,000 km.
</li>
					 <li><h3 style="font-weight:bold;color:#F3BD00;font-size:17px">Cooling system:</h3>
The cooling system is what keeps the car’s temperature stable even in the hottest weather and over time the coolant loses its properties and its ability to keep the engine cool, so you have to empty, clean and refill it again every 40,000 - 60,000 kilometers.
</li>
					 <li><h3 style="font-weight:bold;color:#F3BD00;font-size:17px">Brake fluid:</h3>
As with engine oil, use the brake fluid recommended by the manufacturer. As for changing the oil, it is preferable to change it every five years. But it does not hurt to reveal it every year or two to ensure that it is healthy and does not need to be changed, as the frequent use of the brakes will accelerate its change.
</li>
					 <li><h3 style="font-weight:bold;color:#F3BD00;font-size:17px">Brakes:</h3>
Brakes are essential and very important to ensure the safety of all occupants of the car, and changing them depends on your frequent consumption, as those who live in mountainous places, for example, will need to change them in a shorter period of time than those who live in places with flat surfaces. Usually experts advise that the brake should be replaced between 30,000 - 65,000, depending on consumption.
</li>
					 <li><h3 style="font-weight:bold;color:#F3BD00;font-size:17px">Spark plugs:</h3>
The spark plugs are a very important part of a car engine because they act as a catalyst in the fuel combustion process inside the engine. Therefore, the experts here recommend that you check it periodically and change it every 30,000 - 60,000 km.
</li>
					 <li><h3 style="font-weight:bold;color:#F3BD00;font-size:17px">Automatic oil:</h3>
Automatic oil, or the so-called gearbox oil, is responsible for the transmission and internal gears running parallel to the engine. It is recommended to change it after covering a distance of 60,000 km. In some cases, depending on the use of the car, it is recommended to change it after a distance of 40,000 km.
</li>
					 <li><h3 style="font-weight:bold;color:#F3BD00;font-size:17px">The original source:</h3> <span style="color:#00F">https://jamalouki.net/%D9%84%D8%A7%D9%8A%D9%81-%D8%B3%D8%AA%D8%A7%D9%8A%D9%84/%D9%82%D9%8A%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D9%85%D8%B1%D8%A3%D8%A9/%D9%85%D8%A7-%D9%87%D9%88-%D8%AC%D8%AF%D9%88%D9%84-%D8%A7%D9%84%D8%B5%D9%8A%D8%A7%D9%86%D8%A9-%D8%A7%D9%84%D8%AF%D9%88%D8%B1%D9%8A%D8%A9-%D8%A7%D9%84%D8%A3%D8%B3%D8%A7%D8%B3%D9%8A-%D9%84%D9%83%D9%84-%D8%A3%D9%86%D9%88%D8%A7%D8%B9-%D8%A7%D9%84%D8%B3%D9%8A%D8%A7%D8%B1%D8%A7%D8%AA%D8%9F</span></li>
				 </ol>
				
                <div class="col-lg-12" style="margin-top:50px">
                    <div class="pagination__option">
                        <a class="activ" href="information.php">1</a>
                        <a href="information2.php">2</a>
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