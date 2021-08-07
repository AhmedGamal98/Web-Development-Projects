<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dreams Template">
    <meta name="keywords" content="Dreams, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="Drive/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="Drive/css/style.css" type="text/css">
	<link rel="stylesheet" href="css/front.css" type="text/css">
	
	
	<!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	
	
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__search">
            <i class="fa fa-search search-switch"></i>
        </div>
        <div class="offcanvas__logo">
            <a style="color: #FFF" href="./index.html"><i class="fa fa-car"></i> Women’s Drive Training System</a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                 <li class="active"><a href="homepage">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="information.php">Information</a></li>
				<li><a href="#">Packages</a></li>
				<li><a href="#">Trainners</a></li>
				<li><a href="test.php">Tests</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
            <a href="login.php" class="primary-btn">Get Started</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a style="color: #FFF" href="homepage.php"><i class="fa fa-car"></i> Women’s Drive Training System</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <nav class="header__menu" style="width:800px">
                        <ul>
                            <li><a href="homepage.php">Home</a></li>
                            <li><a href="homepage.php">About Us</a></li>
							<li><a href="info.php">Information</a></li>
							<li><a href="packages.php">Packages</a></li>
							<li><a href="trainners.php">Trainners</a></li>
							<li><a href="tests.php">Tests</a></li>
                            <!--<li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./instructor.html">Instructor</a></li>
                                    <li><a href="./pricing.html">Pricing</a></li>
                                    <li><a href="./faq.html">FAQ</a></li>
                                    <li><a href="./course-details.html">Course Details</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </nav>
                </div>
                <!--<div class="col-lg-5">
                    <div class="header__right">
                        <div class="header__right__btn">
                            <a href="login.php" class="primary-btn">Get Started</a>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
<?php


    session_start();

    include('connect.php');  
    


