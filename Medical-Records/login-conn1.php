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
<?php


    session_start();

    include('connect.php');  
    


//print_r($_POST);
$email = $_POST['email'];
$password = $_POST['password'];
$hashedPass = sha1($password);

$sql1=$con->prepare("SELECT * FROM receptionist WHERE 
 Email=? AND Password=?");
$sql1->execute(array($email,$hashedPass));
$row1=$sql1->fetch();
//print_r($row);
$count1=$sql1->rowCount();

$sql2=$con->prepare("SELECT * FROM doctor WHERE 
 Email=? AND password=?");
$sql2->execute(array($email,$hashedPass));
$row2=$sql2->fetch();
//print_r($row);
$count2=$sql2->rowCount();

$sql3=$con->prepare("SELECT * FROM health_ministry WHERE 
 Email=? AND Password=?");
$sql3->execute(array($email,$hashedPass));
$row3=$sql3->fetch();
//print_r($row);
$count3=$sql3->rowCount();

$sql4=$con->prepare("SELECT * FROM lab_artist WHERE 
 Email=? AND Password=?");
$sql4->execute(array($email,$hashedPass));
$row4=$sql4->fetch();
//print_r($row);
$count4=$sql4->rowCount();

$sql5=$con->prepare("SELECT * FROM admin WHERE 
 Email=? AND Password=?");
$sql5->execute(array($email,$password));
$row5=$sql5->fetch();
//print_r($row);
$count5=$sql5->rowCount();
	
//echo "<br>".$count;
if($email != "" && $hashedPass != ""){
	
	
if($count1>0){
    
    $sql = $con->prepare("SELECT * FROM receptionist");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        
        if($email == $pat["Email"] && $hashedPass == $pat["Password"])
        {
            $_SESSION['receptionist_id'] = $pat['receptionist_id'];
			$_SESSION['Username'] = $pat['Username'];
			$_SESSION['password'] = $pat['Password'];
			$_SESSION['Phone'] = $pat['Phone'];
			$_SESSION['Email'] = $pat['Email'];
			$_SESSION['Address'] = $pat['Address'];
			$_SESSION['type'] = $pat['Type'];
            header('Location:receptionist/patients.php');
			
			//echo $_SESSION['name'];
        }
    }
    $con=null;
    //echo "wrong password or email";
	
	
	
   
}
elseif($count2>0){
    
    $sql = $con->prepare("SELECT * FROM doctor");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        
         if($email == $pat["Email"] && $hashedPass == $pat["password"])
        {
            $_SESSION['doctor_id'] = $pat['doctor_id'];
			$_SESSION['Username'] = $pat['Username'];
			$_SESSION['password'] = $pat['password'];
			$_SESSION['Phone'] = $pat['Phone'];
			$_SESSION['Email'] = $pat['Email'];
			$_SESSION['Address'] = $pat['Address'];
			$_SESSION['specialization'] =  $pat['specialization'];
			$_SESSION['type'] = $pat['Type'];
            header('Location:doctors/patients-records.php');
			
			//echo $_SESSION['name'];
        }
    }
    $con=null;
    //echo "wrong password or email";
	
	
	
   
}
elseif($count3>0){
    
    $sql = $con->prepare("SELECT * FROM health_ministry");
    $sql->execute();
    $rows = $sql->fetchAll();
    //header('Location:health_ministry/records.php');
    foreach($rows as $pat)
    {
        
        if($email == $pat["Email"] && $hashedPass == $pat["Password"])
        {
            $_SESSION['ministry_id'] = $pat['ministry_id'];
			$_SESSION['Username'] = $pat['Username'];
			$_SESSION['password'] = $pat['Password'];
			$_SESSION['Phone'] = $pat['Phone'];
			$_SESSION['Email'] = $pat['Email'];
			$_SESSION['Address'] = $pat['Address'];
			$_SESSION['type'] = $pat['Type'];
            header('Location:health_ministry/records.php');
			
        }
    }
    $con=null;
    //echo "wrong password or email";
	
	
	
   
}
elseif($count4>0){
    
    $sql = $con->prepare("SELECT * FROM lab_artist");
    $sql->execute();
    $rows = $sql->fetchAll();
    //header('Location:lab_artistic/requests.php');
    foreach($rows as $pat)
    {
		
        
       if($email == $pat["Email"] && $hashedPass == $pat["Password"])
        {
            $_SESSION['artist_id'] = $pat['artist_id'];
			$_SESSION['Username'] = $pat['Username'];
			$_SESSION['password'] = $pat['Password'];
			$_SESSION['Phone'] = $pat['Phone'];
			$_SESSION['Email'] = $pat['Email'];
			$_SESSION['Address'] = $pat['Address'];
		    $_SESSION['type'] = $pat['Type'];
            header('Location:lab_artistic/requests.php');
			
        }
    }
    $con=null;
    //echo "wrong password or email";
	
	
	
   
}
elseif($count5>0){
    
    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        
        if($email == $pat["Email"] && $password == $pat["Password"])
        {
            $_SESSION['password'] = $pat['Password'];
			$_SESSION['type'] = $pat['Type'];
			
            header('Location:admin/patients.php');
			
			//echo $_SESSION['name'];
        }
    }
    $con=null;
    //echo "wrong password or email";
	
	
	
   
}else{
	
	
	
	 echo '
	 <div class="container"><div style="margin-top:300px" dir="rtl">
		  <div class="alert alert-info role="alert">
			   البريد الالكتروني أو الباسورد خطأ أعد المحاولة مرة أخري.
			  <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		 </div>
	 </div></div>
	 <div class="design" dir="rtl" style="height:auto;margin-top:300px">
	
 <form class="login" action="login-conn1.php" method="post">
	 
  <h4 class="text-center" style="color:#157FDA">تسجيل الدخول</h4> 
  <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="off" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <!--<div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>-->
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="كلمة المرور" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
	  <!--<div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
	  <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>-->
	  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
  </div>
  <input style="background-color:#157FDA" class="btn btn-primary btn-block button" type="submit" value="دخول"/>	
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:10px">
	  <span>هل انت مريض؟ </span><a style="text-decoration:none" href="login.php">صفحة تسجيل دخول مريض</a>
  </div>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold">
	  <span>هل أنت لا تمتلك حساب؟ </span><a style="text-decoration:none" href="signup.php">انشاء حساب الان</a>
  </div>
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:20px">
	  <span>هل نسيت كلمة المرور؟ </span><a style="text-decoration:none" href="resetpassword.php">اعادة تعيين الان</a>
  </div>	 
 </form>
</div>
	 
	  
	  
	  ';
	

	
  
	  }}else{
	
	
	/*include('logout.php');
	include('login.php');*/
	
	//echo "Not found UserName or password";
}
	
	    
?>
	
	
	
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
	  <script src="js/front.js"></script> 
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>   