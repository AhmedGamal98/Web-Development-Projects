<?php 

include "init.php";

include $tpl .  "header.php";

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
				  <a class="navbar-brand" href="homepage.php"><img src="admin/layouts/images/logo.jpg" alt="Forsah" width="60%" height="80px"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 nav">
				  <ul class="nav navbar-nav links">
					<!--<li><a style="color:#515A5A" href="ideas.php">Ideas</a></li>
					<li><a style="color:#515A5A" href="investors.php">Investors</a></li>
					<li><a style="color:#515A5A" href="about.php">About Us</a></li>
					<li><a style="color:#515A5A" href="contact.php">Contact Us</a></li>-->
				  </ul>
				  <!--<form class="navbar-form navbar-left nav-search" action="ideas.php">
					<div class="search">
						<div class="form-group">
						  <input type="text" class="form-control" placeholder="Search about idea or investor">
						</div>
						<button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Search</button>
				    </div>  		
				  </form>-->
				  <ul class="nav navbar-nav navbar-right login links" style="height:65px">
					<li><a style="color:#515A5A;margin-top:25px" href="ideas.php">Ideas</a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="investors.php">Investors</a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="about.php">About Us</a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="contact.php">Contact Us</a></li>  
					<!--<li><a style="background-color:#D9D9D9;color:#515A5A" href="login.php" class="btn btn-primary log"><i class="fa fa-user"></i> Login</a></li>
					<li><a style="background-color:#D9D9D9;color:#515A5A" href="signup.php" class="btn btn-info up"><i class="fa fa-sign-out"></i> Sign Up</a></li>-->
					<li class="dropdown" style="margin-top:-20px;margin-right:-5px">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size:24px;color:#D68910" class="fa fa-user"></i> <!--<span class="caret"></span>--></a>
					  <ul class="dropdown-menu">
						<li><a href="Creator/profile.php" style="color:#000"><i class="fa fa-user"></i> Account Information</a></li>
						<li><a href="Creator/applications.php" style="color:#000"><i class="fa fa-envelope"></i> Messages</a></li>  
						<li><a href="login.php" style="color:#000"><i class="fa fa-sign-out"></i> Sign out</a></li>
					  </ul>
					</li>  
				  </ul>
					
					<!--<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<!--<span class="prfil-img"><img src="layouts/images/avatar.jpeg" width="50px" height="50px" style="border-radius:50%" alt=""> </span> 
												<div class="user-name">
													<p>Ahmed</p>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu"> 
											<li> <a href="Creator/profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="login.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>-->
					
					
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
       
	   <!-- End Apper Bar -->
       <!-- Start Header Photos -->
         
			<div id="carousel-example-generic" class="carousel slide car" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>  
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>  
				<li data-target="#carousel-example-generic" data-slide-to="5"></li>  
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
				<div class="item active">
				  <img src="layouts/images/img1%20(1).jpeg" alt="...">
				  <!--<div class="carousel-caption">
					<h3>Looking for capital to start your project?</h3>
					<p>Start looking for Saudi investors to start your business  
					   Sign up and start sending requests!
					</p>
					<p><a href="signup.php" class="btn btn-primary sign" role="button">Sign Up As Creator</a></p>  
				  </div>-->
				</div>
				<div class="item">
				  <img src="layouts/images/img1%20(2).jpg" alt="...">
				  <!--<div class="carousel-caption">
				    <h3>New Investment Chances</h3>
					<p class="lead">More than 1,000 ideas are ready for you
					   Sign up and do not miss the chance!
					</p>
					<p><a href="signup.php" class="btn btn-primary sign" role="button">Sign Up As Creator</a>  
				  </div>-->
				</div>
				<div class="item">
				  <img src="layouts/images/img1%20(3).jpg" alt="...">
				  <!--<div class="carousel-caption">
				     <h3>New Investment Chances</h3>
					<p>More than 1,000 ideas are ready for you
					   Sign up and do not miss the chance!</p>
					<p><a href="signup.php" class="btn btn-primary sign" role="button">Sign Up As Creator</a>  
				  </div>-->
				</div>
				<div class="item">
				  <img src="layouts/images/img1%20(4).jpg" alt="...">
				  <!--<div class="carousel-caption">
				    <h3>New Investment Chances</h3>
					<p class="lead">More than 1,000 ideas are ready for you
					   Sign up and do not miss the chance!
					</p>
					<p><a href="signup.php" class="btn btn-primary sign" role="button">Sign Up As Creator</a>  
				  </div>-->
				</div>  
				<div class="item">
				  <img src="layouts/images/img1%20(1).png" alt="...">
				  <!--<div class="carousel-caption">
				    <h3>New Investment Chances</h3>
					<p class="lead">More than 1,000 ideas are ready for you
					   Sign up and do not miss the chance!
					</p>
					<p><a href="signup.php" class="btn btn-primary sign" role="button">Sign Up As Creator</a>  
				  </div>-->
				</div> 
				<div class="item">
				  <img src="layouts/images/img1%20(1).jpg" alt="...">
				  <!--<div class="carousel-caption">
				    <h3>New Investment Chances</h3>
					<p class="lead">More than 1,000 ideas are ready for you
					   Sign up and do not miss the chance!
					</p>
					<p><a href="signup.php" class="btn btn-primary sign" role="button">Sign Up As Creator</a>  
				  </div>-->
				</div>  
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
 
       <!-- End Header Photos -->
       <div class="clearfix"></div>
       <!-- Start Header Words -->
         
			<div id="carousel-example" class="carousel slide" data-ride="carousel" style="height:250px;background-color:#CCC">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#carousel-example" data-slide-to="9" class="active"></li>
				<li data-target="#carousel-example" data-slide-to="10"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
				<div class="item active">
				 <div class="text">
						<h3 style="font-family:Athelas">Looking for capital to start your project?</h3>
						<p>Start looking for Saudi investors to start your business  
						   Sign up and start sending requests!
						</p>
						<p><a href="signup.php" class="btn btn-primary sign" role="button">Sign Up As Creator</a></p>
				  </div>		
				</div>
				<div class="item">
				  <div class="text">
				    <h3 style="font-family:Athelas">New Investment Chances</h3>
					<p class="lead">More than 1,000 ideas are ready for you
					   Sign up and do not miss the chance!
					</p>
					  <p><a href="login.php" class="btn btn-primary sign" role="button">Sign In As Creator</a></p>  
				  </div>
				</div>
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
       <!-- Start Creative Ideas -->
		   <div class="ideas">
			   <div class="container">
				   <h3 class="text-center" style="color:#D68910">Creative Ideas</h3>
				   <div class="row">
					   <div class="col-md-4">
						   <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4">
						   <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4">
						   <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						   <div class="thumbnail">
							 <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						   <div class="thumbnail">
							  <img src="layouts/images/b3.png" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						   <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						   <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						   <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						   <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						   <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						   <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						   <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <p class="see"><a style="background-color:#FAD7A0;color:#000;border:none" class="btn btn-primary" role="button">See More</a></p>
				   </div>
			   </div>
		   </div>
       <!-- End Creative Ideas -->
       <!-- Start Project Idea -->
          <div class="start-idea">
			  <div class="container">
				  <div class="row">
					  <div class="col-md-6">
						  <div class="search-investors" style="margin-top:20px">
							  <div class="pull-left">
								  <hr class="pull-left" style="border:1px solid #CFCCCC;height:70px">
								  <hr class="pull-left" style="border:1px solid #CFCCCC;width:70px">
							  </div>  
							  <form action="investors.php" style="clear:both">
								  <h3 style="color: #D68910">Start Looking For Invsetors On Fursah</h3>
							      <p style="color: #515A5A ">You can View All Investors here by Searching about them</p>
								  <input style="display:inline;margin-top:50px" class="form-control" type="text" name="investor" placeholder="Search about investors">
								  <input style="background-color:#FAD7A0;color:#000;border:none;display:inline;margin-top:0;margin-left:10px;width:70px;height:36px;width:110px" type="submit" value="Go" class="btn btn-info">
							  </form>
							  
							  <div style="margin-left:585px">
								  <hr class="pull-right" style="border:1px solid #CFCCCC;height:70px">
							      <hr class="pull-right" style="border:1px solid #CFCCCC;width:70px;margin-top:90px">
							  </div> 
							  
							  
						  </div>
					  </div>
					  <div class="col-md-6">
						  <hr class="pull-left" style="border:1px solid #CFCCCC;height:70px">
							  
						  <hr class="pull-left" style="border:1px solid #CFCCCC;width:70px">

						  <div class="clearfix"></div>
						  
						  <div class="start-project" style="clear:both">
							  <h3 style="color: #D68910">Start Your Project On Fursah</h3>
							  <p style="color: #515A5A ">Fursah Put You On The Right Way</p>
							  <a style="background-color:#FAD7A0;color:#000;border:none;width:110px" href="add_idea.php" class="btn btn-primary">Let's Start</a>
						  </div>
						  
						  <hr class="pull-right" style="border:1px solid #CFCCCC;height:70px">  
						  <hr class="pull-right" style="border:1px solid #CFCCCC;width:70px;margin-top:90px">

						  
					  </div>
				  </div>
			  </div>
          </div>
       <!-- End Project Idea -->
       <!-- Start Tops Recommendation Ideas -->
		   <div class="ideass">
			   <div class="container">
				   <h3 class="text-center" style="color:#D68910">Recommended Ideas</h3>
				   <p class="recommend" style="color:#515A5A">Based on your you may like</p>
				   <div class="row">
					   <div class="col-md-4">
						   <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <div class="col-md-4 hide">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					   <p class="recommended"><a style="background-color:#FAD7A0;color:#000;border:none" class="btn btn-primary" role="button">See More</a></p>
				   </div>
			   </div>
		   </div>
       <!-- End Tops Recommendation Ideas -->
       <!-- Start Sedction Number Of Ideas -->
       <div class="number text-center" style="margin-top:50px">
		   <div class="container">
			   <h3 class="text-center" style="color:#D68910;font-weight:bold;margin-bottom:50px">Our Statistics</h3>
			   <div class="row">
				   <div class="col-md-4">
					   <div class="idea">
						   <i style="color:#B75E21" class="fa fa-lightbulb-o fa-3x"></i>
						   <h4 style="font-weight:bold;margin-top:30px">123</h4>
						   <p style="font-size:18px;color:#515A5A">Number Of Ideas</p>
					   </div>
				   </div>
				   <div class="col-md-4">
					   <div class="investor">
						   <i style="color:#B75E21" class="fa fa-users fa-3x"></i>
						   <h4 style="font-weight:bold;margin-top:30px">133</h4>
						   <p style="font-size:18px;color:#515A5A ">Number Of Registered Investors</p>
					   </div>
				   </div>
				   <!--<div class="col-md-3">
					   <div class="recommended_idea">
						   <i style="color:#B75E21" class="fa fa-lightbulb-o fa-5x"></i>
						   <h4 style="font-weight:bold;margin-top:30px">70</h4>
						   <p style="font-size:18px;color:#515A5A">Number Of Recommended Ideas</p>
					   </div>
				   </div>-->
				   <div class="col-md-4">
					   <div class="recommended_idea">
						   <i style="color:#B75E21" class="fa fa-users fa-3x"></i>
						   <h4 style="font-weight:bold;margin-top:30px">120</h4>
						   <p style="font-size:18px;color:#515A5A">Number Of Registered Creators</p>
					   </div>
				   </div>
			   </div>
		   </div>
       </div>
       <!-- End Section Number Of Ideas -->
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