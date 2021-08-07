<?php

session_start();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Schools</title>

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
            <li class="nav-item">
              <a class="nav-link" href="homepage.php">الرئيسية</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="homepage.php">نبذه</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="schools.php">المدارس</a>
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
<div class="modal fade login" dir="rtl" style="height:700px" id="signupSchool" tabindex="-1" role="dialog" aria-hidden="true">
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

<!-- page title -->
<section class="page-title-section overlay" data-background="layout/images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8" style="text-align:center">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link"> مدارسنا</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">هنا حيث كل المدارس المتواجدة لدينا</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teachers -->
<section class="section">
  <div data-ref="mixitup-target" class="container">
    <!--<div class="row">
      <div class="col-12" dir="rtl" style="text-align:right">
        <!-- teacher category list 
        <ul class="list-inline text-center filter-controls mb-5">
          <li class="list-inline-item m-3 text-uppercase" data-filter=".arts">الكل</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".bio-science">الرياض</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".business-study">عفيف</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".law">الرياض</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".pharmacy">غفيف</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".science">الرياض</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".social-science">عفيف</li>
        </ul>
      </div>
    </div>-->
    <!-- teacher list -->
    <div class="row" data-ref="mixitup-container">		
      <!-- teacher 
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts law">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="layout/images/school.jpeg" alt="teacher">
          <div class="card-body" style="text-align:right">
              <h4 style="color:#FFBC3B" class="card-title">مدرسة الشهيد</h4>
            <p>ابتدائي</p>
			<h4 style="color:#FFBC3B" class="card-title">البريد الالكتروني</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">elshaheed@gmail.com</li>
            </ul>
			<h4 style="color:#FFBC3B" class="card-title">رقم التواصل</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">ٍ0523432432</li>
            </ul>
			  <!--<a style="margin-top:20px" href="teachers.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">عرض المعلمين</a>
          </div>
        </div>
      </div>
      <!-- teacher 
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts law">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="layout/images/school.jpeg" alt="teacher">
          <div class="card-body" style="text-align:right">
              <h4 style="color:#FFBC3B" class="card-title">مدرسة الشهيد</h4>
            <p>ابتدائي</p>
			<h4 style="color:#FFBC3B" class="card-title">البريد الالكتروني</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">elshaheed@gmail.com</li>
            </ul>
			<h4 style="color:#FFBC3B" class="card-title">رقم التواصل</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">ٍ0523432432</li>
            </ul> 
			  <!--<a style="margin-top:20px" href="teachers.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">عرض المعلمين</a>
          </div>
        </div>
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
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts arts">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="layout/images/school.jpeg" alt="teacher">
          <div class="card-body" style="text-align:right">
              <h4 style="color:#FFBC3B" class="card-title"><?php echo $pat["Name"];  ?></h4>
            <p><?php echo $pat["Stage"];  ?></p>
			
			  <!--<a style="margin-top:20px" href="teachers.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">عرض المعلمين</a>-->
          </div>
        </div>
      </div>
		<?php } ?>
      <!-- teacher 
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts arts">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="layout/images/school.jpeg" alt="teacher">
          <div class="card-body" style="text-align:right">
              <h4 style="color:#FFBC3B" class="card-title">مدرسة الشهيد</h4>
            <p>ابتدائي</p>
			<h4 style="color:#FFBC3B" class="card-title">البريد الالكتروني</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">elshaheed@gmail.com</li>
            </ul>
			<h4 style="color:#FFBC3B" class="card-title">رقم التواصل</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">ٍ0523432432</li>
            </ul> 
			  <!--<a style="margin-top:20px" href="teachers.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">عرض المعلمين</a>
          </div>
        </div>
      </div>
      <!-- teacher
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts pharmacy">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="layout/images/school.jpeg" alt="teacher">
          <div class="card-body" style="text-align:right">
              <h4 style="color:#FFBC3B" class="card-title">مدرسة الشهيد</h4>
            <p>ابتدائي</p>
			<h4 style="color:#FFBC3B" class="card-title">البريد الالكتروني</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">elshaheed@gmail.com</li>
            </ul>
			<h4 style="color:#FFBC3B" class="card-title">رقم التواصل</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">ٍ0523432432</li>
            </ul> 
			  <!--<a style="margin-top:20px" href="teachers.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">عرض المعلمين</a>
          </div>
        </div>
      </div>
      <!-- teacher 
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts bio-science">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="layout/images/school.jpeg" alt="teacher">
          <div class="card-body" style="text-align:right">
              <h4 style="color:#FFBC3B" class="card-title">مدرسة الشهيد</h4>
            <p>ابتدائي</p>
			<h4 style="color:#FFBC3B" class="card-title">البريد الالكتروني</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">elshaheed@gmail.com</li>
            </ul>
			<h4 style="color:#FFBC3B" class="card-title">رقم التواصل</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">ٍ0523432432</li>
            </ul>  
			  <!--<a style="margin-top:20px" href="teachers.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">عرض المعلمين</a>
          </div>
        </div>
      </div>
      <!-- teacher
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts science">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="layout/images/school.jpeg" alt="teacher">
          <div class="card-body" style="text-align:right">
              <h4 style="color:#FFBC3B" class="card-title">مدرسة الشهيد</h4>
            <p>ابتدائي</p>
			<h4 style="color:#FFBC3B" class="card-title">البريد الالكتروني</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">elshaheed@gmail.com</li>
            </ul>
			<h4 style="color:#FFBC3B" class="card-title">رقم التواصل</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">ٍ0523432432</li>
            </ul>  
			  <!--<a style="margin-top:20px" href="teachers.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">عرض المعلمين</a>
          </div>
        </div>
      </div>
      <!-- teacher 
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts social-science">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="layout/images/school.jpeg" alt="teacher">
          <div class="card-body" style="text-align:right">
              <h4 style="color:#FFBC3B" class="card-title">مدرسة الشهيد</h4>
            <p>ابتدائي</p>
			<h4 style="color:#FFBC3B" class="card-title">البريد الالكتروني</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">elshaheed@gmail.com</li>
            </ul>
			<h4 style="color:#FFBC3B" class="card-title">رقم التواصل</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">ٍ0523432432</li>
            </ul> 
			  <!--<a style="margin-top:20px" href="teachers.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">عرض المعلمين</a>
          </div>
        </div>
      </div>
      <!-- teacher 
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts business-study">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="layout/images/school.jpeg" alt="teacher">
          <div class="card-body" style="text-align:right">
              <h4 style="color:#FFBC3B" class="card-title">مدرسة الشهيد</h4>
            <p>ابتدائي</p>
			<h4 style="color:#FFBC3B" class="card-title">البريد الالكتروني</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">elshaheed@gmail.com</li>
            </ul>
			<h4 style="color:#FFBC3B" class="card-title">رقم التواصل</h4>  
            <ul class="list-inline" style="text-align:right">
              <li  class="list-inline-item">ٍ0523432432</li>
            </ul> 
			  <!--<a style="margin-top:20px" href="teachers.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">عرض المعلمين</a>
          </div>
        </div>
      </div>-->
    </div>
  </div>
</section>
<!-- /teachers -->

<!-- footer -->
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