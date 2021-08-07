<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['user_type']) && !isset($_SESSION['password'])) {  
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
    <link rel="stylesheet" href="../css/profile.css">
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
              <a href="home.php"><button class="btn btn-light"  type="button">الرئيسية</button></a>
              <a href="prediction.php"><button class="btn btn-outline-primary" id="s_btn" type="button">ابدأ التوقع</button></a>
              <a href="my_result.php"><button class="btn btn-outline-primary" id="my" type="button">توقعاتي</button></a>
              <a href="#"><button class="btn btn-outline-primary" id="pro_btn" type="button">الصفحة الشخصية</button></a>
              <a href="../index.php"><button class="btn btn-outline-primary" id="log_out_btn" type="button">تسجيل الخروج</button></a>
            </div>
          </div>
        </div>
      </nav>

      <div class="container"> 
      <?php if($do == "Manage"){ ?> 
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">البيانات الشخصية</h1>
        </div>
      <?php }elseif($do == "success"){ ?>
        
          <div class="alert alert-success alert-dismissible fade show" style="margin-top:35px;" role="alert">
                تم تعديل البيانات الشخصية بنجاح
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">البيانات الشخصية</h1>
        </div>
        <?php } ?>
        <div class="row gutters-sm">
              <div class="col-md-12 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="col-md-12">
                          <div class="card mb-12">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">اسم المستخدم</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  <?php echo $_SESSION['username'];?>
                                </div>
                              </div>
                              <hr>
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
                                  *************
                                </div>
                              </div>
                              <hr>
                              <a href="edit.php"><button class="btn btn-outline-primary" id="edit_btn" type="button">تعديل</button></a>
                            </div>
                          </div>
                  </div>
                </div>
      </div> 
</body>
</html>