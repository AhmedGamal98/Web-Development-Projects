<?php
  require_once('include/connection.php');
  session_start();

$do = isset($_GET['do'])? $_GET['do'] : "Manage";

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="img/logo.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sign_in.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script defer src="js/all.js"></script>
    <title>نجاح</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="120"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex">
              <a href="index.php#what"><button class="btn btn-light"  type="button">ما هو نجاح ؟</button></a>
              <a href="index.php#benefits"><button class="btn btn-light"  type="button">الفوائد</button></a>
              <a href="sign_in.php"><button class="btn btn-outline-primary active" id="s_btn" type="button">تسجيل الدخول</button></a>
              <a href="sign_up.php"><button class="btn btn-outline-primary" id="s1_btn" type="button">تسجيل جديد</button></a>
            </div>
          </div>
        </div>
      </nav>

      <header>
      <?php if($do == "Manage"){ ?>
        <div class="content">
          <h1>استرجاع كلمة السر</h1><br>
          <form method="POST" action="include/reset.php" style="height:180px;"><br>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-4 col-form-label">البريد الإلكتروني</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" id="inputEmail3" required>
              </div>
            </div><br>
            <button type="submit" style="float: left;" class="btn btn-primary">تسجيل الدخول</button>
          </form>
        </div>
        <?php }elseif($do == "success"){ ?>
        <div class="content">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
           هذا البريد الإلكتروني غير صحيح او غير مسجل على الموقع
            
            
          </div>
          <h1>استرجاع كلمة السر</h1><br>
          <form method="POST" action="include/reset.php" style="height:180px;"><br>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-4 col-form-label">البريد الإلكتروني</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" id="inputEmail3" required>
              </div>
            </div><br>
            <button type="submit" style="float: left;" class="btn btn-primary">تسجيل الدخول</button>
          </form>
        </div>
        <?php }?>
      </header>
</body>
</html>