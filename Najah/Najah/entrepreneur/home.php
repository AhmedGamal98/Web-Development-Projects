<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['user_type']) && !isset($_SESSION['password'])) {  
      header('location: ../sign_in.php?do=should'); 
  } 
  

?> 
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/all.js"></script>
    <style>
        #my{
    margin-left: 20px;
    width: 150px;
    border-radius: 25px;
    background-color: #fff;
    }
#my:hover{
    background-color: #2b56ba;
}
    </style>
    <title>نجاح</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="../img/logo.png" width="120"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex">
              <a href="#"><button class="btn btn-light"  type="button">الرئيسية</button></a>
              <a href="prediction.php"><button class="btn btn-outline-primary" id="s_btn" type="button">ابدأ التوقع</button></a>
              <a href="my_result.php"><button class="btn btn-outline-primary" id="my" type="button">توقعاتي</button></a>
              <a href="profile.php"><button class="btn btn-outline-primary" id="pro_btn" type="button">الصفحة الشخصية</button></a>
              <a href="../include/logout.php"><button class="btn btn-outline-primary" id="log_out_btn" type="button">تسجيل الخروج</button></a>
            </div>
          </div>
        </div>
      </nav>

    <header>
        <br> <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <img src="../img/Visual data.gif" height="500" width="500" alt="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <br><br><br>
                    <h1>نجاح</h1><br>
                    <p>نحن متحمسون وفخورون بموقعنا. أصبح من السهل الآن التنبؤ بريادة الأعمال ونجاح الأعمال مع نجاح.</p><br>
                    <a href="prediction.php"><button class="btn btn-outline-primary" type="button">ابدأ التوقع</button></a>
                </div>
            </div>
        </div>
    </header><!-- End Header -->
</body>
</html>