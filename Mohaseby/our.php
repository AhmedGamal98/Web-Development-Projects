<?php

session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Login</title>
		<link rel="stylesheet" href="layouts/css/bootstrap.min.css">
		<link rel="stylesheet" href="layouts/css/font-awesome.css">
		<link rel="stylesheet" href="layouts/css/jquery-ui.css">
		<link rel="stylesheet" href="layouts/css/jquery.selectBoxIt.css">
		<link rel="stylesheet" href="layouts/css/front.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Almarai&diplay=swap">
	</head>
	<body>
<div class="header text-center">
		 <div class="container">
			 <div class="logo center-block">
				 <h1>نقرة واحدة</h1>
				 <img src="layouts/images/log2.jpg" alt="Logo">
			 </div>
			 <div class="logout pull-left" style="margin-left:0">
				 
				 <?php  if(isset($_SESSION['password'])){ ?>
				 
				 
				     <h3 style="font-size:12px"><a title="Your Profile" class="btn btn-danger" href="admin/profile.php"><i class="fa fa-user-o fa-fw"></i></a></h3>
				     <h3 style="font-size:12px"><a title="Log Out" class="btn btn-info" href="logout.php"><i class="fa fa-sign-out fa-fw"></i></a></h3>
				 
				 <?php  }else{ ?>
				 
				   <h3 style="font-size:12px"><a title="Sign In" class="btn btn-danger" href="login.php"><i class="fa fa-user-o fa-fw"></i></a></h3>
				   <h3 style="font-size:12px"><a title="Sign Up" class="btn btn-info" href="signup.php"><i class="fa fa-sign-out fa-fw"></i></a></h3>
				 
				 
				 <?php }  ?>
					 <!--<div class="icon-profile"><a href="signup.php"><i class="fa fa-sign-out fa-fw"></i>  Sign Up</a></div>-->
			 </div>
			 <!--<div class="links pull-left">
				<ul class="list-unstyled">
				  <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
				  <li><a href="www.google.com"><i class="fa fa-google-plus"></i></a></li>	
				  <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
				  <li><a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>		
				</ul>
			 </div>-->
			 <div class="navbar container" dir="rtl">
				 <hr>
				 <ul class="list-unstyled">
					 <li style="width:120px"><a href="homepage.php">الرئيسية</a></li>
					 <li style="width:120px"><a href="services.php">الخدمات</a></li>
					 <li style="width:120px" class="active"><a href="our.php">من نحن</a></li>
					 <li style="width:120px"><a href="contact.php">تواصل معنا</a></li>
				 </ul>
				 <hr>
			 </div>
		 </div>
     </div>
     <div class="our">
		 <div class="overlay">
			 <div class="social">
				 <a href="#"><i class="fa fa-facebook"></i></a>
				 <a href="#"><i class="fa fa-instagram"></i></a>
				 <a href="#"><i class="fa fa-twitter"></i></a>
		     </div>
             <div class="ele">
				 <h3>من نحن</h3>
				 <h4>فريق نقرة واحدة التعاوني</h4>
				 <p>م فريق مكون من 5 أعضاء خطرت لنا الفكرة من أصل عدة
افكار لعمل مشروع جامعي يتطلب تنفيذه خلال
اشهر قليلة وبنتائج مرضية
تم تنفيذ الفكرة على مدى 5 أشهر مقسمة على
عدة مراحل من التطوير والتنفيذ والعمل الشاق
تعمل على تطوير أعمالنا وافكارنا دائما حتى تكون
ابسط وأسهل للاستعمال واكثر فاعلية علمية
وعملياً
</p>
			 </div>
		 </div>
	 </div>
<div class="footer text-center">
		<p>كل الحقوق محفوظه لدي موقع نقرة واحدة @ 2021</p>
		<div class="links center-block">
			<ul class="list-unstyled">
			  <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
			  <li><a href="www.google.com"><i class="fa fa-google-plus"></i></a></li>	
			  <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
			  <li><a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>		
			</ul>
		</div> 
     </div>		
<script src="layouts/js/jquery-3.4.1.min.js"></script>
     <script src="layouts/js/jquery-ui.min.js"></script>
     <script src="layouts/js/bootstrap.min.js"></script>
     <script src="layouts/js/jquery.selectBoxIt.min.js"></script>
     <script src="layouts/js/front.js"></script>
 </body>
</html>		