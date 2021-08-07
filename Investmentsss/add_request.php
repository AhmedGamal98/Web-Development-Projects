<?php 

include "init.php";

include $tpl .  "header.php";


session_start();

$type = $_SESSION['type'];

if($type == "creator"){

  $id = $_SESSION['creatorid'];
	
}else if($type == "investor"){
	
	
	$id = $_SESSION['investorid'];
	
}

?>

       <!-- Start Apper Bar -->

		<!--<div class="abber-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo">
							<img src="admin/layouts/images/logo.jpg" alt="Forsah">
						</div>
					</div>
					<div class="col-md-5">
						<div class="links">
							<ul class="list-unstyled">
								<li class="active"><a href="homepage.php">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="login pull-right">
							<a href="login.php" class="btn btn-primary">Login</a>
							<a href="signup.php" class="btn btn-info">Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</div>-->

			 <nav class="navbar navbar-default" style="font-size:14px">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="homepage.php"><img src="admin/layouts/images/logo.jpg" alt="Forsah" width="60%" height="70px"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 nav">
				  <ul class="nav navbar-nav links">
					
				  </ul>
				  <!--<form class="navbar-form navbar-left nav-search" action="ideas.php">
					<div class="search">
						<div class="form-group">
						  <input type="text" class="form-control" placeholder="Search about idea or investor">
						</div>
						<button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Search</button>
				    </div>  		
				  </form>-->
				  <ul class="nav navbar-nav navbar-right login links">
					<li><a style="color:#515A5A;margin-top:25px" href="ideas.php">Ideas</a></li>
					<li class="active"><a style="color:#515A5A;margin-top:25px" href="investors.php">Investors <span class="sr-only">(current)</span></a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="about.php">About Us</a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="contact.php">Contact Us</a></li>  
					<?php if(!isset($_SESSION['password'])){  ?> 
					  
					<li><a style="background-color:#D9D9D9;color:#515A5A;width:40px;height:40px;border:none;margin-top:-20px;margin-right: -15px;font-weight:bold;width:100px" href="signup.php" class="up">Sign Up</a></li>
					<li><a style="background-color:#D9D9D9;color:#515A5A;width:40px;height:40px;border:none;margin-top:-20px;margin-right: -15px;font-weight:bold;width:100px" href="login.php" class="up">Sign In</a></li>    
					 
					 <?php  }else{
					  
					  if($_SESSION['type'] == "creator"){
					  
					  ?> 
					  
					  <li class="dropdown" style="margin-top:-20px;margin-right:-5px">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size:24px;color:#D68910" class="fa fa-user"></i> <!--<span class="caret"></span>--></a>
					  <ul class="dropdown-menu">
						<li><a href="Creator/profile.php" style="color:#000"><i class="fa fa-user"></i> Account Information</a></li>
						<li><a href="Creator/chat.php" style="color:#000"><i class="fa fa-envelope"></i> Messages</a></li>  
						<li><a href="logout.php" style="color:#000"><i class="fa fa-sign-out"></i> Sign out</a></li>
					  </ul>
					</li> 
					  
					  
					  
					 <?php 
					  
					  }elseif($_SESSION['type'] == "investor"){ ?>
						  
						  
					  <li class="dropdown" style="margin-top:-20px;margin-right:-5px">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size:24px;color:#D68910" class="fa fa-user"></i> <!--<span class="caret"></span>--></a>
					  <ul class="dropdown-menu">
						<li><a href="Investor/profile.php" style="color:#000"><i class="fa fa-user"></i> Account Information</a></li>
						<li><a href="Investor/chat.php" style="color:#000"><i class="fa fa-envelope"></i> Messages</a></li>  
						<li><a href="logout.php" style="color:#000"><i class="fa fa-sign-out"></i> Sign out</a></li>
					  </ul>
					</li> 
					  
						  
					<?php	  
					  }elseif($_SESSION['type'] == "admin"){ ?>
					  
					  <li class="dropdown" style="margin-top:-20px;margin-right:-5px">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size:24px;color:#D68910" class="fa fa-user"></i> <!--<span class="caret"></span>--></a>
					  <ul class="dropdown-menu">
						<li><a href="admin/Ideas.php" style="color:#000"><i class="fa fa-user"></i> Account Information</a></li>  
						<li><a href="logout.php" style="color:#000"><i class="fa fa-sign-out"></i> Sign out</a></li>
					  </ul>
					</li>
					  
					  
				  <?php	  }}  ?>  
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
       
	   <!-- End Apper Bar -->
       <!-- Start Control By Filtering -->
          <div class="filtering">
			  <div class="container">
				  <div class="row">
					  <div class="col-md-12">
						 <div class="all">
							 <!--<a class="col-md-2" style="font-size:22px;color:#C1672D" href="homepage.php" class="btn btn-primary confirm"><i class="fa fa-chevron-left"></i></a>-->
							 <form method="post">
								 <div class="city col-md-2">
									 <select name="city" class="form-control">
										 <option value="">City</option>
										 <option>Al-Reyad</option>
										 <option>Afif</option>
									 </select>
								 </div>	 
								 <div class="money col-md-2">
									 <select name="budget" class="form-control">
										 <option value="">Budget</option>
										 <option value="100">$100,000</option>
										 <option value="40">$40,000</option>
										 <option value="150">$150,000</option>
										 <option value="120">$120,000</option>
										 <option value="200">$200,000</option>
									 </select>
								</div>
								<div class="filter col-md-2">
									<input style="background-color:#FAD7A0;color:#000;border:none;width:130px" class="btn btn-info" type="submit" value="Filter" name="filter"> 
								</div> 	
							 </form>
						 </div>
					  </div>
				  </div>
			  </div>
          </div>
       <!-- End Control By Filtering  -->
       <hr>
       <!-- Start Show Investors By Filtering  -->
          <div class="investors">
			   <div class="container">
				   <!--<h3 class="text-center" style="color:#D68910">Investors</h3>-->
				   <div class="row">
					   
					   <?php
					   
					   
					   //$ideaid = isset($_GET['ideaid']) && is_numeric($_GET['ideaid']) ? intval($_GET['ideaid']) : 0;
                       //$investorid = isset($_GET['investorid']) && is_numeric($_GET['investorid']) ? intval($_GET['investorid']) : 0;
					   
					   
					   include('connect.php');
					   
					   $ideaid = $_POST["ideaid"];
					   $investorid = $_POST["investorid"];
 
						$stmt = $con->prepare("INSERT INTO  applications(idea_id , investor_id , creator_id) VALUES(:ideaid, :investorid , :creatorid)");

						$stmt->execute(array(

							'ideaid'    => $ideaid,
							'investorid' => $investorid,
							'creatorid' => $id

						));
					   
					   ?>
					   
						<div class="container">
							<div style="margin-top:40px" class="alert alert-info">Your Request Has Been Sent For Investor
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div> 
					   
					 <?php   
						   
					   
					   
					 if(isset($_POST["submit"])){
						 
						 include('connect.php');  
					   
						 $investor = $_POST["investor"];

						 $sql = $con->prepare("SELECT * FROM investor WHERE Fname LIKE '%$investor%' OR nationalid LIKE '%$investor%'");
						 $sql->execute();
						 $rows = $sql->fetchAll();
						 $count = $sql->rowCount();
						 
						 foreach($rows as $pat)
						 {

						  ?>
						<div class="container">
							<div class="alert alert-info"><?php echo $count; ?> Results Are Founded For Searching
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div> 	
					     <div class="col-md-4">
						   <div class="thumbnail">
							  <img src="layouts/images/investor.jpg" alt="...">
							  <div class="caption">
								<h3><?php echo $pat["Fname"]; ?></h3>
								<p><?php echo $pat["Bio"]; ?></p>
								<p class="budget">Budget Amount: <span><?php echo $pat["Budget"]; ?></span></p> 
								<p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-envelope-o"></i> Send Request To Chat</a></p>
							  </div>
							</div>
					   </div>
					   
					   
						 <?php }
					 }else{
					   
					   if(isset($_POST["filter"])){
						   
					       $city = $_POST["city"];
					       $budget = $_POST["budget"];
						   
						   
						   
					   
					   
					     if($city == "" && $budget == ""){
					   
										   
							include('connect.php');  
							$sql = $con->prepare("SELECT * FROM investor");
							$sql->execute();
							$rows = $sql->fetchAll();

							foreach($rows as $pat)
							{

						  ?>
					   <div class="col-md-4">
						   <div class="thumbnail">
							  <img src="layouts/images/investor.jpg" alt="...">
							  <div class="caption">
								<h3><?php echo $pat["Fname"]; ?></h3>
								<p><?php echo $pat["Bio"]; ?></p>
								<p class="budget">Budget Amount: <span><?php echo $pat["Budget"]; ?></span></p> 
								<p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-envelope-o"></i> Send Request To Chat</a></p>
							  </div>
							</div>
					   </div>
					   <?php }}else{ 
					   
							 
							 if(isset($_POST["filter"])){

								   $city = $_POST["city"];
								   $budget = $_POST["budget"];

							   }
							 
							 
					   	    include('connect.php');  
							$sql = $con->prepare("SELECT * FROM investor  WHERE Budget='$budget' AND City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();

							foreach($rows as $pat)
							{

						  ?>
					   <div class="col-md-4">
						   <div class="thumbnail">
							  <img src="layouts/images/investor.jpg" alt="...">
							  <div class="caption">
								<h3><?php echo $pat["Fname"]; ?></h3>
								<p><?php echo $pat["Bio"]; ?></p>
								<p class="budget">Budget Amount: <span><?php echo $pat["Budget"]; ?></span></p> 
								<p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-envelope-o"></i> Send Request To Chat</a></p>
							  </div>
							</div>
					   </div>
					   
					   <?php }}}else{ 
					   
					       include('connect.php');  
							$sql = $con->prepare("SELECT * FROM investor");
							$sql->execute();
							$rows = $sql->fetchAll();

							foreach($rows as $pat)
							{
								
								
							$sql = $con->prepare("SELECT creator.* , ideas.ideas_ID FROM creator INNER JOIN ideas ON ideas.creator_ID = creator.nationalid WHERE creator.nationalid=$id");
							$sql->execute();
							$row = $sql->fetch();

						  ?>
					   <div class="col-md-4">
						   <div class="thumbnail">
							  <img src="layouts/images/investor.jpg" alt="...">
							  <div class="caption">
								<h3><?php echo $pat["Fname"]; ?></h3>
								<p><?php echo $pat["Bio"]; ?></p>
								<p class="budget">Budget Amount: <span><?php echo $pat["Budget"]; ?></span></p> 
								<p><a href="investors.php?do=Add&investorid=<?php echo $pat["nationalid"]; ?>"  class="btn btn-primary request" role="button"><i class="fa fa-envelope-o"></i> Send Request To Chat</a></p>
							  </div>
							</div>
					   </div>
					   
					   
					   
					   
					   
					   <?php } ?>
					   
					   
					   
					   <?php }} ?>
					  
					   
					   
					 
					   
					   
					   
					  				 
				   </div>
			   </div>
		   </div>
       <!-- End Show Investors By Filtering  -->
    <!-- Start Footer -->
         <div class="footer">
			 <div class="container">
				 <div class="row">
					 <div class="col-md-12">
						 <!-- Start Help -->
						 <div class="contact text-center">
							 <div class="container">
								 <div class="row">
									 <div class="col-md-6 con">
										 <h3 style="color:#D68910">Contact</h3>
										 <p><i style="color:#D68910" class="fa fa-envelope-o"></i> contact@Fursah.com</p>
										 <p><i style="color:#D68910" class="fa fa-phone"></i> +966 545446161</p>
									 </div>
									 <!--<div class="col-md-4 con">
										 <h3>Pages</h3>
										 <p><a href="about.php" style="text-decoration:none;color:#FFF">About Us</a></p>
										 <p><a href="contact.php" style="text-decoration:none;color:#FFF">Contact Us</a></p>
									 </div>-->
									 <div class="col-md-6 con">
										 <h3 style="color:#D68910">More</h3>
										 <p><a href="terms.php" style="text-decoration:none;color:#FFF">Terms</a></p>
										 <p><a href="terms.php" style="text-decoration:none;color:#FFF">Privacy</a></p>
									 </div>
								 </div>
							 </div>
						 </div>
						 <!-- End Help -->
					 </div>
					 <div class="col-md-12 copy text-center">
						 Copyrights &copy; All Rights Reserved 2021 <span style="color:#D68910">FURSAH</span>
					 </div>
				 </div>
			 </div>
         </div>
       <!-- End Footer -->
<?php include  $tpl . "footer.php"; ?>