<?php 

include "init.php";

include $tpl .  "header.php"; 

session_start();

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
				  <ul class="nav navbar-nav navbar-right login links" style="height:65px">
					<li class="active"><a style="color:#515A5A;margin-top:25px" href="ideas.php">Ideas <span class="sr-only">(current)</span></a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="investors.php">Investors</a></li>
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
										<option value="City">City</option>
										<option value="Al_Reyad">Al-Reyad</option>
										<option value="Afif">Afif</option> 
										<option value="Abha">Abha</option>
										<option value="Al Bukayriyah">Al Bukayriyah</option> 
										<option value="Al-Hareeq">Al-Hareeq</option> 
										<option value="Al-Gwei'iyyah">Al-Gwei'iyyah</option> 
										<option value="Al-'Ula">Al-'Ula</option>
										<option value="Baljurashi">Baljurashi</option> 
										<option value="Bisha">Bisha</option> 
										<option value="Buraydah">Buraydah</option> 
										<option value="Bahah">Bahah</option> 
										<option value="Dammam">Dammam</option> 
										<option value="Dhahran">Dhahran</option>
										<option value="Diriyah">Diriyah</option> 
										<option value="Dawadmi">Dawadmi</option> 
										<option value="Hautat Sudair">Hautat Sudair</option>
										<option value="Hofuf">Hofuf</option> 
										<option value="Hafr Al-Batin">Hafr Al-Batin</option> 
										<option value="AlJawf">AlJawf</option>
										<option value="Jeddah">Jeddah</option>
										<option value="Jizan">Jizan</option> 
										<option value="Jubail">Jubail</option> 
										<option value="Khafji">Khafji</option>
										<option value="Khamis Mushayt">Khamis Mushayt</option> 
										<option value="Khobar">Khobar</option> 
										<option value="Majma'ah">Majma'ah</option> 
										<option value="Al-Mubarraz">Al-Mubarraz</option> 
										<option value="Mecca">Mecca</option> 
										<option value="Medina">Medina</option> 
										<option value="Muzahmiyya">Muzahmiyya</option> 
										<option value="Najran">Najran</option> 
										<option value="Al-Namas">Al-Namas</option> 
										<option value="Qadeimah">Qadeimah</option> 
										<option value="Qatif">Qatif</option> 
										<option value="Qunfudhah">Qunfudhah</option> 
										<option value="Rass Tanura">Rass Tanura</option>
										<option value="Riyadh">Riyadh</option> 
										<option value="Sakakah">Sakakah</option>
										<option value="Sharurah">Sharurah</option> 
										<option value="Shaqraa">Shaqraa</option> 
										<option value="Taif">Taif</option> 
										<option value="Tabuk">Tabuk</option>
										<option value="Tanomah">Tanomah</option> 
										<option value="Unaizah">Unaizah</option> 
										<option value="Uyun Aljiwa">Uyun Aljiwa</option>
										<option value="Wadi AlDawasir">Wadi AlDawasir</option>
										<option value="Yanbu">Yanbu</option>
										<option value="Zulfi">Zulfi</option> 

									 </select>
								 </div>	 
								 <div class="money col-md-2">
									 <select name="budget" class="form-control">
										 <option value="Budget">Budget</option>
										 <option value="50000"> < 50,000 SR</option>
										 <option value="60000"> 60,000 SR - 80,0000 SR</option>
										 <option value="90000"> 90,000 SR - 110,000 SR</option>
										 <option value="120000"> > 110,000 SR</option>
										 <!--<option value="200">$200,000</option>-->
									 </select>
								</div>
								<div class="category col-md-2">
									 <select name="cat" class="form-control">
										 <option value="Category">Category</option>
										 <?php
										   
											include('connect.php');  
											$sql = $con->prepare("SELECT * FROM category");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										  ?>
										  <option value="<?php echo $pat["category_id"]; ?>"><?php echo $pat["category_name"]; ?></option>
										<?php } ?>
									 </select>
								</div> 
								<div class="tag col-md-2">
									 <select name="tag" class="form-control">
										 <option value="Tag">Tag</option>
										 <?php
										   
											include('connect.php');  
											$sql = $con->prepare("SELECT * FROM tags");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										  ?>
										 <option value="<?php echo $pat["tag_id"]; ?>"><?php echo $pat["tag_name"]; ?></option>
										 <?php } ?>
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
       <!-- Start Show Ideas By Filtering  -->
          <div class="ideas">
			   <div class="container">
				   <!--<h3 class="text-center" style="color:#D68910">Ideas</h3>-->
				   <div class="row">
					    <?php
					   
					   if(isset($_POST["filter"])){
						   
					       $cat = $_POST["cat"];
					       $tag = $_POST["tag"];
					       $city = $_POST["city"];
					       $budget = $_POST["budget"];
						   
						   
						   
					   
					   
					     if($cat == "Category" && $tag == "Tag" && $city == "City" && $budget == "Budget"){
					   
										   
							include('connect.php');  
							$sql = $con->prepare("SELECT * FROM ideas");
							$sql->execute();
							$rows = $sql->fetchAll();

							foreach($rows as $pat)
							{

						  ?>
					   <div class="col-md-4">
						   <div class="thumbnail" style="height:650px;">
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
					   <?php }}else{ 
					   
							 
							 if(isset($_POST["filter"])){

								   $cat = $_POST["cat"];
								   $tag = $_POST["tag"];
								   $city = $_POST["city"];
								   $budget = $_POST["budget"];

							   }
							 
							 
					   	    include('connect.php');  
							 
							if($cat != "Category" && $tag != "Tag" && $city != "City" && $budget != "Budget"){ 
							 
							 if($budget == "50000"){
								
								
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND ideas.idea_tag_id='$tag' AND ideas.Budget<='$budget' AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "60000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND ideas.idea_tag_id='$tag' AND (ideas.Budget>='$budget' AND ideas.Budget <=80000) AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "90000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND ideas.idea_tag_id='$tag' AND (ideas.Budget>='$budget' AND ideas.Budget <=110000) AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
								 
							 }elseif($budget == "120000"){
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND ideas.idea_tag_id='$tag' AND ideas.Budget>='$budget' AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }
								
							}elseif($cat == "Category" && $tag != "Tag" && $city != "City" && $budget != "Budget"){
								
								
								
								if($budget == "50000"){
								
								
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_tag_id='$tag' AND ideas.Budget<='$budget' AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "60000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_tag_id='$tag' AND (ideas.Budget>='$budget' AND ideas.Budget <=80000) AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "90000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_tag_id='$tag' AND (ideas.Budget>='$budget' AND ideas.Budget <=110000) AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
								 
							 }elseif($budget == "120000"){
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_tag_id='$tag' AND ideas.Budget>='$budget' AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }
								
								
							}elseif($cat != "Category" && $tag == "Tag" && $city != "City" && $budget != "Budget"){
								
								
								 if($budget == "50000"){
								
								
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND ideas.Budget<='$budget' AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "60000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND (ideas.Budget>='$budget' AND ideas.Budget <=80000) AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "90000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND (ideas.Budget>='$budget' AND ideas.Budget <=110000) AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
								 
							 }elseif($budget == "120000"){
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND ideas.Budget>='$budget' AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }
								
								
							}elseif($cat != "Category" && $tag != "Tag" && $city == "City" && $budget != "Budget"){
								
								if($budget == "50000"){
								
								
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND ideas.idea_tag_id='$tag' AND ideas.Budget<='$budget'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "60000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND ideas.idea_tag_id='$tag' AND (ideas.Budget>='$budget' AND ideas.Budget <=80000)"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "90000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND ideas.idea_tag_id='$tag' AND (ideas.Budget>='$budget' AND ideas.Budget <=110000)"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
								 
							 }elseif($budget == "120000"){
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND ideas.idea_tag_id='$tag' AND ideas.Budget>='$budget'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }
								
								
								
							}elseif($cat != "Category" && $tag != "Tag" && $city != "City" && $budget == "Budget"){
								
								
								
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat' AND ideas.idea_tag_id='$tag' AND creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
								
							}elseif($cat == "Category" && $tag == "Tag" && $city != "City" && $budget == "Budget"){
								
								
								
								
								
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE creator.City='$city'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							
								
								
							}elseif($cat == "Category" && $tag == "Tag" && $city == "City" && $budget != "Budget"){
								
								
								
								 if($budget == "50000"){
								
								
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.Budget<='$budget'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "60000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE (ideas.Budget>='$budget' AND ideas.Budget <=80000)"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "90000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE (ideas.Budget>='$budget' AND ideas.Budget <=110000)"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
								 
							 }elseif($budget == "120000"){
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.Budget>='$budget'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }
								
								
							}elseif($cat == "Category" && $tag == "Tag" && $city == "City" && $budget != "Budget"){
								
								if($budget == "50000"){
								
								
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.Budget<='$budget'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "60000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE (ideas.Budget>='$budget' AND ideas.Budget <=80000)"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }elseif($budget == "90000"){
								 
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE (ideas.Budget>='$budget' AND ideas.Budget <=110000)"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
								 
							 }elseif($budget == "120000"){
								 
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE  ideas.Budget>='$budget'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								 
							 }
							
								 
							
								
								
							}elseif($cat == "Category" && $tag != "Tag" && $city == "City" && $budget == "Budget"){
								
								
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_tag_id='$tag'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								
								
							}elseif($cat != "Category" && $tag == "Tag" && $city == "City" && $budget == "Budget"){
								
								
							$sql = $con->prepare("SELECT ideas.*  FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas.idea_category_id='$cat'"); 
							$sql->execute();
							$rows = $sql->fetchAll();
							$count =  $sql->rowCount();
								
								
							}
							 
							if($count > 0){

							foreach($rows as $pat)
							{

						  ?>
					   <div class="col-md-4">
						   <div class="thumbnail" style="height:650px;">
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
					   
					   <?php }}else{echo '<div class="alert alert-info"><?php echo $count; ?> No Date Founded
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>';}}}else{ 
					   
					       include('connect.php');  
							$sql = $con->prepare("SELECT * FROM ideas");
							$sql->execute();
							$rows = $sql->fetchAll();

							foreach($rows as $pat)
							{

						  ?>
					   <div class="col-md-4">
						   <div class="thumbnail" style="height:650px;">
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
					   
					   
					   
					   <?php } ?>
				   </div>
			   </div>
		   </div>
       <!-- End Show Ideas By Filtering  -->
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
				<div style="width:400px;margin-top:30px;margin-left:490px" class="alert alert-info">Sorry.There is a problem in API.
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
							  <img src="data:image;base64,'.$row['image'].'" style="height:250px;width:100%"  alt="...">
							  <div class="caption">
								<h3>'.$row['title'].'</h3>';
								if($pat['Description_check'] == 0){
									echo'<p style="color:#CCC">'.$row['idea_description'].'</p>';
								}

								if($pat['Budget_Amount_ckeck'] == 0){
									echo'<p class="budget">Budget Amount: <span>'.$row['Budget'].'</span></p>';
								}
								
								echo'
								
								<p><a href="show_idea.php?ideaid='.$row['ideas_ID'].'" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> More Details</a></p>
							  </div>
							</div>
					   </div>
						';
						}
					} 
					
				   }
				 	
		   }}
			 
				   ?>
				   </div>
				   				   </div>
       <!-- End Tops Recommendation Ideas -->
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