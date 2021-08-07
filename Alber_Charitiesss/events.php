<?php


 session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Events</title>
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
    	 <?php 
		
		if(!isset($_SESSION['Password'])){

	?>	
	  <li><a href="sign-up.php">Sign Up</a></li>
	  <li><a href="login.php">Sign In</a></li>	
		
  <?php }else{ ?>	
		
		<li><a class="drop" href="#"><?php echo $_SESSION['Name'];  ?></a>
        <ul>
          <li><a href="User/profile.php"><i class="fa fa-user"></i> Profile</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </li>
		
  <?php } ?>
    <!--<li><a href="sign-up.php">Sign Up</a></li>
    <li><a href="login.php">Sign In</a></li>--> 
      <!--<li><a class="drop" href="#">Ahmed</a>
        <ul>
          <li><a href="User/profile.php"><i class="fa fa-user"></i> Profile</a></li>
          <li><a href="login.php"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </li>
      <!--<li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Long Link Text</a></li>-->
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>	
<div class="wrapper bgded overlay" style="background-image:url('layouts/images/slide2.jpg');height:400px;">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Events</h6>
    <ul>
      <li><a href="homepage.php">Home</a></li>
      <li><a href="login.php">Events</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>	
		   <div class="events ideas text-center">
			   <div class="container">
				   <h3 class="text-center" style="color:#D68910;font-family:cursive;margin-bottom:70px"> Voluntarism Events</h3>
				   <div class="row">
					  
					   
					  <?php
	  
					include('connect.php');  
					$sql = $con->prepare("SELECT * FROM  events");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?>
				   
					   <div class="col-md-4">
						   <div class="thumbnail" style="height:430px">
							  <img class="img-responsive" height="120px"  src="data:image;base64,<?php echo $pat["image"]; ?>" alt="...">
							  <div class="caption">
								<h3><?php echo $pat["Title"]; ?></h3>
								<p><?php echo $pat["Description"]; ?></p>
								<p class="budget">Location: <span><?php echo $pat["Location"]; ?></span></p>
								<p class="budget">Number of Volunteers: <span><?php echo $pat["volunteers"]; ?></span></p>  
								<p><a style="width:170px" href="show-detail.php?eventid=<?php echo $pat["event_ID"]; ?>" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> Show Details</a>
									<?php if(!isset($_SESSION['Password'])){ ?>
									<a style="width:150px;margin-left:10px" href="login.php" class="btn btn-primary" role="button"><i class="fa fa-share" style="color:#080"></i> Participate</a>
								  <?php }else{ ?>
								  
								   <a style="width:150px;margin-left:10px" href="participate.php?eventid=<?php echo $pat["event_ID"]; ?>" class="btn btn-primary" role="button"><i class="fa fa-share" style="color:#080"></i> Participate</a>
								  
								  
								  <?php } ?>
									</p>
							  </div>
							</div>
					   </div>
					   <?php } ?>
                      
					  
					   
				   </div>
			   </div>
		   </div>
       <!-- End Voluntarism Events -->  
	  
    <div class="clear"></div>
  </main>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!--############################################################################################# -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layouts/js/jquery.min.js"></script>  
<script src="layouts/js/bootstrap.js"></script>	
<script src="layouts/js/login.js"></script>		
<script src="layouts/js/jquery.backtotop.js"></script>
<script src="layouts/js/jquery.mobilemenu.js"></script>
</body>
</html>