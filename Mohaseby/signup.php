<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Sign Up</title>
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
			 <!--<div class="logout pull-left">
				 
				     <h3><a class="btn btn-danger" href="login.php">خروج</a></h3>
					 <div class="icon-profile"><a href="profile.php"><i class="fa fa-user-o fa-fw"></i></a></div>
			 </div>-->
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
					 <li style="width:120px"><a href="contact.php">تواصل معنا</a></li>
				 </ul>
				 <hr>
			 </div>
		 </div>
     </div>
<div class="design" dir="rtl" style="height:auto">
	
 <form class="login" action="insert.php" method="post">
	 
  <h4 class="text-center">انشاء حساب جديد</h4> 
  <div class="ast">
	  <input class="form-control first" type="text" placeholder="الاسم الأول" name="first" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">الاسم الأول مطلوب أو <strong>اجباري</strong></div>
	  <!--<div class="alert alert-danger custom-alert">  الاسم الأول لا يقل عن<strong>4 حروف </strong></div>-->
	  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control last" type="text" placeholder="اسم العائلة" name="last" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
	  <!--<div class="alert alert-danger custom-alert">  اسم العائلة لا يقل عن<strong>4 حروف </strong></div>-->
	  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
  </div>	 
  <div class="ast">
	  <input class="form-control username" type="text" placeholder="اسم المستخدم" name="username" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert">  اسم المستخدم لا يقل عن <strong>4 حروف </strong></div>
	  <!--<div class="alert alert-danger long-alert">  اسم المستخدم يجب أن يحتوي علي <strong>حروف فقط</strong></div>-->
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="كلمة المرور" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
	  <!--<div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
	  <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>-->
	  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong> 
	  </div>
	  <div class="alert alert-info">كلمة المرور يجب أن تحتوي علي حروف كبيرة وحروف صغيرة ورقم وطولها لا يقل عن 6 	</div> 
  </div>
   <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="new-password" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <!--<div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>-->
  </div>
   <div class="ast">
	  <input class="form-control address" type="text" placeholder="العنوان" name="address" autocomplete="new-password" required="required"/>
	  <i class="fa fa-home"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control phone" type="text" placeholder="رقم الهاتف" name="phone" autocomplete="new-password" required="required"/>
	  <i class="fa fa-phone"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون علي الأقل  <strong>10 أرقام</strong></div>
	  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
	  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
  </div>	 
  <input class="btn btn-primary btn-block button" type="submit" value="انشاء"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:15px">
	  <span>هل أنت عضو؟ </span><a style="text-decoration:none" href="login.php">سجل الان</a>
  </div>	 
 </form>
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