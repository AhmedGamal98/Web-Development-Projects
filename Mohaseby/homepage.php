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
					 <li style="width:120px" class="active"><a href="homepage.php">الرئيسية</a></li>
					 <li style="width:120px"><a href="services.php">الخدمات</a></li>
					 <li style="width:120px"><a href="our.php">من نحن</a></li>
					 <li style="width:120px"><a href="contact.php">تواصل معنا</a></li>
				 </ul>
				 <hr>
			 </div>
		 </div>
     </div>
     <div class="content text-center">
		 <div class="details">
			 <h3>هنا حيث يمكنك ادارة متجرك بطريقة احترافية وبدون تكلفة</h3>
			 <a href="signup.php" class="btn btn-primary pull-left">ابدأ الان</a>
		 </div>
		 <div class="image">
			 <img src="layouts/images/head.png" class="pull-left" width="400px" height="290px" alt="head">
		 </div>
		 <div class="test pull-right"></div>
	     <div class="test pull-left"></div>
	 </div>
	 <div class="detail text-center">
		 <div class="good">
			 <h3>مرحبا بك</h3>
		 <p style="width:650px;font-size:18px" class="center-block">في عالمنا والذي يعد أحد مواقع الحوسبة السحابية العربية وهو من أسهل المواقع لإدارة كافة
أعمال متجرك من أي مكان وفي أي وقت
قم بإدارة جميع عملياتك مع برنامج محاسبة ومبيعات احترافي وإصدار الفواتير لعملائك مع توفير امكانية ارجاع المبيعات وتابع المصاريف والأرباح لحظية
ادارة المخازن ومتابعة المنتجات وحركة الأصناف بالمستودعات وإعداد طلبات الشراء بسهولة تامة
إدارة الحسابات لأداره حسابات الكاشير والخدمات المتاحة له
</p>
		 <a href="#" class="btn btn-primary">المزيد</a>
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
	<div class="services text-center">
		<h3>خدماتنا</h3>
		 <div class="container">
			 <div class="row">
				 <div class="col-md-3">
					 <!--<i class="fa fa-users"></i>-->
					 <img src="layouts/images/accoun.png" width="110px" height="110px" alt=""/>
					 <h3>ادارة حسابات الموظفين</h3>
					 <p>إعطاء صاحب المتجر صلاحية إنشاء
وتعديل المستخدمين وصلاحياتهم
</p>
				 </div>
				 <div class="col-md-3">
					 <!--<i class="fa fa-archive"></i>-->
					 <img src="layouts/images/Stock.png" width="110px" height="110px" alt=""/>
					 <h3>ادارة المخازن (منتجات ومشتريات)</h3>
					 <p>المراقبة الفورية للمحزون عمر
الإشعارات الذكية
يتيح الدعم السحابي إرسال إشعارات
حول مستوى المخزون نظام الإشعار
الذكي للتنبيه عند
نقص منتجات المخزون او وصوله لعدد
محدد
</p>
				 </div>
				 <div class="col-md-3">
					 <!--<i class="fa fa-cogs"></i>-->
					 <img src="layouts/images/ST.png" width="110px" height="110px" alt=""/>
					 <h3>لوحة القيادة</h3>
					 <p>قمنا ببناء لوحة قيادة متكاملة
تعطي لصاحب المتجر مؤشرات
الأداء المختلفة من عرض تقاریر
ورسومات توضيحية تساعد في الاطلاع على
الحفل السنوي والشهري والاسبوعي والموصي من
مكان واحد واتخاذ القرارات المتابعة العمل
</p>
				 </div>
				 <div class="col-md-3">
					 <!--<i class="fa fa-shopping-bag"></i>-->
					 <img src="layouts/images/Sale-returns.png" width="110px" height="110px" alt=""/>
					 <h3>ادارة المبيعات والمرتجعات</h3>
					 <p>الآن قم بإدارة مبيعاتك بكل
يسر وسهولة عبر موقعنا والذي
موقع سرعة استرداد المرتجعات
في اي وقت
</p>
				 </div>
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