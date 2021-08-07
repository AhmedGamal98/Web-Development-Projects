<?php


 session_start();

$name = $_SESSION['Name'];
$userid = $_SESSION['userid'];

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Need Cases</title>
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
      </li>-->
      <!--<li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Long Link Text</a></li>-->
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>	
<div class="wrapper bgded overlay" style="background-image:url('layouts/images/slide3.jpg');height:400px;">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Need Cases</h6>
    <ul>
      <li><a href="homepage.php">Home</a></li>
      <li><a href="login.php">Need Cases</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>	

<div class="wrapper row3">
  <main class="hoc clear"> 

		   <div class="events ideas text-center">
			   <div class="container">
               <h3 class="text-center" style="color:#D68910;font-family:cursive;margin-bottom:70px">Latest Need Cases</h3>
				   <div class="row">
					   
					   
					   
					    <?php
					   
					   
					$caseid = isset($_GET['caseid']) && is_numeric($_GET['caseid']) ? intval($_GET['caseid']) : 0;
					   
					$_SESSION["caseid"] = $caseid;
	  
					include('connect.php'); 
					   
					$sql = $con->prepare("SELECT * FROM cases WHERE case_ID=$caseid");
					$sql->execute();
					$rows = $sql->fetch();  
					   
					$type = $rows["type"];
					$desc = $rows["description"];
					$date = date("y-m-d");   
					   //echo $type;
					   
					   
					$stmt = $con->prepare("INSERT INTO requests(Donor_name , description , donation_date , type , case_id , user_id) VALUES(:name, :desc , :date , :type , :case, :user)");

					$stmt->execute(array(

						'name' => $name,
						'desc' => $desc,
						'date' => $date,
						'type' => $type,
						'case' => $caseid,
						'user' => $userid
					));
					   
					   
					   
					   echo '<div class="alert alert-info">
					Your request Are Sent Successfully
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					   
					   
					   
					   
					   ?>
					   
					   
					   
					   
					  
                         <?php
	  
					include('connect.php');  
					$sql = $con->prepare("SELECT * FROM  cases");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?>
					   <div class="col-md-4">
						   <div class="thumbnail">
							  <!--<img src="layouts/images/image1%20(2).jpg" height="120px" alt="...">-->
							  <div class="caption">
								<h3><?php echo $pat["case_name"]; ?></h3>
								<p><?php echo $pat["description"]; ?></p>
								 <?php if(!isset($_SESSION['Password'])){ ?> 
								<p><a style="width:150px;margin-left:10px" href="login.php" class="btn btn-primary" role="button"><i class="fa fa-share" style="color:#080"></i> Donate</a></p>
								  <?php }else{ ?>
								  
								  <p><a style="width:150px;margin-left:10px" href="donate.php?caseid=<?php echo $pat["case_ID"]; ?>" class="btn btn-primary" role="button"><i class="fa fa-share" style="color:#080"></i> Donate</a></p>
								  
								  <?php } ?>
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

<div class="wrapper row2">
  <section id="latest" class="hoc clear"> 
   
  </section>
</div>
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