//print_r($_POST);
$email = $_POST['email'];
$password = $_POST['password'];
$sql=$con->prepare("SELECT * FROM admin WHERE 
 Email=? AND Password=?");
$sql->execute(array($email,$password));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != "" && $password != ""){
	
	
if($count>0){
    
    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        
        if($email == $pat["Email"] && $password == $pat["Password"])
        {
            $_SESSION['adminid'] = $pat['admin_id'];
			$_SESSION['password'] = $pat['Password'];
            header('Location:admin/users.php');
        }
    }
    $con=null;
    //echo "wrong password or email";
	
	
	
   
} else{
	
	
	
	
	
$email = $_POST['email'];
$password = $_POST['password'];
$hashpass = sha1($password);	
$sql=$con->prepare("SELECT * FROM  trainner WHERE 
 Email=? AND Password=?");
$sql->execute(array($email,$hashpass));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != "" && $hashpass != ""){
	
	
if($count>0){
    if($row['acceptance'] == 1){

    $sql = $con->prepare("SELECT * FROM  trainner");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        
        if($email == $pat["Email"] && $hashpass == $pat["Password"])
        {
            $_SESSION['trainnerid'] = $pat['trainnerID'];
			$_SESSION['password'] = $pat['Password'];
			$_SESSION['fname'] = $pat['Firstname'];
			$_SESSION['lname'] = $pat['Lastname'];
			$_SESSION['email'] = $pat['Email'];
			$_SESSION['phone'] = $pat['Phone'];
			$_SESSION['type'] = $pat['type'];
			$_SESSION['cv'] = $pat['CV'];
            header('Location:trainner/profile.php');
        }
    }
    $con=null;
    //echo "wrong password or email";
	
    }
    else{
        echo '
	 <div style="margin-top:50px" class="container">
		  <div class="alert alert-info role="alert">
			   You Are in request list wait until admin accept you.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		 </div>
	 </div>
	  
	 <div class="container" style="margin-bottom:50px;height:450px">
      <div class="card card-login mx-auto mt-5">
        <div style="background-color:#F3BD00;color:#FFF" class="card-header">Login</div>
        <div class="card-body login">
          <form action="signin-conn.php" method="post">
            <div class="form-group">
              <div class="form-label-group ast">
                <input type="email" name="email" id="inputEmail" class="form-control email" required="required" autofocus="autofocus">
				  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Email</strong></div>
						<div class="alert alert-danger long-alert">Please Your E-mail Must Be Contains <strong>@</strong></div>
						<div class="alert alert-danger custom-alert">Please Your E-mail Must Be Contains <strong>.com</strong></div>
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group ast">
                <input type="password" name="password" id="inputPassword" class="form-control password"  required="required">
				  <i class="fa fa-check check check-pass"></i>
						<i class="fa fa-close close close-pass"></i>
						<i class="show-pass fa fa-eye fa-2x"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Password</strong></div>
						
						
                <label for="inputPassword">Password</label>
              </div>
            </div>
			<!--<div class="form-group">
              <div class="form-label-group">
				  <select name="type" id="inputType" class="form-control" required="required">
					  <option>Type</option>
					  <option>Trainner</option>
					  <option>Trainee</option>
				  </select>
              </div>
            </div>--> 
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <input style="background-color:#F3BD00;border:none" type="submit" class="btn btn-primary btn-block" value="Login"/>
          </form>
          <div class="text-center">
			<a style="color:#F3BD00" class="d-block small mt-3" href="sign-up.php">Register an Account</a>  
            <a style="color:#F3BD00" class="d-block small" href="reset-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
	  
	  
	  ';
	
    }
    
	
	
   
} else{
	
	
	
	
$email = $_POST['email'];
$password = $_POST['password'];
$hashpass = sha1($password);	
$sql=$con->prepare("SELECT * FROM   trainee WHERE 
 Email=? AND Password=?");
$sql->execute(array($email,$hashpass));
$row=$sql->fetch();
//print_r($row);
$count=$sql->rowCount();
	
//echo "<br>".$count;
if($email != "" && $hashpass != ""){
	
	
if($count>0){
    
    $sql = $con->prepare("SELECT * FROM   trainee");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        
        if($email == $pat["Email"] && $hashpass == $pat["Password"])
        {
            $_SESSION['traineeid'] = $pat['traineeID'];
			$_SESSION['password'] = $pat['Password'];
			$_SESSION['fname'] = $pat['Firstname'];
			$_SESSION['lname'] = $pat['Lastname'];
			$_SESSION['email'] = $pat['Email'];
			$_SESSION['phone'] = $pat['Phone'];
			$_SESSION['type'] = $pat['type'];
            header('Location:trainee/profile.php');
        }
    }
    $con=null;
    //echo "wrong password or email";
	
	
	
   
} else{
	
	
	
	 
	echo '
	 <div style="margin-top:50px" class="container">
		  <div class="alert alert-info role="alert">
			   Inncorrect Email Or Password Please Try Again.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		 </div>
	 </div>
	  
	 <div class="container" style="margin-bottom:50px;height:450px">
      <div class="card card-login mx-auto mt-5">
        <div style="background-color:#F3BD00;color:#FFF" class="card-header">Login</div>
        <div class="card-body login">
          <form action="signin-conn.php" method="post">
            <div class="form-group">
              <div class="form-label-group ast">
                <input type="email" name="email" id="inputEmail" class="form-control email" required="required" autofocus="autofocus">
				  <i class="fa fa-check check"></i>
						<i class="fa fa-close close"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Email</strong></div>
						<div class="alert alert-danger long-alert">Please Your E-mail Must Be Contains <strong>@</strong></div>
						<div class="alert alert-danger custom-alert">Please Your E-mail Must Be Contains <strong>.com</strong></div>
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group ast">
                <input type="password" name="password" id="inputPassword" class="form-control password"  required="required">
				  <i class="fa fa-check check check-pass"></i>
						<i class="fa fa-close close close-pass"></i>
						<i class="show-pass fa fa-eye fa-2x"></i>
						<div class="alert alert-danger empty-alert">Please Fill Your <strong>Password</strong></div>
						
						
                <label for="inputPassword">Password</label>
              </div>
            </div>
			<!--<div class="form-group">
              <div class="form-label-group">
				  <select name="type" id="inputType" class="form-control" required="required">
					  <option>Type</option>
					  <option>Trainner</option>
					  <option>Trainee</option>
				  </select>
              </div>
            </div>--> 
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <input style="background-color:#F3BD00;border:none" type="submit" class="btn btn-primary btn-block" value="Login"/>
          </form>
          <div class="text-center">
			<a style="color:#F3BD00" class="d-block small mt-3" href="sign-up.php">Register an Account</a>  
            <a style="color:#F3BD00" class="d-block small" href="reset-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
	  
	  
	  ';
	

	
  
	  }}else{
	
	
	/*include('logout.php');
	include('login.php');*/
	
	//echo "Not found UserName or password";
}
	 
	

	
  
	  }}else{
	
	
	/*include('logout.php');
	include('login.php');*/
	
	//echo "Not found UserName or password";
}
	
	
	
	 
	

	
  
	  }}else{
	
	
	/*include('logout.php');
	include('login.php');*/
	
	//echo "Not found UserName or password";
}
	
	
	
	
	
	    
?>
	
	
	
	<footer class="footer">
        <div class="text-center">
			<div class="footer__copyright__text" style="border:none;margin-top:0;padding-top:0">
				<p>Copyright &copy; 2021 All rights reserved <a href="homepage.php" target="_blank"> Women’s Drive Training System</a></p>
			</div>
		</div>
    </footer>

    <!-- Js Plugins -->
    <script src="Drive/js/jquery-3.3.1.min.js"></script>
    <script src="Drive/js/bootstrap.min.js"></script>
    <script src="Drive/js/jquery.nice-select.min.js"></script>
    <script src="Drive/js/jquery.magnific-popup.min.js"></script>
    <script src="Drive/js/jquery-ui.min.js"></script>
    <script src="Drive/js/jquery.slicknav.js"></script>
    <script src="Drive/js/owl.carousel.min.js"></script>
    <script src="Drive/js/main.js"></script>
	<script src="js/front.js"></script>
	
	
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	
</body>

</html>
<?php
ob_end_flush();

?>