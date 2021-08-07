<?php
require_once('include/connection.php');
session_start();

$do = isset($_GET['do'])? $_GET['do'] : "Manage";

?>
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
  <link rel="stylesheet" href="assest/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="assest/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="assest/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="assest/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="assest/plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="assest/plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="assest/css/style.css" rel="stylesheet">
  <link href="assest/css/login.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="assest/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assest/images/logo.png" type="image/x-icon">

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
          <?php if(isset($_SESSION['password']) && isset($_SESSION['class_id'])){
            echo'<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#"  >مرحبا بك في منصة دروسي</a></li>';
          }elseif(!isset($_SESSION['password']) && !isset($_SESSION['class_id'])){
            echo'
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal1">انشاء حساب معلم </a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal2"> انشاء حساب طالب</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">تسجيل الدخول</a></li>';
          }?>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="index.php"><img src="assest/images/logo.png" style='width:80px;' alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center" dir="rtl">
            <li class="nav-item " styel="margin: 0 45px;">
              <a class="nav-link"  href="index.php">الرئيسية</a>
            </li>
            <li class="nav-item" styel="margin: 0 45px;">
              <a class="nav-link" href="index.php#about">نبذة</a>
            </li>
            <li class="nav-item active" styel="margin: 0 45px;">
              <a class="nav-link" href="#">المدرسيين</a>
            </li>
            <?php if(isset($_SESSION['password']) && isset($_SESSION['class_id'])){
              echo'
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                اسم الطالب
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile.php">الصفحة الشخصية</a>
                <a class="dropdown-item" href="include/logout.php">تسجيل الخروج</a>
              </div>
            </li>';
          }?>
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
              <form action="student/index.php" class="row">
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


<!-- page title -->
<section class="page-title-section overlay" data-background="assest/images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-11">
        <ul style="float:right;" class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="#">المدرسين</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul><br><br><br>
        <p style="float:right; margin-right:10px" class="text-lighten">تقدم دوراتنا حلاً وسطاً جيداً بين التقييم المستمر الذي تفضله بعض الجامعات والتركيز على الاختبارات النهائية من قبل الآخرين</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teachers -->
<section class="section">
  <div data-ref="mixitup-target" class="container">
    <div class="row">
      <div class="col-12">
        <!-- teacher category list -->
        <ul class="list-inline text-center filter-controls mb-5" style="color:black;">
        <?php
      $sql1 =$con->prepare("SELECT * FROM subject");

      $sql1->execute();
                                      
      $rows1 =$sql1->fetchAll($con::FETCH_ASSOC);
      foreach ($rows1 as $row){
        echo'
        
          <li class="list-inline-item m-3 text-uppercase" data-filter=".'.$row['subject_name'].'">'.$row['subject_name'].'</li>
        
        ';
      }
      

    ?>
    </ul>
        
          
        
      </div>
    </div>
    <!-- teacher list -->
    <div class="row" data-ref="mixitup-container" dir="rtl">
    <?php
      $sql2 =$con->prepare("SELECT 
      teacher.* ,subject.subject_name 
      FROM teacher
      INNER JOIN
      subject
      ON subject.teacher_id = teacher.teacher_id");

      $sql2->execute();
                                      
      $rows2 =$sql2->fetchAll($con::FETCH_ASSOC);
      foreach ($rows2 as $row){
        echo'
          <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts '.$row['subject_name'].'">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="assest/images/teachers/avatar.jpeg" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.php?id='.$row['teacher_id'].'">
                <h4 class="card-title" style="text-align: center;">'.$row['name'].'</h4>
              </a>
            </div>
          </div>
        </div>
        ';


      }
      ?>
      
 
    </div>
  </div>
</section>
<!-- /teachers -->

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
          <div class="float-right d-none d-sm-inline">
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
<script src="assest/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="assest/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="assest/plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="assest/plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="assest/plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="assest/plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="assest/plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="assest/js/script.js"></script>
<script src="assest/js/login.js"></script>

</body>
</html>