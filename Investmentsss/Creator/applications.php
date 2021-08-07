<?php  

$do = isset($_GET['do'])?  $_GET['do'] : "Applications";

session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login.php');


}

$id = $_SESSION['creatorid'];
$Fname = $_SESSION['fname'];

?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="layouts/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="layouts/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="layouts/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="layouts/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
		   
		   <div class="header-main" style="border-bottom:2px solid #000">
					<!--<div class="header-left">
							<div class="logo-name">
									 <a href="homepage.php"><img id="logo" src="layouts/images/logo.jpg" width="150px" height="70px" alt="Logo"/>
								  </a> 								
						    </div>
							<div class="clearfix"> </div>
						 </div>-->
						 <div class="header-right" style="height:75px">
							 <a href="profile.php" class="pull-right" style="text-decoration:none;font-size:26px;color:#B75E21;margin-left:15px;margin-top:0"><i class="fa fa-user"></i></a> 
							 <?php
										   
							include('../connect.php');  						  
							 $stmt = $con->prepare("SELECT * FROM requests WHERE read_activity= ? AND creator_id= ?");
							 $stmt->execute(array(0 , $id));
							 $row = $stmt->fetch();
							 $count = $stmt->rowCount();
							 
							 if($count > 0){

							if($row["read_activity"] == 0 && $count > 0){

						 
							 echo '<a class="pull-right" style="font-size:24px;margin-top:0" href="requisition.php"><i class="fa fa-bell"></i><span class="badge blue">' . $count . '</span></a>';
							 
							 }else{
								
								echo '<a class="pull-right" style="font-size:24px;margin-top:0" href="requisition.php"><i class="fa fa-bell"></i></a>';
								
							}
							 }else{
								 
								 
								 echo '<a class="pull-right" style="font-size:24px;margin-top:0" href="requisition.php"><i class="fa fa-bell"></i></a>';
								 
								 
							 }
							 
							 ?>
							 <!--<div class="profile_details_left"><!--notifications of menu start 
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a style="font-size:15px;margin-top:0" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="requisition.php?do=Show_request&investorid=1">
												<div class="user_img"><img src="layouts/images/avatar.jpeg" width="60px" height="50px" style="border-radius:50%" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="requisition.php?do=Show_request&investorid=1">
												<div class="user_img"><img src="layouts/images/avatar.jpeg" width="60px" height="50px" style="border-radius:50%" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="requisition.php?do=Show_request&investorid=1">
												<div class="user_img"><img src="layouts/images/avatar.jpeg" width="60px" height="50px" style="border-radius:50%" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>		
								</ul>
								<div class="clearfix"> </div>
							</div>
							 <!--<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="layouts/images/avatar.jpeg" width="50px" height="50px" style="border-radius:50%" alt=""> </span> 
												<div class="user-name">
													<p>Ahmed</p>
													<span>Creator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="../homepage.php"><i class="fa fa-cogs"></i> Fursah</a> </li> 
											<li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="../login.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>-->
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
           
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block" style="margin-left:50px;margin-top:30px">
   <div class="boost-icons">
	   
	   <?php if($do == "Applications"){  ?>
	   

  <div class="inner-block" style="margin-top:0;padding-top:0;height:800px">
    <div class="inbox">
		  <i class="fa fa-envelope fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">My Applications Lists</h2>
		  </div>
		
		<div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
									  <th>Idea Title</th>	
									  <th>Investor</th>	
									  <th>Status</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>
								  <?php
										   
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										   applications.* , ideas.title
									   FROM
										  applications
									   INNER JOIN
										  ideas
										
									   ON
										  applications.idea_id = ideas.ideas_ID
										  

									   WHERE applications.creator_id=$id");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								  ?>
                                <tr>
                                  <td><?php echo $pat["id"]; ?></td>
								  <td><a href="applications.php?do=Idea&ideaid=<?php echo $pat["idea_id"]; ?>" style="text-decoration:none;color:#515A5A"><?php echo $pat["title"]; ?></a></td>
								  <td><a href="applications.php?do=Investor&investorid=<?php echo $pat["investor_id"]; ?>" style="text-decoration:none;color:#515A5A"><?php echo $pat["investor_id"]; ?></a></td>
								  <td><?php echo $pat["status"]; ?></td>	
								  <td>
									  <?php if($pat["status"] == "Accepted"){ ?>
									  	<a href="applications.php?do=Chat&investorid=<?php echo $pat["investor_id"]; ?>" class="btn btn-danger" style="background-color:#FFF;color:#D68910;width:100px"><i class="fa fa-comments-o"></i> Chat</a>
									  <?php  }elseif($pat["status"] == "Rejected"){ ?>
									  	<a onclick="return confirm('Are You Sure?');"  href="applications.php?do=Delete&investorid=<?php echo $pat["id"]; ?>" class="btn btn-danger" style="background-color:#FFF;color:#D68910;width:100px"><i class="fa fa-trash"></i> Delete</a>
									  <?php }elseif($pat["status"] == "Pending"){ ?>
									  	<a onclick="return confirm('Are You Sure?');"  href="applications.php?do=Delete&investorid=<?php echo $pat["id"]; ?>" class="btn btn-danger" style="background-color:#FFF;color:#D68910;width:100px"><i class="fa fa-close"></i> Cancel</a>
									  <?php } ?>
								  </td>		
                              </tr>
								<?php } ?>  
                             
                          </tbody>
                      </table>
      </div>
    	
          <div class="clearfix"> </div>     
   </div>
