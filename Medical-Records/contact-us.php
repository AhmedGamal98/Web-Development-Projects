<?php


session_start();

?>

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
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12" style="margin-top:30px">
                  <div class="text-contant">
                     <h2>
                        <span class="center"><span class="icon"><img src="images/logo.png" alt="#" /></span></span>
                        <a href="" class="typewrite" data-period="2000" data-type='[ " SMR مرحبا بكم في ", "نحن نهتم بصحتك", "لدينا خبراء في جميع التخصصات الطبية" ]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="time-table" class="time-table-section">
         <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time one" style="background:#2895f1;">
                     <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                     <h3>حالة طارئة</h3>
                     <p>	نظام سجلات طبية إلكترونية موحد يمكن من الوصول إلى بيانات المرضى عن طريق رقم الهوية الخاص بهم.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time middle" style="background:#0071d1;">
                     <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 
                     <h3>انشاء قاعدة بيانات</h3>
                     <div class="time-table-section">
                       <p>	نظام الكتروني يعمل علي انشاء قاعدة بيانات متكاملة حول السجل الرضي للمريض</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time three" style="background:#0060b1;">
                     <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                     <h3> نظام إلكتروني</h3>
                     <p>	نظام يُسهم في التسريع من عملية الكشوفات الطبية ومعرفة التاريخ المرضي، بالتالي يسهل على الطبيب معاينة المريض بشكل أسهل وأسرع من السابق.
                        </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="about" style="background-color:#FFF" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/logo.png" alt="#"></span>
               <h2>نبذة عن الموقع</h2>
            </div>
            <!-- end title -->
            <div class="row">
               
               <!-- end col -->
               <div class="col-md-6">
                  <div class="post-media wow fadeIn">
                     <img src="images/about_03.jpg" alt="" class="img-responsive">
                   
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
               <div class="col-md-6" dir="rtl">
                  <div class="message-box">
                     
                     <p class="lead">البيانات الصحية تعتبر هي الأساس في النظام الصحي، وهي مهمة لتطوير أفضل الطرق واتخاذ أهم وأنجح القرارات الطبية واستخدام السجلات الطبية الإلكترونية بدلاً من الورقية،  بالتالي ستزداد الفوائد لكل من العاملين في مجال الرعاية الصحية والمرضى؛ <br> Smart Medical Records (SMR) <br> هو عبارة عن نظام سجلات طبية إلكترونية للمرضى موحدة في جميع المراكز الصحية ومربوطة برقم هويتهم مما يغنينا عن فتح ملف في كل مركز صحي نقوم بمراجعته.  </p>
                     
                  </div>
                  <!-- end messagebox -->
               </div>
            </div>
            <!-- end row -->
            <hr class="hr1">
            <div class="row">
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        
                        <img src="layouts/images/doctor.jpg" style="height:240px" alt="" class="img-responsive">
                     </div>
                    <h3>مختبرات طبية مجهزة</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        
                        <img src="images/clinic_02.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>سجلات الكترونية موحدة</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        
                        <img src="images/clinic_03.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>أطباء متخصصون</h3>
                  </div>
                  <!-- end service -->
               </div>
               
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <div id="service" class="services wow fadeIn" dir="rtl">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form">
                     <h3><span>+</span> احجز موعد</h3>
                     <div class="form">
                        <form action="add.php" method="post">
                           <fieldset>
							  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="name" name="id" placeholder="رقم الهوية"  />
                                    </div>
                                 </div>
                              </div> 
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="name" name="name" placeholder="الاسم"  />
                                    </div>
                                 </div>
                              </div>
							  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="date" id="name" name="date" placeholder="التاريخ"  />
                                    </div>
                                 </div>
                              </div> 
							  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="time" id="name" name="time" placeholder="الوقت"  />
                                    </div>
                                 </div>
                              </div>  
                              <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="email" placeholder="البريد الإلكتروني" id="email" />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                 <div class="row">
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>اليوم</option>
                                          <option>الاحد</option>
                                          <option>الاثنين</option>
                                          <option>الثلاثاء</option>
                                          <option>الاربعاء</option>
                                          <option>الخميس</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>الوقت</option>
                                          <option> صباحي</option>
                                          <option>مسائي</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>-->
                              <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>اسم الطبيب</option>
                                          <option>د/أحمد</option>
                                          <option>د/ محمد</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>-->
                              <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <textarea rows="4" id="textarea_message" class="form-control" placeholder="رسالتك"></textarea>
                                    </div>
                                 </div>
                              </div>-->
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button type="submit" name="submit">إرسال</button></div>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                 <div class="inner-services">
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                           <!--<h4>المرافق المتميزة</h4>-->
                           <p>تبسيط الطرق الحالية لانشاء سجلات المرضي  وصيانتها واستعادتها والمحافظه علي بياناتهم</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                           <!--<h4>معمل كبير</h4>-->
                           <p>امكانية التقاط وادارة بيانات المرضي وتحليلها بسرعة وكفاءة</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                           <!--<h4>أخصائي مفصل</h4>-->
                           <p>يمكن المرضي من الوصول لسجلهم الطبي  عن طريق زيارتهم للموقع</p>
                        </div>
                     </div>
                     <!--<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                           <h4>خدمات الكترونية</h4>
                           <p>	تبسيط الطرق الحالية لإنشاء سجلات المرضى وصيانتها واستعادتها والمحافظة على بياناتهم.</p>
                        </div>
                     </div>
                    
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                           <h4>البنية التحتية الدقيقة</h4>
                           <p>يمكَن المرضى من الوصول لسجلهم الطبي عن طريق زيارتهم للموقع</p>
                        </div>
                     </div>-->
                     
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end section -->
	  
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
	 <div style="width:250px;margin:auto;background-color:#34ABA7;font-weight:bold;margin-top:80px;text-align:center">
	     <a class="text-center" href="doctors.php" style="color:#FFF;display:block;font-weight:bold;font-size:22px;line-height:2.5">المزيد</a>  
     </div>  
	  <!-- end doctor section -->
	  <hr>

      <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;" dir="rtl">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/logo.png" alt="#"></span>
               <h2>تواصل معنا</h2>
            </div>
         </div>
         <div class="contact-section">
            <div class="form-contant">
				
				<?php
						 
						 
						 include('connect.php');  	
			
							$name = $_POST["name"];
							$email = $_POST["email"];
							$subject  = $_POST["subject"];
				            $phone  = $_POST["phone"];
							$message = $_POST["message"];

			
		
				

					$stmt = $con->prepare("INSERT INTO  messages(name , email , phone , subject , message) VALUES(:name, :email, :phone, :subject , :message)");

					$stmt->execute(array(

						'name' => $name,
						'email' => $email,
						'subject'    => $subject,
						'phone'    => $phone,
						'message' => $message
						

					));
				
					
					echo '<script language="javascript">';
				    echo 'alert("تم ارسال رسالة بنجاح")';	
					
					echo '</script>';	 
					
        	
					
						 
						 
						 
						 
						 ?>
               <form id="ajax-contact" action="contact-us.php" method="post">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group in_name">
                           <input type="text" class="form-control" name="name" placeholder="الاسم" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="tel" class="form-control" name="phone" id="الهاتف" placeholder="الهاتف" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="text" class="form-control" name="subject" id="عنوان الرسالة" placeholder="عنوان الرسالة" required="required">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group in_message"> 
                           <textarea class="form-control" id="message" name="message" rows="5" placeholder="الرسالة" required="required"></textarea>
                        </div>
                        <div class="actions">
                           <input type="submit" value="إرسال" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <!--<div id="googleMap" style="width:100%;height:450px;"></div>-->
			<img src="images/about_03.jpg" width="100%" height="600px" alt="#"> 
         </div>
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
