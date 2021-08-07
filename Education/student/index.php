<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>دروسي</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../assest/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="../assest/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="../assest/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="../assest/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="../assest/plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="../assest/plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="../assest/css/style.css" rel="stylesheet">
  <link href="../assest/css/login.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="../assest/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../assest/images/logo.png" type="image/x-icon">

</head>

<body>
  

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#"  >مرحبا بك في منصة دروسي</a></li>
            
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="index.php"><img src="../assest/images/logo.png" style='width:80px;' alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center" dir="rtl">
            <li class="nav-item active" styel="margin: 0 45px;">
              <a class="nav-link"  href="#">الرئيسية</a>
            </li>
            <li class="nav-item" styel="margin: 0 45px;">
              <a class="nav-link" href="#about">نبذة</a>
            </li>
            <li class="nav-item" styel="margin: 0 45px;">
              <a class="nav-link" href="#teacher">المدرسيين</a>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                اسم الطالب
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile.php">الصفحة الشخصية</a>
                <a class="dropdown-item" href="../index.php">تسجيل الخروج</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade login" dir="rtl" id="signupModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-0 border-0 p-4">
          <div class="modal-header border-0">
              <h3>انشاء حساب معلم جديد</h3>
              <button style="margin-left:0;margin-bottom:1px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="login">
                  <form action="#" class="row">
                      <div class="col-12">
                          <input type="text" class="form-control mb-3 username" id="signupName" name="signupName" placeholder="الاسم">
            <i class="glyphicon glyphicon-ok check"></i>
            <i class="glyphicon glyphicon-remove close"></i>
            <div class="alert alert-danger empty-alert">الاسم لا يمكن أن يترك <strong>فارغ</strong></div>
            <div class="alert alert-danger long-alert">الاسم يجب أن لا يقل عن <strong>8 حروف</strong></div>
            <div class="alert alert-danger custom-alert">الاسم يجب أن يحتوي علي <strong>حروف فقط.</strong></div>
                      </div>
                      <div class="col-12 ast">
            <input type="number" class="form-control mb-3 code" id="signupPhone" name="signupPhone" placeholder="رقم الهاتف">
            <i class="glyphicon glyphicon-ok check"></i>
            <i class="glyphicon glyphicon-remove close"></i>
            <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن يترك <strong>فارغ</strong></div>
            <div class="alert alert-danger long-alert"> رقم الهاتف يجب أن لا يقل عن <strong>11 أرقام</strong></div>
            
           </div>

                      <div class="col-12 ast">
                          <input type="email" class="form-control mb-3 email" id="signupEmail" name="signupEmail" placeholder="البريد الالكتروني">
            <i class="glyphicon glyphicon-ok check"></i>
            <i class="glyphicon glyphicon-remove close"></i>
            <div class="alert alert-danger empty-alert">البريد الالكتروني لا يمكن أن يترك <strong>فارغ</strong></div>
            <div class="alert alert-danger long-alert">البريد الالكتروني يجب أن يحتوي علي <strong>@</strong></div>
            <div class="alert alert-danger custom-alert">البريد الالكتروني يجب أن يحتوي علي <strong>com.</strong></div>
                      </div>
                      <div class="col-12 ast">
                          <input type="password" class="form-control mb-3 password" id="signupPassword" name="signupPassword" placeholder="كلمة المرور">
            <i class="glyphicon glyphicon-ok check check-pass"></i>
            <i class="glyphicon glyphicon-remove close close-pass"></i>
            <i class="show-pass fa fa-eye fa-2x"></i>
            <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
            <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>10 حروف</strong></div>
            <div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
            <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>
            <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>5 أرقام.</strong></div>
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
<!-- Modal -->
<div class="modal fade login" dir="rtl" id="signupModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-0 border-0 p-4">
          <div class="modal-header border-0">
              <h3>انشاء حساب طالب جديد</h3>
              <button style="margin-left:0;margin-bottom:1px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="login">
                  <form action="#" class="row">
                      <div class="col-12">
                          <input type="text" class="form-control mb-3 username" id="signupName" name="signupName" placeholder="الاسم">
            <i class="glyphicon glyphicon-ok check"></i>
            <i class="glyphicon glyphicon-remove close"></i>
            <div class="alert alert-danger empty-alert">الاسم لا يمكن أن يترك <strong>فارغ</strong></div>
            <div class="alert alert-danger long-alert">الاسم يجب أن لا يقل عن <strong>8 حروف</strong></div>
            <div class="alert alert-danger custom-alert">الاسم يجب أن يحتوي علي <strong>حروف فقط.</strong></div>
                      </div>
                      <div class="col-12 ast">
            <input type="number" class="form-control mb-3 code" id="signupPhone" name="signupPhone" placeholder="رقم الهاتف">
            <i class="glyphicon glyphicon-ok check"></i>
            <i class="glyphicon glyphicon-remove close"></i>
            <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن يترك <strong>فارغ</strong></div>
            <div class="alert alert-danger long-alert"> رقم الهاتف يجب أن لا يقل عن <strong>11 أرقام</strong></div>
           </div>
           <div class="col-12 ast">
            <select class="form-control  mb-3 " id="signupGemder" name="signupGender" aria-label="" style="height:58px;">
              <option value="1">انثي</option>
              <option value="2">ذكر</option>
            </select>
            </div>
                      <div class="col-12 ast">
                          <input type="email" class="form-control mb-3 email" id="signupEmail" name="signupEmail" placeholder="البريد الالكتروني">
            <i class="glyphicon glyphicon-ok check"></i>
            <i class="glyphicon glyphicon-remove close"></i>
            <div class="alert alert-danger empty-alert">البريد الالكتروني لا يمكن أن يترك <strong>فارغ</strong></div>
            <div class="alert alert-danger long-alert">البريد الالكتروني يجب أن يحتوي علي <strong>@</strong></div>
            <div class="alert alert-danger custom-alert">البريد الالكتروني يجب أن يحتوي علي <strong>com.</strong></div>
                      </div>
                      <div class="col-12 ast">
                          <input type="password" class="form-control mb-3 password" id="signupPassword" name="signupPassword" placeholder="كلمة المرور">
            <i class="glyphicon glyphicon-ok check check-pass"></i>
            <i class="glyphicon glyphicon-remove close close-pass"></i>
            <i class="show-pass fa fa-eye fa-2x"></i>
            <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
            <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>10 حروف</strong></div>
            <div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
            <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>
            <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>5 أرقام.</strong></div>
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
<!-- Modal -->
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
              <form action="#" class="row">
                  <div class="col-12 ast">
                          <input type="email" class="form-control mb-3 email" id="signupEmail" name="signupEmail" placeholder="البريد الالكتروني">
            <i class="glyphicon glyphicon-ok check"></i>
            <i class="glyphicon glyphicon-remove close"></i>
            <div class="alert alert-danger empty-alert">البريد الالكتروني لا يمكن أن يترك <strong>فارغ</strong></div>
            <div class="alert alert-danger long-alert">البريد الالكتروني يجب أن يحتوي علي <strong>@</strong></div>
            <div class="alert alert-danger custom-alert">البريد الالكتروني يجب أن يحتوي علي <strong>com.</strong></div>
                      </div>
                      <div class="col-12 ast">
                          <input type="password" class="form-control mb-3 password" id="signupPassword" name="signupPassword" placeholder="كلمة المرور">
            <i class="glyphicon glyphicon-ok check check-pass"></i>
            <i class="glyphicon glyphicon-remove close close-pass"></i>
            <i class="show-pass fa fa-eye fa-2x"></i>
            <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
            <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>10 حروف</strong></div>
            <div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
            <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>
            <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>5 أرقام.</strong></div>
                      </div>
                  <div class="col-2">
                      <button type="submit" class="btn btn-primary">تسجيل دخول</button>
                  </div>
        <div class="col-10">
                  <a class="reset" href="#" data-toggle="modal" data-target="#resetModal" style="text-decoration: none;color:#5c575d;font-weight: bold;margin-top: 40px" class="close" data-dismiss="modal" aria-label="Close">نسيت كلمة المرور؟</a>
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
<section class="hero-section overlay bg-cover" data-background="../assest/images/banner/banner-1.jpg">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8" >
            <h1 style="float:right;"  class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">مرحبا بكم في دروسي </h1>
            <p style="float:right; margin-right:25px;" class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">موقع دروسي يساعدك على فهم فلسفة الفيزياء و تراكيب الكيمياء و عالم الاحياء </p>
          
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 style="float:right;" class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">مرحبا بكم في دروسي</h1>
            <p style="float:right; margin-right:25px;" class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">موقع دروسي يساعدك على فهم فلسفة الفيزياء و تراكيب الكيمياء و عالم الاحياء</p>
            
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 style="float:right;" class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">مرحبا بكم في دروسي</h1>
            <p style="float:right; margin-right:25px;" class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">موقع دروسي يساعدك على فهم فلسفة الفيزياء و تراكيب الكيمياء و عالم الاحياء</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="../assest/images/banner/banner-feature.jpg" alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <img style="margin-left:50%;margin-top:220px;width:120px;" src="../assest/images/logo.png" alt="logo"> 
          <h1 style="margin-top:20px;margin-left:220px ;">ندعم المرحلة الثانوية</h1>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section" id="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1"dir="rtl">
        <h2 class="section-title" style="float:right;">نبذة عن دروسي</h2>
        <p style="float:right; text-align: right;">موقع دروسي يساعدك على فهم فلسفة الفيزياء و تراكيب الكيمياء و عالم الاحياء 
          هدفنا من موقع دروسي هو خدمة المناهج السعودية من خلال تقديم خدمات للطلاب لاكتشاف نقاط ضعفهم وإلى أي مدى يحتاجون إلى دروس الدعم أو التحسين.<br>
          سيوفر الموقع للطالب إمكانية تحديد المستوى والمقرر الذي يرغب في اكتشاف مستواه فيه. <br>
          نهتم لخدمة طلاب الثانوي .
          </p>
        
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="../assest/images/about/about-us.jpg" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->



