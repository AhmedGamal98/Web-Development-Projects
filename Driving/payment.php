<?php

$do = isset($_GET['do'])? $_GET['do'] : "Payment";


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
	<?php if($do == "Payment"){ ?>
	
<div class="container" style="margin-bottom:50px;height:auto">
      <div class="card card-register mx-auto mt-5">
        <div style="background-color:#F3BD00;color:#FFF" class="card-header">CREDIT/DEBIT CARD PAYMENT</div>
        <div class="card-body login">
          <form action="?do=Pay" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="tel" id="firstName" name="card" class="form-control phone"  >
					<div style="margin-top:20px" class="alert alert-danger empty-alert">Card Number Can't Be <strong></strong>Empty</div>
					<div style="margin-top:20px" class="alert alert-danger long-alert">Card Number Must Be Contains At Least  <strong>16 Numbers</strong></div>
					<div style="margin-top:20px" class="alert alert-danger custom-alert">Card Number Must Be Contains Numbers <strong>Only</strong></div>
                    <label for="firstName">CARD NUMBER</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="date" id="lastName" name="date" class="form-control username">
					<div style="margin-top:20px" class="alert alert-danger empty-alert">CARD EXPIRY Date Can't Be <strong></strong>Empty</div> 
                    <label for="lastName">CARD EXPIRY</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group ast">
                <input type="text" id="inputEmail" name="cvc" class="form-control cvv">
				  <div style="margin-top:20px" class="alert alert-danger empty-alert">Card CVC Can't Be <strong></strong>Empty</div>
				 <div style="margin-top:20px" class="alert alert-danger long-alert">Card CVC  Must Be Contains At Least  <strong>4 Numbers</strong></div>
				 <div style="margin-top:20px" class="alert alert-danger custom-alert">Card CVC  Must Be Contains Numbers <strong>Only</strong></div>
                <label for="inputEmail">CARD CVC</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="inputPassword" name="name" class="form-control username"  >
					  <div style="margin-top:20px" class="alert alert-danger empty-alert">Card Holder Name Can't Be <strong></strong>Empty</div>
					  <div style="margin-top:20px" class="alert alert-danger number-alert">Card Holder Name   Must Be Contains Characters <strong>Only</strong></div>
                    <label for="inputPassword">CARD HOLDER NAME</label>
                  </div>
                </div>
                  
              </div>
            </div>
            <input style="background-color:#F3BD00;border:none" type="submit" class="btn btn-primary btn-block" value="Make Payment"/>
          </form>
        </div>
      </div>
    </div>
	
	<?php }else if($do == "Pay"){
				
				
				
	                 if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			include('connect.php');  	
			
			$card = $_POST["card"];
			$cvc = $_POST["cvc"];
			$name = $_POST["name"];	
			$date = $_POST["date"];			 
				   
						 
						 

			$stmt = $con->prepare("INSERT INTO   payment(Card_ID , 	End_Date , 	CVV , name , trainee_id) VALUES(:card, :date, :cvv, :name , :trainee_id)");

					$stmt->execute(array(

						'card' => $card,
						'date' => $date,
						'cvv'    => $cvc,
						'name'    => $name,
						'trainee_id' => $traineeid

					));
				
						 
					
					echo '
					<div class="container" style="margin-top:40px"><div class="alert alert-info">Your Payment Has Been Successfully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div></div>
					<div class="container" style="margin-bottom:50px;height:auto">
      <div class="card card-register mx-auto mt-5">
        <div style="background-color:#F3BD00;color:#FFF" class="card-header">CREDIT/DEBIT CARD PAYMENT</div>
        <div class="card-body login">
          <form action="?do=Pay" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="firstName" name="card" class="form-control phone"  >
					<div style="margin-top:20px" class="alert alert-danger empty-alert">Card Number Can\'t Be <strong></strong>Empty</div>
					<div style="margin-top:20px" class="alert alert-danger long-alert">Card Number Must Be Contains At Least  <strong>16 Numbers</strong></div>
					<div style="margin-top:20px" class="alert alert-danger custom-alert">Card Number Must Be Contains Numbers <strong>Only</strong></div>
                    <label for="firstName">CARD NUMBER</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="date" id="lastName" name="date" class="form-control username">
					<div style="margin-top:20px" class="alert alert-danger empty-alert">CARD EXPIRY Date Can\'t Be <strong></strong>Empty</div> 
                    <label for="lastName">CARD EXPIRY</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group ast">
                <input type="email" id="inputEmail" name="cvc" class="form-control cvv">
				  <div style="margin-top:20px" class="alert alert-danger empty-alert">Card CVC Can\'t Be <strong></strong>Empty</div>
				 <div style="margin-top:20px" class="alert alert-danger long-alert">Card CVC  Must Be Contains At Least  <strong>4 Numbers</strong></div>
				 <div style="margin-top:20px" class="alert alert-danger custom-alert">Card CVC  Must Be Contains Numbers <strong>Only</strong></div>
                <label for="inputEmail">CARD CVC</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group ast">
                    <input type="text" id="inputPassword" name="name" class="form-control username"  >
					  <div style="margin-top:20px" class="alert alert-danger empty-alert">Card Holder Name Can\'t Be <strong></strong>Empty</div>
					  <div style="margin-top:20px" class="alert alert-danger number-alert">Card Holder Name   Must Be Contains Characters <strong>Only</strong></div>
                    <label for="inputPassword">CARD HOLDER NAME</label>
                  </div>
                </div>
                  
              </div>
            </div>
            <input style="background-color:#F3BD00;border:none" type="submit" class="btn btn-primary btn-block" value="Make Payment"/>
          </form>
        </div>
      </div>
    </div>
				';
					
					
		
			
		}else{
			
			echo "<div class='alert alert-danger'>Can not Browse This Page</div>";
			
		}
	
			
				
				 } ?>

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
	<script src="js/payment.js"></script>
	
	
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	
</body>

</html>