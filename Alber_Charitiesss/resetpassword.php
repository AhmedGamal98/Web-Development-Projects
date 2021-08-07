<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link href="layouts/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">	
		<link href="layouts/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">		
		<link href="layouts/css/login.css" rel="stylesheet" type="text/css" media="all">
		<link href="layouts/css/layout.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<body>
		<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left">
      <ul class="nospace">
        <!--<li><a href="index.html"><i class="fas fa-home fa-lg"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>-->
		<li>Alber Charity</li>  
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> 0117222084</li>
        <li><i class="fas fa-envelope rgtspace-5"></i> info@alber.com</li>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="one_half first">
      <!--<h1 class="logoname"><a href="index.html"><span>Suro</span>gou</a></h1>-->
     <a class="navbar-brand" href="homepage.php"><img src="admin/layouts/images/alber1.jpg" alt="Alber" style="width:55%;height:168px"></a>
    </div>
    <div class="one_half" style="margin-top:30px">
      <ul class="nospace clear">
        <li class="one_half first">
          <div class="block clear"><i class="fas fa-phone"></i> <span><strong class="block">Call Us:</strong> 0117222084</span> </div>
        </li>
        <li class="one_half">
          <div class="block clear"><i class="far fa-clock"></i> <span><strong class="block"> Morning:</strong> 08.00Am - 12.00Am</span> <span><strong class="block"> Evening:</strong> 04.00Am - 5.30Am</span> </div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
  <nav id="mainav" class="hoc clear" style="margin-top:10px"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="homepage.php">Home</a></li>
    <li><a href="events.php">Events</a></li>  
    <li><a href="cases.php">Need Cases</a></li>
      <li><a href="sign-up.php">Sign Up</a></li>
    <li><a href="login.php">Sign In</a></li>
      <!--<li><a class="drop" href="#">Ahmed</a>
        <ul>
          <li><a href="User/profile.php"><i class="fa fa-user"></i> Profile</a></li>
          <li><a href="login.php"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </li>-->
      <!--<li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Long Link Text</a></li>-->
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<div class="wrapper bgded overlay" style="background-image:url('layouts/images/slide5.jpg');height:400px;">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Reset Password</h6>
    <ul>
      <li><a href="homepage.php">Home</a></li>
      <li><a href="login.php">Sign In</a></li>
	  <li><a href="resetpassword.php">Reset Password</a></li>	
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>		
		<div class="login design">
			<h2>Reset Password</h2>
			<form class="form" action="" method="post">
				<div class="ast">
					<i class="fa fa-envelope"></i>
					<input class="form-control email" type="email" placeholder="Enter Your Email" name="email" autocomplete="off"/>
					<i class="glyphicon glyphicon-ok check"></i>
					<i class="glyphicon glyphicon-remove close"></i>
					<div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
					<div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
					<div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>
				</div>	
				<a href="sign-up.php" class="pull-right">Don't Have An Acount?</a>
				<input type="submit" value="Reset Password" name="login" class="btn btn-primary center-block"/>
			</form>
		</div>
		<!--footer-->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="homepage.php">Alber Charity</a></p>
    <!--<p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>-->
    <!-- ################################################################################################ -->
  </div>
</div>
        <!--//footer-->
		<script src="layouts/js/jquery.min.js"></script>  
		<script src="layouts/js/bootstrap.js"></script>	
		<script src="layouts/js/login.js"></script>	
		<script src="layouts/js/jquery.backtotop.js"></script>
		<script src="layouts/js/jquery.mobilemenu.js"></script>
	</body>
</html>