<!-- cta -->

<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" data-background="../assest/images/backgrounds/success-story.jpg" >
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
      </div>
      <div class="col-md-6 order-2 bg-white p-5 order-md-1"dir="rtl">
        <h2 class="section-title" style="float:right;">أهدافنا</h2>
        <p style="float:right; text-align: right;">هدفنا من موقع دروسي هو خدمة المناهج السعودية من خلال تقديم خدمات للطلاب لاكتشاف نقاط ضعفهم وإلى أي مدى يحتاجون إلى دروس الدعم أو التحسين.
          سيوفر الموقع للطالب إمكانية تحديد المستوى والمقرر الذي يرغب في اكتشاف مستواه فيه. 
          
          </p>
        
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- events -->
<section class="section bg-gray"dir="rtl">
  <div class="container">
    <div class="row">
      <div class="col-12" >
        <div class="d-flex align-items-center section-title justify-content-between">
          
          <div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow" >
      <div class="card-img p-5 position-relative">
        <i style="margin-left:100px;" class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
        <h3 style="margin-left:87px;" class="mb-xl-4 mb-lg-3 mb-4">اختبارات </h3>
        <p style="margin-left:88px;">لمتابعة مستواك </p>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow" >
      <div class="card-img p-5 position-relative">
        <i style="margin-left:100px;" class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
        <h3 style="margin-left:70px;" class="mb-xl-4 mb-lg-3 mb-4">دروس تقويه </h3>
        <p style="margin-left:61px;">لزياده المحصول الدراسي </p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow" >
      <div class="card-img p-5 position-relative">
        <i style="margin-left:100px;" class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
        <h3 style="margin-left:97px;" class="mb-xl-4 mb-lg-3 mb-4">واجبات</h3>
        <p style="margin-left:98px;">لزيادة الفهم</p>
      </div>
    </div>
  </div>
