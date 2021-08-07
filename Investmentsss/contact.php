<?php 

include "init.php";

include $tpl .  "header.php";

session_start();
 

$do = isset($_GET['do'])?  $_GET['do'] : "Manage";


if(isset($_SESSION['password'])){

	$type = $_SESSION['type'];

	if($type == "creator"){

	  $id = $_SESSION['creatorid'];

	}else if($type == "investor"){


		$id = $_SESSION['investorid'];

	}
}


?>

       <!-- Start Apper Bar -->


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
				  <ul class="nav navbar-nav navbar-right login links" style="height:65px">
					<li><a style="color:#515A5A;margin-top:25px" href="ideas.php">Ideas</a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="investors.php">Investors</a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="about.php">About Us</a></li>
					<li class="active"><a style="color:#515A5A;margin-top:25px" href="contact.php">Contact Us <span class="sr-only">(current)</span></a></li>  
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
       <?php if($do == "Manage"){  ?>


      <!-- Start Contact us -->
          <div class="contact-us text-center">
			  <div class="container">
				  <h2 class="text-center" style="color:#D68910;font-family:Athelas">How can We Help?</h2>
				  <div class="row">
					  <div class="col-md-7">
						  <div class="form">
							  <form class="login" action="contact.php?do=sent" method="post">
								  <div class="form-group ast">
									<input style="margin-bottom:20px" class="form-control name" type="text" name="name" placeholder="Enter Your Name" autocomplete="off" required>
									<i class="fa fa-check check1"></i>
									<i class="fa fa-close close1"></i>
									<div class="alert alert-danger empty-alert mss">Your Name Can't Be <strong></strong>Empty</div>
									<div class="alert alert-danger number-alert mss">Your Name Must Be <strong>Contains Only Characters</strong></div>  
								  </div>
								  <div class="form-group ast">
								  	<input style="margin-bottom:20px" class="form-control email" autocomplete="off" type="text" name="email" placeholder="Enter Your Email Address" required>
									<i class="fa fa-check check1"></i>
									<i class="fa fa-close close1"></i>
									<div class="alert alert-danger empty-alert mss">Email Can't Be <strong></strong>Empty</div>
									<div class="alert alert-danger long-alert mss">Email Must Be Contains <strong>@</strong></div>
									<div class="alert alert-danger custom-alert mss">Email Must Be Contains <strong>.com</strong></div>  
								  </div>
								  <div class="form-group ast">
								  	<textarea style="margin-bottom:20px" class="form-control area" placeholder="Enter Your Message" name="message" required=""></textarea>
									<i class="fa fa-check check1"></i>
									<i class="fa fa-close close1"></i>
									<div class="alert alert-danger empty-alert mss">Your Message Can't Be <strong></strong>Empty</div>
									<div class="alert alert-danger number-alert mss">Your Message Must Be <strong>Contains Only Characters</strong></div>    
								  </div>	  
								  <input style="background-color:#FAD7A0;margin-right:400px" class="btn btn-primary" type="submit" name="send" value="Send">
							  </form>
						  </div>
					  </div>
					  <div class="col-md-5">
						  <div class="info" style="margin-top:150px">
							  <p><i style="color:#D68910" class="fa fa-envelope-o"></i> contact@Fursah.com</p>
						      <p><i style="color:#D68910" class="fa fa-phone"></i> +966 545446161</p>
							  <hr>
							  <ul class="list-unstyled">
								 <li><a href="https://www.facebook.com"><i style="color:#D68910" class="fa fa-facebook facebook"></i></a></li>
								 <li><a href="https://www.twitter.com"><i style="color:#D68910" class="fa fa-twitter twitter"></i></a></li>
								 <li><a href="https://www.google.com"><i style="color:#D68910" class="fa fa-google-plus google-plus"></i></a></li>
								 <li><a href="https://www.linkedin.com"><i style="color:#D68910" class="fa fa-linkedin linkedin"></i></a></li>
						 	  </ul>
						  </div>
					  </div>
				  </div>
			  </div>
          </div>
       <!-- End Contact us -->
      <?php }elseif($do == "sent"){


	
	   if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			 include('connect.php');  
			//Get Varaiables from Post Method
			
			$name  = $_POST["name"];
			$email = $_POST["email"];
			$message = $_POST["message"];
			
			
			
			$formErrors = array();
			
			if(empty($name)){
				
				$formErrors[] = "Name Must Be Written";
				
			}
			if(empty($email)){
				
				$formErrors[] = "Email Must Be Written";
				
			}
			if(empty($message)){
				
				$formErrors[] = "Message Must Be Written";
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				

					$stmt = $con->prepare("INSERT INTO contact(Name , Email , Message) VALUES(:name, :email, :message)");

					$stmt->execute(array(

						'name' => $name,
						'email' => $email,
						'message'  => $message

					));

					// echo success message

					
					echo '
					

					<div class="contact-us text-center">
			  <div class="container">
			  <div style="margin-top:40px" class="alert alert-info">Message Sent Successfully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
				  <h2 class="text-center" style="color:#D68910;font-family:Athelas">How can We Help?</h2>
				  <div class="row">
					  <div class="col-md-7">
						  <div class="form">
							  <form class="login" action="contact.php?do=sent" method="post">
								  <div class="form-group ast">
									<input style="margin-bottom:20px" class="form-control name" type="text" name="name" placeholder="Enter Your Name" autocomplete="off" required>
									<i class="fa fa-check check1"></i>
									<i class="fa fa-close close1"></i>
									<div class="alert alert-danger empty-alert mss">Your Name Can\'t Be <strong></strong>Empty</div>
									<div class="alert alert-danger number-alert mss">Your Name Must Be <strong>Contains Only Characters</strong></div>  
								  </div>
								  <div class="form-group ast">
								  	<input style="margin-bottom:20px" class="form-control email" autocomplete="off" type="text" name="email" placeholder="Enter Your Email Address" required>
									<i class="fa fa-check check1"></i>
									<i class="fa fa-close close1"></i>
									<div class="alert alert-danger empty-alert mss">Email Can\'t Be <strong></strong>Empty</div>
									<div class="alert alert-danger long-alert mss">Email Must Be Contains <strong>@</strong></div>
									<div class="alert alert-danger custom-alert mss">Email Must Be Contains <strong>.com</strong></div>  
								  </div>
								  <div class="form-group ast">
								  	<textarea style="margin-bottom:20px" class="form-control area" placeholder="Enter Your Message" name="message" required=""></textarea>
									<i class="fa fa-check check1"></i>
									<i class="fa fa-close close1"></i>
									<div class="alert alert-danger empty-alert mss">Your Message Can\'t Be <strong></strong>Empty</div>
									<div class="alert alert-danger number-alert mss">Your Message Must Be <strong>Contains Only Characters</strong></div>    
								  </div>	  
								  <input style="background-color:#FAD7A0;margin-right:400px" class="btn btn-primary" type="submit" name="send" value="Send">
							  </form>
						  </div>
					  </div>
					  <div class="col-md-5">
						  <div class="info" style="margin-top:150px">
							  <p><i style="color:#D68910" class="fa fa-envelope-o"></i> contact@Fursah.com</p>
						      <p><i style="color:#D68910" class="fa fa-phone"></i> +966 545446161</p>
							  <hr>
							  <ul class="list-unstyled">
								 <li><a href="https://www.facebook.com"><i style="color:#D68910" class="fa fa-facebook facebook"></i></a></li>
								 <li><a href="https://www.twitter.com"><i style="color:#D68910" class="fa fa-twitter twitter"></i></a></li>
								 <li><a href="https://www.google.com"><i style="color:#D68910" class="fa fa-google-plus google-plus"></i></a></li>
								 <li><a href="https://www.linkedin.com"><i style="color:#D68910" class="fa fa-linkedin linkedin"></i></a></li>
						 	  </ul>
						  </div>
					  </div>
				  </div>
			  </div>
          </div>
					';
					
					
				}
			
			
		}else{
			
			echo "<div class='alert alert-danger'>Can not Browse This Page</div>";
			
		}
	
      

       } ?>
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