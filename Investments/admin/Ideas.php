<?php  

$do = isset($_GET['do'])?  $_GET['do'] : "Manage";

session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login.php');


}

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
				
			   <div class="header-right" style="height:75px">
							 
							 
							 
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
<div class="inner-block">
   <div class="boost-icons">
	   
	   <?php if($do == "Manage"){  ?>
	   

  <!--<div class="inner-block" style="margin-top:0;padding-top:0">
    <div class="inbox">
		  <i class="fa fa-tag fa-3x"></i>
    	  <h2>Ideas</h2>
    	  <div class="chit-chat-heading">
                                  All Ideas
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
									  <th>Name</th>
									  <th>Creator Name</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
								  <td>Restaurant</td>	
                                  <td>Ali</td>
								  <td>
									  <a href="Ideas.php?do=Delete" class="btn btn-danger icon"><i class="fa fa-trash"></i> Delete</a>
								  </td>	
                              </tr>
                              <tr>
                                  <td>1</td>
								  <td>Restaurant</td>	
                                  <td>Ali</td>
								  <td>
									  <a href="Ideas.php?do=Delete" class="btn btn-danger icon"><i class="fa fa-trash"></i> Delete</a>
								  </td>	
                              </tr>
                              <tr>
                                  <td>1</td>
								  <td>Restaurant</td>	
                                  <td>Ali</td>
								  <td>
									  <a href="Ideas.php?do=Delete" class="btn btn-danger icon"><i class="fa fa-trash"></i> Delete</a>
								  </td>	
                              </tr>
                              <tr>
                                  <td>1</td>
								  <td>Restaurant</td>	
                                  <td>Ali</td>
								  <td>
									  <a href="Ideas.php?do=Delete" class="btn btn-danger icon"><i class="fa fa-trash"></i> Delete</a>
								  </td>	
                              </tr>
                              <tr>
                                  <td>1</td>
								  <td>Restaurant</td>	
                                  <td>Ali</td>
								  <td>
									  <a href="Ideas.php?do=Delete" class="btn btn-danger icon"><i class="fa fa-trash"></i> Delete</a>
								  </td>	
                              </tr>
							  <tr>
                                  <td>1</td>
								  <td>Restaurant</td>	
                                  <td>Ali</td>
								  <td>
									  <a href="Ideas.php?do=Delete" class="btn btn-danger icon"><i class="fa fa-trash"></i> Delete</a>
								  </td>	
                              </tr>
							  <tr>
                                  <td>1</td>
								  <td>Restaurant</td>	
                                  <td>Ali</td>
								  <td>
									  <a href="Ideas.php?do=Delete" class="btn btn-danger icon"><i class="fa fa-trash"></i> Delete</a>
								  </td>	
                              </tr>
                          </tbody>
                      </table>
      </div>
    	
          <div class="clearfix"> </div>     
   </div>
</div>-->
	   
	   
	   <!-- Start Show Ideas By Filtering  -->
	      <div class="inner-block" style="margin-top:0;padding-top:0">
              <div class="inbox">
			  <i style="color:#D68910" class="fa fa-lightbulb-o fa-2x"></i>
    	      <h2 style="display:inline;margin-left:20px;color:#515A5A;font-family:Athelas">Ideas</h2>
				  </div>
			  </div>
          <div class="ideas" style="margin-top:0">
			   <div class="container">
				   <!--<h3 class="text-center all">All Ideas</h3>-->
				   <div class="row">
					   <?php
	  
						include('../connect.php');  
						$sql = $con->prepare("SELECT * FROM ideas");
						$sql->execute();
						$rows = $sql->fetchAll();

						foreach($rows as $pat)
						{

					   ?> 
					   <div class="col-md-4">
						   <div class="thumbnail lef" style="height:300px">
							  <!--<img src="../layouts/images/restaurant.jpeg" style="height:70px" alt="...">-->
							   <img src="data:image;base64,<?php echo $pat["image"]; ?>" style="height:70px" alt="...">
							  <div class="caption">
								<span class="h3" style="height:100px;width:100%;display:block;font-weight:bold"><?php echo $pat["title"]; ?></span>
								<!--<p></p>
								<p class="budget">Budget Amount: <span></span></p>-->
								<p><a style="width:100px" href="show_idea.php?ideaid=<?php echo $pat["ideas_ID"]; ?>" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> Show</a><a style="width:100px" href="Ideas.php?do=Delete&ideaid=<?php echo $pat["ideas_ID"]; ?>" class="btn btn-danger confirm icon" role="button"><i class="fa fa-trash"></i> Delete</a></p>
							  </div>
							</div>
					   </div>
					   <?php } ?>
					   
				   </div>
			   </div>
		   </div>
       <!-- End Show Ideas By Filtering  -->
	   
		
		<?php }elseif($do == "Delete"){
		
		
	     //echo "<div class='container'>";
		
		 $id = isset($_GET['ideaid']) && is_numeric($_GET['ideaid']) ? intval($_GET['ideaid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM ideas WHERE ideas_ID= ?");
		 $stmt->execute(array($id));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM ideas WHERE ideas_ID = :ideaid");

				$stmt->bindParam(":ideaid" , $id);

				$stmt->execute();
				
				
				
				echo '<div class="inner-block" style="margin-top:0;padding-top:0">
				</div><div class="inner-block" style="margin-top:0;padding-top:0">
				<div class="alert alert-success">Idea Deleted Successfully
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>
              <div class="inbox">
			  <i style="color:#D68910" class="fa fa-lightbulb-o fa-2x"></i>
    	      <h2 style="display:inline;margin-left:20px;color:#515A5A;font-family:Athelas">Ideas</h2>
				  </div>
			  </div>
          <div class="ideas" style="margin-top:0">
			   <div class="container">
				   <!--<h3 class="text-center all">All Ideas</h3>-->
				   <div class="row">';
					 
	  
						include('../connect.php');  
						$sql = $con->prepare("SELECT * FROM ideas");
						$sql->execute();
						$rows = $sql->fetchAll();

						foreach($rows as $pat)
						{

					  
					   echo '<div class="col-md-4">
						   <div class="thumbnail lef">
							  <img src="../layouts/images/restaurant.jpeg" style="height:70px" alt="..."> 
							  <div class="caption">
								<h3>' . $pat["title"]. '</h3>
								<p>' . $pat["idea_description"]. '</p>
								<p class="budget">Budget Amount: <span>' . $pat["Budget"] . 'R' . '</span></p> 
								<p><a style="width:100px" href="show_idea.php?ideaid=' .  $pat["ideas_ID"] . '" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> Show</a><a style="width:100px" href="Ideas.php?do=Delete&ideaid=' . $pat["ideas_ID"] . '" class="btn btn-danger confirm icon" role="button"><i class="fa fa-trash"></i> Delete</a></p>
							  </div>
							</div>
					   </div>';
					    } 
					   
				   echo '</div>
			   </div>
		   </div>';

				
				
			}else{
				
				echo "<div class='alert alert-danger'>You Can not Browse This Page</div>";
				
				
			}
		
		//echo "</div>";
	
	
	     
		 } ?>
	   
     </div>
</div>
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		    <a style="height:200px"  href="../homepage.php"><img id="logo" src="layouts/images/logo.jpg" width="81%" height="70px" style="margin-top:10px;margin-left:16px;margin-top:16px" alt="Logo"/></a>
		    <hr style="border-bottom:2px solid #000;margin-bottom:0">
		    <div class="menu">
		      <ul id="menu" >
		        <li class="activ"><a href="Ideas.php"><i class="fa fa-lightbulb-o"></i><span>Ideas</span></a></li>
		        <li><a href="creators.php"><i class="fa fa-user"></i><span>Creators</span></a></li>
		        <li><a href="Investors.php"><i class="fa fa-users"></i><span>Investors</span></a></li>
				  <li><a href="Categories.php"><i class="fa fa-archive"></i><span>Category</span></a></li>
				  <li><a href="Tags.php"><i class="fa fa-tag"></i><span>Tags</span></a></li>
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


                      
						
