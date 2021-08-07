<?php  

$do = isset($_GET['do'])?  $_GET['do'] : "Interest";


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
<div class="inner-block" style="margin-left:50px">
   <div class="boost-icons">
	   
	   <?php if($do == "Interest"){  ?>
	   

  <div class="inner-block" style="margin-top:0;padding-top:30px;height:auto">
    <div class="inbox">
		 
		 <i class="fa fa-heart-o fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">Interests</h2>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Insert" method="post">
					  <div class="category col-md-3">
						 <select name="category" class="form-control choices form-select" id="categoryid" data-live-search="true" aria-required="true" aria-invalid="false" required>
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
					<div class="tag col-md-3">
						 <select name="tag" class="form-control choices form-select" id="tagid" required>
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
					<div class="filter col-md-5">
						<input style="background-color:#FFF;color:#000;border:none;width:130px;border:1px solid #D68910;color:#D68910" class="btn btn-info col-md-2" type="submit" value="Save" name="filter"> 
						<a style="background-color:#FFF;color:#000;border:none;width:130px;border:1px solid #D68910;color:#D68910;margin-left:20px" href="../homepage.php" class="btn btn-danger cancel  col-md-2">Cancel</a>
					</div>
				  </form>
			  </div>
		  </div>
		   <div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
									  <th>Category</th>	
									  <th>Tag</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>
								  <?php
										   
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										    interests.* , category.category_name  , tags.tag_name
									   FROM
										   interests
									    JOIN
										  category
										
									   ON
										   interests.category_id = category.category_id
										   
										    
										 JOIN
										  tags
										
									   ON
										   interests.tag_id = tags.tag_id 
										  

									   WHERE  interests.investor_ID=$id");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								  ?>
                                <tr>
                                  <td><?php echo $pat["Interest_ID"]; ?></td>
								  <td><?php echo $pat["category_name"]; ?></td>
								  <td><?php echo $pat["tag_name"]; ?></td>
								  <td>
									  <a onclick="return confirm('Are You Sure?');" title="Delete" href="interests.php?do=Delete&interestid=<?php echo $pat['Interest_ID']; ?>" class="icons"><i class="fa fa-trash"></i></a>
								  </td>		
                              </tr>
                              <?php } ?>
                          </tbody>
                      </table>
      </div>
		
    	
          <div class="clearfix"> </div>     
   </div>
</div>
		<?php }elseif($do == "Insert"){
	   
	   
	        
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			include('../connect.php');  	
			
			$category = $_POST["category"];
			$tag = $_POST["tag"];
			
			
			
			
			//Validate Form By Server site
			
			
			$formErrors = array();
			
			if(empty($category)){
				
				$formErrors[] = "Category Must Be Written";
				
			}
			if(empty($tag)){
				
				$formErrors[] = "Tag Must Be Written";
				
			}
			
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Check if the item exist in database or not
				
				//$check = checkItem("Username" , "users" , $username);
				
				 					  
				
				

					$stmt = $con->prepare("INSERT INTO  interests(investor_ID , category_id , tag_id) VALUES(:id, :cat, :tag)");

					$stmt->execute(array(

						'id' => $id,
						'cat' => $category,
						'tag' => $tag

					));
					
					
					echo '
					
					<div class="inner-block" style="margin-top:0;padding-top:30px;height:600px">
					<div style="margin-left:20px" class="alert alert-info">Your Interests Added Successfully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
    <div class="inbox">
		 
		 <i class="fa fa-heart-o fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">Interests</h2>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Insert" method="post">
					  <div class="category col-md-3">
						 <select name="category" class="form-control choices form-select" id="categoryid" data-live-search="true" aria-required="true" aria-invalid="false" required>
							 <option value="Category">Category</option>';
							

								include('connect.php');  
								$sql = $con->prepare("SELECT * FROM category");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							  echo '<option value="' . $pat["category_id"] . '">' .  $pat["category_name"] . '</option>';
							}
						 echo '</select>
					</div> 
					<div class="tag col-md-3">
						 <select name="tag" class="form-control choices form-select" id="tagid" required>
							 <option value="Tag">Tag</option>';
							 
								include('connect.php');  
								$sql = $con->prepare("SELECT * FROM tags");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							
							echo '<option value="' . $pat["tag_id"] . '">' . $pat["tag_name"] . '</option>';
							 }
						 echo '</select>
					</div> 
					<div class="filter col-md-5">
						<input style="background-color:#FFF;color:#000;border:none;width:130px;border:1px solid #D68910;color:#D68910" class="btn btn-info col-md-2" type="submit" value="Save" name="filter"> 
						<a style="background-color:#FFF;color:#000;border:none;width:130px;border:1px solid #D68910;color:#D68910;margin-left:20px" href="../homepage.php" class="btn btn-danger cancel  col-md-2">Cancel</a>
					</div>
				  </form>
			  </div>
		  </div>
		   <div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
									  <th>Category</th>	
									  <th>Tag</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>';
								     
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										    interests.* , category.category_name  , tags.tag_name
									   FROM
										   interests
									    JOIN
										  category
										
									   ON
										   interests.category_id = category.category_id
										   
										    
										 JOIN
										  tags
										
									   ON
										   interests.tag_id = tags.tag_id 
										  

									   WHERE  interests.investor_ID=$id");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								  
                                echo '<tr>
                                  <td>' . $pat["Interest_ID"] . '</td>
								  <td>' . $pat["category_name"] . '</td>
								  <td>' . $pat["tag_name"] . '</td>
								  <td>
									  <a onclick="return confirm(\'Are You Sure?\');" title="Delete" href="interests.php?do=Delete&interestid=' . $pat['Interest_ID'] . '" class="icons"><i class="fa fa-trash"></i></a>
								  </td>		
                              </tr>';
                              }
                          echo '</tbody>
                      </table>
      </div>
    	
          <div class="clearfix"> </div>     
   </div>
