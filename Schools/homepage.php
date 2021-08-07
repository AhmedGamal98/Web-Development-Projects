<?php

session_start();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Homepage</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="layout/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="layout/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="layout/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="layout/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="layout/plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="layout/plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="layout/css/style.css" rel="stylesheet">
  <link href="layout/css/login.css" rel="stylesheet">	
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <!--<a class="text-color mr-3" href="callto:+443003030266"><strong>الهاتف</strong> +44 300 303 0266</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>-->
        </div>
        <div class="col-lg-12 text-center text-lg-right">
           <img src="layout/images/tward.jpg" alt="logo" style="float: left;width: 150px; height: 50px;">
          <ul class="list-inline">
			  
			<?php
			  
			  
			   
				if(isset($_SESSION['password'])){

					 if($_SESSION['type'] == "admin"){


                         echo '<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="admin/new-schools.php">ملفك الشخصي</a></li>';


					 }elseif($_SESSION['type'] == "school"){
						 
						 
						 
						 
						 echo '<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="schools/teachers.php">ملفك الشخصي</a></li>';
						 
						 
					 }elseif($_SESSION['type'] == "teacher"){
						 
						 
						 
						 
						 echo '<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="teachers/classes.php">ملفك الشخصي</a></li>';
						 
						 
					 }elseif($_SESSION['type'] == "parent"){
						 
						 
						 
						 
						 echo '<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="parents/Sons.php">ملفك الشخصي</a></li>';
						 
						 
					 }
					


				}
			  
			  
			  
			 ?> 
			  
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">تسجيل دخول</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupSchool">انشاء حساب كمدرسة</a></li>
			  
			<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupTeacher">انشاء حساب كمعلم</a></li>
			  
			<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupParent">انشاء حساب كولي أمر</a></li>  
			  
			  
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="homepage.php"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center" dir="rtl">
            <li class="nav-item active">
              <a class="nav-link" href="homepage.php">الرئيسية</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link scrap" href="#">نبذه</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link teacher" href="#">المدارس</a>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.php">تواصل معنا</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
 <!-- Start School -->
<div class="modal fade login" dir="rtl" id="signupSchool" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>انشاء حساب مدرسة</h3>
                <button style="margin-left:0;margin-bottom:1px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="signup-conn.php" method="post" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3 username" id="signupName" name="name" placeholder="اسم المدرسة" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">الاسم لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">الاسم يجب أن لا يقل عن <strong>8 حروف</strong></div>
							<div class="alert alert-danger custom-alert">الاسم يجب أن يحتوي علي <strong>حروف فقط.</strong></div>
                        </div>
                        <div class="col-12 ast">
                            <input type="email" class="form-control mb-3 email" id="signupEmail" name="email" placeholder="البريد الالكتروني" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">البريد الالكتروني لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">البريد الالكتروني يجب أن يحتوي علي <strong>@</strong></div>
							<div class="alert alert-danger custom-alert">البريد الالكتروني يجب أن يحتوي علي <strong>com.</strong></div>
                        </div>
                        <div class="col-12 ast">
                            <input type="password" class="form-control mb-3 password" id="signupPassword" name="password" placeholder="كلمة المرور" required>
							<i class="glyphicon glyphicon-ok check check-pass"></i>
							<i class="glyphicon glyphicon-remove close close-pass"></i>
							<i class="show-pass fa fa-eye fa-2x"></i>
							<div class="alert alert-danger empty-alert"> كلمة المرور لا يمكن أن تترك فارغة <strong></strong>  ويجب أن تحتوي علي حروف كبيرة وحروف صغيرة ورقم</div>
						    <div class="alert alert-info" style="text-align:right">كلمة المرور يجب أن تحتوي علي <strong>رقم وحروف كبيره وحروف صغيره.</strong></div>
                        </div>
						<div class="col-12 ast">
                            <input type="text" class="form-control mb-3 code" id="signupPhone" name="phone" placeholder="رقم التواصل" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">رقم التواصل لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">رقم التواصل يجب أن لا يقل عن <strong>8 أرقام</strong></div>
							<div class="alert alert-danger custom-alert">رقم التواصل يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
                        </div>
						<div class="col-12 ast">
                            <input type="text" class="form-control mb-3 code" id="signupPhone" name="code" placeholder="كود المدرسة" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">كود المدرسة لا يمكن أن يترك <strong>فارغ</strong></div>
							<!--<div class="alert alert-danger long-alert">كود المدرسة يجب أن لا يقل عن <strong>8 أرقام</strong></div>-->
							<div class="alert alert-danger custom-alert">كود المدرسة يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
                        </div>
						<div class="col-12 ast">
							<select type="text" class="form-control mb-3 stage" id="signupPhone" name="stage" required>
								<option value="0">تحديد المرحلة</option>
								<option value="1">روضة</option>
								<option value="2">ابتدائي</option>
								<option value="3">متوسط</option>
								<option value="4">ثانوي</option>
							</select>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">المرحلة لا يمكن أن تترك <strong>فارغ</strong></div>
                        </div>
						<!--<div class="col-12 ast">
                            <input type="file" class="form-control mb-3 address" id="signupPhone" name="signupPhone">
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">الصورة لا يمكن أن تترك <strong>فارغة</strong></div>
                        </div>-->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">انشاء حساب</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End School -->
