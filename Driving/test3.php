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
			color:#FFF
			
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
            <a style="color: #FFF" href="./index.html"><i class="fa fa-car"></i> Women???s Drive Training System</a>
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
        <div class="offcanvas__btn">
            <a href="signin.php" class="primary-btn">Get Started</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a style="color: #FFF" href="homepage.php"><i class="fa fa-car"></i> Women???s Drive Training System</a>
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
	
	<?php
			
			if(isset($_POST["submit"])){
				
				$result = 0;
				
				//**************************************** 1
				
				$q = $_SESSION["l"];
				$w = $_SESSION["l1"];
				$a = $_SESSION["l2"];
				$x = $_SESSION["l3"];
				$d = $_SESSION["l4"];
				$z = $_SESSION["l5"];
				
				$one = $_SESSION['one'];
				$two = $_SESSION['two'];
				$three = $_SESSION['three'];
				$four = $_SESSION['four'];
				$five = $_SESSION['five'];
				$sex = $_SESSION['six'];
				
				//******************************************* 2
				
				$q1 = $_POST["eight"];
				$w1 = $_POST["nine"];
				$a1 = $_POST["ten"];
				$x1 = $_POST["ten1"];
				$d1 = $_POST["ten2"];
				$z1 = $_POST["ten3"];
				
				
				
				$q2 = $_SESSION["q2"];
				$w2 = $_SESSION["w2"];
				$a3 = $_SESSION["a3"];
				$x4 = $_SESSION["x4"];
				$d5 = $_SESSION["d4"];
				$z6 = $_SESSION["z6"];
				
				
				if($q == $one){
					
					$result = $result + 1;
					
				}
				if($w == $two){
					
					$result = $result + 1;
					
				}
				if($a == $three){
					
					$result = $result + 1;
					
				}
				if($x == $four){
					
					$result = $result + 1;
					
				}
				if($d == $five){
					
					$result = $result + 1;
					
				}
				if($z == $sex){
					
					$result = $result + 1;
					
				}
				
				
				
				
				
				if($q1 == $q2){
					
					$result = $result + 1;
					
				}
				if($w1 == $w2){
					
					$result = $result + 1;
					
				}
				if($a1 == $a3){
					
					$result = $result + 1;
					
				}
				if($x1 == $x4){
					
					$result = $result + 1;
					
				}
				if($d1 == $d5){
					
					$result = $result + 1;
					
				}
				if($z1 == $z6){
					
					$result = $result + 1;
					
				}
				
				
				echo '<div class="container" style="margin-top:30px"><div style="margin-left:20px" class="alert alert-success">
					Your Result: ' . ' ' . $result . '/12
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div></div>';
				
				
				
			}
			
			
			
			
			?>

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
			<form action="test3.php" method="post">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;height:400px">
                        <div class="blog__item__pic">
                            <img src="Drive/img/7%20(1).jpg" style="width:200px;height:200px" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Driving Question 7</span>
                            <h5 style="font-weight:bold">7. What does this sign mean?</h5>
                            
								<input type="radio" name="eight" value="19" required/> Bends, First On The Right<br>
								<input type="radio" name="eight" value="20" required/> Bends, First On The Left<br>
								<input type="radio" name="eight" value="21" required/> Mandatory Direction

						    
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;height:400px">
                        <div class="blog__item__pic">
                            <img src="Drive/img/8%20(1).jpg" style="width:200px;height:200px" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Driving Question 8</span>
                            <h5 style="font-weight:bold">8. What does this sign mean?</h5>
                          
							
								<input type="radio" name="nine" value="22" required/> Mandatory Direction <br>
								<input type="radio" name="nine" value="23" required/> The road narrows from both sides<br>
								<input type="radio" name="nine" value="24" required/> Curves(Windings)

							
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;height:400px">
                        <div class="blog__item__pic">
                            <img src="Drive/img/9%20(1).jpg" style="width:200px;height:200px" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Driving Advices 9</span>
                            <h5 style="font-weight:bold">9. What does this sign mean?</h5>
                            
								<input type="radio" name="ten" value="25" required/> Pasturing Area <br>
								<input type="radio" name="ten" value="26" required/> Be cautions of Animals <br>
							    <input type="radio" name="ten" value="27" required/> Farms

							
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;height:400px">
                        <div class="blog__item__pic">
                            <img src="Drive/img/10.jpg" style="width:200px;height:200px" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Driving Question 10</span>
                            <h5 style="font-weight:bold">10. What does this sign mean?</h5>
                          
								
								<input type="radio" name="ten1" value="28" required/> Heights <br>
								<input type="radio" name="ten1" value="29" required/> End Of Road <br>
							    <input type="radio" name="ten1" value="30" required/> Attention!


                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;height:400px">
                        <div class="blog__item__pic">
                            <img src="Drive/img/37.jpg" style="width:200px;height:200px" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Driving Question 11</span>
                            <h5 style="font-weight:bold">11. What does this sign mean?</h5>
                            <p>
								
								
								<input type="radio" name="ten2" value="31" required/> Falling Rocks <br>
								<input type="radio" name="ten2" value="32" required/> Working Area <br>
								<input type="radio" name="ten3" value="33" required/> Electrical Cable 


							</p>
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item" style="box-shadow: 0 3px 10px #CCC;border-radius:10px;padding:30px;height:400px">
                        <div class="blog__item__pic">
                            <img src="Drive/img/38.jpg" style="width:200px;height:200px" alt="">
                        </div>
                        <div class="blog__item__text">
                            <span>Driving Question 12</span>
                            <h5 style="font-weight:bold">12. What does this sign mean?</h5>
                            <p>
								
								
								<input type="radio" name="ten3" value="34" required/> A Dangerous  Descent <br>
								<input type="radio" name="ten3" value="35" required/> Bends <br>
								<input type="radio" name="ten3" value="36" required/> A Working Area


							</p>
                        </div>
                    </div>
                </div>
                <!--<input type="submit" class="btn btn-primary center-block" style="margin:auto;margin-bottom:50px;width:200px" value="Send">-->
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="tests.php">Back</a>
                    </div>
                </div>
            </div>
				<input type="submit" name="submit" class="btn btn-primary pull-right" style="margin:auto;margin-bottom:50px;width:200px" value="Send">
			</form>
        </div>
    </section>
    <!-- Blog Section End -->

   <footer class="footer">
        <div class="text-center">
			<div class="footer__copyright__text" style="border:none;margin-top:0;padding-top:0">
				<p>Copyright &copy; 2021 All rights reserved <a href="homepage.php" target="_blank"> Women???s Drive Training System</a></p>
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