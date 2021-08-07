<?php

/*session_start();
if(!(isset($_SESSION['Password']))){
	header('Location:login.php');
}*/

?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Sign Up</title>
		<link rel="stylesheet" href="layouts/css/bootstrap.min.css">
		<link rel="stylesheet" href="layouts/css/font-awesome.css">
		<link rel="stylesheet" href="layouts/css/jquery-ui.css">
		<link rel="stylesheet" href="layouts/css/jquery.selectBoxIt.css">
		<link rel="stylesheet" href="layouts/css/front.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Almarai&diplay=swap">
	</head>
	<body>
<div class="header text-center">
		 <div class="container">
			 <div class="logo center-block">
				 <h1>نقرة واحدة</h1>
				 <img src="layouts/images/log2.jpg" alt="Logo">
			 </div>
			 <!--<div class="logout pull-left">
				 
				     <h3><a class="btn btn-danger" href="login.php">خروج</a></h3>
					 <div class="icon-profile"><a href="profile.php"><i class="fa fa-user-o fa-fw"></i></a></div>
			 </div>-->
			 <!--<div class="links pull-left">
				<ul class="list-unstyled">
				  <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
				  <li><a href="www.google.com"><i class="fa fa-google-plus"></i></a></li>	
				  <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
				  <li><a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>		
				</ul>
			 </div>-->
			 <div class="navbar container" dir="rtl">
				 <hr>
				 <ul class="list-unstyled">
					 <li style="width:120px"><a href="homepage.php">الرئيسية</a></li>
					 <li style="width:120px"><a href="services.php">الخدمات</a></li>
					 <li style="width:120px"><a href="our.php">من نحن</a></li>
					 <li style="width:120px"><a href="contact.php">تواصل معنا</a></li>
				 </ul>
				 <hr>
			 </div>
		 </div>
     </div>
<?php

   //session_start();

    include('connect.php');
    $fname = $_POST["first"];
    $lname = $_POST["last"];
	$username = $_POST["username"];	
    $email = $_POST["email"];
    $password = $_POST["password"];
	$hashedPass = sha1($password);	
    $phone = $_POST["phone"];
    $address = $_POST["address"];
		
		
$sql=$con->prepare("SELECT * FROM admin WHERE 
 Email=? AND Password=?");
$sql->execute(array($email,$hashedPass));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $hashedPass != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM  admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["Email"] && $hashedPass == $pat["Password"])
        {
            echo '
			
	  
	<div class="container" dir="rtl">
	  <div class="alert alert-info role="alert">
		  <strong>خطأ!</strong> هذا البريد الالكتروني أو الباسورد ربما مستخدمين من قبل. من فضلك ادخل بريد الكتروني أو باسورد من جديد.
		  <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
    </div>
	</div>  
	<div class="design" dir="rtl" style="height:auto">
	
 <form class="login" action="insert.php" method="post">
	 
  <h4 class="text-center">انشاء حساب جديد</h4> 
  <div class="ast">
	  <input class="form-control first" type="text" placeholder="الاسم الأول" name="first" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">الاسم الأول مطلوب أو <strong>اجباري</strong></div>
	  <!--<div class="alert alert-danger custom-alert">  الاسم الأول لا يقل عن<strong>4 حروف </strong></div>-->
	  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control last" type="text" placeholder="اسم العائلة" name="last" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
	  <!--<div class="alert alert-danger custom-alert">  اسم العائلة لا يقل عن<strong>4 حروف </strong></div>-->
	  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
  </div>	 
  <div class="ast">
	  <input class="form-control username" type="text" placeholder="اسم المستخدم" name="username" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert">  اسم المستخدم لا يقل عن <strong>4 حروف </strong></div>
	  <!--<div class="alert alert-danger long-alert">  اسم المستخدم يجب أن يحتوي علي <strong>حروف فقط</strong></div>-->
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
	  <div class="alert alert-info">كلمة المرور يجب أن تحتوي علي حروف كبيرة وحروف صغيرة ورقم وطولها لا يقل عن 6 	</div> 
  </div>
   <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="new-password" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <!--<div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>-->
  </div>
   <div class="ast">
	  <input class="form-control address" type="text" placeholder="العنوان" name="address" autocomplete="new-password" required="required"/>
	  <i class="fa fa-home"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control phone" type="text" placeholder="رقم الهاتف" name="phone" autocomplete="new-password" required="required"/>
	  <i class="fa fa-phone"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون علي الأقل  <strong>10 أرقام</strong></div>
	  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
	  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
  </div>	 
  <input class="btn btn-primary btn-block button" type="submit" value="انشاء"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:15px">
	  <span>هل أنت عضو؟ </span><a style="text-decoration:none" href="login.php">سجل الان</a>
  </div>	 
 </form>
</div>   
							
';
        }
        
    }
    
} else{
	
	
	
	  $sql = "INSERT INTO admin (Firstname, Lastname, Phone , Email , StoreAddress , Username , Password) VALUES ('$fname', '$lname', '$phone', '$email', '$address', '$username' , '$hashedPass')";

      $con->exec($sql);
    
	
      //header('Location:login.php');
	
	  echo '
	  
	  <div class="container" dir="rtl">
		  <div class="alert alert-info role="alert">
			  تم تسجيلك بنجاح نتمني أن يحوز موقعنا علي رضاكم
			  <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		 </div>
	 </div>
	 <div class="design" dir="rtl" style="height:auto">
	
 <form class="login" action="login-conn.php" method="post">
	 
  <h4 class="text-center">تسجيل الدخول</h4> 
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
	  <!--<div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
	  <div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
	  <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>
	  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>-->
  </div>
  <input class="btn btn-primary btn-block button" type="submit" value="دخول"/>	 
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
	
	
	//include('logout.php');
	include('signup.php');

}	
		
		
		
		
		
	
	//insert condition