<!-- Start Teacher -->
<div class="modal fade login" dir="rtl" id="signupTeacher" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>انشاء حساب معلم</h3>
                <button style="margin-left:0;margin-bottom:1px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<!--<div class="alert alert-info" style="text-align:right">كلمة المرور يجب أن تحتوي علي <strong>رقم وحروف كبيره وحروف صغيره.</strong></div>-->
            <div class="modal-body">
                <div class="login">
                    <form action="signup-conn1.php" method="post" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3 username" id="signupName" name="first" placeholder="الاسم الأول" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">الاسم الأول لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">الاسم الأول يجب أن لا يقل عن <strong>8 حروف</strong></div>
							<div class="alert alert-danger custom-alert">الاسم الأول يجب أن يحتوي علي <strong>حروف فقط.</strong></div>
                        </div>
						<div class="col-12">
                            <input type="text" class="form-control mb-3 username" id="signupName" name="last" placeholder="الاسم الأخير" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">الاسم الأخير لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">الاسم الأخير يجب أن لا يقل عن <strong>8 حروف</strong></div>
							<div class="alert alert-danger custom-alert">الاسم الأخير يجب أن يحتوي علي <strong>حروف فقط.</strong></div>
                        </div>
                        <div class="col-12 ast">
                            <input type="email" class="form-control mb-3 email" id="signupEmail" name="email" placeholder="البريد الالكتروني" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">البريد الالكتروني لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">البريد الالكتروني يجب أن يحتوي علي <strong>@</strong></div>
							<div class="alert alert-danger custom-alert">البريد الالكتروني يجب أن يحتوي علي <strong>com.</strong></div>
                        </div>
						<div class="col-12 ast">
                            <input type="text" class="form-control mb-3 phone" id="signupPhone" name="phone" placeholder="رقم الهاتف" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
							  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون علي الأقل  <strong>10 أرقام</strong></div>
							  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
							  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
                        </div>
                        <div class="col-12 ast">
                            <input type="password" class="form-control mb-3 password" id="signupPassword" name="password" placeholder="كلمة المرور" required>
							<i class="glyphicon glyphicon-ok check check-pass"></i>
							<i class="glyphicon glyphicon-remove close close-pass"></i>
							<i class="show-pass fa fa-eye fa-2x"></i>
							<div class="alert alert-danger empty-alert"> كلمة المرور لا يمكن أن تترك فارغة <strong></strong>  ويجب أن تحتوي علي حروف كبيرة وحروف صغيرة ورقم</div>
							<div class="alert alert-info" style="text-align:right">كلمة المرور يجب أن تحتوي علي <strong>رقم وحروف كبيره وحروف صغيره.</strong></div>
                        </div>
						<div class="col-12 ast">
                            <input type="text" class="form-control mb-3 code" id="signupPhone" name="code" placeholder="كود المدرسة" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">كود المدرسة لا يمكن أن يترك <strong>فارغ</strong></div>
							<!--<div class="alert alert-danger long-alert">كود المدرسة يجب أن لا يقل عن <strong>8 أرقام</strong></div>-->
							<div class="alert alert-danger custom-alert">كود المدرسة يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">انشاء حساب</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>	
