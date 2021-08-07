<?php
require_once('include/connection.php');

$do = isset($_GET['do'])? $_GET['do'] : "Manage";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-awesome.css" />  
    
    <link rel="icon" type="image/ico" href="img/logo2.png" />
    <title>Sign in & Sign up Form</title>
    <style type="text/css">
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

       body {
     background-position: center;
     background-color: #eee;
     background-repeat: no-repeat;
     background-size: cover;
     color: #505050;
     font-family: "Rubik", Helvetica, Arial, sans-serif;
     font-size: 14px;
     font-weight: normal;
     line-height: 1.5;
     text-transform: none;
     font-family: "Poppins", sans-serif;
 }
.navbar{
  background-color: #3a5d70;
  height: 75px;
}
nav a{
  font-size: 17px;
  color:#fff;
}
nav a:hover{
  
  color:#dc624a;
}

 .forgot {
     background-color: #fff;
     padding: 12px;
     border: 1px solid #dfdfdf
 }

 .padding-bottom-3x {
     padding-bottom: 72px !important
 }

 .card-footer {
     background-color: #fff
 }

 .btn {
     font-size: 13px
 }

 .form-control:focus {
     color: #495057;
     background-color: #fff;
     border-color: #76b7e9;
     outline: 0;
     box-shadow: 0 0 0 0px #28a745
 }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-md   fixed-top ">
      <div class="container">
        <a class="navbar-brand" style="margin-right: 320px;" href="index.php">
          <div class="row">
            <div class="col-3">
              <i class="fas fa-bus" style="height: 60px; margin-top:20px;font-size:40px;"></i>
            </div>
            <div class="col-8">
              <strong style='display:block;margin-bottom:0px; margin-top:25px;'>University Transportation</strong><small style='margin-left:27px;font-size:15px;'></small>
            </div>
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="index.php#about"><i class="fas fa-address-card"></i> About </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="company.php"><i class="fas fa-building"></i> Companies</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Sgin in</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="fas fa-user-plus"></i> Sign up</a>
                  </li>
                </ul>
          </div>
      </div>
      </nav><br><br><br>
      <?php if($do == "Manage"){ ?>
      <div class="container padding-bottom-3x mb-2 mt-5">
      <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">
              <div class="forgot">
                  <h2>Forgot your password?</h2>
                  <p>Change your password in three easy steps. This will help you to secure your password!</p>
                  <ol class="list-unstyled">
                      <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
                      <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
                      <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
                  </ol>
              </div>
              <form class="card mt-4" method="post" action="include/rest.php">
                  <div class="card-body">
                      <div class="form-group"> <label for="email-for-pass">Enter your email address</label> <input class="form-control" type="email" name="email" id="email-for-pass" required=""><small class="form-text text-muted">Enter the email address you used during the registration on Transportation. Then we'll email a link to this address.</small> </div>
                  </div>
                  <div class="card-footer"> <button class="btn btn-success" type="submit">Get New Password</button> </div>
              </form>
          </div>
      </div>
  </div>
  <?php }elseif($do == "error"){ ?>
    <div class="container padding-bottom-3x mb-2 mt-5">
      
      <div class="row justify-content-center">
      <div style="width:500px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:15px;border-radius:8px;margin-bottom:20px;" >
                    Email does not exist or typed in wrong way.
                  </div><br>
          <div class="col-lg-8 col-md-10">
              <div class="forgot">
                  
                  <h2>Forgot your password?</h2>
                  <p>Change your password in three easy steps. This will help you to secure your password!</p>
                  <ol class="list-unstyled">
                      <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
                      <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
                      <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
                  </ol>
              </div>
              <form class="card mt-4" method="post" action="include/rest.php">
                  <div class="card-body">
                      <div class="form-group"> <label for="email-for-pass">Enter your email address</label> <input class="form-control" type="email" name="email" id="email-for-pass" required=""><small class="form-text text-muted">Enter the email address you used during the registration on Transportation. Then we'll email a link to this address.</small> </div>
                  </div>
                  <div class="card-footer"> <button class="btn btn-success" type="submit">Get New Password</button> </div>
              </form>
          </div>
      </div>
  </div>
  <?php } ?>
  <hr class="featurette-divider">
    <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021 Transportation, Inc.</p>
  </footer>
  </body>
  </html>