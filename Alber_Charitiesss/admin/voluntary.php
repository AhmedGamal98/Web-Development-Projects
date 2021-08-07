<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';


session_start();
/*if(!(isset($_SESSION['Password']))){
	
	header('Location:../login.php');
}*/


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
				
				<?php if($do != "Add"){ ?>
				
				
				<div class="pull-right">
					<a href="voluntary.php?do=Add" style="display:inline;margin-top:34px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000" class="btn btn-info"><i class="fa fa-plus"></i> Add New Voluntary Event</a>
				</div>
				
				
				<?php  } ?>
				
				<div class="tables">
					<h3 style="color:#fff;" class="title1">Voluntaryism Events</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Voluntaryism Events Management:</h4>
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Location</th>
									<th>Description</th>
									<th>Volunteers</th>
									<th>Date</th>
									<th>Control</th>
								</tr>
							</thead>
							<tbody>
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM  events");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<tr>
									<th scope="row"><?php echo $pat["event_ID"]; ?></th>
									<td><?php echo $pat["Title"]; ?></td>
									<td><?php echo $pat["Location"]; ?></td>
									<td style="width:180px"><?php echo $pat["Description"]; ?></td>
									<td><?php echo $pat["volunteers"]; ?></td>
									<td><?php echo $pat["date"]; ?></td>
									<td>
										<a style="background: #FFF; color:#333" href="voluntary.php?do=Edit&needid=<?php echo $pat["event_ID"]; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
										<a onclick="return confirm('Are You Sure?');" style="background: #FFF; color:#333" href="voluntary.php?do=Delete&needid=<?php echo $pat["event_ID"]; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				<?php }elseif($do == "Add"){ ?>
				
				
				<div class="login-page">
				<h3 class="title1" style="color:#fff;">Add New Voluntary Event</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post" enctype="multipart/form-data">
							<input class="form-control" type="text" class="user" name="title" placeholder="Enter Title Of Voluntary Event" required="">
							
							<textarea name="desc" style="margin-bottom:20px;resize:none;height:200px" class="form-control" placeholder="Enter The Description Of Voluntary Event" required=""></textarea>
							
							<input class="form-control" type="text" class="user" name="location" placeholder="Enter Location Of Voluntary Event Execution" required="">
							
							<input class="form-control" type="text" name="number" placeholder="Enter The Volunteers Numbers">
							
							<input class="form-control" type="date" name="date" placeholder="Enter The Voluntary Event Date">
							
							<input style="margin-top:20px" class="form-control" type="file" name="image" placeholder="Enter The Voluntary Event Photo">
							
							<input type="submit" name="add" style="background-color:#ffc923;" value="Add">
						</form>
					</div>
				</div>
			</div>
				
				
				<?php }elseif($do == "Insert"){ 
	
	
	            if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			include('../connect.php');  	 
			
			$title = $_POST["title"];   
			$desc = $_POST["desc"]; 
			$location = $_POST["location"];   	 
			$number = $_POST["number"];  
			$dat = $_POST["date"];   
			
					
			if(isset($_POST['add'])){
							 
							 
				 if(getimagesize($_FILES['image']['tmp_name']) == FALSE){


					 echo "Please select an image";

				 }else{


					 $image = addslashes($_FILES['image']['tmp_name']);
					 $name = addslashes($_FILES['image']['name']);
					 $image = file_get_contents($image);
					 $image = base64_encode($image);
					 //saveimage($name , $image);


				 }
			 }		
			
			
			$formErrors = array();
			
			if(empty($title)){
				
				$formErrors[] = "Title Can not Be Empty";
				
			}
			   
			 if(empty($desc)){
				
				$formErrors[] = "Description Can not Be Empty";
				
			}
			   
			 if(empty($location)){
				
				$formErrors[] = "Location Can not Be Empty";
				
			} 
			if(empty($number)){
				
				$formErrors[] = "Number Of Volunteers Can not Be Empty";
				
			} 
			if(empty($dat)){
				
				$formErrors[] = "The Voluntary event date Can not Be Empty";
				
			} 		
			
			
			
			if(empty($formErrors)){
				
		
				

					$stmt = $con->prepare("INSERT INTO events(title , Location , Description , volunteers , date , image , name) VALUES(:title , :location , :desc , :number , :date , :image , :name)");

					$stmt->execute(array(

						'title' => $title,
						'location' => $location,
						'desc' => $desc,
						'number' => $number,
						'date' => $dat,
						'image' => $image,
						'name' => $name,
						
					));


					// echo success message

					echo '<div style="margin-left:20px" class="alert alert-info">Voluntary Event Added Successfuly
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="login-page">
				<h3 class="title1" style="color:#fff;">Add New Voluntary Event</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post" enctype="multipart/form-data">
							<input class="form-control" type="text" class="user" name="title" placeholder="Enter Title Of Voluntary Event" required="">
							
							<textarea name="desc" style="margin-bottom:20px;resize:none;height:200px" class="form-control" placeholder="Enter The Description Of Voluntary Event" required=""></textarea>
							
							<input class="form-control" type="text" class="user" name="location" placeholder="Enter Location Of Voluntary Event Execution" required="">
							
							<input class="form-control" type="text" name="number" placeholder="Enter The Volunteers Numbers">
							
							<input class="form-control" type="date" name="date" placeholder="Enter The Voluntary Event Date">
							
							<input style="margin-top:20px" class="form-control" type="file" name="image" placeholder="Enter The Voluntary Event Photo">
							
							<input type="submit" name="add" style="background-color:#ffc923;" value="Add">
						</form>
					</div>
				</div>
			</div>';
					
					
				
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>You can not This Browse</div>";
			
		}      
				
				
				}elseif($do == "Edit"){
				
				
				$id = isset($_GET['needid']) && is_numeric($_GET['needid']) ? intval($_GET['needid']) : 0;
	
	  
				include('../connect.php');  
				$sql = $con->prepare("SELECT * FROM events WHERE event_ID=$id");
				$sql->execute();
				$rows = $sql->fetch();
	            $count = $sql->rowCount();

				if($count > 0)
				{

				
				?>
				
				
				
				<div class="login-page">
				<h3 style="color:#fff;" class="title1">Edit Voluntary Event</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Update" method="post" enctype="multipart/form-data">
							<input class="form-control" type="hidden" class="user" name="eventid" value="<?php echo $id; ?>" required="">
							
							<input class="form-control" type="text" class="user" name="title" value="<?php echo $rows["Title"]; ?>" required="">
							
							<textarea name="desc" style="margin-bottom:20px;resize:none;height:200px" class="form-control" required=""><?php echo $rows["Description"]; ?></textarea>
							
							<input class="form-control" type="text" class="user" name="location" value="<?php echo $rows["Location"]; ?>" required="">
							
							<input class="form-control" type="text" name="number" value="<?php echo $rows["volunteers"]; ?>">
							
							<input class="form-control" type="date" name="date" value="<?php echo $rows["date"]; ?>">
							
							<input style="margin-top:20px" class="form-control" type="file" name="image" placeholder="Enter The Voluntary Event Photo">
							
							<input type="submit" name="update" style="background-color:#ffc923;" value="Update">
						</form>
					</div>
				</div>
			</div>
				
				<?php } ?>
				
				
				<?php }elseif($do == "Update"){
	
	
	             include('../connect.php');  
     	//echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			//Get Varaiables from Post Method
			$id = $_POST["eventid"]; 
			$title = $_POST["title"];   
			$desc = $_POST["desc"]; 
			$location = $_POST["location"];   	 
			$number = $_POST["number"];  
			$dat = $_POST["date"];	 
			
			
			
			
			$formErrors = array();
			
			if(empty($title)){
				
				$formErrors[] = "Title Can not Be Empty";
				
			}
			   
			 if(empty($desc)){
				
				$formErrors[] = "Description Can not Be Empty";
				
			}
			   
			 if(empty($location)){
				
				$formErrors[] = "Location Can not Be Empty";
				
			} 
			if(empty($number)){
				
				$formErrors[] = "Number Of Volunteers Can not Be Empty";
				
			} 
			
			if(empty($dat)){
				
				$formErrors[] = "The Voluntary event date Can not Be Empty";
				
			} 
			
			
			
			//Loop into errors array and echo it
			
			foreach($formErrors as $error){
				
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM events WHERE event_ID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				
				
				echo "<div class='alert alert-info'>" . $error . "
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
				</div>";
				
				echo '<div class="login-page">
				<h3 style="color:#fff;" class="title1">Edit Voluntary Event</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Update" method="post" enctype="multipart/form-data">
							<input class="form-control" type="hidden" class="user" name="eventid" value="' . $id . '" required="">
							
							<input class="form-control" type="text" class="user" name="title" value="' . $row["Title"]. '" required="">
							
							<textarea name="desc" style="margin-bottom:20px;resize:none;height:200px" class="form-control" required="">' . $row["Description"] . '</textarea>
							
							<input class="form-control" type="text" class="user" name="location" value="' . $row["Location"] . '" required="">
							
							<input class="form-control" type="text" name="number" value="' .  $row["volunteers"] . '">
							
							<input class="form-control" type="date" name="date" value="' . $row["date"] . '">
							
							<input style="margin-top:20px" class="form-control" type="file" name="image" placeholder="Enter The Voluntary Event Photo">
							
							<input type="submit" name="update" style="background-color:#ffc923;" value="Update">
						</form>
					</div>
				</div>
			</div>';
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				
				
				if(isset($_POST['update'])){
							 
							 
				 if($_FILES['image']['tmp_name'] == FALSE){


					 $stmt = $con->prepare("UPDATE events SET Title = ?, Description = ? , Location = ? , volunteers = ? , date = ?  WHERE event_ID = ?");
					$stmt->execute(array($title , $desc , $location ,  $number , $dat ,  $id));

				 }else{


					 $image = addslashes($_FILES['image']['tmp_name']);
					 $name = addslashes($_FILES['image']['name']);
					 $image = file_get_contents($image);
					 $image = base64_encode($image);
					 
					 $stmt = $con->prepare("UPDATE events SET Title = ?, Description = ? , Location = ? , volunteers = ? , date = ? , image = ? , name = ?  WHERE event_ID = ?");
					$stmt->execute(array($title , $desc , $location ,  $number , $dat , $image , $name ,  $id));
					 //saveimage($name , $image);


				 }
			 }	
				//Update the Database with this info
				
					
					
					
					
					

					// echo success message
					
					
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM events WHERE event_ID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();

					echo '<div style="margin-left:20px" class="alert alert-info">
					Voluntary Event Updated Successfully
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="login-page">
				<h3 style="color:#fff;" class="title1">Edit Voluntary Event</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Update" method="post" enctype="multipart/form-data">
							<input class="form-control" type="hidden" class="user" name="eventid" value="' . $id . '" required="">
							
							<input class="form-control" type="text" class="user" name="title" value="' . $row["Title"]. '" required="">
							
							<textarea name="desc" style="margin-bottom:20px;resize:none;height:200px" class="form-control" required="">' . $row["Description"] . '</textarea>
							
							<input class="form-control" type="text" class="user" name="location" value="' . $row["Location"] . '" required="">
							
							<input class="form-control" type="text" name="number" value="' .  $row["volunteers"] . '">
							
							<input class="form-control" type="date" name="date" value="' . $row["date"] . '">
							
							<input style="margin-top:20px" class="form-control" type="file" name="image" placeholder="Enter The Voluntary Event Photo">
							
							<input type="submit" name="update" style="background-color:#ffc923;" value="Update">
						</form>
					</div>
				</div>
			</div>';
					
				
				
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>You can not Browse This Page</div>";
			
		}
	
	
				
				
				}elseif($do == "Delete"){
				
		 $id = isset($_GET['needid']) && is_numeric($_GET['needid']) ? intval($_GET['needid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM events WHERE event_ID= ?");
		 $stmt->execute(array($id));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM events WHERE event_ID = :eventid");

				$stmt->bindParam(":eventid" , $id);

				$stmt->execute();

				
				
				echo '<div class="alert alert-info">Voluntary Event Deleted Successfuly
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
			
				   
				  if($do != "Add"){
				
				
				echo '<div class="pull-right">
					<a href="voluntary.php?do=Add" style="display:inline;margin-top:34px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000" class="btn btn-info"><i class="fa fa-plus"></i> Add New Voluntary Event</a>
				</div>';
				
				
				} 
				
				echo '<div class="tables">
					<h3 style="color:#fff;" class="title1">Voluntaryism Events</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Voluntaryism Events Management:</h4>
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Description</th>
									<th>Location</th>
									<th>Volunteers</th>
									<th>Date</th>
									<th>Control</th>
								</tr>
							</thead>
							<tbody>';
								
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM  events");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

								echo '<tr>
									<th scope="row">' . $pat["event_ID"]. '</th>
									<td>' . $pat["Title"] . '</td>
									<td>' . $pat["Location"] . '</td>
									<td style="width:180px">' . $pat["Description"] . '</td>
									<td>' . $pat["volunteers"] . '</td>
									<td>' . $pat["date"] . '</td>
									<td>
										<a style="background: #FFF; color:#333" href="voluntary.php?do=Edit&needid=' . $pat["event_ID"] . '" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
										<a onclick="return confirm(\'Are You Sure?\');" style="background: #FFF; color:#333" href="voluntary.php?do=Delete&needid=' . $pat["event_ID"] . '" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
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
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="layouts/js/bootstrap.js"> </script>
</body>
</html>