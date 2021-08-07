<?php 

$do = isset($_GET['do'])?  $_GET['do'] : "";

include "init.php";

include $tpl .  "header.php";

session_start();


?>


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
					 <?php if(!isset($_SESSION['password'])){  ?> 
						<p><a href="signup.php" class="btn btn-primary sign" role="button">Sign Up As Creator</a></p>
					 <?php } ?>
				  </div>		
				</div>
				<div class="item">
				  <div class="text">
				    <h3 style="font-family:Athelas">New Investment Chances</h3>
					<p>More than 1,000 ideas are ready for you
					   Sign up and do not miss the chance!
					</p>
					  <?php if(!isset($_SESSION['password'])){  ?> 
					  
					    <p><a href="login.php" class="btn btn-primary sign" role="button">Sign Up as investor</a>  
						<?php } ?>
				  </div>
				</div>
				<!--<div class="item">
				  <div class="text">
				     <h3 style="font-family:Athelas">New Investment Chances</h3>
					<p>More than 1,000 ideas are ready for you
					   Sign up and do not miss the chance!</p>
					<!--<p><a href="signup.php" class="btn btn-primary sign" role="button">Sign Up As Creator</a>-  
				  </div>
				</div>-->
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
					   <?php
										   
							include('connect.php');  
							$sql = $con->prepare("SELECT * FROM ideas LIMIT 3");
							$sql->execute();
							$rows = $sql->fetchAll();

							foreach($rows as $pat)
							{

						  ?>
					   <div class="col-md-4">
						   <div class="thumbnail"  style="height:650px;">
							  <img style="height:250px;width:100%" class="img-responsive" src="data:image;base64,<?php echo $pat["image"]; ?>" alt="...">
							  <div class="caption">
								<h3><?php echo $pat["title"]; ?></h3>
								<?php if($pat['Description_check'] == 0){
									echo'
									<p style="color:#CCC">' .$pat["idea_description"].'</p>
									';
								}
								?>
								
								<?php if($pat['Budget_Amount_ckeck'] == 0){
									echo'
									<p class="budget">Budget Amount: <span>'. $pat["Budget"] .' RS</span></p>
									';
								}
								?>
								
								<p><a href="show_idea.php?ideaid=<?php echo $pat["ideas_ID"]; ?>&creatorid=<?php echo $pat["creator_ID"]; ?>" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
					  <?php } ?>
					   <div class="clearfix"></div>
					   <p class="see"><a href="ideas.php" style="background-color:#FAD7A0;color:#000;border:none" class="btn btn-primary" role="button">See More</a></p>
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
							  
							  <form action="investors.php" method="post" style="clear:both">
								  <h3 style="color: #D68910">Start Looking For Invsetors On Fursah</h3>
							      <p style="color: #515A5A ">You can View All Investors here by Searching about them</p>
								  <input style="display:inline;margin-top:50px" class="form-control" type="text" name="investor" placeholder="Search about investors">
								  <input style="background-color:#FAD7A0;color:#000;border:none;display:inline;margin-top:0;margin-left:10px;width:110px;height:36px" type="submit" value="Go" name="submit" class="btn btn-info">
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
							  <?php if(isset($_SESSION['password'])){  ?> 
								<?php
							  if($_SESSION['type'] == 'creator'){
								  echo'
								  <a style="background-color:#FAD7A0;color:#000;border:none;width:110px" href="add_idea.php" class="btn btn-primary">Let\'s Start</a> 
								  ';
							  ?>
							  	
							  <?php }elseif($_SESSION['type'] == 'investor'){ ?>
							  
							  <a style="background-color:#FAD7A0;color:#000;border:none;width:110px" href="?do=investor" class="btn btn-primary">Let's Start</a>
							  <?php if($do == "investor"){ ?>
								<div style="width:400px;margin-top:30px;margin-left:90px" class='alert alert-info'>Sorry.you are an investor you cannot upload any idea
								   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
									   <span aria-hidden='true'>&times;</span>
								   </button>
								</div>
							  <?php } ?>
							  
							  <?php }}else{ ?>
	
	
	                            <a style="background-color:#FAD7A0;color:#000;border:none;width:110px" href="login.php" class="btn btn-primary">Let\'s Start</a>
	
                                <?php } ?>
						  </div>
						  <hr class="pull-right" style="border:1px solid #CFCCCC;height:70px">  
						  <hr class="pull-right" style="border:1px solid #CFCCCC;width:70px;margin-top:90px">
					  </div>
				  </div>
			  </div>
          </div>
       <!-- End Project Idea -->
       <!-- Start Tops Recommendation Ideas -->
	   <?php
	   if(isset($_SESSION['password'])){ 
		if($_SESSION['type'] == 'investor'){
			include('connect.php');

			$investor_id = $_SESSION['investorid'];
			$categories = [];
			$intersts = [];
			$ideas = [];
			  
			$sql1 = $con->prepare("SELECT category_id FROM category");
			$sql1->execute();
			$cats = $sql1->fetchAll();
			foreach($cats as $cat){
				array_push($categories, intval($cat['category_id']));
			}
			
			$sql2 = $con->prepare("SELECT category_id FROM interests WHERE investor_ID  = ?");
			$sql2->execute([$investor_id]);
			$ints = $sql2->fetchAll();
			
			foreach($ints as $int){
				array_push($intersts, intval($int['category_id']));
			}

			$sql3 = $con->prepare("SELECT idea_category_id FROM ideas ");
			$sql3->execute();
			$ids = $sql3->fetchAll();
			foreach($ids as $id){
				array_push($ideas, intval($id['idea_category_id']));
			}
			
			$data_array = array("cat" => $categories, "ints" =>$intersts , "ideas" => $ideas);
			
			
			function callAPI($method, $url, $data){
				$curl = curl_init();
				switch ($method){
				   case "POST":
					  curl_setopt($curl, CURLOPT_POST, 1);
					  if ($data)
						 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
					  break;
				   case "PUT":
					  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
					  if ($data)
						 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
					  break;
				   default:
					  if ($data)
						 $url = sprintf("%s?%s", $url, http_build_query($data));
				}
				// OPTIONS:
				curl_setopt($curl, CURLOPT_URL, $url);
				curl_setopt($curl, CURLOPT_HTTPHEADER, array(
				   'APIKEY: 111111111111111111111',
				   'Content-Type: application/json',
				));
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
				// EXECUTE:
				$result = curl_exec($curl);
				if(!$result){ echo '
				<div style="width:400px;margin-top:30px;margin-left:490px;text-algin:center;" class="alert alert-info">Sorry.There is a problem in API.
								   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									   <span aria-hidden="true">&times;</span>
								   </button>
								</div>
				';}
				curl_close($curl);
				return $result;
			 }
			 $make_call = callAPI('POST', 'http://127.0.0.1:5000/recommend/', json_encode($data_array));
			 $response = json_decode($make_call, true);
			 
	   
	   ?>
		   <div class="ideass">
			   <div class="container">
				   <h3 class="text-center" style="color:#D68910">Recommended Ideas</h3>
				   <p class="recommend" style="color:#515A5A">Based on your you may like</p>
				   <div class="row">
				   <?php
				   if ($response != ""){
					foreach ($response as $r ){
						$sql6 = $con->prepare("SELECT * FROM ideas WHERE idea_category_id=? ");
						$sql6->execute([$r]);
						$rows = $sql6->fetchAll();
						foreach($rows as $row){
							echo'
						<div class="col-md-4">
						   <div class="thumbnail" style="height:650px;">
							  <img src="data:image;base64,'.$row['image'].'" style="height:250px;"alt="...">
							  <div class="caption">
								<h3>'.$row['title'].'</h3>
								<p style="color:#CCC">'.$row['idea_description'].'</p>
								<p class="budget">Budget Amount: <span>'.$row['Budget'].'</span></p>
								<p><a href="show_idea.php?ideaid='.$row['ideas_ID'].'" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
						';
						}
						
					} 
					
				   }
				 	
	   }
	   	
		   }
			 
				   ?>
					   
					 
					   <!--<div class="col-md-4 hide">
						    <div class="thumbnail">
							  <img src="layouts/images/restaurant.jpeg" alt="...">
							  <div class="caption">
								<h3>Restaurant</h3>
								<p style="color:#CCC">text text text text text text text text text text text text text text</p>
								<p class="budget">Budget Amount: <span>$100.000</span></p>
								<p><a href="show_idea.php?ideaid=1" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>-->
					   
					   
				   </div>
			   </div>
		   </div>
       <!-- End Tops Recommendation Ideas -->
       <!-- Start Sedction Number Of Ideas -->
       <div class="number text-center" style="margin-top:50px">
		   <div class="container">
			   <h3 class="text-center" style="color:#D68910;font-weight:bold;margin-bottom:50px">Our Statistics</h3>
			   <div class="row">
				   <?php
										   
					include('connect.php');  
					$sql = $con->prepare("SELECT * FROM ideas");
					$sql->execute();
					$rows = $sql->fetch();
				    $count = $sql->rowCount();

					if($count > 0)
					{

				  ?>
				   <div class="col-md-4">
					   <div class="idea">
						   <i style="color:#B75E21" class="fa fa-lightbulb-o fa-3x"></i>
						   <h4 style="font-weight:bold;margin-top:30px"><?php echo $count;  ?></h4>
						   <p style="font-size:18px;color:#515A5A">Number Of Ideas</p>
					   </div>
				   </div>
				   <?php } ?>
				   <?php
										   
					include('connect.php');  
					$sql = $con->prepare("SELECT * FROM investor");
					$sql->execute();
					$rows = $sql->fetch();
				    $count = $sql->rowCount();

					if($count > 0)
					{

				  ?>
				   <div class="col-md-4">
					   <div class="investor">
						   <i style="color:#B75E21" class="fa fa-users fa-3x"></i>
						   <h4 style="font-weight:bold;margin-top:30px"><?php echo $count;  ?></h4>
						   <p style="font-size:18px;color:#515A5A ">Number Of Registered Investors</p>
					   </div>
				   </div>
				   <?php } ?>
				   <!--<div class="col-md-4">
					   <div class="recommended_idea">
						   <i style="color:#B75E21" class="fa fa-lightbulb-o fa-5x"></i>
						   <h4 style="font-weight:bold;margin-top:30px">70</h4>
						   <p style="font-size:18px;color:#515A5A">Number Of Recommended Ideas</p>
					   </div>
				   </div>-->
				    <?php
										   
					include('connect.php');  
					$sql = $con->prepare("SELECT * FROM creator");
					$sql->execute();
					$rows = $sql->fetch();
				    $count = $sql->rowCount();

					if($count > 0)
					{

				  ?>
				   <div class="col-md-4">
					   <div class="recommended_idea">
						   <i style="color:#B75E21" class="fa fa-users fa-3x"></i>
						   <h4 style="font-weight:bold;margin-top:30px"><?php echo $count;  ?></h4>
						   <p style="font-size:18px;color:#515A5A">Number Of Registered Creators</p>
					   </div>
				   </div>
				   <?php  } ?>
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