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
							<input type="text" name="search" class="form-control input-lg" placeholder="??????" />
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
                        <li><a data-scroll href="homepage.php#getintouch">?????????? ????????</a></li>
                        <li><a data-scroll href="homepage.php#doctors">??????????????</a></li>
                        <li><a data-scroll href="homepage.php#service">??????????????</a></li>
                        <li><a data-scroll href="homepage.php#about">???????? ??????</a></li>
                        <li><a class="active" href="homepage.php">????????????????</a></li>
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </header>
<?php

   //session_start();

    include('connect.php');
	$id = $_POST["id"];   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
	$hashedPass = sha1($password);	
    $phone = $_POST["phone"];
    $address = $_POST["address"];
		
		
$sql=$con->prepare("SELECT * FROM medical_record WHERE 
 Email=? AND Password=?");
$sql->execute(array($email,$hashedPass));
$row=$sql->fetch();
$count=$sql->rowCount();
	

if($email != "" && $hashedPass != ""){
	
	
if($count>0){
    

    $sql = $con->prepare("SELECT * FROM  medical_record");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        if($email == $pat["Email"] && $hashedPass == $pat["Password"])
        {
            echo '
			
	  
	<div class="container"><div style="margin-top:300px" class="container" dir="rtl">
	  <div class="alert alert-info role="alert">
		  <strong>??????!</strong> ?????? ???????????? ???????????????????? ???? ???????????????? ???????? ???????????????? ???? ??????. ???? ???????? ???????? ???????? ???????????????? ???? ???????????? ???? ????????.
		  <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
    </div></div>
	</div>  
	<div class="design" dir="rtl" style="height:auto;margin-top:300px">
	
 <form class="login" action="insert.php" method="post">
	 
  <h4 class="text-center" style="color:#157FDA">?????????? ???????? ????????</h4>
  <div class="ast">
	  <input class="form-control" type="text" placeholder="?????? ????????????" name="id" autocomplete="off" required="required"/>
	  <i class="fa fa-edit"></i>
	  <i class="fa fa-check check"></i>
	 <div class="alert alert-danger empty-alert">?????? ???????????? ?????????? ???? <strong>????????????</strong></div>
	  <div class="alert alert-danger custom-alert">  ?????? ???????????? ???? ?????? ????<strong>10 ?????????? </strong></div>
	  <div class="alert alert-danger number-alert">  ?????? ???????????? ?????? ???? ?????????? ??????<strong>?????????? ??????</strong></div>
	  <div class="alert alert-danger one-alert">  ?????? ???????????? ?????? ???? ???????? ????????<strong>1</strong></div>
  </div>		 
  <div class="ast">
	  <input class="form-control first" type="text" placeholder="??????????" name="name" autocomplete="off" required="required"/>
	  <i class="fa fa-user"></i>
	  <i class="fa fa-check check"></i> 
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">?????????? ?????????? ???? <strong>????????????</strong></div>
	  <!--<div class="alert alert-danger custom-alert">  ?????????? ?????????? ???? ?????? ????<strong>4 ???????? </strong></div>-->
	  <div class="alert alert-danger long-alert">  ?????????? ?????? ???? ?????????? ??????<strong>???????? ??????</strong></div>
  </div>	 
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="???????? ????????????" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">???????? ???????????? ???? ???????? ???? ????????  <strong></strong>??????????</div>
	  <div class="alert alert-danger long-alert">???????? ???????????? ?????? ???? ???????? ?????? ??????????  <strong>6 ????????</strong></div>
	  <!--<div class="alert alert-danger custom-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>???????? ??????????.</strong></div>
	  <div class="alert alert-danger lower-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>???????? ??????????.</strong></div>-->
	  <div class="alert alert-danger number-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>???????? ?????????? ?????????? ?????????? ????????.</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control email" type="text" placeholder="???????????? ????????????????????" name="email" autocomplete="new-password" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">???????????? ???????????????????? ?????????? ???? <strong>????????????</strong></div>
	  <div class="alert alert-danger custom-alert"> ???????????? ???????????????????? ?????? ???? ?????????? ??????<strong>@</strong></div>
	  <!--<div class="alert alert-danger long-alert"> ???????????? ???????????????????? ?????? ???? ?????????? ??????<strong>com.</strong></div>-->
  </div>
   <div class="ast">
	  <input class="form-control address" type="text" placeholder="??????????????" name="address" autocomplete="new-password" required="required"/>
	  <i class="fa fa-home"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert"> ?????????????? ?????????? ????<strong>????????????</strong></div>
	  <div class="alert alert-danger custom-alert"> ?????????????? ?????? ???? ?????????? ?????? <strong>???????? ??????</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control phone" type="text" placeholder="?????? ????????????" name="phone" autocomplete="new-password" required="required"/>
	  <i class="fa fa-phone"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">?????? ???????????? ???? ???????? ???? ????????  <strong></strong>??????????</div>
	  <div class="alert alert-danger long-alert">?????? ???????????? ?????? ???? ???????? ?????? ??????????  <strong>10 ??????????</strong></div>
	  <div class="alert alert-danger custom-alert">?????? ???????????? ?????? ???? ?????????? ?????? <strong>?????????? ??????.</strong></div>
	  <div class="alert alert-danger zero-alert">?????? ???????????? ?????? ???? ????????  <strong>05.</strong></div>
  </div>	 
  <input style="background-color:#157FDA" class="btn btn-primary btn-block button" type="submit" value="??????????"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:15px">
	  <span>???? ?????? ???????? </span><a style="text-decoration:none" href="login.php">?????? ????????</a>
  </div>	 
 </form>
</div>	   
							
';
        }
        
    }
    
} else{
	
	
	
	  $sql = "INSERT INTO medical_record (national_id, Name, Phone , Email , Address , Password) VALUES ('$id', '$name', '$phone', '$email', '$address' , '$hashedPass')";

      $con->exec($sql);
    
	
      //header('Location:login.php');
	
	  echo '
	  
	<div class="container"><div style="margin-top:300px" class="container" dir="rtl">
		  <div class="alert alert-info role="alert">
			  ???? ???????????? ?????????? ?????????? ???? ???????? ???????????? ?????? ??????????
			  <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		 </div>
	 </div></div>
 <div class="design" dir="rtl" style="height:auto;margin-top:300px">
	
 <form class="login" action="login-conn.php" method="post">
	 
  <h4 class="text-center" style="color:#157FDA">?????????? ????????????</h4> 
  <div class="ast">
	  <input class="form-control id" type="text" placeholder="?????? ????????????" name="id" autocomplete="off" required="required"/>
	  <i class="fa fa-edit"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">?????? ???????????? ?????????? ???? <strong>????????????</strong></div>
	  <div class="alert alert-danger custom-alert">  ?????? ???????????? ???? ?????? ????<strong>10 ?????????? </strong></div>
	  <div class="alert alert-danger number-alert">  ?????? ???????????? ?????? ???? ?????????? ??????<strong>?????????? ??????</strong></div>
	  <div class="alert alert-danger one-alert">  ?????? ???????????? ?????? ???? ???????? ????????<strong>1</strong></div>
  </div>	
  
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="???????? ????????????" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">???????? ???????????? ???? ???????? ???? ????????  <strong></strong>??????????</div>
	  <div class="alert alert-danger long-alert">???????? ???????????? ?????? ???? ???????? ?????? ??????????  <strong>6 ????????</strong></div>
	  <!--<div class="alert alert-danger custom-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>???????? ??????????.</strong></div>
	  <div class="alert alert-danger lower-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>???????? ??????????.</strong></div>-->
	  <div class="alert alert-danger number-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>???????? ?????????? ?????????? ?????????? ????????.</strong></div>
  </div>
  <input style="background-color:#157FDA" class="btn btn-primary btn-block button" type="submit" value="????????"/>
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:10px">
	  <span>???? ?????? ?????????? </span><a style="text-decoration:none" href="login1.php">???????? ?????????? ???????? ????????</a>
  </div>		 
  <div class="text-center" style="margin-top:10px;font-weight:bold">
	  <span>???? ?????? ???? ?????????? ?????????? </span><a style="text-decoration:none" href="signup.php">?????????? ???????? ????????</a>
  </div>
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:20px">
	  <span>???? ???????? ???????? ?????????????? </span><a style="text-decoration:none" href="resetpassword.php">?????????? ?????????? ????????</a>
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
		  <strong>??????!</strong> ?????? ???????????? ???????????????????? ???? ???????????????? ???????? ???????????????? ???? ??????. ???? ???????? ???????? ???????? ???????????????? ???? ???????????? ???? ????????.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
    </div>
	<div class="design" dir="rtl" style="height:auto">
	
 <form class="login" action="insert.php" method="post">
	 
  <h4 class="text-center">?????????? ???????? ????????</h4> 
  <div class="ast">
	  <input class="form-control first" type="text" placeholder="?????????? ??????????" name="first" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">?????????? ?????????? ?????????? ???? <strong>????????????</strong></div>
	  <div class="alert alert-danger custom-alert">  ?????????? ?????????? ???? ?????? ????<strong>8 ???????? </strong></div>
	  <div class="alert alert-danger long-alert">  ?????????? ?????????? ?????? ???? ?????????? ??????<strong>???????? ??????</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control last" type="text" placeholder="?????? ??????????????" name="last" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">?????? ?????????????? ?????????? ???? <strong>????????????</strong></div>
	  <div class="alert alert-danger custom-alert">  ?????? ?????????????? ???? ?????? ????<strong>8 ???????? </strong></div>
	  <div class="alert alert-danger long-alert">  ?????? ?????????????? ?????? ???? ?????????? ??????<strong>???????? ??????</strong></div>
  </div>	 
  <div class="ast">
	  <input class="form-control username" type="text" placeholder="?????? ????????????????" name="username" autocomplete="off" required="required"/>
	  <i class="fa fa-user-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">?????? ???????????????? ?????????? ???? <strong>????????????</strong></div>
	  <div class="alert alert-danger custom-alert">  ?????? ???????????????? ???? ?????? ???? <strong>8 ???????? </strong></div>
	  <div class="alert alert-danger long-alert">  ?????? ???????????????? ?????? ???? ?????????? ?????? <strong>???????? ??????</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="???????? ????????????" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">???????? ???????????? ???? ???????? ???? ????????  <strong></strong>??????????</div>
	  <div class="alert alert-danger long-alert">???????? ???????????? ?????? ???? ???????? ?????? ??????????  <strong>10 ????????</strong></div>
	  <div class="alert alert-danger custom-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>???????? ??????????.</strong></div>
	  <div class="alert alert-danger lower-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>???????? ??????????.</strong></div>
	  <div class="alert alert-danger number-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>5 ??????????.</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control email" type="text" placeholder="???????????? ????????????????????" name="email" autocomplete="new-password" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">???????????? ???????????????????? ?????????? ???? <strong>????????????</strong></div>
	  <div class="alert alert-danger custom-alert"> ???????????? ???????????????????? ?????? ???? ?????????? ??????<strong>@</strong></div>
	  <div class="alert alert-danger long-alert"> ???????????? ???????????????????? ?????? ???? ?????????? ??????<strong>com.</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control address" type="text" placeholder="??????????????" name="address" autocomplete="new-password" required="required"/>
	  <i class="fa fa-home"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert"> ?????????????? ?????????? ????<strong>????????????</strong></div>
	  <div class="alert alert-danger custom-alert"> ?????????????? ?????? ???? ?????????? ?????? <strong>???????? ??????</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control phone" type="text" placeholder="?????? ????????????" name="phone" autocomplete="new-password" required="required"/>
	  <i class="fa fa-phone"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">?????? ???????????? ???? ???????? ???? ????????  <strong></strong>??????????</div>
	  <div class="alert alert-danger long-alert">?????? ???????????? ?????? ???? ???????? ?????? ??????????  <strong>10 ??????????</strong></div>
	  <div class="alert alert-danger custom-alert">?????? ???????????? ?????? ???? ?????????? ?????? <strong>?????????? ??????.</strong></div>
	  <div class="alert alert-danger zero-alert">?????? ???????????? ?????? ???? ????????  <strong>05.</strong></div>
  </div>	 
  <input class="btn btn-primary btn-block button" type="submit" value="??????????"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:15px">
	  <span>???? ?????? ???????? </span><a style="text-decoration:none" href="login.php">?????? ????????</a>
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
		  <strong> ???????????????? </strong> ???? ?????????? ?????????? ?????????? ?????????? ???? ???? ???????? ??????????.?????? ?????? ???????????? ???????? ??????????????.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
     </div>
	 <div class="design" dir="rtl" style="height:auto">
	
 <form class="login" action="homepage.php" method="post">
	 
  <h4 class="text-center">?????????? ????????????</h4> 
  <div class="ast">
	  <input class="form-control email" type="text" placeholder="???????????? ????????????????????" name="username" autocomplete="off" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">???????????? ???????????????????? ?????????? ???? <strong>????????????</strong></div>
	  <div class="alert alert-danger custom-alert"> ???????????? ???????????????????? ?????? ???? ?????????? ??????<strong>@</strong></div>
	  <div class="alert alert-danger long-alert"> ???????????? ???????????????????? ?????? ???? ?????????? ??????<strong>com.</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="???????? ????????????" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">???????? ???????????? ???? ???????? ???? ????????  <strong></strong>??????????</div>
	  <div class="alert alert-danger long-alert">???????? ???????????? ?????? ???? ???????? ?????? ??????????  <strong>10 ????????</strong></div>
	  <div class="alert alert-danger custom-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>???????? ??????????.</strong></div>
	  <div class="alert alert-danger lower-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>???????? ??????????.</strong></div>
	  <div class="alert alert-danger number-alert">???????? ???????????? ?????? ???? ?????????? ?????? <strong>5 ??????????.</strong></div>
  </div>
  <input class="btn btn-primary btn-block button" type="submit" value="????????"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold">
	  <span>???? ?????? ???? ?????????? ?????????? </span><a style="text-decoration:none" href="signup.php">?????????? ???????? ????????</a>
  </div>
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:20px">
	  <span>???? ???????? ???????? ?????????????? </span><a style="text-decoration:none" href="resetpassword.php">?????????? ?????????? ????????</a>
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
												 <p>?? 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
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
												 <p>?? 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
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
												 <p>?? 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
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
												 <p>?? 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
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
												 <p>?? 2020 HATLY. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Marketing Company(HATLY)</a> </p>
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
	
	
	
  <footer id="footer" class="footer-area wow fadeIn">
         
      </footer>
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               
               <div class="col-md-4">
                  
               </div>
               <div class="col-md-8" >
                  <div class="footer-text" style="float: right;">
                     <p> ???????? ???????????? ???????????? ?????? ???????? ?????????????? ???????????? ?? 2021</p>
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