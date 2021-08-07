<?php
require_once('include/connection.php');

$do = isset($_GET['do'])? $_GET['do'] : "Manage";

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="img/logo.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script defer src="js/all.js"></script>
    <title>فسيلة</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="150"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex">
              <a href="index.php"><button class="btn btn-outline-primary"style="width:180px;" id="s1_btn" type="button">الصفحة الرئيسية</button></a>
              <a href="signup.php"><button class="btn btn-outline-primary" id="s1_btn" type="button">تسجيل جديد</button></a>
              <a href="#"><button class="btn btn-outline-primary active" id="s_btn" type="button" style="margin-left: 140px;">تسجيل الدخول</button></a>
              <!--<form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">
              </form>-->
            </div>
          </div>
        </div>
      </nav>

      <header>
      <?php if($do == "Manage"){ ?>
        <div class="content">
          <h1>تسجيل الدخول</h1><br>
          <form action="include/sign_in.php" method="post">
            <div class="row mb-3">
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="كلمه السر" id="inputPassword3" required>
              </div>
            </div>
            
            <button type="submit" style="float: left;" class="btn btn-primary">تسجيل الدخول</button>
           <!--<a href=""  style="float: left;margin-left:15px;margin-top:10px;">نسيت كلمة المرور ؟</a>-->
          </form>
        </div>

      <?php }elseif($do == "success"){ ?>
        <br>
          <div class="alert alert-success alert-dismissible fade show col-5" style="margin-right:85px" role="alert">
            تم تسجيل حساب جديد بنجاح يمكنك الان تسجيل الدخول 
          </div>
          <div class="content">
          <h1>تسجيل الدخول</h1><br>
          <form action="include/sign_in.php" method="post">
            <div class="row mb-3">
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="كلمه السر" id="inputPassword3" required>
              </div>
            </div>
            
            <button type="submit" style="float: left;" class="btn btn-primary">تسجيل الدخول</button>
            <!--<a href=""  style="float: left;margin-left:15px;margin-top:10px;">نسيت كلمة المرور ؟</a>-->
          </form>
        </div>
        <?php }elseif($do == "error"){ ?>
          <br>
          <div class="alert alert-danger alert-dismissible fade show col-5" style="margin-right:85px" role="alert">
            البريد الالكتروني او كلمة المرور غير صحيحة
          </div>
          <div class="content">
          <h1>تسجيل الدخول</h1><br>
          <form action="include/sign_in.php" method="post">
            <div class="row mb-3">
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="كلمه السر" id="inputPassword3" required>
              </div>
            </div>
            
            <button type="submit" style="float: left;" class="btn btn-primary">تسجيل الدخول</button>
            <!--<a href=""  style="float: left;margin-left:15px;margin-top:10px;">نسيت كلمة المرور ؟</a>-->
          </form>
        </div>

      <?php } ?>
        
      </header>
      <footer style="color: white;">
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-6">
              <a>Contact us: <i class="far fa-envelope"></i> Fasilah@gmail.com  </a><br>
              <a>  Fasilah@ <i class="fab fa-twitter"></i> </a>
            </div>
            <div class="col-6" >
              <a style="margin-right: 330px;" >FASILAH.COM</a>
            </div>
          </div>
        </div>
        
      </footer>
</body>
</html>