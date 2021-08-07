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
						
						 <?php 
						 
						 if(isset($_SESSION['password'])){
						 
						   if($_SESSION['type'] == "مريض"){
						 
						 
						 ?>
	
	                         <li><a href="patient/patients-records.php">ملفي الشخصي</a></li>

                       <?php
							   
						   }elseif($_SESSION['type'] == "مدير"){
							   
							   echo '<li><a href="admin/patients.php">ملفي الشخصي</a></li>';
							   
						   }elseif($_SESSION['type'] == "طبيب"){
							   
							   echo '<li><a href="doctors/patients-records.php">ملفي الشخصي</a></li>';
							   
						   }elseif($_SESSION['type'] == "موظف وزارة الصحة"){
							   
							   echo '<li><a href="health_ministry/records.php">ملفي الشخصي</a></li>';
							   
						   }elseif($_SESSION['type'] == "موظف استقبال"){
							   
							   echo '<li><a href="receptionist/patients.php">ملفي الشخصي</a></li>';
							   
						   }elseif($_SESSION['type'] == "فني المعمل"){
							   
							   echo '<li><a href="lab_artistic/requests.php">ملفي الشخصي</a></li>';
							   
						   }elseif($_SESSION['type'] == "مريض"){
							   
							   echo '<li><a href="patient/patients-records.php">ملفي الشخصي</a></li>';
							   
						   }
							 
							}else{  ?>
							 
							 
							 <li><a href="login.php">تسجيل الدخول</a></li>  
							 
						<?php	 
						 }
						 
						 
						 ?>
						 
                        <li><a data-scroll href="homepage.php#getintouch">تواصل معنا</a></li>
                        <li><a data-scroll href="homepage.php#doctors">أطبائنا</a></li>
                        <li><a data-scroll href="homepage.php#service">خدماتنا</a></li>
                        <li><a data-scroll href="homepage.php#about">نبذة عنا</a></li>
                        <li><a class="active" href="homepage.php">الرئيسية</a></li>
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </header>
  
	  <!-- doctor -->
	  
	  <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <div class="container">
		
		<div class="heading">
               <span class="icon-logo"><img src="images/logo.png" alt="#"></span>
               <h2>اطبائنا المتخصصين</h2>
            </div>

            <div class="row dev-list text-center">
				

				
               <?php
	  
						include('connect.php');  
						$sql = $con->prepare("SELECT * FROM  doctor");
						$sql->execute();
						$rows = $sql->fetchAll();

						foreach($rows as $pat)
						{

					   ?>
				
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn doc" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/avatar.jpeg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title" style="margin-right:40px">
                            <h3><?php echo $pat["Username"]; ?></h3>
                            
                        </div>
                        <!-- end title -->
                        <p style="margin-right:40px"><?php echo $pat["specialization"]; ?></p>

                        
                    </div><!--widget -->
                </div><!-- end col -->

               <?php } ?>


            </div><!-- end row -->
        </div><!-- end container -->
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
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>
