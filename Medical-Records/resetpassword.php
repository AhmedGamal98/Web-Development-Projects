<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>SMR</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/logo.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <link rel="stylesheet" href="css/login.css">	
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         <div class="header-top wow fadeIn">
            <div class="container">
               <a class="navbar-brand" href="homepage.php"><img src="images/logo.png" style="height:100px" alt="image"></a>
               <div class="right-header">
                  <div class="header-info">
                     
                     <div class="info-inner" style="padding-top:40px;">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:SMR_Team@outlook.com">SMR_Team@outlook.com</a></span>	
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               
              <form action="search.php" method="post">
				   <div class="serch-bar" style="float: left;">
					  <div id="custom-search-input">
						 <div class="input-group col-md-12">
							<input type="text" name="search" class="form-control input-lg" placeholder="بحث" />
							<span class="input-group-btn">
							<button class="btn btn-info btn-lg" name="submit" type="submit">
							<i class="fa fa-search" aria-hidden="true"></i>
							</button>
							</span>
						 </div>
					  </div>
				   </div>
			 </form>	
               <nav class="main-menu" style="float: right;">
                  <div class="navbar-header" dir="rtl">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a data-scroll href="homepage.php">تواصل معنا</a></li>
                        <li><a data-scroll href="homepage.php">أطبائنا</a></li>
                        <li><a data-scroll href="homepage.php">خدماتنا</a></li>
                        <li><a data-scroll href="homepage.php">نبذة عنا</a></li>
                        <li><a  href="homepage.php">الرئيسية</a></li>
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </header>
	   
	   
<div class="design" dir="rtl" style="margin-top:300px">
	
 <form class="login" action="reset-conn.php" method="post">
	 
  <h4 class="text-center" style="width:310px;color:#157FDA">اعادة تعيين كلمة المرور</h4> 
  <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="off" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <!--<div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>-->
  </div>
  <input style="background-color:#157FDA" class="btn btn-primary btn-block button" type="submit" value="اعادة تعيين كلمة المرور"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold">
	  <span>هل أنت لا تمتلك حساب؟ </span><a style="text-decoration:none" href="signup.php">انشاء حساب الان</a>
  </div>
 </form>
</div>
	   
	   
	   
	   
	<footer id="footer" class="footer-area wow fadeIn">
         
      </footer>
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               
               <div class="col-md-4">
                  
               </div>
               <div class="col-md-8" >
                  <div class="footer-text" style="float: right;">
                     <p> جميع الحقوق محفوظة لدي موقع السجلات الطبية © 2021</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
	   <script src="js/front.js"></script> 
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>   