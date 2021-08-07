<?php 

include "init.php";

include $tpl .  "header.php";

session_start();

?>

       <!-- Start Apper Bar -->

			  <nav class="navbar navbar-default" style="font-size:14px;border:none">
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
				  <ul class="nav navbar-nav navbar-right login links" style="height:65px">
					<li><a style="color:#515A5A;margin-top:25px" href="ideas.php">Ideas</a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="investors.php">Investors</a></li>
					<li class="active"><a style="color:#515A5A;margin-top:25px" href="about.php">About Us <span class="sr-only">(current)</span></a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="contact.php">Contact Us</a></li>  
					<!--<li title="Sign In"><a style="background-color:#D9D9D9;color:#515A5A;width:40px;height:40px;border:none;margin-top:-20px;margin-right:-5px" href="login.php" class="btn btn-primary log"><i style="font-size:22px;color:#D68910" class="fa fa-user"></i></a></li>-->
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
       <!-- Start Header Words -->
         
			<div id="carousel-example" class="carousel slide" data-ride="carousel" style="height:350px;background-color:#D9D9D9">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#carousel-example" data-slide-to="9" class="active"></li>
				<li data-target="#carousel-example" data-slide-to="10"></li>
				<li data-target="#carousel-example" data-slide-to="11"></li>
				<!--<li data-target="#carousel-example" data-slide-to="12"></li>-->  
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
				<div class="item active">
				 <div class="text">
					 <span style="font-size:50px;color:#FFF;margin-top:700px">About Us</span>
				  </div>		
				</div>
				<div class="item">
				  <div class="text">
				    <span style="font-size:50px;color:#FFF;margin-top:700px">Mission</span>
				  </div>
				</div>
				<div class="item">
				  <div class="text">
				     <span style="font-size:50px;color:#FFF;margin-top:700px">Vision</span>
				  </div>
				</div>
				<!--<div class="item">
				  <div class="text">
				     <a href="contact.php" style="text-decoration:none;font-size:50px;color:#FFF;margin-top:700px">Vision</a>
				  </div>
				</div> --> 
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
 
       <!-- End Header Words -->
       <!-- Start About us -->
          <div class="about-us">
			  <div class="container">
				  <div class="row">
					  <div class="col-md-6">
						  <h2 style="color:#D68910">About Us</h2>
						  <p style="color:#515A5A ">Fursah is a crowdfunding platforms that helps you find your match of creators, and investors. An opportunity for users to explore their demands and allow them to extend their business. Our story is driven by creativity and inspiration.</p>
					  </div>
					  <div class="col-md-6 pull-right">
						  <h2 style="color:#D68910">Mission</h2>
						  <p style="color:#515A5A ">Fursah is a premier fund placement website. And we have achieved this by providing an effective and efficient website in execution to the process of matching our creative users to our based investors.</p>
					  </div>
					  <div class="col-md-12">
						  <h2 style="color:#D68910">Vision</h2>
						  <p style="color:#515A5A ">Fursah’s vision is to become a leading platform  in funding business in GCC region by applying high standards services.</p>
					  </div>
				  </div>
			  </div>
          </div>
       <!-- End About us -->
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