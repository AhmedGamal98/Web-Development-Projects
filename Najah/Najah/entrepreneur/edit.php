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
    <link rel="stylesheet" href="../css/profile.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/all.js"></script>
    <script src="../js/jquery.min.js" ></script>
    <script src="../js/jquery.validate.min.js" ></script>
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
    <script>
    $.validator.addMethod('mypassword', function(value, element) {
        return this.optional(element) || (value.match(/[a-zA-Z]/) && value.match(/[0-9]/));
    },
    'يجب ان يحتوي علي ارقام وحروف');
    // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='edit_form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      
      phone: {
        required: true,
        minlength: 10,  
      },
      password: {
         
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
        
        minlength: "يجب الا يكون اقل من 8"
        
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
    <title>نجاح</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href=""><img src="../img/logo.png" width="120"></a>
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
              <a href="profile.php"><button class="btn btn-outline-primary" id="pro_btn" type="button">الصفحة الشخصية</button></a>
              <a href="../index.php"><button class="btn btn-outline-primary" id="log_out_btn" type="button">تسجيل الخروج</button></a>
            </div>
          </div>
        </div>
      </nav>

      <div class="container">  
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2"> تعديل البيانات الشخصية </h1>
        </div>
        <div class="row gutters-sm">
              <div class="col-md-12 mb-3">
                <form action="../include/edit_profile.php" name="edit_form" method="post">
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
                                  <input class="form-control" type="text" name="name" value="<?php echo $_SESSION['username'];?>"  disabled>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">البريد الإلكتروني</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  <input class="form-control" type="email" name="email" value="<?php echo $_SESSION['email'];?>"  disabled >
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">رقم الهاتف</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  <input class="form-control" type="number" name="phone" value="<?php echo $_SESSION['phone'];?>" >
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">كلمة السر</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  <input class="form-control" type="password" id="password" name="password" value="" ><br>
                                  <div class="alert alert-info alert-dismissible fade show" role="alert">
                                  ملحوظة :<br> * اذا تم ترك كلمة المرور فارغة سوف يتم حفظ كلمة المرور الحالية بدون تعديل <br> * كلمة المرور يجب ان تحتوي علي ارقام وحروف وطوله 8
          </div>
                                </div>
                              </div>
                              <hr>
                              <a href=""><button type="submit" class="btn btn-outline-primary" id="edit_btn" type="button">تعديل</button></a>
                            </div>
                          </div>
                  </div>
                </div>
            </form>
      </div> 
</body>
</html>