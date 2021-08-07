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
    <title>Tests</title>

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
	</style>
	<script>
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);
        
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
        
                display.textContent = minutes + ":" + seconds;
        
                if (--timer < 0) {
                    timer = duration;
                }
				if(timer == 0){
					location.href= "homepage.php";
				}
                
            }, 1000);
        }
        
        window.onload = function () {
            var fiveMinutes = 60 * 3,
                display = document.querySelector('#time');
            startTimer(fiveMinutes, display);
        };
    </script>
	
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
				<li><a href="information.php">Information</a></li>
				<li><a href="#">Packages</a></li>
				<li><a href="#">Trainners</a></li>
				<li class="active"><a href="test.php">Tests</a></li>
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
							<li class="active"><a href="tests.php">Tests</a></li>
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
                        <span>Tests</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div style="background-color:#F2F2F2;width:60px;height:60px;border-radius:50%;line-height:3;padding:5px;margin-right:40px" class="pull-right" id="time">05:00</div>
    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
			<form action="tests2.php" method="post">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title center-title">
							<span>Driving Tests</span>
							<h2>Tests</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;height:400px">
							<div class="blog__item__pic">
								<img src="Drive/img/1%20(1).jpg" style="width:200px;height:200px" alt="">
							</div>
							<div class="blog__item__text">
								<span style="text-align:center">Driving Question 1</span>
								<h5 style="font-weight:bold">1 . What does this sign mean?</h5>
								
								<input type="radio" name="one" value="1" required/>	Light Traffic Signal <br>
								<input type="radio" name="one" value="2" required/>	Attention <br>
								<input type="radio" name="one" value="3" required/>	Road Works
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;height:400px">
							<div class="blog__item__pic">
								<img src="Drive/img/2.jpg" style="width:200px;height:200px" alt="">
							</div>
							<div class="blog__item__text">
								<span>Driving Question 2</span>
								<h5 style="font-weight:bold">2. What does this sign mean?</h5>
								
								<input type="radio" name="two" value="4" required/>	Road Works <br>
								<input type="radio" name="two" value="5" required/>	Pedestrian Crossing <br>
								<input type="radio" name="two" value="6" required/>	Slow Down! School Zone
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;height:400px">
							<div class="blog__item__pic">
								<img src="Drive/img/3%20(2).jpg" style="width:200px;height:200px" alt="">
							</div>
							<div class="blog__item__text">
								<span>Driving Question 3</span>
								<h5 style="font-weight:bold">3. What does this sign mean?</h5>
								

									<input type="radio" name="three" value="7" required/>	School <br>
									<input type="radio" name="three" value="8" required/>	Pedestrian Crossing <br>
								    <input type="radio" name="three" value="9" required/>	Road Works

								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;margin-top:20px;height:400px">
							<div class="blog__item__pic">
								<img src="Drive/img/4%20(1).jpg" style="width:200px;height:200px" alt="">
							</div>
							<div class="blog__item__text">
								<span>Driving Question 4</span>
								<h5 style="font-weight:bold">4. What does this sign mean?</h5>
								
								
								    <input type="radio" name="five" value="10" required/>	Pedestrian Crossing <br>
								    <input type="radio" name="five" value="11" required/>	School <br>
								    <input type="radio" name="five" value="12" required/>	Road Works
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;margin-top:20px;height:400px">
							<div class="blog__item__pic">
								<img src="Drive/img/5%20(1).jpg" style="width:200px;height:200px" alt="">
							</div>
							<div class="blog__item__text">
								<span>Driving Question 5</span>
								<h5 style="font-weight:bold">5. What does this sign mean?</h5>
								

								<input type="radio" name="sex" value="13" required/>	Right Turn <br>
								<input type="radio" name="sex" value="14" required/>	Left Turn <br>
								<input type="radio" name="sex" value="15" required/>	Bends

								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;margin-top:20px;height:400px">
							<div class="blog__item__pic">
								<img src="Drive/img/6%20(1).jpg" style="width:200px;height:200px" alt="">
							</div>
							<div class="blog__item__text">
								<span>Driving Question 6</span>
								<h5 style="font-weight:bold">6. What does this sign mean?</h5>
								
								  <input type="radio" name="seven" value="16" required/>	Mandatory Direction <br>
								  <input type="radio" name="seven" value="17" required/>	Bends, First One The Left <br>
								  <input type="radio" name="seven" value="18" required/>	Bends, First One The Right <br>
								
							</div>
						</div>
					</div>
					<?php
				
					$_SESSION['one'] = 1;
					$_SESSION['two'] = 5;
					$_SESSION['three'] = 9;
					$_SESSION['four'] = 11;
					$_SESSION['five'] = 13;
					$_SESSION['six'] = 17;
				
				
				?>
					<!--<input type="submit" class="btn btn-primary center-block" style="margin:auto;margin-bottom:50px;width:200px" value="Send">-->
					<div class="col-lg-12">
						<div class="pagination__option">
							<!--<a href="tests2.php">Next</a>-->
							<input type="submit" name="submit" value="Next" style="background-color:#F2F2F2;color:#000;border:none;border-radius:0;margin:auto;margin-bottom:50px;width:200px" class="btn btn-primary"/>
						</div>
					</div>
				</div>
			</form>	
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