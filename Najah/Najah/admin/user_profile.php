<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['username']) && !isset($_SESSION['email'])) {  
      header('location: ../sign_in.php?do=should'); 
  }
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

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
              <a href="admin_home.php"><button class="btn btn-light"  type="button">الرئيسية</button></a>
              <a href="user_list.php"><button class="btn btn-outline-primary active" id="s1_btn" type="button">إدارة الموقع</button></a>
              <a href="../include/logout.php"><button class="btn btn-outline-primary" id="log_out_btn" type="button">تسجيل الخروج</button></a>
            </div>
          </div>
        </div>
      </nav>


    <div class="container">  
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">بيانات المستخدم</h1>
      </div>
      <div class="row gutters-sm">
            <div class="col-md-12 mb-3">
              <div class="card">
                <div class="card-body">
                  
                  <div class="col-md-12">
                        <div class="card mb-12">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">الاسم </h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $_SESSION['username'];?>
                              </div>
                            </div>
                            <hr>
                            
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">البريد الإلكتروني</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $_SESSION['email'];?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">رقم الهاتف</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $_SESSION['phone'];?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">كلمة السر</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $_SESSION['password'];?>
                              </div>
                            </div>
                          </div>
                        </div>
                </div>
              </div>
    </div>  
</body>
</html>