</div>
					';
					

			}
			
		}else{
			
			echo "<div class='alert alert-danger'>Can not Browse This Page</div>";
			
		}
	
	
	   
	   
		 }elseif($do == "Delete"){
		
		
	      $interestid = isset($_GET['interestid']) && is_numeric($_GET['interestid']) ? intval($_GET['interestid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM interests WHERE Interest_ID= ?");
		 $stmt->execute(array($interestid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM interests WHERE Interest_ID = :interestid");

				$stmt->bindParam(":interestid" , $interestid);

				$stmt->execute();

				
				echo '
					
					<div class="inner-block" style="margin-top:0;padding-top:30px;height:600px">
					<div style="margin-left:20px" class="alert alert-info">Your Interest Deleted Successfully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
    <div class="inbox">
		 
		 <i class="fa fa-heart-o fa-2x" style="color:#B75E21;margin-right:30px"></i>
    	  <div class="info" style="display:inline">
			  <h2 style="display:inline;margin-bottom:0;color:#515A5A;font-family:Athelas">Interests</h2>
		  </div>
		  <div class="information" style="margin-top:30px">
			  <div class="row">
				  <form class="form" action="?do=Insert" method="post">
					  <div class="category col-md-3">
						 <select name="category" class="form-control choices form-select" id="categoryid" data-live-search="true" aria-required="true" aria-invalid="false" required>
							 <option value="Category">Category</option>';
							

								include('connect.php');  
								$sql = $con->prepare("SELECT * FROM category");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							  echo '<option value="' . $pat["category_id"] . '">' .  $pat["category_name"] . '</option>';
							}
						 echo '</select>
					</div> 
					<div class="tag col-md-3">
						 <select name="tag" class="form-control choices form-select" id="tagid" required>
							 <option value="Tag">Tag</option>';
							 
								include('connect.php');  
								$sql = $con->prepare("SELECT * FROM tags");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							
							echo '<option value="' . $pat["tag_id"] . '">' . $pat["tag_name"] . '</option>';
							 }
						 echo '</select>
					</div> 
					<div class="filter col-md-5">
						<input style="background-color:#FFF;color:#000;border:none;width:130px;border:1px solid #D68910;color:#D68910" class="btn btn-info col-md-2" type="submit" value="Save" name="filter"> 
						<a style="background-color:#FFF;color:#000;border:none;width:130px;border:1px solid #D68910;color:#D68910;margin-left:20px" href="../homepage.php" class="btn btn-danger cancel  col-md-2">Cancel</a>
					</div>
				  </form>
			  </div>
		  </div>
		   <div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
									  <th>Category</th>	
									  <th>Tag</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>';
								     
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										    interests.* , category.category_name  , tags.tag_name
									   FROM
										   interests
									    JOIN
										  category
										
									   ON
										   interests.category_id = category.category_id
										   
										    
										 JOIN
										  tags
										
									   ON
										   interests.tag_id = tags.tag_id 
										  

									   WHERE  interests.investor_ID=$id");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								  
                                echo '<tr>
                                  <td>' . $pat["Interest_ID"] . '</td>
								  <td>' . $pat["category_name"] . '</td>
								  <td>' . $pat["tag_name"] . '</td>
								  <td>
									  <a onclick="return confirm(\'Are You Sure?\');" title="Delete" href="interests.php?do=Delete&interestid=' . $pat['Interest_ID'] . '" class="icons"><i class="fa fa-trash"></i></a>
								  </td>		
                              </tr>';
                              }
                          echo '</tbody>
                      </table>
      </div>
    	
          <div class="clearfix"> </div>     
   </div>
</div>
					';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>You Can not Browse This Page</div>";
				
				
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
		        <li class="activ"><a href="interests.php"><i class="fa fa-heart-o"></i><span>Interests</span></a></li>
		        <li><a href="requisition.php"><i class="fa fa-envelope-o"></i><span>My Requisition Lists</span></a></li>
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
		<!--//scrolling js-->
<script src="layouts/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
