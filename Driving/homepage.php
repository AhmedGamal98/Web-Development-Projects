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
    <title>Homepage</title>

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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a style="color: #FFF" href="homepage.php"><i class="fa fa-car"></i> Women’s Drive Training System</a>
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
        <div class="offcanvas__btn">
            <a href="signin.php" class="primary-btn">Get Started</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
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
                            <li class="active"><a href="homepage.php">Home</a></li>
                            <li><a href="#" class="about">About Us</a></li>
							<li><a href="info.php">Information</a></li>
							<li><a href="#" class="package">Packages</a></li>
							<li><a href="#" class="trainner">Trainners</a></li>
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

    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="Drive/img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero__text">
                        <h5>Best options for you</h5>
                        <h2>drive safe & get license</h2>
						<?php
						
						if(isset($_SESSION["password"])){
							
							
							echo '<a href="contact.php" class="primary-btn">Contact us</a>';
							
							
						}else{
							
							
							echo '<a href="signin.php" class="primary-btn">Contact us</a>';
							
							
						}
						
						
						?>
                        
                        <a href="packages.php" class="primary-btn second-bg">See Packages</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Feature Section Begin -->
    <section class="feature spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="feature__text">
                        <div class="section-title">
                            <span>Why choose us ?</span>
                            <h2>Our feature</h2>
                        </div>
                        <p>We Introduce You To Learn Driving In Week</p>
                        <!--<a href="#" class="primary-btn second-bg">See Courses</a>-->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature__item">
                                <img src="Drive/img/feature/feature-1.png" alt="">
                                <h5>Unlimited Car Support</h5>
                            </div>
                            <div class="feature__item">
                                <img src="Drive/img/feature/feature-2.png" alt="">
                                <h5>Driving School Insures</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature__item right-column">
                                <img src="Drive/img/feature/feature-3.png" alt="">
                                <h5>Any Time Any Location</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- About Video Section Begin -->
    <section class="about-video abouts" style="margin-bottom:60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="about__video__bg set-bg" data-setbg="Drive/img/video-bg.jpg">
                        <a href="https://www.youtube.com/watch?v=bGuHgRQSEuk" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about__video__text">
                        <div class="section-title">
                            <span style="font-size:22px">About Us</span>
                            <!--<h2>looking for lessons?</h2>-->
                        </div>
                        <p class="lead">Our services help you get the right coach to give you the best driving training experience, at the best prices and in any city you are, our services are specially for you as it was established from you and to you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Video Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing spad set-bg packages" data-setbg="Drive/img/pricing-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Get Special Offer</span>
                        <h2>Our Packages</h2>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php
	  
					include('connect.php');  
					$sql = $con->prepare("SELECT trainning_schedule.* , trainner.Firstname FROM  trainning_schedule INNER JOIN trainner ON  trainner.trainnerID = trainning_schedule.trainnerID");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?> 
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <div class="pricing__item__title">
                            <h2><?php echo $pat["Price"]; ?> R</h2>
                            <h5><?php echo $pat["Name"]; ?></h5>
                        </div>
                        <ul>
                            <li>Starting Date:  <?php echo $pat["Starting_date"]; ?></li>
                            <li>Ending Date: <?php echo $pat["Ending_date"]; ?></li>
							<li>Trainning Time: <?php echo $pat["trainning_time"]; ?></li>
							<li>Trainner: <a href="profile.php?trainnerid=<?php echo $pat["trainnerID"]; ?>" style="text-decoration:none;color:#FFF"><?php echo $pat["Firstname"]; ?></a></li>
                        </ul>
						<?php
						
						if(isset($_SESSION["password"])){
						if($_SESSION['type'] == 'trainee')	{
                            if($type = "trainee"){
							
                                echo '<a href="participate.php?traineeid=' . $traineeid . '&trainningid=' . $pat["trainningID"] . '" class="primary-btn second-bg">Participate</a>';
                                  
                               }
                        }
							
                        }else{
							
							
							echo '<a href="signin.php" class="primary-btn second-bg">Participate</a>';
							
							
							
						} ?>	
                    </div>
                </div>
				<?php } ?>
                <div class="clearfix"></div>
				<a href="packages.php" style="text-align:center;margin-left:17px" class="primary-btn second-bg center-block">See More</a>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Team Section Begin -->
    <section class="team spad trainners">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <!--<span>Our Great Team</span>-->
                        <h2>Our Trainners</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="team__all">
                        <a href="trainners.php" class="primary-btn second-bg">View all</a>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php
	  
					include('connect.php');  
					$sql = $con->prepare("SELECT * FROM trainner WHERE 	acceptance = 1");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?> 
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="Drive/img/avatar.jpeg" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5><?php echo $pat["Firstname"] . ' ' . $pat["Lastname"]; ?></h5>
                            <span>Trainner</span>
                            <a href="cv/<?php echo $pat["CV"]; ?>" download style="text-decoration:none;color:#000" ><i class="fa fa-download"></i> Download CV</a>
                        </div>
                    </div>
                </div>
				<?php } ?>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="text-center">
			<div class="footer__copyright__text" style="border:none;margin-top:0;padding-top:0">
				<p>Copyright &copy; 2021 All rights reserved <a href="homepage.php" target="_blank"> Women’s Drive Training System</a></p>
			</div>
		</div>
    </footer>
    <!-- Footer Section End -->

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