<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';


session_start();
if(!(isset($_SESSION['Password']))){
	
	header('Location:../login.php');
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="layouts/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="layouts/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="layouts/css/font-awesome.css" rel="stylesheet"> 
<link href="layouts/css/daterangepicker.css" rel="stylesheet">	
<!-- //font-awesome icons -->
 <!-- js-->
<script src="layouts/js/jquery-1.11.1.min.js"></script>
<script src="layouts/js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="layouts/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="layouts/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="layouts/js/metisMenu.min.js"></script>
<script src="layouts/js/custom.js"></script>
<link href="layouts/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="need_cases.php"><i class="fa fa-user nav_icon"></i>Need Cases</a>
						</li>
						<li class="">
							<a href="requests.php"><i class="fa fa-book nav_icon"></i>Donnation Requests</a>
						</li>
						<li>
							<a href="users.php"><i class="fa fa-users nav_icon"></i>Registered Users</a>
						</li>
						<li>
							<a href="messages.php"><i class="fa fa-comments nav_icon"></i>Messages Users</a>
						</li>
						<li>
							<a href="food.php"><i class="fa fa-shopping-cart nav_icon"></i>Food Basket </a>
						</li>
						<li>
							<a href="voluntary.php"><i class="fa fa-file-text-o nav_icon"></i>Voluntaryism Events</a>
						</li>
						<li>
							<a href="participations.php"><i class="fa fa-share nav_icon"></i>Participations</a>
						</li>
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section" style="height: 80px; z-index: 9999;box-shadow: none">
			<div class="header-left">
				<div style="margin:10px;margin-left:80px;margin-top:25px">
					<img class="img-responsive" src="layouts/images/alber1.jpg" width="120px; height: 60px">
				</div>
			</div>
			<div class="header-right">
				
				
			<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img" style='margin-top:13px;'>	
									 
									<div class="user-name">
										<p style="font-family:cursive; color:#333;">Hi, admin</p>
									</div>
									<i class="fa fa-angle-down lnr" style='margin-top:7px;'></i>
									<i class="fa fa-angle-up lnr" style='margin-top:7px;'></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
							
								<li> <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				</div>
				
				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			
					
				<?php if($do == "Manage"){ ?>
				
				<?php if($do != "Accepted"){ ?>
				
				
				<div class="pull-right">
					
					<a href="requests.php?do=Accepted" style="display:inline;margin-top:34px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000" class="btn btn-info"><i class="fa fa-eye"></i> Show Donnation Requests Accepted</a>
				</div>
				
				
				<?php  } ?>
				
				
				<div class="tables">
					<h3 style="color:#fff;" class="title1">Donnation Requests</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Donnation Requests Management:</h4>
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Donor Name</th>
									<th>Donnation Type</th>
									<!--<th>Need Case Name</th>-->
									<th>Details</th>
									<th>Control</th>
								</tr>
							</thead>
							<tbody>
								<?php
										   
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										   *
									   FROM
										  requests
									  
										  

									   WHERE state=0");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								  ?>
								<tr class="active">
									<th scope="row"><?php echo $pat["request_id"]; ?></th>
									<td><?php echo $pat["Donor_name"]; ?></td>
									<td><?php  echo $pat["type"]; ?></td>
									<td><?php  echo $pat["description"]; ?></td>
									<td>
										<a style="background: #FFF; color:#333" href="requests.php?do=Detail&needid=<?php echo $pat["request_id"]; ?>" class="btn btn-info"><i class="fa fa-eye"></i> Show Details</a>
									</td>
									<td>
										<a onclick="return confirm('Are You Sure?');"  style="background: #FFF; color:#333" href="requests.php?do=Response&needid=<?php echo $pat["request_id"]; ?>" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Accept</a>
										<a onclick="return confirm('Are You Sure?');"  style="background: #FFF; color:#333" href="requests.php?do=Delete&needid=<?php echo $pat["request_id"]; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Reject</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				<?php }elseif($do == "Accepted"){ ?>
				
				
				<div class="tables">
					
					<h3 style="color:#fff;" class="title1">Donnation Accepted</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Donnation Accepted Management:</h4>
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Donor Name</th>
									<th>Donnation Type</th>
									
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
								<?php
										   
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										   *
									   FROM
										  requests
									   

									   WHERE state=1");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								  ?>
								<tr>
									<th scope="row"><?php echo $pat["request_id"];  ?></th>
									<td><?php echo $pat["Donor_name"];  ?></td>
									<td><?php echo $pat["type"];  ?></td>
									<td></td>
									<td>
										<a style="background: #FFF; color:#333" href="requests.php?do=Detail&needid=<?php echo $pat["request_id"];  ?>" class="btn btn-info"><i class="fa fa-eye"></i> Show Details</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "Response"){
				
				
				
		     $id = isset($_GET['needid']) && is_numeric($_GET['needid']) ? intval($_GET['needid']) : 0;

			 include('../connect.php');  						  
			 $stmt = $con->prepare("SELECT * FROM requests WHERE request_id= ?");
			 $stmt->execute(array($id));
			 $row = $stmt->fetch();
			 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("UPDATE requests SET state = 1 WHERE request_id = :requestid");

				$stmt->bindParam(":requestid" , $id);

				$stmt->execute();
				
			
			
										   
				//include('../connect.php');  
				$sql = $con->prepare("SELECT
					   * 
				   FROM
					  requests
				


				   WHERE request_id=$id");
				$sql->execute();
				$rows = $sql->fetchAll();

				foreach($rows as $pat)
				{

			  ?>
				

				
				
				
				<div class="inbox-page row">
					<h3 style="color:#fff; margin-bottom:10px;">Response On Donnation Requests</h3>
					<div class="inbox-row widget-shadow">
						<!--<div class="mail mail-name"><h6> Ali</h6></div>-->
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapsenine">
							<div class="mail" style="margin-left:250px"><p> <?php echo $pat["type"]; ?></p></div>
						</a>
						<div class="mail-right">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
											<i class="fa fa-reply mail-icon"></i>
											Response
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="clearfix"> </div>
						<div>
							<div class="mail-body">
								<p><?php echo $pat["description"]; ?></p>
								<form action="?do=Add_response" method="post">
									<input style="width:330px" name="requestid" type="hidden" value="<?php echo $id; ?>">
									<input style="width:330px;border:none;border-bottom:1px solid #CCC"name="date" type="date" placeholder="Date" required="">
									<input style="width:280px;margin-left:10px;border:none;border-bottom:1px solid #CCC" type="time" placeholder="Time" name="time" required="">
									<div class="mail-right"><p><?php echo date("y-m-d"); ?></p></div>
									<input style="color:#FFC923" type="submit" value="Send The Response">
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<?php }} ?>
				
				
				<?php }elseif($do == "Add_response"){
	
	
	
	            if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			include('../connect.php');
			//Get Varaiables from Post Method
			
			$id = $_POST["requestid"];
			$date = $_POST["date"];   
			$time = $_POST["time"];   
			
			
			
			$formErrors = array();
			
			if(empty($date)){
				
				$formErrors[] = "Date Can not Be Empty";
				
			}
			   
			 if(empty($time)){
				
				$formErrors[] = "Time Can not Be Empty";
				
			}
			   
			
			
			if(empty($formErrors)){
				

					$stmt = $con->prepare("INSERT INTO response(reponse_date , reponse_time , request_id) VALUES(:reponse_date , :reponse_time , :id)");

					$stmt->execute(array(

						'reponse_date' => $date,
						'reponse_time' => $time,
						'id' => $id
						
					));
				
				
				  
				$sql = $con->prepare("SELECT
					   *
				   FROM
					  requests
				  


				   WHERE request_id=$id");
				$sql->execute();
				$rows = $sql->fetchAll();

				foreach($rows as $pat)
				{



					// echo success message

					echo '<div style="margin-left:20px" class="alert alert-info">Response On Request Added Successfuly
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="inbox-page row">
					<h3 style="color:#fff; margin-bottom:10px;">Response On Donnation Requests</h3>
					<div class="inbox-row widget-shadow">
						<!--<div class="mail mail-name"><h6> Ali</h6></div>-->
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapsenine">
							<div class="mail" style="margin-left:250px"><p> ' .  $pat["type"] . '</p></div>
						</a>
						<div class="mail-right">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
											<i class="fa fa-reply mail-icon"></i>
											Response
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="clearfix"> </div>
						<div>
							<div class="mail-body">
								<p>' . $pat["description"] . '</p>
								<form action="?do=Add_response" method="post">
									<input style="width:330px" name="requestid" type="hidden" value="' . $id . '">
									<input style="width:330px;border:none;border-bottom:1px solid #CCC" name="date" type="date" placeholder="Date" required="">
									<input style="width:280px;margin-left:10px;border:none;border-bottom:1px solid #CCC" type="time" placeholder="Time" name="time" required="">
									<div class="mail-right"><p>' . date("y-m-d") . '</p></div>
									<input style="color:#FFC923" type="submit" value="Send The Response">
								</form>
							</div>
						</div>
					</div>
				</div>';
					
				}
				
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>You can not This Browse</div>";
			
		}
	
	
	
	
				
				
				
				 }elseif($do == "Detail"){
				
				$requestid = isset($_GET['needid']) && is_numeric($_GET['needid']) ? intval($_GET['needid']) : 0;
			
										   
				include('../connect.php');  
				$sql = $con->prepare("SELECT
					   requests.* , cases.case_name , cases.description AS name
				   FROM
					  requests
				   INNER JOIN cases ON requests.case_id = cases.case_ID

				   WHERE requests.request_id=$requestid");
				$sql->execute();
				$rows = $sql->fetchAll();

				foreach($rows as $pat)
				{

			  ?>
	            
				
				<div class="inbox-page row">
					<h3 style="color:#fff; margin-bottom:10px;">Donation Request Details</h3>
					<div class="inbox-row widget-shadow">
						<div class="mail mail-name" style="font-weight:bold;width:150px;color:#FFC923">Donor Name:<h6 style="font-weight:bold;display:inline"><?php echo $pat["Donor_name"]; ?></h6></div>
						<a class="pull-right" style="font-weight:bold" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapsenine">
							<div style="color:#FFC923">Donnation Type:<p style="display:inline"> <?php echo $pat["type"]; ?></p></div>
						</a>
						<div class="clearfix"> </div>
						<div>
							<div class="mail-body" style="height:320px;font-weight:bold">
								<p><span style="color:#FFC923">Donnation Details: </span><?php echo $pat["description"]; ?></p>
								<div style="margin-top:10px;color:#FFC923;width:100%" class="pull-left">Donation Request Date: <p style="display:inline"> <?php echo $pat["donation_date"]; ?></p></div>
								
								<!--<div style="margin-top:10px;color:#FFC923;width:100%" class="pull-left">Donor Address: <p style="display:inline"> </p></div>-->
								
								<div style="margin-top:10px;color:#FFC923;width:100%" class="pull-left">Need Case Name: <p style="display:inline"><?php echo $pat["case_name"]; ?> </p></div>
								
								<div style="margin-top:10px;color:#FFC923;width:100%" class="pull-left">Need Case Description: <p style="display:inline"> <?php echo $pat["name"]; ?></p></div>
								
								<div class="butt" style="margin-top:180px;margin-left:200px">
									
									<?php if($pat["state"]== 0){ ?>
									
										<a onclick="return confirm('Are You Sure?');"  style="background: #FFF; color:#333;margin-right:20px" href="requests.php?do=Response&needid=<?php echo $pat["request_id"]; ?>" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Accept</a>
										<a onclick="return confirm('Are You Sure?');"  style="background: #FFF; color:#333;margin-right:20px" href="requests.php?do=Delete&needid=<?php echo $pat["request_id"]; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Reject</a>
									
									<?php } ?>

									<a style="background: #FFF; color:#333" href="requests.php" class="btn btn-danger"><i class="fa fa-sign-out"></i> Back</a>
								</div>
								<!--<form>
									<input style="width:330px" type="text" placeholder="Date" required="">
									<input style="width:280px;margin-left:10px" type="text" placeholder="Time" required="">
									<div class="mail-right"><p>29 Dec</p></div>
									<input type="submit" value="Send The Response">
								</form>-->
							</div>
						</div>
					</div>
				</div>
				
				<?php  } ?>
				
				
				<?php }elseif($do == "Delete"){
				
	
	
			 $id = isset($_GET['needid']) && is_numeric($_GET['needid']) ? intval($_GET['needid']) : 0;

			 include('../connect.php');  						  
			 $stmt = $con->prepare("SELECT * FROM requests WHERE request_id= ?");
			 $stmt->execute(array($id));
			 $row = $stmt->fetch();
			 $count = $stmt->rowCount();

			if($count > 0){

				/*$stmt = $con->prepare("DELETE FROM requests WHERE request_id = :requestid");

				$stmt->bindParam(":requestid" , $id);

				$stmt->execute();*/
				
				
				$stmt = $con->prepare("UPDATE requests SET state = 2 WHERE request_id = :requestid");

				$stmt->bindParam(":requestid" , $id);

				$stmt->execute();

				
				
				echo '<div class="alert alert-info">Donnation Request Deleted Successfuly
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
				
				
				echo '<div class="tables">
					<h3 class="title1">Donnation Requests</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Donnation Requests Management:</h4>
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Donor Name</th>
									<th>Donnation Type</th>
									
									<th>Details</th>
									<th>Control</th>
								</tr>
							</thead>
							<tbody>';
								
										   
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										   *
									   FROM
										  requests
									 
									   WHERE state=0");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								
								echo '<tr class="active">
									<th scope="row">' . $pat["request_id"] . '</th>
									<td>' . $pat["Donor_name"] . '</td>
									<td>' . $pat["type"] . '</td>
									<td>' . $pat["description"] . '</td>
									<td>
										<a style="background: #FFF; color:#333" href="requests.php?do=Detail&needid=' . $pat["request_id"] . '" class="btn btn-info"><i class="fa fa-eye"></i> Show Details</a>
									</td>
									<td>
										<a style="background: #FFF; color:#333" href="requests.php?do=Response&needid=' . $pat["request_id"] . '" class="btn btn-info confirm"><i class="glyphicon glyphicon-ok"></i> Accept</a>
										<a onclick="return confirm(\'Are You Sure?\');"  style="background: #FFF; color:#333" href="requests.php?do=Delete&needid=' . $pat["request_id"] . '" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Reject</a>
									</td>
								</tr>';
								} 
								
							echo '</tbody>
						</table> 
					</div>
				</div>';
				
				}else{
				
				echo "<div class='alert alert-danger'>You Can not Browse This Page</div>";
				
				
			}
				
				
				 } ?>
				
				
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2021 All Rights Reserved <a href="alber.php" target="_blank">ALBER CHARITY</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="layouts/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="layouts/js/jquery.nicescroll.js"></script>
	<script src="layouts/js/scripts.js"></script>
	<script src="layouts/js/moment.min.js"></script>
	<script src="layouts/js/daterangepicker.js"></script>
	<script src="layouts/js/global.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="layouts/js/bootstrap.js"> </script>
</body>
</html>