<!-- End Teacher -->
<!-- Start Parent -->
<div class="modal fade login" dir="rtl" id="signupParent" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>انشاء حساب ولي أمر</h3>
                <button style="margin-left:0;margin-bottom:1px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="signup-conn2.php" method="post" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3 username" id="signupName" name="first" placeholder="الاسم الأول" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">الاسم الأول لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">الاسم الأول يجب أن لا يقل عن <strong>8 حروف</strong></div>
							<div class="alert alert-danger custom-alert">الاسم الأول يجب أن يحتوي علي <strong>حروف فقط.</strong></div>
                        </div>
						<div class="col-12">
                            <input type="text" class="form-control mb-3 username" id="signupName" name="last" placeholder="الاسم الأخير" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">الاسم الأخير لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">الاسم الأخير يجب أن لا يقل عن <strong>8 حروف</strong></div>
							<div class="alert alert-danger custom-alert">الاسم الأخير يجب أن يحتوي علي <strong>حروف فقط.</strong></div>
                        </div>
                        <div class="col-12 ast">
                            <input type="email" class="form-control mb-3 email" id="signupEmail" name="email" placeholder="البريد الالكتروني" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">البريد الالكتروني لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">البريد الالكتروني يجب أن يحتوي علي <strong>@</strong></div>
							<div class="alert alert-danger custom-alert">البريد الالكتروني يجب أن يحتوي علي <strong>com.</strong></div>
                        </div>
						<div class="col-12 ast">
                            <input type="text" class="form-control mb-3 phone" id="signupPhone" name="phone" placeholder="رقم الهاتف" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
							  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون علي الأقل  <strong>10 أرقام</strong></div>
							  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
							  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
                        </div>
                        <div class="col-12 ast">
                            <input type="password" class="form-control mb-3 password" id="signupPassword" name="password" placeholder="كلمة المرور" required>
							<i class="glyphicon glyphicon-ok check check-pass"></i>
							<i class="glyphicon glyphicon-remove close close-pass"></i>
							<i class="show-pass fa fa-eye fa-2x"></i>
							<div class="alert alert-danger empty-alert"> كلمة المرور لا يمكن أن تترك فارغة <strong></strong>  ويجب أن تحتوي علي حروف كبيرة وحروف صغيرة ورقم</div>
							<div class="alert alert-info" style="text-align:right">كلمة المرور يجب أن تحتوي علي <strong>رقم وحروف كبيره وحروف صغيره.</strong></div>
                        </div>
						<div class="col-12 ast">
                            <input type="text" class="form-control mb-3 code" id="signupPhone" name="code" placeholder="كود المدرسة" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">كود المدرسة لا يمكن أن يترك <strong>فارغ</strong></div>
							<!--<div class="alert alert-danger long-alert">كود المدرسة يجب أن لا يقل عن <strong>8 أرقام</strong></div>-->
							<div class="alert alert-danger custom-alert">كود المدرسة يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">انشاء حساب</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>	
<!-- End Parent -->	
<div class="modal fade login" dir="rtl" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>تسجيل دخول</h3>
                <button style="margin-left:0;margin-bottom:1px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="login-conn.php" method="post" class="row">
                    <div class="col-12 ast">
                            <input type="email" class="form-control mb-3 email" id="signupEmail" name="email" placeholder="البريد الالكتروني" required>
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">البريد الالكتروني لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">البريد الالكتروني يجب أن يحتوي علي <strong>@</strong></div>
							<div class="alert alert-danger custom-alert">البريد الالكتروني يجب أن يحتوي علي <strong>com.</strong></div>
                        </div>
                        <div class="col-12 ast">
                            <input type="password" class="form-control mb-3 password" id="signupPassword" name="password" placeholder="كلمة المرور" required>
							<i class="glyphicon glyphicon-ok check check-pass"></i>
							<i class="glyphicon glyphicon-remove close close-pass"></i>
							<i class="show-pass fa fa-eye fa-2x"></i>
							<div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
							<!--<div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>10 حروف</strong></div>-->
							<!--<div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
							<div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>
							<div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>5 أرقام.</strong></div>-->
                        </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary">تسجيل دخول</button>
                    </div>
					<div class="col-10">
		                <a class="reset" href="#" data-toggle="modal" data-target="#resetModal" style="text-decoration: none;color:#FFBC3B;font-weight: bold;margin-top: 40px">نسيت كلمة المرور؟</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
	
	
	
	
