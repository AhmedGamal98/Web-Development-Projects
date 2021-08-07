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
				 <!--<img src="layouts/images/log1.jpg" style="width:250px" alt="Logo">-->
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
					 <li style="width:120px"><a href="our.php">من نحن</a></li>
					 <li style="width:120px" class="active"><a href="contact.php">تواصل معنا</a></li>
				 </ul>
				 <hr>
			 </div>
		 </div>
     </div>

<?php

		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			include "connect.php";
			//Get Varaiables from Post Method
			//$id = $_POST["stockid"];
			$name = $_POST["name"];
			$email    = $_POST["email"];
			$message = $_POST["message"];
			
			//Validate Form By Server site
			 
			
			
			$formErrors = array();
			
			if(empty($name)){
				
				$formErrors[] = "الاسم لا يجب أن يترك فارغ";
				
			}
			/*if(strlen($first) < 4){
				
				$formErrors[] = "الاسم الأول لا يقل عن 4 حروف";
				
			}*/
			if(empty($message)){
				
				$formErrors[] = "الرسالة لا يجب أن تترك فارغة";;
				
			}
			if(empty($email)){
				
				$formErrors[] = "البريد الالكتروني لا يجب أن يترك فارغ";
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
		
				
					$stmt = $con->prepare("INSERT INTO messages(name , Email , message) VALUES(:name , :email, :message)");

					$stmt->execute(array(

						'name' => $name,
						'email'    => $email,
						'message' => $message

					));


					// echo success message

					echo '<div class="container"><div dir="rtl" class="alert alert-success">تم ارسال الرسالة بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div></div>';
					echo '<div class="contact" dir="rtl">
		 <h3 class="text-center">تواصل معنا</h3>
		 <div class="container">
			 <form class="form" action="contact-conn.php" method="post">
				 <div class="row">
					 <div class="name">
						  <div class="col-md-6 ast">
							 <input class="form-control username" placeholder="الاسم" type="text" autocomplete="off" name="name" required/>
							  <i class="fa fa-check check"></i>
							  <i class="fa fa-close close"></i>
							  <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو<strong>اجباري</strong></div>
							  <div class="alert alert-danger custom-alert">  اسم المستخدم لا يقل عن<strong>8 حروف </strong></div>
							  <div class="alert alert-danger long-alert">  اسم المستخدم يجب أن يحتوي علي<strong>حروف فقط </strong></div>
						 </div>
						 <div class="col-md-6 ast">
							 <input class="form-control email" placeholder="البريد الالكتروني" type="email" autocomplete="off" name="email" required/>
							 <i class="fa fa-check check check-pass"></i>
							  <i class="fa fa-close close close-pass"></i>
							  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
							  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
							  <div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>
						  </div>
					 </div>
					 <div class="col-md-12 ast">
						 <textarea class="form-control mess" name="message" placeholder="الرسالة" required="required"></textarea>
						 <i class="fa fa-check checks"></i>
						  <i class="fa fa-close closes"></i>
						  <div style="width:700px;margin:auto;margin-top:10px" class="alert alert-danger empty-alert">الرسالة مطلوبة أو<strong>اجباري</strong></div>
						  <div style="width:700px;margin:auto;margin-top:10px" class="alert alert-danger custom-alert">  الرسالة يجب أن تحتوي علي<strong>حروف فقط</strong></div>
					 </div>
				 </div>
				 <input class="btn btn-primary center-block" type="submit" value="ارسال" name="contact"/>
			 </form>
		 </div>	 
	 </div>';
					
					
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}
		

?>

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