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
              <a class="nav-link scrap" href="homepage.php">نبذه</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link teacher" href="schools.php">المدارس</a>
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
	
<section class="hero-section overlay bg-cover" data-background="layout/images/banner/banner-1.jpg">		
<?php

   //session_start();

    include('connect.php');
    $fname = $_POST["first"];
	$lname = $_POST["last"];
    $password = $_POST["password"];
	$email = $_POST["email"];	
	$hashedPass = sha1($password);	
    $phone = $_POST["phone"];
	$code = $_POST["code"];
		
		
$sql=$con->prepare("SELECT * FROM teachers WHERE 
 Email=? AND Password=?");
$sql->execute(array($email,$hashedPass));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $hashedPass != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM  teachers");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["Email"] && $hashedPass == $pat["Password"])
        {
            echo '
			
	  
	<div class="container" dir="rtl">
	  <div class="alert alert-info role="alert">
		  <strong>خطأ!</strong> هذا البريد الالكتروني أو الباسورد ربما مستخدمين من قبل. من فضلك ادخل بريد الكتروني أو باسورد من جديد.
		  <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
    </div>
	</div>  
	<div class="login" dir="rtl">
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
                            <input type="text" class="form-control mb-3 username" id="signupName" name="first" placeholder="الاسم الأول">
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">الاسم الأول لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">الاسم الأول يجب أن لا يقل عن <strong>8 حروف</strong></div>
							<div class="alert alert-danger custom-alert">الاسم الأول يجب أن يحتوي علي <strong>حروف فقط.</strong></div>
                        </div>
						<div class="col-12">
                            <input type="text" class="form-control mb-3 username" id="signupName" name="last" placeholder="الاسم الأخير">
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">الاسم الأخير لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">الاسم الأخير يجب أن لا يقل عن <strong>8 حروف</strong></div>
							<div class="alert alert-danger custom-alert">الاسم الأخير يجب أن يحتوي علي <strong>حروف فقط.</strong></div>
                        </div>
                        <div class="col-12 ast">
                            <input type="email" class="form-control mb-3 email" id="signupEmail" name="email" placeholder="البريد الالكتروني">
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">البريد الالكتروني لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">البريد الالكتروني يجب أن يحتوي علي <strong>@</strong></div>
							<div class="alert alert-danger custom-alert">البريد الالكتروني يجب أن يحتوي علي <strong>com.</strong></div>
                        </div>
						<div class="col-12 ast">
                            <input type="text" class="form-control mb-3 phone" id="signupPhone" name="phone" placeholder="رقم الهاتف">
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
							  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون علي الأقل  <strong>10 أرقام</strong></div>
							  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
							  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
                        </div>
                        <div class="col-12 ast">
                            <input type="password" class="form-control mb-3 password" id="signupPassword" name="password" placeholder="كلمة المرور">
							<i class="glyphicon glyphicon-ok check check-pass"></i>
							<i class="glyphicon glyphicon-remove close close-pass"></i>
							<i class="show-pass fa fa-eye fa-2x"></i>
							<div class="alert alert-danger empty-alert"> كلمة المرور لا يمكن أن تترك فارغة <strong></strong>  ويجب أن تحتوي علي حروف كبيرة وحروف صغيرة ورقم</div>
							<div class="alert alert-info" style="text-align:right">كلمة المرور يجب أن تحتوي علي <strong>رقم وحروف كبيره وحروف صغيره.</strong></div>
                        </div>
						<div class="col-12 ast">
                            <input type="text" class="form-control mb-3 code" id="signupPhone" name="code" placeholder="كود المدرسة">
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
	  
							
';
        }
        
    }
    
} else{
	
	
	include('connect.php');  
	$sql = $con->prepare("SELECT * FROM admin WHERE code=$code");
	$sql->execute();
	$row = $sql->fetch();
	$count = $sql->rowCount();
	
	 if($count > 0){
	
	  $id = $row["admin_ID"];

	  $sql = "INSERT INTO teachers (Fname , Lname ,  Email , Phone , Password  , school_code , admin_ID) VALUES ('$fname', '$lname' , '$email', '$phone', '$hashedPass' , '$code' , '$id')";

      $con->exec($sql);
    
	
      //header('Location:login.php');
	
	  echo '
	  
	  <div class="container" dir="rtl">
		  <div class="alert alert-info role="alert">
			  تم تسجيلك بنجاح نتمني أن يحوز موقعنا علي رضاكم
			  <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		 </div>
	 </div>
	<div class="login" dir="rtl">
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
	  
	  
	  ';
		 
	 }else{
		 
		 
		 echo '
	  
	  <div class="container" dir="rtl">
		  <div class="alert alert-info role="alert">
			  لا يوجد مدرسة بهذا الكود
			  <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		 </div>
	 </div>
	<div class="login" dir="rtl">
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
                            <input type="text" class="form-control mb-3 username" id="signupName" name="first" placeholder="الاسم الأول">
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">الاسم الأول لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">الاسم الأول يجب أن لا يقل عن <strong>8 حروف</strong></div>
							<div class="alert alert-danger custom-alert">الاسم الأول يجب أن يحتوي علي <strong>حروف فقط.</strong></div>
                        </div>
						<div class="col-12">
                            <input type="text" class="form-control mb-3 username" id="signupName" name="last" placeholder="الاسم الأخير">
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">الاسم الأخير لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">الاسم الأخير يجب أن لا يقل عن <strong>8 حروف</strong></div>
							<div class="alert alert-danger custom-alert">الاسم الأخير يجب أن يحتوي علي <strong>حروف فقط.</strong></div>
                        </div>
                        <div class="col-12 ast">
                            <input type="email" class="form-control mb-3 email" id="signupEmail" name="email" placeholder="البريد الالكتروني">
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">البريد الالكتروني لا يمكن أن يترك <strong>فارغ</strong></div>
							<div class="alert alert-danger long-alert">البريد الالكتروني يجب أن يحتوي علي <strong>@</strong></div>
							<div class="alert alert-danger custom-alert">البريد الالكتروني يجب أن يحتوي علي <strong>com.</strong></div>
                        </div>
						<div class="col-12 ast">
                            <input type="text" class="form-control mb-3 phone" id="signupPhone" name="phone" placeholder="رقم الهاتف">
							<i class="glyphicon glyphicon-ok check"></i>
							<i class="glyphicon glyphicon-remove close"></i>
							<div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
							  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون علي الأقل  <strong>10 أرقام</strong></div>
							  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
							  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
                        </div>
                        <div class="col-12 ast">
                            <input type="password" class="form-control mb-3 password" id="signupPassword" name="password" placeholder="كلمة المرور">
							<i class="glyphicon glyphicon-ok check check-pass"></i>
							<i class="glyphicon glyphicon-remove close close-pass"></i>
							<i class="show-pass fa fa-eye fa-2x"></i>
							<div class="alert alert-danger empty-alert"> كلمة المرور لا يمكن أن تترك فارغة <strong></strong>  ويجب أن تحتوي علي حروف كبيرة وحروف صغيرة ورقم</div>
							<div class="alert alert-info" style="text-align:right">كلمة المرور يجب أن تحتوي علي <strong>رقم وحروف كبيره وحروف صغيره.</strong></div>
                        </div>
						<div class="col-12 ast">
                            <input type="text" class="form-control mb-3 code" id="signupPhone" name="code" placeholder="كود المدرسة">
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
	  
	  
	  ';
		 
		 
		 
		 
	 }
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}	
		
		
		
		
		
	
	//insert condition
