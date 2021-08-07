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
    <link rel="stylesheet" href="css/sign_up.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script defer src="js/all.js"></script>
    <script src="js/jquery.min.js" ></script>
    <script src="js/jquery.validate.min.js" ></script>
    <script>
    $.validator.addMethod('mypassword', function(value, element) {
        return this.optional(element) || (value.match(/[a-zA-Z]/) && value.match(/[0-9]/));
    },
    'يجب ان يحتوي علي ارقام وحروف');
    // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='signup']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      email: {
        required: true,
        email: true
      },
      name: {
        required: true
        
      },
      phone: {
        required: true,
        minlength: 10,  
      },
      password: {
        required: true, 
        minlength: 8,
        mypassword:true

      },
      c_password: {
        required: true,
        equalTo: "#password"
      }
    },
    // Specify validation error messages
    messages: {
      password: {
        required: "من فضلك ادخل كلمة المرور",
        minlength: "يجب الا يكون اقل من 8"
        
      },
      email: "من فضلك ادخل البريد الالكتروني بالشكل الصحيح",
      name :{ 
        required:"من فضلك ادخل اسم المستخدم"
      },
      c_password:{
        required: "من فضلك ادخل كلمة المرور",
        equalTo : "يجب ان يكونا متطابقين"
      },
      phone:{
        required: 'من فضلك ادخل رقم الهاتف',
        minlength: "يجب الا يكون اقل من 10 ارقام",
        
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
    <script type="text/javascript">
      function Validate() {
          var password = document.getElementById("password").value;
          var confirmPassword = document.getElementById("c_passord").value;
          if (password != confirmPassword) {
              alert("كلمة المرور غير متطابقة");
              return false;
          }
          
          return true;
      }
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
              <a href="sign_in.php"><button class="btn btn-outline-primary" id="s1_btn" type="button">تسجيل الدخول</button></a>
              <a href="#"><button class="btn btn-outline-primary active" id="s_btn" type="button">تسجيل جديد</button></a>
            </div>
          </div>
        </div>
      </nav>

      <header>
        <?php if($do == "Manage"){ ?>
        <div class="content">
          <h1>إنشاء حساب جديد</h1><br>
          <form style="height: 440px;" name='signup' method="POST" action="include/insert.php">
            <div class="row mb-3">
              <label for="f_name" class="col-sm-4 col-form-label">اسم المستخدم </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="اسم المستخدم" name="name" id="f_name" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="phone" class="col-sm-4 col-form-label">رقم الهاتف</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" placeholder="رقم الهاتف" name="phone" id="phone" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-4 col-form-label">البريد الإلكتروني</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" placeholder="البريد الإلكتروني" name="email" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-4 col-form-label">كلمه السر</label>
              <div class="col-sm-8">
                <input type="password" passwordCheck="passwordCheck" class="form-control" placeholder="كلمه السر" name="password" id="password" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="c_password" class="col-sm-4 col-form-label">أعد كلمة المرور</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" placeholder="أعد كلمة المرور" name="c_password" id="c_password" required>
              </div>
            </div>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
            ملحوظة : كلمة المرور يجب ان تحتوي علي ارقام وحروف وطوله 8
          </div>
            <button name="create" type="submit" style="float: left;" onclick="return Validate()" class="btn btn-primary">سجل</button>
          </form>
        </div>
        

        <?php }elseif($do == "error"){ ?>
        <div class="content">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            البريد الالكتروني او اسم المستخدم تم استخدامهم من قبل شخص اخر
          </div>
          <h1>إنشاء حساب جديد</h1><br>
          <form name='signup' method="POST" action="include/insert.php">
            <div class="row mb-3">
              <label for="f_name" class="col-sm-4 col-form-label">اسم المستخدم </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="اسم المستخدم" name="name" id="f_name" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="phone" class="col-sm-4 col-form-label">رقم الهاتف</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" placeholder="رقم الهاتف" name="phone" id="phone" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-4 col-form-label">البريد الإلكتروني</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" placeholder="البريد الإلكتروني" name="email" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-4 col-form-label">كلمه السر</label>
              <div class="col-sm-8">
                <input type="password" passwordCheck="passwordCheck" class="form-control" placeholder="كلمه السر" name="password" id="password" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="c_password" class="col-sm-4 col-form-label">أعد كلمة المرور</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" placeholder="أعد كلمة المرور" name="c_password" id="c_passord" required>
              </div>
            </div>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
            ملحوظة : كلمة المرور يجب ان تحتوي علي ارقام وحروف وطوله 8
          </div>
            <button name="create" type="submit" style="float: left;" onclick="return Validate()" class="btn btn-primary">سجل</button>
          </form>
        </div>
        <?php } ?>
      </header>
</body>
</html>