<div class="modal fade login" dir="rtl" id="resetModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>اعادة تعيين كلمة المرور</h3>
                <button style="margin-left:0;margin-bottom:1px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12 ast">
                            <input type="email" class="form-control mb-3 email" id="signupEmail" name="signupEmail" placeholder="البريد الالكتروني">
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">البريد الالكتروني لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">البريد الالكتروني يجب أن يحتوي علي <strong>@</strong></div>
							<div class="alert alert-danger custom-alert">البريد الالكتروني يجب أن يحتوي علي <strong>com.</strong></div>
                        </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary">اعادة تعيين كلمة المرور</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>	

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="layout/images/banner/banner-1.jpg">
  <div class="container">
    <div class="hero-slider" style="text-align: center">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h2 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">يربط توارد المعلمين والأسر بموقع واحد سهل الاستخدام لجميع احتياجات الاتصال الخاصة بهم، كل ما تحتاجه لتحقيق النجاح في التعلم عن بُعد في مكان واحد</h2>
   
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h2 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">توارد يساعدك على متابعة مستوى الطلاب الدراسي بكل سهولة كالواجبات والدرجات ومتطلبات المواد الدراسية</h2>
           
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h2 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">توارد يسهل قيادة المدارس  الكترونياً والتواصل السريع بين المدارس والمعلمين واولياء الامور لتنظيم وتسهيل العملية التعليمية للمدارس</h2>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray" dir="rtl">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="layout/images/banner/banner-feature.png" alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-right">
            <i class="ti-comment mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">التواصل بين المعلمين واولياء الامور والمدارس</h3>
            <p>يمكنك من خلال هذا الموقع انشاء شبكة من التواصل بين المعلمين وأولياء الأمور والمدارس</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-right">
            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">متابعة المستوى الدراسي للإبن ( الدرجات ، الاختبارات ، الحضور والغياب) </h3>
            <p>يمكنك متابعة مستوي ابنك الدراسي مثل متابعة درجاته أو الاختبارات أو الحضور والغياب من خلال توارد</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-right">
            <i class="ti-bell mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">الاعلانات</h3>
            <p>يمكنك أن ترى كل الأعلانات والتنبيهات من قبل المدرسة والمعلم</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-right">
            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">رسائل</h3>
            <p>يمكنك أن تراسل المعلمين في رسائل خاصة لمتابعة مستوي ابنك التعليمي أيضا</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section scraps" dir="rtl" style="text-align:right">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">النبذة</h2>
        <p>أحد عوامل النجاح لتحقيق أهداف التعليم هو التواصل الجيد بين والدي الطالب والمدرسة.
الهدف من الموقع هو تسهيل التواصل بين المعلم وولي الأمر ، مما يساعد على معرفة الحالة الأكاديمية للطالب وكل ما يتعلق بالطالب داخل المدرسة ، مما يؤدي إلى تطوير العملية التعليمية وتنظيم وتحسين الاتصال.</p>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="layout/images/about/about-us.jpg" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
      
        <h2 class="section-title text-white">لكي تلتحق بنا يجب عليك أولا انشاء حساب</h2>
        <a href="#" data-toggle="modal" data-target="#signupModal" class="btn btn-secondary">التحق الان</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" dir="rtl" data-background="layout/images/backgrounds/success-story.jpg">
  <div class="container">
    <div class="row">
      <!--<div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>-->
      <div class="col-lg-6 col-sm-8" style="text-align: right">
        <div class="bg-white p-5">
          <h2 class="section-title">المراحل التعليميه لدينا:</h2>
          <p style="color:#FFBC3B;font-weight:bold;font-size:22px"><i class="ti-user"></i> روضة</p>
		  <p style="color:#FFBC3B;font-weight:bold;font-size:22px"><i class="ti-user"></i> ابتدائي</p>
		  <p style="color:#FFBC3B;font-weight:bold;font-size:22px"><i class="ti-user"></i> متوسط</p>
		  <p style="color:#FFBC3B;font-weight:bold;font-size:22px"><i class="ti-user"></i> ثانوي</p>	
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- teachers -->
<section class="section teachers" dir="rtl">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <h2 style="text-align: right" class="section-title">مدارسنا</h2>
      </div>
	  <div class="border-top w-100 col-4 border-primary d-none d-sm-block"></div>	
	  <div class="col-2">
		<a href="schools.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">اضغط للمزيد</a>
	  </div>	
      <!-- teacher -->
	 <?php
	  
		include('connect.php');  
		$sql = $con->prepare("SELECT *

		   FROM
			  admin


		   ");
		$sql->execute();
		$rows = $sql->fetchAll();

		foreach($rows as $pat)
		{

	   ?>	
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow" style="margin-bottom:20px">
          <img class="card-img-top rounded-0" src="layout/images/school.jpeg" alt="teacher">
          <div class="card-body" style="text-align:right">
              <h4 style="color:#FFBC3B" class="card-title"><?php echo $pat["Name"];  ?></h4>
            <p><?php echo $pat["Stage"];  ?></p>
			
			  <!--<a style="margin-top:20px" href="teachers.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">عرض المعلمين</a>-->
          </div>
        </div>
      </div>
	  <?php } ?>	
    </div>
  </div>
</section>
<!-- /teachers -->
<footer>	
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-sm-center text-center">
          <p class="mb-0">
             كل الحقوق محفوظة لدي موقع &copy; <a href="homepage.php">توارد.كوم</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="layout/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="layout/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="layout/plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="layout/plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="layout/plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="layout/plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="layout/js/script.js"></script>
<script src="layouts/js/login.js"></script>

</body>
</html>