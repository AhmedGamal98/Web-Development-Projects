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
					<img src="Drive/imgs/15.jpg" style="width:100%;height:80%" alt="">
				</div>
				<h3 style="font-weight:bold;color:#F3BD00;padding-bottom:30px;display:block">Topic 3: Common mistakes in driving a car</h3>
				<h3 style="font-weight:bold;padding-bottom:30px;display:block">What you should know about common mistakes in driving a car:</h3>
				<p style="color:#0C2B4B;margin-top:20px">
					
					Some people think that once you obtain a driver’s license, you can drive professionally without errors, but driving needs many other experiences that help gain a lot of experiences that make you avoid some mistakes that expose you to my lady and those with you in danger. We refer to many common mistakes that you must know so that you can avoid them, dear driver, so we will mention in this topic what you should know about common mistakes in driving a car, so follow us.</p>
				
				
				<h3 style="font-weight:bold;color:#F3BD00;padding-bottom:30px">Automatic car driving faults:</h3>
				
				<p>Driving automatic cars is considered by some women as very easy to choose without cars that operate on the regular system, but there are some common mistakes that you should know in your use of the automatic gear car, which are as follows:</p>
				
				<p>Putting the car to the N position: One of the common mistakes that many women make is that it saves fuel for the car, but it is the opposite. It is preferable to use the D system, as it helps in raising the car's sensors that help you save fuel more</p>
				
				<p>Failure to stop completely before changing the gear: The automatic gears that are in the gear box are designed to transmit the transmission not to stop. In the event that it does not stop before shifting in the movement from front to back, it leads to some problems that lead to gear wear.</p>
				
				<p>Leaping hard: To maintain your gearbox by depressing the gear selector to the N position and then suddenly switching to the D position, it leads to major problems with the wheels and gear groups.

                </p>
				<h3 style="font-weight:bold;color:#F3BD00;padding-bottom:30px">Tips for driving without errors:</h3>
				
				<p>There are some tips provided by the Spoil Your Car website that will help you, my lady, to drive without making mistakes, as follows:</p>
				
				<p>Do not close the left line: The left is for high speeds, you should not take it alone either. It is designed to assist in ambulance services in the event of a problem or an accident, God forbid.
Make room for other cars: Your refusal to pass by other cars that are in the back causes a lot of inconvenience, and helps in their attempts to overtake your car, which may lead to some accidents.
</p>
				<p>Keep calm while driving: In the event that the road is congested or some try to provoke you on the road, you must be calm so that you are constantly at peace in driving the car.</p>
				
				<p>Not using a cell phone: Of course, using a cell phone while driving leads to great distraction, which may expose you to dangers and also to violation of the law.</p>
				
				<p>Common mistakes in driving a car:</p>
				
				<p>There are some common mistakes that you should not make when driving a car and which you should not make while sitting in the car, or in different driving positions, we will point out to you some of the following errors:</p>
				
				<p>Sitting posture: The sitting position in the car, which is similar to being in the sleeping position, affects the safety greatly, the proper position that you must sit in, which helps you to fully control the driving position so that the driving is balanced in both hands.</p>
				
				<p>Turning: A sudden turn without looking to the sides, which leads to many accidents, or a sudden shift from a lane to robbers of the lanes, so you must look at your mirrors to the left and right and then choose the destination that you will go to and then give the traffic light. Of the direction and then move and head at the appropriate speed.</p>
				
				
				<p>Wrong mirrors position: Many people put mirrors to reveal the back door and a small part of the road. If you want to take advantage of the side mirrors, you must set them to reveal the largest side of the road on the side of the car.</p>
				<p>Thus, our topic today was completed entitled What you should teach it about common mistakes in driving a car.</p>
				
				
				
				
				<h3  style="font-weight:bold;color:#F3BD00">The original source:</h3>
				<p style="color:#00F">https://www.yasmina.com/article/%D8%A7%D8%B3%D8%A7%D8%B3%D9%8A%D8%A7%D8%AA-%D8%AA%D8%B9%D9%84%D9%85-%D9%82%D9%8A%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A%D8%A7%D8%B1%D8%A9-2887594</p>
                 
				
                <div class="col-lg-12" style="margin-top:50px">
                    <div class="pagination__option">
                        <a href="information.php">1</a>
                        <a href="information2.php">2</a>
                        <a class="activ" href="information3.php">3</a>
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