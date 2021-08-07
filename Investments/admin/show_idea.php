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
	   
	    <div class="" style="padding-left:30px;margin-top:0">
			<a style="text-decoration:none;padding-top:0" href="ideas.php"><i class="fa fa-chevron-left fa-2x" style="color:#B75E21;margin-right:30px"></i></a>
		</div>
        <div class="idea_detail" style="margin-top:10px;height:550px">
			<div class="row">
				<?php
								 
				$id = isset($_GET['ideaid']) && is_numeric($_GET['ideaid']) ? intval($_GET['ideaid']) : 0;				 
	  
				include('../connect.php');  
				$sql = $con->prepare("SELECT
                          ideas.* , creator.Fname , category.category_name , tags.tag_name
					   FROM
					      ideas
					   INNER JOIN
					      creator
					   ON
					      ideas.creator_ID = creator.nationalid
						INNER JOIN 
						category
						ON ideas.idea_category_id = category.category_id
						INNER JOIN
						tags 
						ON ideas.idea_tag_id = tags.tag_id  
						  
					   WHERE ideas.ideas_ID=$id");
				$sql->execute();
				$rows = $sql->fetchAll();

				foreach($rows as $pat)
				{

			   ?> 
				<div class="col-md-5 center-block" style="margin-left:50px">
					<!--<img class="img-responsive" src="../layouts/images/restaurant.jpeg">-->
					<img class="img-responsive" src="data:image;base64,<?php echo $pat["image"]; ?>"  alt="...">
					
				</div>
				<div class="col-md-6 details">
					<h3 style="color:#D68910"><?php echo $pat["title"]; ?></h3>
					<h4 style="color:#D68910">By <?php echo $pat["Fname"]; ?></h4>
					<p><?php echo $pat["idea_description"]; ?></p>
					<p>Category:<span style="color:#D68910"><?php echo $pat["category_name"]; ?></span></p>
					<p>Tag:<span style="color:#D68910"> <?php echo $pat["tag_name"]; ?></span></p>
					
					<p>Raised Amount:<span style="color:#D68910"> <?php echo $pat["Raised_money"] . " RS"; ?></span></p>
					<p>Budget Amount:<span style="color:#D68910"><?php echo $pat["Budget"] . " RS"; ?></span></p>
					<p>Current Investors:<span style="color:#D68910"><?php echo $pat["Current_investors"]; ?></span></p>
					<p>Expired Date:<span style="color:#D68910"><?php echo $pat["expiredDate"]; ?></span></p>
					<p>Status:<span style="color:#D68910"><?php echo $pat["Status"]; ?></span></p>
					
					<!--<p>Are You Intersted?</p>-->
					<!--<a href="#" class="request confirm"><i class="fa fa-envelope-o"></i> Send Request To Creator</a>-->
				</div>
				<?php  } ?>
			</div>
     </div>
	   
		
		<?php }elseif($do == "Delete"){ ?>
		
		
		    <div class="container">
				<div class="alert alert-danger">Deleted Successfully</div>
	        </div>
		
		
		<?php } ?>
	   
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
		        <li><a href="Ideas.php"><i class="fa fa-lightbulb-o"></i><span>Ideas</span></a></li>
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


                      
						