</div>
	
	   
	   
	   <?php }elseif($do == "Investor"){ 
	   
	   
	   $investorid = isset($_GET['investorid']) && is_numeric($_GET['investorid']) ? intval($_GET['investorid']) : 0;
	   
	   
	   ?>
	   
	    <div class="investors" style="margin-left:50px">
				   <div class="row">
					   <div class="col-md-4">
						   <?php
										   
							include('../connect.php');  
							$sql = $con->prepare("SELECT * FROM investor WHERE nationalid=$investorid");
							$sql->execute();
							$rows = $sql->fetchAll();

							foreach($rows as $pat)
							{

						  ?>
						   <div class="thumbnail">
							  <img src="layouts/images/investor.jpg" alt="...">
							  <div class="caption">
								<h3><?php echo $pat["Fname"] . ' ' .  $pat["Lname"]; ?></h3>
								<span style="margin-right:3px" class="budget">Gender: <span><?php echo $pat["Gender"]; ?></span></span> 
								<span style="margin-right:3px" class="budget">Age: <span><?php echo $pat["Age"]; ?></span></span>   
								<span class="budget">City: <span><?php echo $pat["City"]; ?></span></span>
								<hr> 
								<p class="budget"><span><?php echo $pat["Email"]; ?></span></p> 
								<p class="budget"><span><?php echo "0" . $pat["PhoneNum"]; ?></span></p> 
								<hr> 
								<p class="budget"><span><?php echo $pat["Bio"]; ?></span></p>
								<hr>   
								<a style="width:170px" href="applications.php" class="btn btn-danger"><i class="fa fa-chevron-left"></i> Back</a>   
							  </div>
							</div>
						   <?php  } ?>
					   </div>   
				   </div>
		   </div>
	   
	   
	   <?php }elseif($do == "Chat"){
	   
	   
	   $investorid = isset($_GET['investorid']) && is_numeric($_GET['investorid']) ? intval($_GET['investorid']) : 0;
	
	
	  //$_SESSION["investorid"] = $investorid;
	   
	   
	   ?>
	   
	   <div class="" style="padding-left:30px;margin-top:0">
			<a style="text-decoration:none;padding-top:0" href="applications.php"><i class="fa fa-chevron-left fa-2x" style="color:#B75E21;margin-right:30px"></i></a>
		</div>
	   <!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="elements  row" style="margin-left:190px">
					<div class="col-md-8 profile widget-shadow chat-mdl-grid" style="width: 610px">
						
						<?php
										   
						include('../connect.php');  
						$sql = $con->prepare("SELECT Fname FROM investor WHERE nationalid=$investorid");
						$sql->execute();
						$rows = $sql->fetchAll();

						foreach($rows as $pat)
						{

					  ?>
						<h4 class="title3"><?php echo $pat["Fname"]; ?></h4>
						<?php } ?>
						<div class="scrollbar scrollbar1">
							<!--<div class="activity-row activity-row1 activity-right">
								<div class="col-xs-3 activity-img"><img src="layouts/images/avatar.jpeg" width="40px" height="40px" class="img-responsive" alt=""></div>
								<div class="col-xs-9 activity-img1">
									<div class="activity-desc-sub">
										<p>Hello ! Lorem ipsum dolor sit</p>
										<span>10:00 PM</span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>-->
							<?php 
	
						include('../connect.php');		
									
						if(isset($_POST["submit"])){
						
						
						 $message = $_POST["message"];
						 $dat = date("y-m-d");	
					
											
					    $sql = "INSERT INTO messages (Content , creator_ID , opposer , date) VALUES ('$message', '$id' , '$investorid' , '$dat')"; 		
						
                        $con->exec($sql);
							

                        $con=null;
					
						
						}
									
										
						?>
							
							
							<?php
										   
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM messages");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{
									
									if($pat["investor_ID"] == $investorid && $pat["opposer"] == $id){

							  ?>
							
							 <div class="activity-row activity-row1 activity-right">
								<div class="col-xs-3 activity-img"><img src="layouts/images/avatar.jpeg" width="40px" height="40px" class="img-responsive" alt=""></div>
								<div class="col-xs-9 activity-img1">
									<div class="activity-desc-sub">
										<p><?php echo $pat["Content"]; ?></p>
										<span><?php echo $pat["date"]; ?></span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							
							<?php }elseif($pat["creator_ID"] == $id && $pat["opposer"] == $investorid){ ?>
							
							
							<div class="activity-row activity-row1 activity-left">
								<div class="col-xs-9 activity-img2">
									<div class="activity-desc-sub1">
										<p><?php echo $pat["Content"]; ?></p>
										<span class="right"><?php echo $pat["date"]; ?></span>
									</div>
								</div>
								<div class="col-xs-3 activity-img"><img src="layouts/images/avatar.jpeg" width="40px" height="40px" class="img-responsive" alt=""></div>
								<div class="clearfix"> </div>
							</div>
							
							
							<?php } ?>
								
							<?php  } ?>
							
							
							
						</div>
						<div class="chat-bottom">
							<form method="post">
								<input type="text" style="width:490px" name="message" placeholder="Message" required="">
								<button style="background-color:#FFF;border: none;color:#6164C1;display:inline=flex;font-size:20px;background-color:#E7E7E7;padding:4px;border-radius:50%;margin-left:7px;width:40px;height:40px;line-height:1.2;margin-bottom:5px" type="submit" name="submit" class="btn btn-outline-primary"><i class="fa fa-chevron-up"></i></button>
							</form>
						</div>
					</div>
					<div class="clearfix"> </div>	
				</div>
			</div>
		</div>
	   
	   
	   <?php }elseif($do == "Idea"){
	   
	   
	   $ideaid = isset($_GET['ideaid']) && is_numeric($_GET['ideaid']) ? intval($_GET['ideaid']) : 0;
	   
	   
	   ?>
	   
	    <div class="idea_detail" style="margin-left:20px;margin-top:5px;padding-top:0;height:500px">
			<div class="row">
				 <div class="col-md-1" style="padding-left:30px;margin-top:0">
					<a style="text-decoration:none" href="applications.php"><i class="fa fa-chevron-left fa-2x" style="color:#B75E21"></i></a>
				</div>
				<?php
										   
					include('../connect.php');  
					$sql = $con->prepare("SELECT ideas.* , category.category_name , tags.tag_name FROM ideas INNER JOIN category ON category.category_id = ideas.idea_category_id INNER JOIN tags ON tags.tag_name = ideas.idea_tag_id WHERE ideas_ID=$ideaid");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				  ?>
				<div class="col-md-4">
					<!--<img class="img-responsive" src="../layouts/images/restaurant.jpeg">-->
					 <img class="img-responsive" src="data:image;base64,<?php echo $pat["image"]; ?>" alt="...">
				</div>
				<div class="col-md-6 details">
					<h3 style="color:#D68910"><?php echo $pat["title"]; ?></h3>
					<h4 style="color:#D68910">By <?php echo $Fname; ?></h4>
					<p><?php echo $pat["idea_description"]; ?></p>
					<p>Category:<span style="color:#D68910"><?php echo $pat["category_name"]; ?></span></p>
					<p>Tag:<span style="color:#D68910"> <?php echo $pat["tag_name"]; ?></span></p>
					
					<p>Raised Amount:<span style="color:#D68910"> <?php echo $pat["Raised_money"] . " R"; ?></span></p>
					<p>Budget Amount:<span style="color:#D68910"> <?php echo $pat["Budget"] . " R"; ?></span></p>
					<p>Current Investors:<span style="color:#D68910"> <?php echo $pat["Current_investors"]; ?> </span></p>
					<p>Expired Date:<span style="color:#D68910"><?php echo $pat["expiredDate"]; ?></span></p>
					<p>Status:<span style="color:#D68910"> <?php echo $pat["Status"]; ?></span></p>
					
				</div>
				<?php } ?>
			</div>
     </div>
	   
	   
	   <?php }elseif($do == "Delete"){ 
	   
	   
	  $appid = isset($_GET['investorid']) && is_numeric($_GET['investorid']) ? intval($_GET['investorid']) : 0;
	
	     include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM  applications WHERE id= ?");
		 $stmt->execute(array($appid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM applications WHERE id = :id");

				$stmt->bindParam(":id" , $appid);

				$stmt->execute();

				echo '<div style="margin-left:20px" class="alert alert-info">Your Application Has Been Deleted Successfully
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				</div>'; ?>
	   
	   

  <div class="inner-block" style="margin-top:0;padding-top:0;height:800px">
    <div class="inbox">
		  <i class="fa fa-envelope fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">My Applications Lists</h2>
		  </div>
		
		<div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
									  <th>Idea Title</th>	
									  <th>Investor</th>	
									  <th>Status</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>
								  <?php
										   
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										   applications.* , ideas.title
									   FROM
										  applications
									   INNER JOIN
										  ideas
										
									   ON
										  applications.idea_id = ideas.ideas_ID
										  

									   WHERE applications.creator_id=$id");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								  ?>
                                <tr>
                                  <td><?php echo $pat["id"]; ?></td>
								  <td><a href="applications.php?do=Idea&ideaid=<?php echo $pat["idea_id"]; ?>" style="text-decoration:none;color:#515A5A"><?php echo $pat["title"]; ?></a></td>
								  <td><a href="applications.php?do=Investor&investorid=<?php echo $pat["investor_id"]; ?>" style="text-decoration:none;color:#515A5A"><?php echo $pat["investor_id"]; ?></a></td>
								  <td><?php echo $pat["status"]; ?></td>	
								  <td>
									  <?php if($pat["status"] == "Accepted"){ ?>
									  	<a href="applications.php?do=Chat&investorid=<?php echo $pat["investor_id"]; ?>" class="btn btn-danger" style="background-color:#FFF;color:#D68910;width:100px"><i class="fa fa-comments-o"></i> Chat</a>
									  <?php  }elseif($pat["status"] == "Rejected"){ ?>
									  	<a onclick="return confirm('Are You Sure?');"  href="applications.php?do=Delete&investorid=<?php echo $pat["id"]; ?>" class="btn btn-danger" style="background-color:#FFF;color:#D68910;width:100px"><i class="fa fa-trash"></i> Delete</a>
									  <?php }elseif($pat["status"] == "Pending"){ ?>
									  	<a onclick="return confirm('Are You Sure?');"  href="applications.php?do=Delete&investorid=<?php echo $pat["id"]; ?>" class="btn btn-danger" style="background-color:#FFF;color:#D68910;width:100px"><i class="fa fa-close"></i> Cancel</a>
									  <?php } ?>
								  </td>		
                              </tr>
								<?php } ?>  
                             
                          </tbody>
                      </table>
      </div>
    	
          <div class="clearfix"> </div>     
   </div>
</div>
				
				
				
			<?php }else{
				
				echo "<div class='alert alert-danger'>This Application Is Not Found</div>";
				
				
			}
	   
	   
	   
	   
	    } ?>
	   
     </div>
</div>
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		    <a style="height:200px"  href="../homepage.php"><img id="logo" src="layouts/images/logo.jpg" width="66%" height="70px" style="margin-top:10px;margin-left:16px;margin-top:16px" alt="Logo"/></a>
		    <hr style="border-bottom:2px solid #000;margin-bottom:0">
		    <div class="menu">
		      <ul id="menu" >
		        <li><a href="profile.php"><i class="fa fa-user"></i><span>My Account Information</span></a></li>
		        <li><a href="ideas.php"><i class="fa fa-lightbulb-o"></i><span>Ideas</span></a></li>
		        <li><a href="requisition.php"><i class="fa fa-envelope-o"></i><span>My Requisition Lists</span></a></li>
				  <li class="activ"><a href="applications.php"><i class="fa fa-envelope"></i><span>My Application Lists</span></a></li>
				  <li><a href="../homepage.php"><i class="fa fa-home"></i><span>My Home Page</span></a></li>
				  <li><a href="chat.php"><i class="fa fa-comments"></i><span>Chat</span></a></li>
				  <li><a href="../logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
		      </ul>
		    </div>
	 </div>	
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<!--scrolling js-->
		<script src="layouts/js/jquery.nicescroll.js"></script>
		<script src="layouts/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="layouts/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
