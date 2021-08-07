<?php
require_once('include/connection.php');
session_start();

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
  $("form[name='rest']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      
      
      password: {
        required: true, 
        minlength: 8,
        mypassword:true

      }
      
    },
    // Specify validation error messages
    messages: {
      password: {
        required: "من فضلك ادخل كلمة المرور",
        minlength: "يجب الا يكون اقل من 8"
        
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
              <a href="sign_in.php"><button class="btn btn-outline-primary active" id="s_btn" type="button">تسجيل الدخول</button></a>
              <a href="sign_up.php"><button class="btn btn-outline-primary" id="s1_btn" type="button">تسجيل جديد</button></a>
            </div>
          </div>
        </div>
      </nav>

      <header>
        <div class="content">
          <h1>استرجاع كلمة السر</h1><br>
          <form method="POST" name="rest" action="include/update_pass.php?id=<?php echo $_SESSION['id'];?>" style="height:200px;"><br>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-4 col-form-label">اكتب كلمة السر الجديدة</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" placeholder="كلمة السر" id="inputEmail3" required>
              </div>
            </div><br>
            <button type="submit" style="float: left;" class="btn btn-primary">تسجيل الدخول</button>
          </form>
        </div>
        
      </header>
</body>
</html>