/*if($role == "Admin"){
	
	
if($type == "Super Admin"){	
	
 $super = $_POST["super"];
	
 if($super == "Super Admin"){	
	
$sql=$con->prepare("SELECT * FROM admin WHERE 
 E-mail=? AND Password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["E-mail"] && $password == $pat["Password"])
        {
            echo '
			
	  
	  <div class="alert alert-danger role="alert">
		  <strong>خطأ!</strong> هذا البريد الالكتروني أو الباسورد ربما مستخدمين من قبل. من فضلك ادخل بريد الكتروني أو باسورد من جديد.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
    </div>
	<div class="design" dir="rtl" style="height:auto">
	
 <form class="login" action="insert.php" method="post">
	 
  <h4 class="text-center">انشاء حساب جديد</h4> 
  <div class="ast">
	  <input class="form-control first" type="text" placeholder="الاسم الأول" name="first" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">الاسم الأول مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert">  الاسم الأول لا يقل عن<strong>8 حروف </strong></div>
	  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control last" type="text" placeholder="اسم العائلة" name="last" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert">  اسم العائلة لا يقل عن<strong>8 حروف </strong></div>
	  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
  </div>	 
  <div class="ast">
	  <input class="form-control username" type="text" placeholder="اسم المستخدم" name="username" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert">  اسم المستخدم لا يقل عن <strong>8 حروف </strong></div>
	  <div class="alert alert-danger long-alert">  اسم المستخدم يجب أن يحتوي علي <strong>حروف فقط</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="كلمة المرور" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>10 حروف</strong></div>
	  <div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
	  <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>
	  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>5 أرقام.</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="new-password" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control address" type="text" placeholder="العنوان" name="address" autocomplete="new-password" required="required"/>
	  <i class="fa fa-home"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control phone" type="text" placeholder="رقم الهاتف" name="phone" autocomplete="new-password" required="required"/>
	  <i class="fa fa-phone"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون علي الأقل  <strong>10 أرقام</strong></div>
	  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
	  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
  </div>	 
  <input class="btn btn-primary btn-block button" type="submit" value="انشاء"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:15px">
	  <span>هل أنت عضو؟ </span><a style="text-decoration:none" href="login.php">سجل الان</a>
  </div>	 
 </form>
</div>   
							
';
        }
        
    }
    
} else{
	
	
	
	  $sql = "INSERT INTO admin (First name, Last name, Phone , E-mail , Store Address , User name , Password) VALUES ('$fname', '$lname', '$phone', '$email', '$address', '$username' , '$hashedPass')";

      $con->exec($sql);
    
	
      //header('Location:login.php');
	
	  echo '
	  
	  
	  <div class="alert alert-info role="alert">
		  <strong> بخدماتنا </strong> تم انشاء حسابك بنجاح مرحبا بك في نقرة واحدة.كوم سجل الدخول الان لتستمتع.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
     </div>
	 <div class="design" dir="rtl" style="height:auto">
	
 <form class="login" action="homepage.php" method="post">
	 
  <h4 class="text-center">تسجيل الدخول</h4> 
  <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="username" autocomplete="off" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="كلمة المرور" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>10 حروف</strong></div>
	  <div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
	  <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>
	  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>5 أرقام.</strong></div>
  </div>
  <input class="btn btn-primary btn-block button" type="submit" value="دخول"/>	 
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
	
	
	//include('logout.php');
	include('signup.php');

}
 
 }else if($super == "Normal Admin"){
	 
	 
	 
$sql=$con->prepare("SELECT * FROM admin WHERE 
 email=? AND admin_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["admin_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
	   
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
																<a class="coll" data-toggle="collapse" data-target="#admin">Admin Role</a>
															
															  <div class="collapse border-bottom px-lg-8" id="admin">
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="super" required="">
								
                                                                    <option>Super Admin</option>
                                                                    <option selected="selected">Normal Admin</option>									
                                                                </select>
															   </div>
															   <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	
	  $sql = "INSERT INTO admin (first_name, last_name, address , email , phone_number , gender , age , admin_password , image , name , super , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$super' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	 
	 
	 
	 
 }
}else{
	
	
$sql=$con->prepare("SELECT * FROM admin WHERE 
 email=? AND admin_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["admin_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
	   
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
																
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $superr = "Normal Admin";
	
	
	  $sql = "INSERT INTO admin (first_name, last_name, address , email , phone_number , gender , age , admin_password , image , name , super , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$superr' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
}
 
 
 
 }else if($role == "Customer Servant"){
	
	
//=========== Start  Customer servant =================================//
	
$sql=$con->prepare("SELECT * FROM customer_servant WHERE 
 email=? AND servant_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM customer_servant");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["servant_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">   
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
	   
	   
							<!-- /login
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $sql = "INSERT INTO customer_servant (first_name, last_name, address , email , phone_number , gender , age , servant_password , image , name , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
	
	
	
	
	
	
	
	//=========== End Customer servant ====================================//
	
}else if($role == "Deliverer"){
	
	
	
	
	
	//=========== Start  Deliverer =================================//
	
$sql=$con->prepare("SELECT * FROM deliverer WHERE 
 email=? AND deliverer_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM deliverer");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["deliverer_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	   <div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
																
																
																<a class="coll" data-toggle="collapse" data-target="#salary">Salary</a>
															
															 <div class="collapse border-bottom px-lg-8" id="salary">
															   
															   <input class="form-control" type="text" name="salary" placeholder="Salary">
																 
															</div>
																
																
																
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $sql = "INSERT INTO deliverer (first_name, last_name, address , email , phone_number , gender , age , deliverer_password , image , name , salary) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name' , '$salary')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
	
	
	
	
	
	
	
	//=========== End Deliverer ====================================//
	
	
	
	
	
	
}else if($role == "Client"){
	
	
	
	
	//=========== Start  client =================================//
	
$sql=$con->prepare("SELECT * FROM client WHERE 
 email=? AND client_password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $password != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM client");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["email"] && $password == $pat["client_password"])
        {
            echo '
			
	  
			
	<div class="pages_agile_info_w3l">
	<div class="alert alert-danger role="alert">
      <strong>Oh Error!</strong> That email or password is used before. Please enter an unique email or password.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="signup-conn.php" method="post" enctype="multipart/form-data">
															<input class="form-control" type="text" name="fname" placeholder="First-Name" required="">
															 <input class="form-control" type="text" name="lname" placeholder="Last-Name" required="">
																<input class="form-control" type="email" name="email" placeholder="E-mail" required="">

																<input class="form-control" type="password" name="password" placeholder="Password" required="">
																<!--<input class="form-control" type="password" name="password" placeholder="Confirm Password" required="">-->
															    <input class="form-control" type="text" name="tel" placeholder="Tel-Number" required="">
							                                    <input class="form-control" type="text" name="address" placeholder="Address" required="">
															    <input class="form-control" type="text" name="age" placeholder="Age" required="">
															    <select class="form-control form-control-md" style="height: 45px" name="gender" required="">
                                                                    <option selected="selected">Male</option>
                                                                    <option>Female</option>																	
                                                                </select>
															    <select class="form-control form-control-md" style="height: 45px; margin-top: 15px" name="role" required="">
								
                                                                    <option selected="selected">Admin</option>
                                                                    <option>Customer Servant</option>					<option>Deliverer</option>					<option>Client</option>							
                                                                </select>
                                                                  <input style="margin-top: 20px" type="file" class="form-control-file" name="image" required="">
															<div class="tp">
																<input type="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
';
        }
        
    }
    
} else{
	
	
	  $sql = "INSERT INTO client (first_name, last_name, address , email , phone_number , gender , age , client_password , image , name) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name')";

      $con->exec($sql);
    
	
      header('Location:../login.php');
	
  
	  }}else{
	
	
	//include('logout.php');
	include('signup.php');

}
	
	
	
	
	
	
	
	
	
	
	
	
	//=========== End client ====================================//
	
	
	
}

	
	//insert condition
	
	
	
    /*$sql = "INSERT INTO client (first_name, last_name, address , email , phone_number , gender , age , client_password , image , name) VALUES ('$fname', '$lname', '$address', '$email', '$tel', '$gender' , '$age' , '$password' , '$image' , '$name')";

    $con->exec($sql);
    
	
    header('Location:login.php');
	

    $con=null;*/
    
?>
	
	
	
  <div class="footer text-center">
		<p>كل الحقوق محفوظه لدي موقع نقرة واحدة @ 2021</p>
		<div class="links center-block">
			<ul class="list-unstyled">
			  <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
			  <li><a href="www.google.com"><i class="fa fa-google-plus"></i></a></li>	
			  <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
			  <li><a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>		
			</ul>
		</div> 
     </div>				
<script src="layouts/js/jquery-3.4.1.min.js"></script>
     <script src="layouts/js/jquery-ui.min.js"></script>
     <script src="layouts/js/bootstrap.min.js"></script>
     <script src="layouts/js/jquery.selectBoxIt.min.js"></script>
     <script src="layouts/js/front.js"></script>
 </body>
</html>		