/*if($role == "Admin"){
	
	
if($type == "Super Admin"){	
	
 $super = $_POST["super"];
	
 if($super == "Super Admin"){	
	
$sql=$con->prepare("SELECT * FROM admin WHERE 
 E-mail=? AND Password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["E-mail"] && $password == $pat["Password"])
        {
            echo '
			
	  
	  <div class="alert alert-danger role="alert">
		  <strong>خطأ!</strong> هذا البريد الالكتروني أو الباسورد ربما مستخدمين من قبل. من فضلك ادخل بريد الكتروني أو باسورد من جديد.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
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
	  <div class="alert alert-danger custom-alert">  الاسم الأول لا يقل عن<strong>8 حروف </strong></div>
	  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control last" type="text" placeholder="اسم العائلة" name="last" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert">  اسم العائلة لا يقل عن<strong>8 حروف </strong></div>
	  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
  </div>	 
  <div class="ast">
	  <input class="form-control username" type="text" placeholder="اسم المستخدم" name="username" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert">  اسم المستخدم لا يقل عن <strong>8 حروف </strong></div>
	  <div class="alert alert-danger long-alert">  اسم المستخدم يجب أن يحتوي علي <strong>حروف فقط</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="كلمة المرور" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>10 حروف</strong></div>
	  <div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
	  <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>
	  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>5 أرقام.</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="new-password" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>
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
							
';
        }
        
    }
    
} else{
	
	
	
	  $sql = "INSERT INTO admin (First name, Last name, Phone , E-mail , Store Address , User name , Password) VALUES ('$fname', '$lname', '$phone', '$email', '$address', '$username' , '$hashedPass')";

      $con->exec($sql);
    
	
      //header('Location:login.php');
	
	  echo '
	  
	  
	  <div class="alert alert-info role="alert">
		  <strong> بخدماتنا </strong> تم انشاء حسابك بنجاح مرحبا بك في نقرة واحدة.كوم سجل الدخول الان لتستمتع.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
     </div>
	 <div class="design" dir="rtl" style="height:auto">
	
 <form class="login" action="homepage.php" method="post">
	 
  <h4 class="text-center">تسجيل الدخول</h4> 
  <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="username" autocomplete="off" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="كلمة المرور" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>10 حروف</strong></div>
	  <div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
	  <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>
	  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>5 أرقام.</strong></div>
  </div>
  <input class="btn btn-primary btn-block button" type="submit" value="دخول"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold">
	  <span>هل أنت لا تمتلك حساب؟ </span><a style="text-decoration:none" href="signup.php">انشاء حساب الان</a>
  </div>
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:20px">
	  <span>هل نسيت كلمة المرور؟ </span><a style="text-decoration:none" href="resetpassword.php">اعادة تعيين الان</a>
  </div>	 
 </form>
</div>	 
	  
	  
	  ';
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
 
 }else if($super == "Normal Admin"){
	 
	 
	 
$sql=$con->prepare("SELECT * FROM admin WHERE 
 email=? AND admin_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["admin_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
	   
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
																<a class="coll" data-toggle="collapse" data-target="#admin">Admin Role</a>
															
															  <div class="collapse border-bottom px-lg-8" id="admin">
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="super" required="">
								
                                                                    <option>Super Admin</option>
                                                                    <option selected="selected">Normal Admin</option>									
                                                                </select>
															   </div>
															   <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	
	  $sql = "INSERT INTO admin (first_name, last_name, address , email , phone_number , gender , age , admin_password , image , name , super , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$super' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	 
	 
	 
	 
 }
}else{
	
	
$sql=$con->prepare("SELECT * FROM admin WHERE 
 email=? AND admin_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["admin_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
	   
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
																
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $superr = "Normal Admin";
	
	
	  $sql = "INSERT INTO admin (first_name, last_name, address , email , phone_number , gender , age , admin_password , image , name , super , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$superr' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
}
 
 
 
 }else if($role == "Customer Servant"){
	
	
//=========== Start  Customer servant =================================//
	
$sql=$con->prepare("SELECT * FROM customer_servant WHERE 
 email=? AND servant_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM customer_servant");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["servant_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">   
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
	   
	   
							<!-- /login
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $sql = "INSERT INTO customer_servant (first_name, last_name, address , email , phone_number , gender , age , servant_password , image , name , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
	
	
	
	
	
	
	
	//=========== End Customer servant ====================================//
	
}else if($role == "Deliverer"){
	
	
	
	
	
	//=========== Start  Deliverer =================================//
	
$sql=$con->prepare("SELECT * FROM deliverer WHERE 
 email=? AND deliverer_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM deliverer");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["deliverer_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
																
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $sql = "INSERT INTO deliverer (first_name, last_name, address , email , phone_number , gender , age , deliverer_password , image , name , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
	
	
	
	
	
	
	
	//=========== End Deliverer ====================================//
	
	
	
	
	
	
}else if($role == "Client"){
	
	
	
	
	//=========== Start  client =================================//
	
$sql=$con->prepare("SELECT * FROM client WHERE 
 email=? AND client_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM client");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["client_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	<div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $sql = "INSERT INTO client (first_name, last_name, address , email , phone_number , gender , age , client_password , image , name) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
	
	
	
	
	
	
	
	//=========== End client ====================================//
	
	
	
}

	
	//insert condition
	
	
	
    /*$sql = "INSERT INTO client (first_name, last_name, address , email , phone_number , gender , age , client_password , image , name) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name')";

    $con->exec($sql);
    
	
    header('Location:login.php');
	

    $con=null;*/
    
?>
	
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