</div>
</section>
<!-- /events -->


<!-- Teacher -->
<section class="section" id="teacher">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <a href="teacher.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">المزيد</a>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
            <div>
              <h2 class="mb-0 text-nowrap mr-3">المدرسين</h2>
            
            </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- teacher -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="../assest/images/teachers/avatar.jpeg" alt="teacher">
      <div class="card-body">
        <a href="teacher-single.php">
          <h4 class="card-title" style="text-align: center;">اسم المعلم</h4>
        </a>
      </div>
    </div>
  </div>
  <!-- teacher -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="../assest/images/teachers/avatar.jpeg" alt="teacher">
      <div class="card-body">
        <a href="teacher-single.php">
          <h4 class="card-title" style="text-align: center;">اسم المعلم</h4>
        </a>
      </div>
    </div>
  </div>
  <!-- teacher -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="../assest/images/teachers/avatar.jpeg" alt="teacher">
      <div class="card-body">
        <a href="teacher-single.php">
          <h4 class="card-title" style="text-align: center;">اسم المعلم</h4>
        </a>
      </div>
    </div>
  </div>
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">المزيد</a>
      </div>
    </div>
  </div>
</section>
<!-- /Teacher -->




<!-- footer -->
<footer>
  
  <!-- footer content -->
  
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          
        </div>
        <div class="col-sm-5 text-sm-right text-center" dir="rtl">
          <div style="color:#eee9e6;" class="float-right d-none d-sm-inline">
            جميع الحقوق محفوظة لدي
      </div>
      <!-- Default to the left -->
      <strong> <a href="#">&nbsp; دروسي &nbsp;</a> &copy; 2021 .</strong>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="../assest/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="../assest/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="../assest/plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="../assest/plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="../assest/plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="../assest/plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="../assest/plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="../assest/js/script.js"></script>
<script src="../assest/js/login.js"></script>

</body>
</html>