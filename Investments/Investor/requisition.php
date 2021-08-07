<?php  

$do = isset($_GET['do'])?  $_GET['do'] : "Requisition";


session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login.php');


}

$id = $_SESSION['investorid'];

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
							 $stmt = $con->prepare("SELECT * FROM applications WHERE read_activity= ? AND investor_id= ?");
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
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="requisition.php?do=Show_request&creatorid=1">
												<div class="user_img"><img src="layouts/images/avatar.jpeg" width="60px" height="50px" style="border-radius:50%" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="requisition.php?do=Show_request&creatorid=1">
												<div class="user_img"><img src="layouts/images/avatar.jpeg" width="60px" height="50px" style="border-radius:50%" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="requisition.php?do=Show_request&creatorid=1">
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
							</div>-->
							 <!--<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="layouts/images/avatar.jpeg" width="50px" height="50px" style="border-radius:50%" alt=""> </span> 
												<div class="user-name">
													<p>Osama</p>
													<span>Investor</span>
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
	   
	   <?php if($do == "Requisition"){  ?>
	   

  <div class="inner-block" style="margin-top:0;padding-top:30px;height:800px">
    <div class="inbox">
		  <i class="fa fa-envelope-o fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">My Requisition Lists</h2>
		  </div>
		
		      <div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
									  <th>Creator</th>	
									  <th>Idea Title</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>
								  <?php
										   
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										    applications.* , ideas.title  , ideas.ideas_ID , creator.Fname
									   FROM
										   applications
									    JOIN
										  ideas
										
									   ON
										   applications.idea_id = ideas.ideas_ID
										   
										    
										 JOIN
										  creator
										
									   ON
										   applications.creator_id = creator.nationalid 
										  

									   WHERE  applications.investor_id=$id AND  applications.read_activity =0");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								  ?>
                                <tr>
                                  <td><?php echo $pat["id"]; ?></td>
								  <td><?php echo $pat["Fname"]; ?></td>
								  <td><a href="requisition.php?do=Idea&ideaid=<?php echo $pat["idea_id"]; ?>" style="text-decoration:none;color:#515A5A"><?php echo $pat["title"]; ?></a></td>	
								  <td>
									  <a style="background-color:#FFF;color:#D68910;border:1px solid #D68910" href="requisition.php?do=Chat&requestid=<?php echo $pat["id"]; ?>&creatorid=<?php echo $pat["creator_id"]; ?>" class="btn btn-primary"><i class="fa fa-check"></i> Accept</a>
									  <a onclick="return confirm('Are You Sure?');" style="background-color:#FFF;color:#D68910;border:1px solid #D68910" href="requisition.php?do=Delete&requestid=<?php echo $pat["id"]; ?>" class="btn btn-primary"><i class="fa fa-close"></i> Reject</a>
								  </td>		
                              </tr>
                              <?php } ?>
                          </tbody>
                      </table>
      </div>
			  
		  </div>
    	
          <div class="clearfix"> </div>     
   </div>

	
		<?php }elseif($do == "Idea"){
	   
	   
	   $ideaid = isset($_GET['ideaid']) && is_numeric($_GET['ideaid']) ? intval($_GET['ideaid']) : 0;
	   
	   
	   ?>
	   
	    <div class="idea_detail" style="margin-left:50px;margin-top:5px;padding-top:0;height:500px">
			<div class="row">
				<div class="col-md-1" style="padding-left:20px;margin-top:0">
					<a style="text-decoration:none;padding-top:0" href="requisition.php"><i class="fa fa-chevron-left fa-2x" style="color:#B75E21;margin-right:30px"></i></a>
				</div>
				<?php
										   
					include('../connect.php');  
					$sql = $con->prepare("SELECT ideas.* , creator.Fname FROM ideas INNER JOIN creator ON ideas.creator_ID = creator.nationalid WHERE ideas_ID=$ideaid");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				  ?>
				<div class="col-md-4">
					<img class="img-responsive" src="data:image;base64,<?php echo $pat["image"]; ?>" alt="...">
				</div>
				<div class="col-md-6 details">
					<h3 style="color:#D68910"><?php echo $pat["title"]; ?></h3>
					<h4 style="color:#D68910">By <?php echo $pat["Fname"]; ?></h4>
					<p><?php echo $pat["idea_description"]; ?></p>
					<p>Category:<span style="color:#D68910"> <?php echo $pat["idea_category_id"]; ?></span></p>
					<p>Tag:<span style="color:#D68910"> <?php echo $pat["idea_tag_id"]; ?></span></p>
					
					<p>Raised Amount:<span style="color:#D68910"> <?php echo $pat["Raised_money"] . " R"; ?></span></p>
					<p>Budget Amount:<span style="color:#D68910"> <?php echo $pat["Budget"] . " R"; ?></span></p>
					<p>Current Investors:<span style="color:#D68910"> <?php echo $pat["Current_investors"]; ?> </span></p>
					<p>Expired Date:<span style="color:#D68910"> <?php echo $pat["expiredDate"]; ?></span></p>
					<p>Status:<span style="color:#D68910"> <?php echo $pat["Status"]; ?></span></p>
					
				</div>
				<?php } ?>
			</div>
     </div>
	   
	   <?php }elseif($do == "Chat"){
	   
	   
	    $requestid = isset($_GET['requestid']) && is_numeric($_GET['requestid']) ? intval($_GET['requestid']) : 0;
	
	   $creatorid = isset($_GET['creatorid']) && is_numeric($_GET['creatorid']) ? intval($_GET['creatorid']) : 0;
	
	
	   //$_SESSION["investorid"] = $investorid;
	
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM  applications WHERE id= ?");
		 $stmt->execute(array($requestid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("UPDATE applications SET acceptance = 1 , read_activity = 1 , status = 'Accepted'
 WHERE id = ?");

				$stmt->execute(array($requestid));
				
			}else{
				
				echo "<div class='alert alert-danger'></div>";
				
			}
	   
	   
	   
	   
	   ?>
	   
	   <div class="" style="padding-left:30px;margin-top:0">
			<a style="text-decoration:none;padding-top:0" href="requisition.php"><i class="fa fa-chevron-left fa-2x" style="color:#B75E21;margin-right:30px"></i></a>
		</div>
	   <!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="elements  row" style="margin-left:190px">
					<div class="col-md-8 profile widget-shadow chat-mdl-grid" style="width: 610px">
						<?php
										   
						include('../connect.php');  
						$sql = $con->prepare("SELECT Fname FROM creator WHERE nationalid=$creatorid");
						$sql->execute();
						$rows = $sql->fetchAll();

						foreach($rows as $pat)
						{

					  ?>
						<h4 class="title3"><?php echo $pat["Fname"]; ?></h4>
						<?php } ?>
						<div class="scrollbar scrollbar1">
							
							<?php 
	
						include('../connect.php');		
									
						if(isset($_POST["submit"])){
						
						
						 $message = $_POST["message"];
						 $dat = date("y-m-d");	
					
											
					    $sql = "INSERT INTO messages (Content , investor_ID , opposer , date) VALUES ('$message', '$id' , '$creatorid' , '$dat')"; 		
						
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
									
									if($pat["investor_ID"] == $id && $pat["opposer"] == $creatorid){

							  ?>
							
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
								
							<?php  }elseif($pat["creator_ID"] == $creatorid && $pat["opposer"] == $id){ ?>
							
							
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
							
							
							<?php  } ?>
							
							<?php  } ?>
							
							
							<!--<div class="activity-row activity-row1 activity-left">
								<div class="col-xs-9 activity-img2">
									<div class="activity-desc-sub1">
										<p>What about our next meeting?</p>
										<span class="right">9:55 PM</span>
									</div>
								</div>
								<div class="col-xs-3 activity-img"><img src="layouts/images/avatar.jpeg" width="40px" height="40px" class="img-responsive" alt=""></div>
								<div class="clearfix"> </div>
							</div>-->
							<!--<div class="activity-row activity-row1 activity-left">
								<div class="col-xs-9 activity-img2">
									<div class="activity-desc-sub1">
										<p>Quae sed sequi sint tenetur Atque ea mollitia pariatu </p>
										<span class="right">8:00 PM</span>
									</div>
								</div>
								<div class="col-xs-3 activity-img"><img src="layouts/images/avatar.jpeg" width="40px" height="40px" class="img-responsive" alt=""></div>
								<div class="clearfix"> </div>
							</div>-->
							<!--<div class="activity-row activity-row1 activity-left">
								<div class="col-xs-9 activity-img2">
									<div class="activity-desc-sub1">
										<p>Quae sed sequi sint tenetur Atque ea mollitia pariatu </p>
										<span class="right">7:00 PM</span>
									</div>
								</div>
								<div class="col-xs-3 activity-img"><img src="layouts/images/avatar.jpeg" width="40px" height="40px" class="img-responsive" alt=""></div>
								<div class="clearfix"> </div>
							</div>-->
						</div>
						<div class="chat-bottom">
							<form method="post">
								<input type="text" name="message" style="width:490px" placeholder="Message" required="">
								<button style="background-color:#FFF;border: none;color:#6164C1;display:inline=flex;font-size:20px;background-color:#E7E7E7;padding:4px;border-radius:50%;margin-left:7px;width:40px;height:40px;line-height:1.2;margin-bottom:5px" type="submit" name="submit" class="btn btn-outline-primary"><i class="fa fa-chevron-up"></i></button>
							</form>
						</div>
					</div>
					<div class="clearfix"> </div>	
				</div>
			</div>
		</div>
	   
	
	   <?php }elseif($do == "Send_request"){ ?>
	   
	   
	<h1 class="text-center">Send Request To Creator</h1>	
	<div class="login-page">
    <div class="login-main">  	
			<div class="login-block">
				<form action="?do=Insert" method="post">
					<textarea class="form-control" style="width:365px;height:250px;resize:none;margin-bottom:30px" placeholder="Type Your Message"></textarea>
					<input type="submit" name="create" value="Send Request">
				</form>
			</div>
      </div>
</div>
	   
	   <?php }elseif($do == "Insert"){ ?>
	
	
	
	   
	   
	  <?php }elseif($do == "Delete"){
		
		
          $requestid = isset($_GET['requestid']) && is_numeric($_GET['requestid']) ? intval($_GET['requestid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM  applications WHERE id= ?");
		 $stmt->execute(array($requestid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				//$stmt = $con->prepare("UPDATE requests SET acceptance = 0 AND read_activity = 1 WHERE id = ?");

				//$stmt->execute(array($requestid));
				
				
				/*$stmtT = $con->prepare("DELETE FROM  applications WHERE id = ?");

				$stmtT->execute(array($requestid));*/
				
				
				$stmt = $con->prepare("UPDATE applications SET read_activity = 1 , status = 'Rejected'
 WHERE id = ?");

				$stmt->execute(array($requestid));
				

				echo '<div style="margin-left:20px" class="alert alert-success">Creator Rejected Successfully
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				</div>';
				echo ' <div class="inner-block" style="margin-top:0;padding-top:30px;height:800px">
    <div class="inbox">
		  <i class="fa fa-envelope-o fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">My Requisition Lists</h2>
		  </div>
		
		      <div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
									  <th>Creator</th>	
									  <th>Idea Title</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>';
								 
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										    applications.* , ideas.title  , ideas.ideas_ID , creator.Fname
									   FROM
										   applications
									    JOIN
										  ideas
										
									   ON
										   applications.idea_id = ideas.ideas_ID
										   
										    
										 JOIN
										  creator
										
									   ON
										   applications.creator_id = creator.nationalid 
										  

									   WHERE  applications.investor_id=$id AND  applications.read_activity =0");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								
                                echo '<tr>
                                  <td>' . $pat["id"] . '</td>
								  <td>' . $pat["Fname"]  .'</td>
								  <td><a href="requisition.php?do=Idea&ideaid=' . $pat["idea_id"] . '" style="text-decoration:none;color:#515A5A">' . $pat["title"] . '</a></td>	
								  <td>
									  <a style="background-color:#FFF;color:#D68910;border:1px solid #D68910" href="requisition.php?do=Chat&requestid=' . $pat["id"] . '&creatorid=' . $pat["creator_id"] . '" class="btn btn-primary"><i class="fa fa-check"></i> Accept</a>
									  <a onclick="return confirm(\'Are You Sure?\');" style="background-color:#FFF;color:#D68910;border:1px solid #D68910" href="requisition.php?do=Delete&requestid=' . $pat["id"] . '" class="btn btn-primary"><i class="fa fa-close"></i> Reject</a>
								  </td>		
                              </tr>';
                               }
                          echo '</tbody>
                      </table>
      </div>
			  
		  </div>
    	
          <div class="clearfix"> </div>     
   </div>';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>This Investor Not Found</div>";
				
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
		        <li><a href="interests.php"><i class="fa fa-heart-o"></i><span>Interests</span></a></li>
		        <li class="activ"><a href="requisition.php"><i class="fa fa-envelope-o"></i><span>My Requisition Lists</span></a></li>
				  <li><a href="applications.php"><i class="fa fa-envelope"></i><span>My Application Lists</span></a></li>
				  <li><a href="../homepage.php"><i class="fa fa-home"></i><span>My Home Page</span></a></li>
				  <li><a href="chat.php"><i class="fa fa-comments"></i><span>Chats</span></a></li>
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


                      
						
