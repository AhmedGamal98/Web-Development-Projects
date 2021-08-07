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
    <link rel="stylesheet" href="css/sign_in.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/jquery.min.js" ></script>
    <script src="js/jquery.validate.min.js" ></script>
    <script>
    // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='login']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email:true
      },
      password: {
        required: true,

      }
    },
    // Specify validation error messages
    messages: {
      password: {
        required: "من فضلك ادخل كلمة المرور",
      },
      email:{
        required: "من فضلك ادخل البريد الإلكتروني",
        email: "من فضلك ادخل البريد الالكتروني بالشكل الصحيح"
      }

    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
    </script>
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
              <a href="#"><button class="btn btn-outline-primary active" id="s_btn" type="button">تسجيل الدخول</button></a>
              <a href="sign_up.php"><button class="btn btn-outline-primary" id="s1_btn" type="button">تسجيل جديد</button></a>
            </div>
          </div>
        </div>
      </nav>

      <header>
        <?php if($do == "Manage"){ ?>
        <div class="content">
          <h1>تسجيل الدخول</h1><br>
          <form name='login' method="POST" action="include/signin.php" style="height:280px;">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-4 col-form-label">البريد الإلكتروني</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-4 col-form-label">كلمه السر</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" placeholder="كلمه السر" id="inputPassword3" required>
              </div>
            </div>
            <a style="margin-right:350px;" href="rest_password.php">نسيت كلمة السر؟</a><br><br>
            <button type="submit" style="float: left;" class="btn btn-primary">تسجيل الدخول</button>
          </form>
        </div>

      <?php }elseif($do == "success"){ ?>
        <div class="content">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
                تمت عملية التسجيل بنجاح الان يمكنك تسجيل الدخول
          </div>
          <h1>تسجيل الدخول</h1><br>
          <form name='login' method="POST" action="include/signin.php" style="height:280px;">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-4 col-form-label">البريد الإلكتروني</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-4 col-form-label">كلمه السر</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" placeholder="كلمه السر" id="inputPassword3" required>
              </div>
            </div>
            <a style="margin-right:350px;" href="rest_password.php">نسيت كلمة السر؟</a><br><br>
            <button type="submit" style="float: left;" class="btn btn-primary">تسجيل الدخول</button>
          </form>
        </div>
      <?php }elseif($do == "error"){ ?>
        <div class="content">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          عذرا , البريد الالكتروني او كلمة المرور خاطئة يرجى التحقق من المدخلات
          </div>
          <h1>تسجيل الدخول</h1><br>
          <form name='login' method="POST" action="include/signin.php" style="height:280px;">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-4 col-form-label">البريد الإلكتروني</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-4 col-form-label">كلمه السر</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" placeholder="كلمه السر" id="inputPassword3" required>
              </div>
            </div>
            <a style="margin-right:350px;" href="rest_password.php">نسيت كلمة السر؟</a><br><br>
            <button type="submit" style="float: left;" class="btn btn-primary">تسجيل الدخول</button>
          </form>
        </div>
        <?php }elseif($do == "should"){ ?>
        <div class="content">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          عذرا , يجب تسجيل الدخول اولا
          </div>
          <h1>تسجيل الدخول</h1><br>
          <form name='login' method="POST" action="include/signin.php" style="height:280px;">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-4 col-form-label">البريد الإلكتروني</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-4 col-form-label">كلمه السر</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" placeholder="كلمه السر" id="inputPassword3" required>
              </div>
            </div>
            <a style="margin-right:350px;" href="rest_password.php">نسيت كلمة السر؟</a><br><br>
            <button type="submit" style="float: left;" class="btn btn-primary">تسجيل الدخول</button>
          </form>
        </div>
        <?php }elseif($do == "rest"){ ?>
        <div class="content">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            تم تعديل كلمة السر بنجاح .
            
          </div>
          <h1>تسجيل الدخول</h1><br>
          <form name='login' method="POST" action="include/signin.php" style="height:250px;">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-4 col-form-label">البريد الإلكتروني</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-4 col-form-label">كلمه السر</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" placeholder="كلمه السر" id="inputPassword3" required>
              </div>
            </div>
            <a style="margin-right:350px;" href="rest_password.php">نسيت كلمة السر؟</a><br><br>
            <button type="submit" style="float: left;" class="btn btn-primary">تسجيل الدخول</button>
          </form>
        </div>
        <?php } ?>
        
      </header>
</body>
</html>