<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Reset Password</title>
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


    session_start();

    include('connect.php');  
    


//print_r($_POST);
$email = $_POST['email'];	
$sql=$con->prepare("SELECT * FROM admin WHERE 
 Email=?");
$sql->execute(array($email));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != ""){
	
	
if($count>0){
    
    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        
        if($email == $pat["Email"])
        {
           
			$_SESSION['admin'] = $pat['UserID'];
            header('Location:reset_pass.php');
        }
    }
    $con=null;
    //echo "wrong password or email";
	
	
	
   
} else{
	
	
	
	 echo '
	 <div class="container" dir="rtl">
		  <div class="alert alert-info role="alert">
			   البريد الالكتروني خطأ أعد المحاولة مرة أخري.
			  <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		 </div>
	 </div>
	  
	 <div class="design" dir="rtl">
	
 <form class="login" action="reset-conn.php" method="post">
	 
  <h4 class="text-center" style="width:310px">اعادة تعيين كلمة المرور</h4> 
  <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="off" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <!--<div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>-->
  </div>
  <input class="btn btn-primary btn-block button" type="submit" value="اعادة تعيين كلمة المرور"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold">
	  <span>هل أنت لا تمتلك حساب؟ </span><a style="text-decoration:none" href="signup.php">انشاء حساب الان</a>
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