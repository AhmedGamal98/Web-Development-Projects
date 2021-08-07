<?php  

$do = isset($_GET['do'])?  $_GET['do'] : "Ideas";
session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login.php');


}

$id = $_SESSION['creatorid'];

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
<link href="layouts/css/daterangepicker.css" rel="stylesheet" type="text/css" media="all"/>	
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
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
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
							</div>-->
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
	   
	   <?php if($do == "Ideas"){  ?>
	   

  <div class="inner-block" style="margin-top:0;padding-top:0;height:800px">
    <div class="inbox">
		 
		 <i class="fa fa-lightbulb-o fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A">My Ideas</h2>
		  </div>
		  <a style="width:140px;background-color:#FFF;border:1px solid #D68910;color:#D68910" href="ideas.php?do=Add" class="pull-right btn btn-primary" role="button"><i class="fa fa-plus"></i> Add Idea</a>
		   <div class="ideas" style="margin-top:30px">
			   <div class="container">
				   <div class="row">
					   <?php
	  
						include('../connect.php');  
						$sql = $con->prepare("SELECT * FROM ideas WHERE creator_ID=$id");
						$sql->execute();
						$rows = $sql->fetchAll();

						foreach($rows as $pat)
						{

					   ?> 
						   <div class="col-md-4">
							   <div class="thumbnail lef" style="height:400px">
								  <img src="data:image;base64,<?php echo $pat["image"]; ?>" style="height:200px" alt="...">
								  <div class="caption">
									<span class="h4" style="height:70px;width:100%;display:block;font-weight:bold"><?php echo $pat["title"]; ?></span>
									<p><a href="ideas.php?do=show_idea&ideaid=<?php echo $pat["ideas_ID"] ?>" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> Show</a></p>
								  </div>
								</div>
						   </div>
					   <?php } ?>
				   </div>
			  </div>
		   </div>
		
    	
          <div class="clearfix"> </div>     
   </div>
</div>
	   
	   <?php }elseif($do == "Add"){ ?>
	   
	   
	     <div class="inner-block" style="margin-top:0;padding-top:0">
          <div class="inbox">
		  <a style="text-decoration:none" href="ideas.php"><i class="fa fa-chevron-left fa-2x" style="color:#B75E21;margin-right:30px"></i></a>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">Add Idea</h2>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Insert" method="post" enctype="multipart/form-data">
					  <div class="details">
						  <div class="col-md-7">
							  <div class="in">
								  <label>Title</label>
								  <input class="form-control" type="text" name="title" autocomplete="off" required/>
							  </div>
							  <div class="in">
								  <label>Photo</label>
								  <input style="margin-bottom:20px" class="d-none form-control" type="file" name="image" required>
								  <div class="clearfix"></div>
							  </div>
							  <div class="in" style="height:300px">
								  <label>Description</label>
								   <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" name="descrip" value="1" class="custom-control-input" id="custom-switch-1">
										<label class="custom-control-label" for="custom-switch-1"></label>
								  </div>
								  <textarea class="form-control" name="description" required></textarea>
						    </div>
							  <div class="in">
								  <label>Budget Amount</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" name="bud_am" value="1" class="custom-control-input" id="custom-switch-2">
										<label class="custom-control-label" for="custom-switch-2"></label>
								  </div>
								  <input class="form-control" type="number" name="budget" autocomplete="off" required/>
							  </div>
							  <div class="in">
								  <label>Raised Amount</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" name="rais_am" value="1" class="custom-control-input" id="custom-switch-3">
										<label class="custom-control-label" for="custom-switch-3"></label>
								  </div>
								  <input class="form-control" type="number" name="raised" autocomplete="off" required/>
							  </div>
							  <div class="in">
								  <label>Status</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" name="sta" value="1" class="custom-control-input" id="custom-switch-4">
										<label class="custom-control-label" for="custom-switch-4"></label>
								  </div>
								  <div class="cha" style="width:120px;margin-right:135px">
									  
										  <!--<span class="sp1">Complicated </span><input class="ch1" type="radio" name="status"/>
									  
										  <span class="sp2">Pending </span><input class="ch2" type="radio" name="status"/>
									 
										  <span class="sp3">Empedded </span><input class="ch3" type="radio" name="status"/>-->
									  
									  
									  <input id="c" value="Completed" name="status" style="width:20px;float:left;margin-right:5px" type="radio"  required/> <label for="c">Completed</label>
									  <div class="clearfix"></div>
									  <input id="p" value="Pending" name="status" style="width:20px;float:left;margin-right:5px" type="radio" required/> <label for="p">Pending</label>
									  <div class="clearfix"></div>
									  <input id="g" value="Expired" name="status" style="width:20px;float:left;margin-right:5px" type="radio" required/> <label for="g">Expired</label>
									  
									 
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="bio">
						  <div class="col-md-5" style="margin-bottom:30px">
							  <div class="in">
								  <label>Category</label>
								  <select class="form-control choices form-select" name="category" id="categoryid" data-live-search="true" aria-required="true" aria-invalid="false"  required>
									  <?php
										   
										include('../connect.php');  
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
						  </div>
						  <div class="col-md-5" style="margin-bottom:30px">
								 <div class="in">
								  <label>Tag</label>
								  <select class="form-control choices form-select" id="tagid" name="tag" required>
									  
								  </select>
							  </div>
						   </div>
						  <div class="col-md-5">
								 <label style="width:20%">Current Investors</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" name="cur_inv" value="1" class="custom-control-input" id="custom-switch-8">
										<label class="custom-control-label" for="custom-switch-8"></label>
								  </div>
								  <input style="width:55%;float:right" class="form-control" min="0" maxlength="50"  type="number" name="investors" autocomplete="off" required/>
						   </div>
						  <div class="col-md-5">
								 <div class="in" style="margin-top:20px">
								  <label>Expired Date</label>
								  <input style="width:69%;float:right" class="form-control" type="date" name="expired" autocomplete="off" placeholder="Expired Date"/>
							  </div>
						   </div>
					  </div>
					  <div class="buttons pull-right" style="margin-top:850px">
						  <button type="submit" name="save" class="btn btn-primary edit" style="border:1px solid #D68910;color:#D68910">Save</button>
						  <a href="ideas.php" style="border:1px solid #D68910;color:#D68910" class="btn btn-danger cancel">Cancel</a>
					  </div>
				  </form>
			  </div>
		  </div>
          <div class="clearfix"> </div>     
    </div>
</div>
	   <?php }elseif($do == "Insert"){
	
	
	
	   //echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			include('../connect.php');  	
			
			$category = $_POST["category"];
			$tags = $_POST["tag"];
			$title    = $_POST["title"];
			$budget = $_POST["budget"];
			$brief = $_POST["description"];
			$expired = $_POST["expired"];
			$raised = $_POST["raised"];
			$current = $_POST["investors"];
			$status = $_POST["status"];
			if(isset($_POST['descrip'])){
				$dis = 1;
			}else{
				$dis = 0;
			}
			if(isset($_POST['bud_am'])){
				$bud_am = 1;
			}else{
				$bud_am = 0;
			}
			if(isset($_POST['rais_am'])){
				$rais_am = 1;
			}else{
				$rais_am = 0;
			}
			if(isset($_POST['sta'])){
				$sta = 1;
			}else{
				$sta = 0;
			}
			if(isset($_POST['cur_inv'])){
				$cur_inv = 1;
			}else{
				$cur_inv = 0;
			}
			
			
			
			
			
			//$image = $_POST["image"];
			
			
			if(isset($_POST['save'])){
							 
							 
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
			
			
			//Validate Form By Server site
			
			
			$formErrors = array();
			
			if(empty($category)){
				
				$formErrors[] = "Category Must Be Written";
				
			}
			if(empty($tags)){
				
				$formErrors[] = "Tag Must Be Written";
				
			}
			if(empty($title)){
				
				$formErrors[] = "Title Must Be Written";
				
			}
			if(empty($budget)){
				
				$formErrors[] = "Budget Amount Must Be Written";
				
			}
			if(empty($date)){
				
				$formErrors[] = "Expired Date Must Be Written";
				
			}
			if(empty($image)){
				
				$formErrors[] = "Photo Must Be Selected";
				
			}
			
			
			//Check if there's no errors proceed the update opteration
			
			
			if(!empty($formErrors)){
				
				//Check if the item exist in database or not
				
				//$check = checkItem("Username" , "users" , $username);
				
				 					  
				 $stmt = $con->prepare("SELECT * FROM ideas WHERE title= ? AND creator_ID= ?");
				 $stmt->execute(array($title , $id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					echo '
					
					<div class="inner-block" style="margin-top:0;padding-top:0">
					<div style="margin-left:20px" class="alert alert-info">This Idea Is Found Before Please Try Again
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
          <div class="inbox">
		  <a style="text-decoration:none" href="ideas.php"><i class="fa fa-chevron-left fa-2x" style="color:#B75E21;margin-right:30px"></i></a>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">Add Idea</h2>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Insert" method="post" enctype="multipart/form-data">
					  <div class="details">
						  <div class="col-md-7">
							  <div class="in">
								  <label>Title</label>
								  <input class="form-control" type="text" name="title" autocomplete="off" required/>
							  </div>
							  <div class="in">
								  <label>Photo</label>
								  <input style="margin-bottom:20px" class="d-none form-control" type="file" name="image" required>
								  <div class="clearfix"></div>
							  </div>
							  <div class="in" style="height:300px">
								  <label>Description</label>
								   <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="custom-switch-1">
										<label class="custom-control-label" for="custom-switch-1"></label>
								  </div>
								  <textarea class="form-control" name="description" required></textarea>
						    </div>
							  <div class="in">
								  <label>Budget Amount</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="custom-switch-2">
										<label class="custom-control-label" for="custom-switch-2"></label>
								  </div>
								  <input class="form-control" type="number" name="budget" autocomplete="off" required/>
							  </div>
							  <div class="in">
								  <label>Raised Amount</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="custom-switch-3">
										<label class="custom-control-label" for="custom-switch-3"></label>
								  </div>
								  <input class="form-control" type="number" name="raised" autocomplete="off" required/>
							  </div>
							  <div class="in">
								  <label>Status</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="custom-switch-4">
										<label class="custom-control-label" for="custom-switch-4"></label>
								  </div>
								  <div class="cha" style="width:120px;margin-right:135px">
									  
										  <!--<span class="sp1">Complicated </span><input class="ch1" type="radio" name="status"/>
									  
										  <span class="sp2">Pending </span><input class="ch2" type="radio" name="status"/>
									 
										  <span class="sp3">Empedded </span><input class="ch3" type="radio" name="status"/>-->
									  
									  
									  <input id="c" name="status" style="width:20px;float:left;margin-right:5px" type="radio" required/> <label for="c">Completed</label>
									  <div class="clearfix"></div>
									  <input id="p" name="status" style="width:20px;float:left;margin-right:5px" type="radio" required/> <label for="p">Pending</label>
									  <div class="clearfix"></div>
									  <input id="g" name="status" style="width:20px;float:left;margin-right:5px" type="radio" required/> <label for="g">Expired</label>
									  
									 
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="bio">
						  <div class="col-md-5" style="margin-bottom:30px">
							  <div class="in">
								  <label>Category</label>
								  <select class="form-control" name="category" required>';
									  
										   
										include('../connect.php');  
										$sql = $con->prepare("SELECT * FROM category");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{
										  
									    
									  echo '<option value="' . $pat["category_id"] . '">' . $pat["category_name"] . '</option>';
									  } 
								  echo '</select>
							  </div>
						  </div>
						  <div class="col-md-5" style="margin-bottom:30px">
								 <div class="in">
								  <label>Tag</label>
								  <select class="form-control" name="tag" required>';
									 
										   
										include('../connect.php');  
										$sql = $con->prepare("SELECT * FROM tags");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{
										  
									   
									  echo '<option value="' . $pat["tag_id"] . '">' . $pat["tag_name"] . '</option>';
									   }
								  echo '</select>
							  </div>
						   </div>
						  <div class="col-md-5">
								 <label style="width:20%">Current Investors</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="custom-switch-8">
										<label class="custom-control-label" for="custom-switch-8"></label>
								  </div>
								  <input style="width:55%;float:right" class="form-control" min="0" maxlength="50"  type="number"  name="investors" autocomplete="off" required/>
						   </div>
						  <div class="col-md-5">
								 <div class="in" style="margin-top:20px">
								  <label>Expired Date</label>
								  <input style="width:69%;float:right" class="form-control" type="date" name="expired" autocomplete="off" placeholder="Expired Date" required/>
							  </div>
						   </div>
					  </div>
					  <div class="buttons pull-right" style="margin-top:850px">
						  <button type="submit" name="save" class="btn btn-primary edit" style="border:1px solid #D68910;color:#D68910">Save</button>
						  <a href="ideas.php" style="border:1px solid #D68910;color:#D68910" class="btn btn-danger cancel">Cancel</a>
					  </div>
				  </form>
			  </div>
		  </div>
          <div class="clearfix"> </div>     
    </div>
</div>
					';
					
				}else{
					
					
						$stmt = $con->prepare("INSERT INTO ideas(Budget , Current_investors , Status , image , name , idea_category_id , Raised_money , idea_description , title , idea_tag_id , expiredDate , creator_ID,Description_check,Current_Investors_check,Budget_Amount_ckeck,Raised_Amount_ckech,Status_check) VALUES(:budget, :investor, :status, :image , :name , :category , :raised , :desc ,  :title , :tag , :expired , :creatorid, :dis,:cur,:bud_am,:ras,:sta)");

					$stmt->execute(array(

						'budget' => $budget,
						'investor' => $current,
						'status'    => $status,
						'image' => $image,
						'name' => $name,
						'category' => $category,
						'raised' => $raised,
						'desc' => $brief,
						'title' => $title,
						'tag' => $tags,
						'expired' => $expired,
						'creatorid' => $id,
						'dis' => $dis,
						'cur' => $cur_inv,
						'bud_am' => $bud_am,
						'ras' => $rais_am,
						'sta' => $sta

					));
					
					

					

					
					
					/*$sql = "INSERT INTO ideas (Budget, Current_investors, Status , image , name , idea_category_id , Raised_money , idea_description , title , idea_tag_id , expiredDate , creator_ID) VALUES ('$budget', '$current', '$status', '$image', '$name', '$category' , '$raised' , '$brief' , '$title' , '$tags' , '$expired' , '$id')";

                     $con->exec($sql);*/


					// echo success message
					

					
					echo '
					
					<div class="inner-block" style="margin-top:0;padding-top:0">
					<div style="margin-left:20px" class="alert alert-info">Idea Added Successdully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
          <div class="inbox">
		  <a style="text-decoration:none" href="ideas.php"><i class="fa fa-chevron-left fa-2x" style="color:#B75E21;margin-right:30px"></i></a>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">Add Idea</h2>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Insert" method="post" enctype="multipart/form-data">
					  <div class="details">
						  <div class="col-md-7">
							  <div class="in">
								  <label>Title</label>
								  <input class="form-control" type="text" name="title" autocomplete="off" required/>
							  </div>
							  <div class="in">
								  <label>Photo</label>
								  <input style="margin-bottom:20px" class="d-none form-control" type="file" name="image" required>
								  <div class="clearfix"></div>
							  </div>
							  <div class="in" style="height:300px">
								  <label>Description</label>
								   <!-- Switch -->
								   <div class="custom-control custom-switch">
								   <input type="checkbox" name="descrip" value="1" class="custom-control-input" id="custom-switch-1">
								   <label class="custom-control-label" for="custom-switch-1"></label>
							 </div>
								  <textarea class="form-control" name="description" required></textarea>
						    </div>
							  <div class="in">
								  <label>Budget Amount</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" name="bud_am" value="1" class="custom-control-input" id="custom-switch-2">
										<label class="custom-control-label" for="custom-switch-2"></label>
								  </div>
								  <input class="form-control" type="number" name="budget" autocomplete="off" required/>
							  </div>
							  <div class="in">
								  <label>Raised Amount</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" name="rais_am" value="1" class="custom-control-input" id="custom-switch-3">
										<label class="custom-control-label" for="custom-switch-3"></label>
								  </div>
								  <input class="form-control" type="number" name="raised" autocomplete="off" required/>
							  </div>
							  <div class="in">
								  <label>Status</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" name="sta" value="1" class="custom-control-input" id="custom-switch-4">
										<label class="custom-control-label" for="custom-switch-4"></label>
								  </div>
								  <div class="cha" style="width:120px;margin-right:135px">
									  
										  <!--<span class="sp1">Complicated </span><input class="ch1" type="radio" name="status"/>
									  
										  <span class="sp2">Pending </span><input class="ch2" type="radio" name="status"/>
									 
										  <span class="sp3">Empedded </span><input class="ch3" type="radio" name="status"/>-->
									  
									  
										  <input id="c" value="Completed" name="status" style="width:20px;float:left;margin-right:5px" type="radio"  required/> <label for="c">Completed</label>
										  <div class="clearfix"></div>
										  <input id="p" value="Pending" name="status" style="width:20px;float:left;margin-right:5px" type="radio" required/> <label for="p">Pending</label>
										  <div class="clearfix"></div>
										  <input id="g" value="Expired" name="status" style="width:20px;float:left;margin-right:5px" type="radio" required/> <label for="g">Expired</label>
									  
									 
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="bio">
						  <div class="col-md-5" style="margin-bottom:30px">
							  <div class="in">
								  <label>Category</label>
								  <select class="form-control" name="category" required>';
									  
										   
										include('../connect.php');  
										$sql = $con->prepare("SELECT * FROM category");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{
										  
									    
									  echo '<option value="' . $pat["category_id"] . '">' . $pat["category_name"] . '</option>';
									  } 
								  echo '</select>
							  </div>
						  </div>
						  <div class="col-md-5" style="margin-bottom:30px">
								 <div class="in">
								  <label>Tag</label>
								  <select class="form-control" name="tag" required>';
									 
										   
										include('../connect.php');  
										$sql = $con->prepare("SELECT * FROM tags");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{
										  
									   
									  echo '<option value="' . $pat["tag_id"] . '">' . $pat["tag_name"] . '</option>';
									   }
								  echo '</select>
							  </div>
						   </div>
						  <div class="col-md-5">
								 <label style="width:20%">Current Investors</label>
								  <!-- Switch -->
								  <div class="custom-control custom-switch">
										<input type="checkbox" name="cur_inv" value="1" class="custom-control-input" id="custom-switch-8">
										<label class="custom-control-label" for="custom-switch-8"></label>
								  </div>
								  <input style="width:55%;float:right" class="form-control" min="0" maxlength="50" type="number"  name="investors" autocomplete="off" required/>
						   </div>
						  <div class="col-md-5">
								 <div class="in" style="margin-top:20px">
								  <label>Expired Date</label>
								  <input style="width:69%;float:right" class="form-control" type="date" name="expired" autocomplete="off" placeholder="Expired Date" required/>
							  </div>
						   </div>
					  </div>
					  <div class="buttons pull-right" style="margin-top:850px">
						  <button type="submit" name="save" class="btn btn-primary edit" style="border:1px solid #D68910;color:#D68910">Save</button>
						  <a href="ideas.php" style="border:1px solid #D68910;color:#D68910" class="btn btn-danger cancel">Cancel</a>
					  </div>
				  </form>
			  </div>
		  </div>
          <div class="clearfix"> </div>     
    </div>
</div>';
					
					
				}
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>Can not Browse This Page</div>";
			
		}
		
		//echo "</div>";
	   
	   
	   
		}elseif($do == "show_idea"){ 
	   
	   
	   $ideaid = isset($_GET['ideaid']) && is_numeric($_GET['ideaid']) ? intval($_GET['ideaid']) : 0;
	   
	     include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM ideas WHERE ideas_ID= ?");
		 $stmt->execute(array($ideaid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

	    if($count > 0){
   

	   ?>
	   
	   
	     <div class="inner-block" style="margin-top:0;padding-top:0">
          <div class="inbox">
		  <a style="text-decoration:none" href="ideas.php"><i class="fa fa-chevron-left fa-2x" style="color:#B75E21;margin-right:30px"></i></a>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas"><?php echo $row["title"]; ?></h2>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Update" method="post" enctype="multipart/form-data">
					  <input class="form-control" type="hidden" name="ideaid" autocomplete="off" value="<?php echo $ideaid; ?>"/>
					  <div class="details">
						  <div class="col-md-7">
							  <div class="in">
								  <label>Title</label>
								  <input class="form-control" type="text" name="title" autocomplete="off" value="<?php echo $row["title"]; ?>" required/>
							  </div>
							  <div class="in" style="height:350px">
								  <label>Photo</label>
								  <input style="margin-bottom:20px" class="d-none form-control" type="file" name="image">
								  <div class="clearfix"></div>
								  <!--<img src="layouts/images/restaurant.jpeg" height="300px">-->
								  <img src="data:image;base64,<?php echo $row["image"]; ?>" height="300px" alt="...">
							  </div>
							  <div class="in" style="height:300px">
								  <label>Description</label>
								   <!-- Switch -->
								   <?php
								 	if($row['Description_check'] == 0) {
										 echo'
										 <div class="custom-control custom-switch">
												<input type="checkbox" name="descrip"  class="custom-control-input" id="custom-switch-1">
												<label class="custom-control-label" for="custom-switch-1"></label>
										</div>
										 ';
									 }else{
										echo'
										<div class="custom-control custom-switch">
											   <input type="checkbox" name="descrip"  class="custom-control-input" id="custom-switch-1" checked>
											   <label class="custom-control-label" for="custom-switch-1"></label>
									   </div>
										';

									 } 
								   ?>
								  
								  <textarea class="form-control" name="description" required><?php echo $row["idea_description"]; ?></textarea>
						    </div>
							  <div class="in">
								  <label>Budget Amount</label>
								  <!-- Switch -->
								  <?php
								 	if($row['Budget_Amount_ckeck'] == 0){
										echo'
										<div class="custom-control custom-switch">
											<input type="checkbox" name="bud_am"  class="custom-control-input" id="custom-switch-2">
											
											<label class="custom-control-label" for="custom-switch-2"></label>
								  		</div>
										';
									 } 
									 else{
										echo'
										<div class="custom-control custom-switch">
										<input type="checkbox" name="bud_am"  class="custom-control-input" id="custom-switch-2" checked>
									    
										<label class="custom-control-label" for="custom-switch-2"></label>
								  </div>
								  ';
									 }
								  ?>
								  
								  <input class="form-control" type="number" name="budget" autocomplete="off" value="<?php echo $row["Budget"]; ?>" required/>
							  </div>
							  <div class="in">
								  <label>Raised Amount</label>
								  <!-- Switch -->
								  <?php
								 	if($row['Raised_Amount_ckech'] == 0){
										echo'<div class="custom-control custom-switch">
										<input type="checkbox" name="rais_am" class="custom-control-input" id="custom-switch-3">
									     
										<label class="custom-control-label" for="custom-switch-3"></label>
								  </div>';
									 } 
									 else{
										echo'<div class="custom-control custom-switch">
										<input type="checkbox" name="rais_am"  class="custom-control-input" id="custom-switch-3" checked>
									     
										<label class="custom-control-label" for="custom-switch-3"></label>
								  </div>';
									 }
								  ?>
								  
								  <input class="form-control" type="number" name="raised" autocomplete="off" value="<?php echo $row["Raised_money"]; ?>" required/>
							  </div>
							  <div class="in">
								  <label>Status</label>
								  <!-- Switch -->
								  <?php
								 	if($row['Status_check'] == 0){
										echo'<div class="custom-control custom-switch">
										<input type="checkbox" name="sta"  class="custom-control-input" id="custom-switch-4">
									    
										<label class="custom-control-label" for="custom-switch-4"></label>
								  </div>';
									 } 
									 else{
										echo'<div class="custom-control custom-switch">
										<input type="checkbox" name="sta"  class="custom-control-input" id="custom-switch-4" checked>
									    
										<label class="custom-control-label" for="custom-switch-4"></label>
								  </div>';
									 }
								  ?>
								  
								  <div class="cha" style="width:120px;margin-right:135px">
									  <!--<span class="sp1">Complicated </span><input class="ch1" type="radio" name="status"/>
									  <span class="sp2">Pending </span><input class="ch2" type="radio" name="status"/>
									  <span class="sp3">Empedded </span><input class="ch3" type="radio" name="status"/>-->
									  
									  
									  <?php
								 	if($row['Status'] == "Completed"){
										echo'<input id="c" name="status" style="width:20px;float:left;margin-right:5px" type="radio" checked value="Completed"  required/> <label for="c">Completed</label>
										<div class="clearfix"></div>
										<input id="p" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Pending" required/> <label for="p">Pending</label>
										<div class="clearfix"></div>
										<input id="g" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Expired" required/> <label for="g">Expired</label>';
									 } 
									 elseif($row['Status'] == "Pending"){
										echo'<input id="c" name="status" style="width:20px;float:left;margin-right:5px" type="radio"  value="Completed"  required/> <label for="c">Completed</label>
										<div class="clearfix"></div>
										<input id="p" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Pending" checked required/> <label for="p">Pending</label>
										<div class="clearfix"></div>
										<input id="g" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Expired" required/> <label for="g">Expired</label>';
									 }elseif($row['Status'] == "Expired"){
										echo'<input id="c" name="status" style="width:20px;float:left;margin-right:5px" type="radio"  value="Completed"  required/> <label for="c">Completed</label>
										<div class="clearfix"></div>
										<input id="p" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Pending"  required/> <label for="p">Pending</label>
										<div class="clearfix"></div>
										<input id="g" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Expired"  required checked/> <label for="g">Expired</label>';
									 }
								  ?>
									   
									  
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="bio">
						  <div class="col-md-5" style="margin-bottom:30px">
							  <div class="in">
								  <label>Category</label>
								  <select class="form-control choices form-select" id="categoryid" data-live-search="true" aria-required="true" aria-invalid="false"  name="category" required>
								  <?php
										 
										 include('../connect.php');  
										 $sql = $con->prepare("SELECT category_name FROM category WHERE category_id=?");
										 $sql->execute([$row["idea_category_id"]]);
										 $cat_name = $sql->fetch();
 
										
										   
									   ?>	 
								  <option selceted value="<?php echo $row["idea_category_id"]; ?>"><?php echo $cat_name['category_name']; ?></option>  
									  <?php
										 
										include('../connect.php');  
										$sql = $con->prepare("SELECT * FROM category");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{
											if($pat['category_id'] != $row["idea_category_id"]){
										  
									  ?>	  
									  <option value="<?php echo $pat["category_id"]; ?>"><?php echo $pat["category_name"]; ?></option>
									  <?php }} ?>
								  </select>
							  </div>
						  </div>
						  <div class="col-md-5" style="margin-bottom:30px">
								 <div class="in">
								  <label>Tag</label>
								  <select class="form-control choices form-select" name="tag" id="tagid" required>
								  <?php
										 
										 include('../connect.php');  
										 $sql = $con->prepare("SELECT tag_name FROM tags WHERE tag_id=?");
										 $sql->execute([$row["idea_tag_id"]]);
										 $tag_name = $sql->fetch();
 
										
										   
									   ?>	
									   <option selceted value="<?php echo $row["idea_tag_id"]; ?>"><?php echo $tag_name['tag_name']; ?></option> 
									  <?php
										   
										include('../connect.php');  
										$sql = $con->prepare("SELECT * FROM tags");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{
											if($pat['tag_id'] != $row["idea_tag_id"]){
									  ?>	  
									  <option value="<?php echo $pat["tag_id"]; ?>"><?php echo $pat["tag_name"]; ?></option>
									  <?php } }?>
								  </select>
							  </div>
						   </div>
						  <div class="col-md-5">
								 <label style="width:20%">Current Investors</label>
								  <!-- Switch -->
								  <?php
								 	if($row['Current_Investors_check'] == 0){
										echo'<div class="custom-control custom-switch">
										<input type="checkbox" name="cur_inv"  class="custom-control-input" id="custom-switch-8">
									    
										<label class="custom-control-label" for="custom-switch-8"></label>
								  </div>';
									 }
									 else{
										echo'
										<div class="custom-control custom-switch">
										<input type="checkbox" name="cur_inv"  class="custom-control-input" id="custom-switch-8" checked>
									    
										<label class="custom-control-label" for="custom-switch-8"></label>
								  </div>';

									 } 
								  ?>
								  
								  <input style="width:55%;float:right" class="form-control" min="0" maxlength="50" type="number"  name="investors" autocomplete="off" value="<?php echo $row["Current_investors"]; ?>" required/>
						   </div>
						  <div class="col-md-5">
								 <div class="in" style="margin-top:20px">
								  <label>Expired Date</label>
								  <input style="width:69%;float:right" class="form-control" type="date" name="expired" autocomplete="off" placeholder="Expired Date" value="<?php echo $row["expiredDate"]; ?>" required/>
							  </div>
						   </div>
					  </div>
					  <div class="buttons pull-right" style="margin-top:850px">
						  <button type="submit" name="save" class="btn btn-primary edit" style="border:1px solid #D68910;color:#D68910">Save</button>
						  <a href="ideas.php" style="border:1px solid #D68910;color:#D68910" class="btn btn-danger cancel">Cancel</a>
					  </div>
				  </form>
			  </div>
		  </div>
          <div class="clearfix"> </div>     
    </div>
</div>
	   
	   <?php }  ?>
	   
	   
	   
	   
	   
	   
		<?php }elseif($do == "Update"){
	
	
	
	
	
	  if($_SERVER['REQUEST_METHOD'] =='POST'){
		
			
			//Get Varaiables from Post Method
			
			include('../connect.php');  	
			
		    $ideaid = $_POST["ideaid"];
			$category = $_POST["category"];
			$tags = $_POST["tag"];
			$title    = $_POST["title"];
			$budget = $_POST["budget"];
			$brief = $_POST["description"];
			$expired = $_POST["expired"];
			$raised = $_POST["raised"];
			$current = $_POST["investors"];
			$status = $_POST["status"];
		  
		  
		    /*$dis1 = $_POST['descrip1'];
		    $bud_am1 = $_POST['bud_am1'];
		    $rais_am1 = $_POST['rais_am1'];
		    $sta1 = $_POST['sta1'];
		    $cur_inv1 = $_POST['cur_inv1'];

			$dis2 = $_POST['descrip2'];
		    $bud_am2 = $_POST['bud_am2'];
		    $rais_am2 = $_POST['rais_am2'];
		    $sta2 = $_POST['sta2'];
		    $cur_inv2 = $_POST['cur_inv2'];*/
		  
		  
		  
			if(isset($_POST['descrip'])){
				
				$dis = 1;
				
			
			}else{
				$dis = 0 ;
			}

			if(isset($_POST['bud_am'])){
				$bud_am = 1;
			}elseif(!isset($_POST['bud_am'])){
				$bud_am = 0 ;
			}

			if(isset($_POST['rais_am'])){
				$rais_am = 1;
			}elseif(!isset($_POST['rais_am'])){
				$rais_am = 0 ;
			}

			if(isset($_POST['sta'])){
				$sta = 1;
			}elseif(!isset($_POST['sta'])){
				$sta = 0 ;
			}

			if(isset($_POST['cur_inv'])){
				$cur_inv = 1;
			}elseif(!isset($_POST['cur_inv'])){
				$cur_inv = 0 ;
			}	
			
			
			
				
			
			
		
			
			
			//Validate Form By Server site
			
			
			$formErrors = array();
			
			if(empty($category)){
				
				$formErrors[] = "Category Must Be Written";
				
			}
			if(empty($tags)){
				
				$formErrors[] = "Tag Must Be Written";
				
			}
			if(empty($title)){
				
				$formErrors[] = "Title Must Be Written";
				
			}
			if(empty($budget)){
				
				$formErrors[] = "Budget Amount Must Be Written";
				
			}
			if(empty($date)){
				
				$formErrors[] = "Expired Date Must Be Written";
				
			}
			if(empty($image)){
				
				$formErrors[] = "Photo Must Be Selected";
				
			}
			
			
			//Check if there's no errors proceed the update opteration
			
			
			if(!empty($formErrors)){
				
				//Check if the item exist in database or not
				
				//$check = checkItem("Username" , "users" , $username);
				
				 					  
				 $stmt = $con->prepare("SELECT * FROM ideas WHERE ideas_ID != ? AND title= ? AND creator_ID= ?");
				 $stmt->execute(array($ideaid , $title , $id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					echo '
					<div style="margin-left:20px" class="alert alert-info">This Idea Is Found Before Please Try Again
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="inner-block" style="margin-top:0;padding-top:0">
          <div class="inbox">
		  <a style="text-decoration:none" href="ideas.php"><i class="fa fa-chevron-left fa-2x" style="color:#B75E21;margin-right:30px"></i></a>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">' .  $row["title"] . '</h2>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Update" method="post" enctype="multipart/form-data">
					  <input class="form-control" type="hidden" name="ideaid" autocomplete="off" value="' . $ideaid . '"/>
					  <div class="details">
						  <div class="col-md-7">
							  <div class="in">
								  <label>Title</label>
								  <input class="form-control" type="text" name="title" autocomplete="off" value="' . $row["title"] . '" required/>
							  </div>
							  <div class="in" style="height:350px">
								  <label>Photo</label>
								  <input style="margin-bottom:20px" class="d-none form-control" type="file" name="image">
								  <div class="clearfix"></div>
								  <!--<img src="layouts/images/restaurant.jpeg" height="300px">-->
								  <img  src="data:image;base64,' . $row["image"]  . '" height="300px">
							  </div>
							  <div class="in" style="height:300px">
								  <label>Description</label>
								   <!-- Switch -->
								   ';
								   if($row['Description_check'] == 0) {
									   echo'
									   <div class="custom-control custom-switch">
											  <input type="checkbox" name="descrip"  class="custom-control-input" id="custom-switch-1">
											  <label class="custom-control-label" for="custom-switch-1"></label>
									  </div>
									   ';
								   }else{
									  echo'
									  <div class="custom-control custom-switch">
											 <input type="checkbox" name="descrip"  class="custom-control-input" id="custom-switch-1" checked>
											 <label class="custom-control-label" for="custom-switch-1"></label>
									 </div>
									  ';

								   } 
								 echo'
								  <textarea class="form-control" name="description" required>' . $row["idea_description"] . '</textarea>
						    </div>
							  <div class="in">
								  <label>Budget Amount</label>
								  <!-- Switch -->
								  ';
								  if($row['Budget_Amount_ckeck'] == 0){
									echo'
									<div class="custom-control custom-switch">
										<input type="checkbox" name="bud_am"  class="custom-control-input" id="custom-switch-2">
										
										<label class="custom-control-label" for="custom-switch-2"></label>
									  </div>
									';
								 } 
								 else{
									echo'
									<div class="custom-control custom-switch">
									<input type="checkbox" name="bud_am"  class="custom-control-input" id="custom-switch-2" checked>
									
									<label class="custom-control-label" for="custom-switch-2"></label>
							  </div>
							  ';
								 }
								  echo'
								  <input class="form-control" type="number" name="budget" autocomplete="off" value="' . $row["Budget"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Raised Amount</label>
								  <!-- Switch -->
								  ';
								  if($row['Raised_Amount_ckech'] == 0){
									echo'<div class="custom-control custom-switch">
									<input type="checkbox" name="rais_am" class="custom-control-input" id="custom-switch-3">
									 
									<label class="custom-control-label" for="custom-switch-3"></label>
							  </div>';
								 } 
								 else{
									echo'<div class="custom-control custom-switch">
									<input type="checkbox" name="rais_am"  class="custom-control-input" id="custom-switch-3" checked>
									 
									<label class="custom-control-label" for="custom-switch-3"></label>
							  </div>';
								 }
								  echo'
								  <input class="form-control" type="number" name="raised" autocomplete="off" value="' . $row["Raised_money"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Status</label>
								  <!-- Switch -->
								  ';
								  if($row['Status_check'] == 0){
									echo'<div class="custom-control custom-switch">
									<input type="checkbox" name="sta"  class="custom-control-input" id="custom-switch-4">
									
									<label class="custom-control-label" for="custom-switch-4"></label>
							  </div>';
								 } 
								 else{
									echo'<div class="custom-control custom-switch">
									<input type="checkbox" name="sta"  class="custom-control-input" id="custom-switch-4" checked>
									
									<label class="custom-control-label" for="custom-switch-4"></label>
							  </div>';
								 }
								 echo'
								  <div class="cha" style="width:120px;margin-right:135px">
									  <!--<span class="sp1">Completed </span><input class="ch1" type="radio" name="status"/>
									  <span class="sp2">Pending </span><input class="ch2" type="radio" name="status"/>
									  <span class="sp3">Expired </span><input class="ch3" type="radio" name="status"/>-->
									  
									';  
									  
									if($row['Status'] == "Completed"){
										echo'<input id="c" name="status" style="width:20px;float:left;margin-right:5px" type="radio" checked value="Completed"  required/> <label for="c">Completed</label>
										<div class="clearfix"></div>
										<input id="p" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Pending" required/> <label for="p">Pending</label>
										<div class="clearfix"></div>
										<input id="g" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Expired" required/> <label for="g">Expired</label>';
									 } 
									 elseif($row['Status'] == "Pending"){
										echo'<input id="c" name="status" style="width:20px;float:left;margin-right:5px" type="radio"  value="Completed"  required/> <label for="c">Completed</label>
										<div class="clearfix"></div>
										<input id="p" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Pending" checked required/> <label for="p">Pending</label>
										<div class="clearfix"></div>
										<input id="g" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Expired" required/> <label for="g">Expired</label>';
									 }elseif($row['Status'] == "Expired"){
										echo'<input id="c" name="status" style="width:20px;float:left;margin-right:5px" type="radio"  value="Completed"  required/> <label for="c">Completed</label>
										<div class="clearfix"></div>
										<input id="p" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Pending"  required/> <label for="p">Pending</label>
										<div class="clearfix"></div>
										<input id="g" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Expired"  required checked/> <label for="g">Expired</label>';
									 }
									 echo'
									  
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="bio">
						  <div class="col-md-5" style="margin-bottom:30px">
							  <div class="in">
								  <label>Category</label>
								  <select class="form-control" name="category" required>';
									
										   
										include('../connect.php');  
										$sql = $con->prepare("SELECT * FROM category");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{
										  
									 	  
									  echo '<option value="' . $pat["category_id"] . '">' .  $pat["category_name"] . '</option>';
									  } 
								  echo '</select>
							  </div>
						  </div>
						  <div class="col-md-5" style="margin-bottom:30px">
								 <div class="in">
								  <label>Tag</label>
								  <select class="form-control" name="tag" required>';
									
										   
										include('../connect.php');  
										$sql = $con->prepare("SELECT * FROM tags");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{
										  
									  	  
									  echo '<option value="' .  $pat["tag_id"] . '">' . $pat["tag_name"] . '</option>';
									  }
								  echo '</select>
							  </div>
						   </div>
						  <div class="col-md-5">
								 <label style="width:20%">Current Investors</label>
								  <!-- Switch -->
								  ';
								  if($row['Current_Investors_check'] == 0){
									echo'<div class="custom-control custom-switch">
									<input type="checkbox" name="cur_inv"  class="custom-control-input" id="custom-switch-8">
									
									<label class="custom-control-label" for="custom-switch-8"></label>
							  </div>';
								 }
								 else{
									echo'
									<div class="custom-control custom-switch">
									<input type="checkbox" name="cur_inv"  class="custom-control-input" id="custom-switch-8" checked>
									
									<label class="custom-control-label" for="custom-switch-8"></label>
							  </div>';

								 } 
								  echo'
								  <input style="width:55%;float:right" class="form-control" min="0" maxlength="50"  type="number"  name="investors" autocomplete="off" value="' . $row["Current_investors"]. '" required/>
						   </div>
						  <div class="col-md-5">
								 <div class="in" style="margin-top:20px">
								  <label>Expired Date</label>
								  <input style="width:69%;float:right" class="form-control" type="date" name="expired" autocomplete="off" placeholder="Expired Date" value="' . $row["expiredDate"] . '" required/>
							  </div>
						   </div>
					  </div>
					  <div class="buttons pull-right" style="margin-top:850px">
						  <button type="submit" name="save" class="btn btn-primary edit" style="border:1px solid #D68910;color:#D68910">Save</button>
						  <a href="ideas.php" style="border:1px solid #D68910;color:#D68910" class="btn btn-danger cancel">Cancel</a>
					  </div>
				  </form>
			  </div>
		  </div>
          <div class="clearfix"> </div>     
    </div>
</div>
					
					
					';
					
				}else{
				

					/*$stmt = $con->prepare("INSERT INTO ideas(Budget , Current_investors , Status , image , name , idea_category_id , Raised_money , idea_description , title , idea_tag_id , expiredDate , creator_ID) VALUES(:budget, :investor, :status, :image , :category , :raised , :desc ,  :title , :tag , :expired , :creatorid)");

					$stmt->execute(array(

						'budget' => $budget,
						'investor' => $current,
						'status'    => $status,
						'image' => $image,
						'name' => $name,
						'category' => $category,
						'raised' => $raised,
						'desc' => $brief,
						'title' => $title,
						'tag' => $tags,
						'expired' => $expired,
						'creatorid' => $id

					));*/
					
					
					/*if(isset($_POST['descrip']) && isset($_POST['bud_am']) && isset($_POST['rais_am']) && isset($_POST['sta']) && isset($_POST['cur_inv']) ){
						if($_FILES['image']['tmp_name'] == FALSE){



							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? , Description_check = ? ,Current_Investors_check = ? ,Budget_Amount_ckeck = ? ,Raised_Amount_ckech = ? ,Status_check = ? WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $dis , $cur_inv , $bud_am , $rais_am , $sta));



						 }else{


							 $image = addslashes($_FILES['image']['tmp_name']);
							 $name = addslashes($_FILES['image']['name']);
							 $image = file_get_contents($image);
							 $image = base64_encode($image);
							 //saveimage($name , $image);

							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, image = ?, name = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? , Description_check = ? ,Current_Investors_check = ? ,Budget_Amount_ckeck = ? ,Raised_Amount_ckech = ? ,Status_check = ? WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $image , $name , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $dis , $cur_inv , $bud_am , $rais_am , $sta));	


						 }
					}elseif(!isset($_POST['descrip']) && isset($_POST['bud_am']) && isset($_POST['rais_am']) && isset($_POST['sta']) && isset($_POST['cur_inv'])){
						if($_FILES['image']['tmp_name'] == FALSE){



							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? ,Current_Investors_check = ? ,Budget_Amount_ckeck = ? ,Raised_Amount_ckech = ? ,Status_check = ? WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $cur_inv , $bud_am , $rais_am , $sta));



						 }else{


							 $image = addslashes($_FILES['image']['tmp_name']);
							 $name = addslashes($_FILES['image']['name']);
							 $image = file_get_contents($image);
							 $image = base64_encode($image);
							 //saveimage($name , $image);

							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, image = ?, name = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? ,Current_Investors_check = ? ,Budget_Amount_ckeck = ? ,Raised_Amount_ckech = ? ,Status_check = ? WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $image , $name , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $cur_inv , $bud_am , $rais_am , $sta));	


						 }

					}elseif(!isset($_POST['descrip']) && !isset($_POST['bud_am']) && isset($_POST['rais_am']) && isset($_POST['sta']) && isset($_POST['cur_inv'])){
						if($_FILES['image']['tmp_name'] == FALSE){



							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? ,Current_Investors_check = ? ,Raised_Amount_ckech = ? ,Status_check = ? WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $cur_inv , $rais_am , $sta));



						 }else{


							 $image = addslashes($_FILES['image']['tmp_name']);
							 $name = addslashes($_FILES['image']['name']);
							 $image = file_get_contents($image);
							 $image = base64_encode($image);
							 //saveimage($name , $image);

							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, image = ?, name = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? ,Current_Investors_check = ? , Raised_Amount_ckech = ? ,Status_check = ? WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $image , $name , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $cur_inv , $rais_am , $sta));	


						 }

					}elseif(!isset($_POST['descrip']) && !isset($_POST['bud_am']) && !isset($_POST['rais_am']) && isset($_POST['sta']) && isset($_POST['cur_inv'])){
						if($_FILES['image']['tmp_name'] == FALSE){



							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? ,Current_Investors_check = ? ,Status_check = ? WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $cur_inv , $sta));



						 }else{


							 $image = addslashes($_FILES['image']['tmp_name']);
							 $name = addslashes($_FILES['image']['name']);
							 $image = file_get_contents($image);
							 $image = base64_encode($image);
							 //saveimage($name , $image);

							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, image = ?, name = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? ,Current_Investors_check = ? ,Status_check = ? WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $image , $name , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $cur_inv , $sta));	


						 }

					}elseif(!isset($_POST['descrip']) && !isset($_POST['bud_am']) && !isset($_POST['rais_am']) && !isset($_POST['sta']) && isset($_POST['cur_inv'])){
						if($_FILES['image']['tmp_name'] == FALSE){



							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ?  ,Current_Investors_check = ?  WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $cur_inv));



						 }else{


							 $image = addslashes($_FILES['image']['tmp_name']);
							 $name = addslashes($_FILES['image']['name']);
							 $image = file_get_contents($image);
							 $image = base64_encode($image);
							 //saveimage($name , $image);

							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, image = ?, name = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? ,Current_Investors_check = ? WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $image , $name , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $cur_inv));	


						 }

					}elseif(!isset($_POST['descrip']) && !isset($_POST['bud_am']) && !isset($_POST['rais_am']) && !isset($_POST['sta']) && !isset($_POST['cur_inv'])){
						if($_FILES['image']['tmp_name'] == FALSE){



							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? , Description_check = ? ,Current_Investors_check = ? ,Budget_Amount_ckeck = ? ,Raised_Amount_ckech = ? ,Status_check = ? WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $dis1 , $cur_inv1 , $bud_am1 , $rais_am1 , $sta1));



						 }else{


							 $image = addslashes($_FILES['image']['tmp_name']);
							 $name = addslashes($_FILES['image']['name']);
							 $image = file_get_contents($image);
							 $image = base64_encode($image);
							 //saveimage($name , $image);

							$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, image = ?, name = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? , Description_check = ? ,Current_Investors_check = ? ,Budget_Amount_ckeck = ? ,Raised_Amount_ckech = ? ,Status_check = ? WHERE ideas_ID = ?");
							$stmt->execute(array($budget , $current , $status , $image , $name , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid , $dis1 , $cur_inv1 , $bud_am1 , $rais_am1 , $sta1));	


						 }

					

					}*/

					
					if($_FILES['image']['tmp_name'] == FALSE){



						$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? , Description_check = ? ,Current_Investors_check = ? ,Budget_Amount_ckeck = ? ,Raised_Amount_ckech = ? ,Status_check = ? WHERE ideas_ID = ?");
						$stmt->execute(array($budget , $current , $status , $category , $raised , $brief , $title , $tags , $expired  , $dis , $cur_inv , $bud_am , $rais_am , $sta,  $ideaid));



					 }else{


						 $image = addslashes($_FILES['image']['tmp_name']);
						 $name = addslashes($_FILES['image']['name']);
						 $image = file_get_contents($image);
						 $image = base64_encode($image);
						 //saveimage($name , $image);

						$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, image = ?, name = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? , Description_check = ? ,Current_Investors_check = ? ,Budget_Amount_ckeck = ? ,Raised_Amount_ckech = ? ,Status_check = ? WHERE ideas_ID = ?");
						$stmt->execute(array($budget , $current , $status , $image , $name , $category , $raised , $brief , $title , $tags , $expired  , $dis , $cur_inv , $bud_am , $rais_am , $sta,  $ideaid));	


					 }
					
					
					
					
					
					
					/*if($_FILES['image']['tmp_name'] == FALSE){


					 
					$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? WHERE ideas_ID = ?");
					$stmt->execute(array($budget , $current , $status , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid));
						
						

				 }else{


					 $image = addslashes($_FILES['image']['tmp_name']);
					 $name = addslashes($_FILES['image']['name']);
					 $image = file_get_contents($image);
					 $image = base64_encode($image);
					 //saveimage($name , $image);
						
					$stmt = $con->prepare("UPDATE ideas SET Budget = ?, Current_investors = ?, Status = ?, image = ?, name = ?, idea_category_id = ?, Raised_money = ? , idea_description = ? , title = ?  , idea_tag_id = ? , expiredDate = ? WHERE ideas_ID = ?");
					$stmt->execute(array($budget , $current , $status , $image , $name , $category , $raised , $brief , $title , $tags , $expired ,  $ideaid));	


				 }*/
					
					
					
					
					
				$stmt = $con->prepare("SELECT * FROM ideas WHERE ideas_ID= ? AND title= ? AND creator_ID= ?");
				 $stmt->execute(array($ideaid , $title , $id));
				 $row = $stmt->fetch();
				 //$count = $stmt->rowCount();

					
					echo '
					<div style="margin-left:20px" class="alert alert-info">Idea Updated Successfully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="inner-block" style="margin-top:0;padding-top:0">
          <div class="inbox">
		  <a style="text-decoration:none" href="ideas.php"><i class="fa fa-chevron-left fa-2x" style="color:#B75E21;margin-right:30px"></i></a>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">' .  $row["title"] . '</h2>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Update" method="post" enctype="multipart/form-data">
					  <input class="form-control" type="hidden" name="ideaid" autocomplete="off" value="' . $ideaid . '"/>
					  <div class="details">
						  <div class="col-md-7">
							  <div class="in">
								  <label>Title</label>
								  <input class="form-control" type="text" name="title" autocomplete="off" value="' . $row["title"] . '" required/>
							  </div>
							  <div class="in" style="height:350px">
								  <label>Photo</label>
								  <input style="margin-bottom:20px" class="d-none form-control" type="file" name="image">
								  <div class="clearfix"></div>
								  <!--<img src="layouts/images/restaurant.jpeg" height="300px">-->
								  <img  src="data:image;base64,' . $row["image"]  . '" height="300px">
							  </div>
							  <div class="in" style="height:300px">
								  <label>Description</label>
								   <!-- Switch -->
								   ';
								   if($row['Description_check'] == 0) {
									   echo'
									   <div class="custom-control custom-switch">
											  <input type="checkbox" name="descrip"  class="custom-control-input" id="custom-switch-1">
											  <label class="custom-control-label" for="custom-switch-1"></label>
									  </div>
									   ';
								   }else{
									  echo'
									  <div class="custom-control custom-switch">
											 <input type="checkbox" name="descrip"  class="custom-control-input" id="custom-switch-1" checked>
											 <label class="custom-control-label" for="custom-switch-1"></label>
									 </div>
									  ';

								   } 
								 echo'
								  <textarea class="form-control" name="description" required>' . $row["idea_description"] . '</textarea>
						    </div>
							  <div class="in">
								  <label>Budget Amount</label>
								  <!-- Switch -->
								  ';
								  if($row['Budget_Amount_ckeck'] == 0){
									echo'
									<div class="custom-control custom-switch">
										<input type="checkbox" name="bud_am"  class="custom-control-input" id="custom-switch-2">
										
										<label class="custom-control-label" for="custom-switch-2"></label>
									  </div>
									';
								 } 
								 else{
									echo'
									<div class="custom-control custom-switch">
									<input type="checkbox" name="bud_am"  class="custom-control-input" id="custom-switch-2" checked>
									
									<label class="custom-control-label" for="custom-switch-2"></label>
							  </div>
							  ';
								 }
								  echo'
								  <input class="form-control" type="number" name="budget" autocomplete="off" value="' . $row["Budget"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Raised Amount</label>
								  <!-- Switch -->
								  ';
								  if($row['Raised_Amount_ckech'] == 0){
									echo'<div class="custom-control custom-switch">
									<input type="checkbox" name="rais_am" class="custom-control-input" id="custom-switch-3">
									 
									<label class="custom-control-label" for="custom-switch-3"></label>
							  </div>';
								 } 
								 else{
									echo'<div class="custom-control custom-switch">
									<input type="checkbox" name="rais_am"  class="custom-control-input" id="custom-switch-3" checked>
									 
									<label class="custom-control-label" for="custom-switch-3"></label>
							  </div>';
								 }
								  echo'
								  <input class="form-control" type="number" name="raised" autocomplete="off" value="' . $row["Raised_money"] . '" required/>
							  </div>
							  <div class="in">
								  <label>Status</label>
								  <!-- Switch -->
								  ';
								  if($row['Status_check'] == 0){
									echo'<div class="custom-control custom-switch">
									<input type="checkbox" name="sta"  class="custom-control-input" id="custom-switch-4">
									
									<label class="custom-control-label" for="custom-switch-4"></label>
							  </div>';
								 } 
								 else{
									echo'<div class="custom-control custom-switch">
									<input type="checkbox" name="sta"  class="custom-control-input" id="custom-switch-4" checked>
									
									<label class="custom-control-label" for="custom-switch-4"></label>
							  </div>';
								 }
								 echo'
								  <div class="cha" style="width:120px;margin-right:135px">
									  <!--<span class="sp1">Completed </span><input class="ch1" type="radio" name="status"/>
									  <span class="sp2">Pending </span><input class="ch2" type="radio" name="status"/>
									  <span class="sp3">Expired </span><input class="ch3" type="radio" name="status"/>-->
									  
									';  
									  
									if($row['Status'] == "Completed"){
										echo'<input id="c" name="status" style="width:20px;float:left;margin-right:5px" type="radio" checked value="Completed"  required/> <label for="c">Completed</label>
										<div class="clearfix"></div>
										<input id="p" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Pending" required/> <label for="p">Pending</label>
										<div class="clearfix"></div>
										<input id="g" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Expired" required/> <label for="g">Expired</label>';
									 } 
									 elseif($row['Status'] == "Pending"){
										echo'<input id="c" name="status" style="width:20px;float:left;margin-right:5px" type="radio"  value="Completed"  required/> <label for="c">Completed</label>
										<div class="clearfix"></div>
										<input id="p" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Pending" checked required/> <label for="p">Pending</label>
										<div class="clearfix"></div>
										<input id="g" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Expired" required/> <label for="g">Expired</label>';
									 }elseif($row['Status'] == "Expired"){
										echo'<input id="c" name="status" style="width:20px;float:left;margin-right:5px" type="radio"  value="Completed"  required/> <label for="c">Completed</label>
										<div class="clearfix"></div>
										<input id="p" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Pending"  required/> <label for="p">Pending</label>
										<div class="clearfix"></div>
										<input id="g" name="status" style="width:20px;float:left;margin-right:5px" type="radio" value="Expired"  required checked/> <label for="g">Expired</label>';
									 }
									 echo'
									  
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="bio">
						  <div class="col-md-5" style="margin-bottom:30px">
							  <div class="in">
								  <label>Category</label>
								  <select class="form-control" name="category" required>';
								  include('../connect.php');  
								  $sql = $con->prepare("SELECT category_name FROM category WHERE category_id=?");
								  $sql->execute([$row["idea_category_id"]]);
								  $cat_name = $sql->fetch();
								echo'<option selceted value="'. $row["idea_category_id"].'">'. $cat_name['category_name'].'</option>';		   
										include('../connect.php');  
										$sql = $con->prepare("SELECT * FROM category");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{
											if($pat['category_id'] != $row["idea_category_id"]){
									 	  
									  echo '<option value="' . $pat["category_id"] . '">' .  $pat["category_name"] . '</option>';
									  } }
								  echo '</select>
							  </div>
						  </div>
						  <div class="col-md-5" style="margin-bottom:30px">
								 <div class="in">
								  <label>Tag</label>
								  <select class="form-control" name="tag" required>';
								  include('../connect.php');  
								  $sql = $con->prepare("SELECT tag_name FROM tags WHERE tag_id=?");
								  $sql->execute([$row["idea_tag_id"]]);
								  $tag_name = $sql->fetch();

								  echo'<option selceted value="'. $row["idea_tag_id"].'">'. $tag_name['tag_name'].'</option> ';
										   
										include('../connect.php');  
										$sql = $con->prepare("SELECT * FROM tags");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{
											if($pat['tag_id'] != $row["idea_tag_id"]){
									  	  
									  echo '<option value="' .  $pat["tag_id"] . '">' . $pat["tag_name"] . '</option>';
									  }}
								  echo '</select>
							  </div>
						   </div>
						  <div class="col-md-5">
								 <label style="width:20%">Current Investors</label>
								  <!-- Switch -->
								  ';
								  if($row['Current_Investors_check'] == 0){
									echo'<div class="custom-control custom-switch">
									<input type="checkbox" name="cur_inv"  class="custom-control-input" id="custom-switch-8">
									
									<label class="custom-control-label" for="custom-switch-8"></label>
							  </div>';
								 }
								 else{
									echo'
									<div class="custom-control custom-switch">
									<input type="checkbox" name="cur_inv"  class="custom-control-input" id="custom-switch-8" checked>
									
									<label class="custom-control-label" for="custom-switch-8"></label>
							  </div>';

								 } 
								  echo'
								  <input style="width:55%;float:right" class="form-control" min="0" maxlength="50"  type="number"  name="investors" autocomplete="off" value="' . $row["Current_investors"]. '" required/>
						   </div>
						  <div class="col-md-5">
								 <div class="in" style="margin-top:20px">
								  <label>Expired Date</label>
								  <input style="width:69%;float:right" class="form-control" type="date" name="expired" autocomplete="off" placeholder="Expired Date" value="' . $row["expiredDate"] . '" required/>
							  </div>
						   </div>
					  </div>
					  <div class="buttons pull-right" style="margin-top:850px">
						  <button type="submit" name="save" class="btn btn-primary edit" style="border:1px solid #D68910;color:#D68910">Save</button>
						  <a href="ideas.php" style="border:1px solid #D68910;color:#D68910" class="btn btn-danger cancel">Cancel</a>
					  </div>
				  </form>
			  </div>
		  </div>
          <div class="clearfix"> </div>     
    </div>
</div>
			
					
					';
					
					
				}
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>Can not Browse This Page</div>";
			
		}
	
	
	    
	    
	   
	   
	    }
		
		 ?>
	   
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
		        <li class="activ"><a href="ideas.php"><i class="fa fa-lightbulb-o"></i><span>Ideas</span></a></li>
		        <li><a href="requisition.php"><i class="fa fa-envelope-o"></i><span>My Requisition Lists</span></a></li>
				  <li><a href="applications.php"><i class="fa fa-envelope"></i><span>My Application Lists</span></a></li>
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
	<script>
  var category ;
  category = document.getElementById("categoryid");
  category.addEventListener("change" , function(){ Mychange1( category.value );    }, true);

  function Mychange1( categoryid  ) {
  $.ajax({
      url: 'tag.php',
      type: 'post',
      data: {category:categoryid},
      dataType: 'json',
      success:function(response){
          var len = response.length;

          $("#tagid").empty();
          $("#tagid").append("<option value='0'>choose the Tag</option>");
          for( var i = 0; i<len; i++){
              var tag_id = response[i]['tag_id'];
              var tag_name = response[i]['tag_name'];
              $("#tagid").append("<option value='"+tag_id+"'>"+tag_name+"</option>");
          }
      }
  });
  }
</script>
		<script src="layouts/js/jquery.nicescroll.js"></script>
		<script src="layouts/js/scripts.js"></script>
	    <script src="layouts/js/moment.min.js"></script>
	    <script src="layouts/js/daterangepicker.js"></script>
	    <script src="layouts/js/global.js"></script>
		<!--//scrolling js-->
<script src="layouts/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
