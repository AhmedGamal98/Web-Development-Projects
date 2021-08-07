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
            <!--header start here-->
				<div class="header-main" style="border-bottom:2px solid #000">
					<!--<div class="header-left">
							<div class="logo-name">
									 <a href="homepage.php"><img id="logo" src="layouts/images/logo.jpg" width="150px" height="70px" alt="Logo"/>
								  </a> 								
						    </div>
							<div class="clearfix"> </div>
						 </div>-->
						 <div class="header-right" style="height:75px">
							 
							 
							 
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
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
	   

  <div class="inner-block" style="margin-top:0;padding-top:0">
    <div class="inbox">
		  <i style="color:#D68910" class="fa fa-archive fa-2x"></i>
    	  <h2 style="display:inline;margin-left:20px;color:#515A5A;font-family:Athelas">Categories</h2>
		  <?php if($do != "Add"){  ?>
							
			 <a href="Categories.php?do=Add" class="btn btn-primary icon2 pull-right" style="margin-top:10px;color:#D68910;border:1px solid #D68910"><i class="fa fa-plus"></i> Add New Category</a>


		 <?php } ?>
                            <div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
									  <th>Category</th>
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM category");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?> 
                                <tr>
                                  <td><?php  echo $pat["category_id"] ?></td>
                                  <td><?php  echo $pat["category_name"] ?></td>
								  <td>
									  <a title="Delete" href="categories.php?do=Delete&categoryid=<?php  echo $pat["category_id"] ?>" class="confirm icons"><i class="fa fa-trash"></i></a>
								  </td>		
                              </tr>
                              <?php } ?>
                          </tbody>
                      </table>
      </div>
    	
          <div class="clearfix"> </div>     
   </div>
</div>
	   
	   <?php  }elseif($do == "Add"){ ?>
		
	<h1 style="margin-top:40px;color:#515A5A" class="text-center">Add Category</h1>	
	<div class="login-page">
    <div class="login-main">  	
			<div class="login-block">
				<form action="?do=Insert" method="post">
					<input style="width:100%" class="form-control" type="text" name="category" placeholder="Enter Name Of Category" required="">
					<input style="background-color:#FAD7A0;border:none;color:#000" type="submit" name="create" value="Create">
				</form>
			</div>
      </div>
</div>
	   
	   
<?php  }elseif($do == "Insert"){ 
	   
	   
	   //echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$name = $_POST["category"];
			
			
			
			$formErrors = array();
			
			if(empty($name)){
				
				$formErrors[] = "Category Can not Be Empty";
				
			}
			
			
			
			if(empty($formErrors)){
				
				//Check if the item exist in database or not
				
				//$check = checkItem("Username" , "users" , $username);
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM category WHERE category_name= ?");
				 $stmt->execute(array($name));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					echo "<div style='margin-left:20px' class='alert alert-danger'>This Category Is Found Before Please Try Again
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
					
					echo '<h1 style="margin-top:40px;color:#515A5A" class="text-center">Add Category</h1>	
	<div class="login-page">
    <div class="login-main">  	
			<div class="login-block">
				<form action="?do=Insert" method="post">
					<input style="width:100%" class="form-control" type="text" name="category" placeholder="Enter Name Of Category" required="">
					<input style="background-color:#FAD7A0;border:none;color:#000" type="submit" name="create" value="Create">
				</form>
			</div>
      </div>
</div>';
					
				}else{
				

					$stmt = $con->prepare("INSERT INTO category(category_name) VALUES(:name)");

					$stmt->execute(array(

						'name' => $name
						
					));


					// echo success message

					echo '<div style="margin-left:20px" class="alert alert-success">Category Added Successfully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<h1 style="margin-top:40px;color:#515A5A" class="text-center">Add Category</h1>	
	<div class="login-page">
    <div class="login-main">  	
			<div class="login-block">
				<form action="?do=Insert" method="post">
					<input style="width:100%" class="form-control" type="text" name="category" placeholder="Enter Name Of Category" required="">
					<input style="background-color:#FAD7A0;border:none;color:#000" type="submit" name="create" value="Create">
				</form>
			</div>
      </div>
</div>';
					
					
				}
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>You can not This Browse</div>";
			
		}
		
		//echo "</div>";
	   
	   
		 
		
		
 }elseif($do == "Delete"){
		
	echo "<div class='container'>";
		
		 $id = isset($_GET['categoryid']) && is_numeric($_GET['categoryid']) ? intval($_GET['categoryid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM category WHERE category_id= ?");
		 $stmt->execute(array($id));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM category WHERE category_id = :categoryid");

				$stmt->bindParam(":categoryid" , $id);

				$stmt->execute();

				
				echo '
				</div><div class="inner-block" style="margin-top:0;padding-top:0">
				<div class="alert alert-success">Category Deleted Successfully
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>
    <div class="inbox">
		  <i style="color:#D68910" class="fa fa-archive fa-2x"></i>
    	  <h2 style="display:inline;margin-left:20px;color:#515A5A;font-family:Athelas">Categories</h2>';
		  if($do != "Add"){ 
							
			 echo '<a href="Categories.php?do=Add" class="btn btn-primary icon2 pull-right" style="margin-top:10px;color:#D68910;border:1px solid #D68910"><i class="fa fa-plus"></i> Add New Category</a>';


		  } 
                            echo'<div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
									  <th>Category</th>
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>';
	
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM category");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

				
                                echo '<tr>
                                  <td>' . $pat["category_id"] . '</td>
                                  <td>' . $pat["category_name"]. '</td>
								  <td>
									  <a title="Delete" href="categories.php?do=Delete&categoryid=' .  $pat["category_id"] .  '" class="confirm icons"><i class="fa fa-trash"></i></a>
								  </td>		
                              </tr>';
                              }
                         echo '</tbody>
                      </table>
      </div>
    	
          <div class="clearfix"> </div>     
   </div>
</div>';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>You Can not Browse This Page</div>";
				
				
			}
		
		echo "</div>";
		

		
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
		      <ul id="menu">
		        <li><a href="Ideas.php"><i class="fa fa-lightbulb-o"></i><span>Ideas</span></a></li>
		        <li><a href="creators.php"><i class="fa fa-user"></i><span>Creators</span></a></li>
		        <li><a href="Investors.php"><i class="fa fa-users"></i><span>Investors</span></a></li>
				  <li class="activ"><a href="Categories.php"><i class="fa fa-archive"></i><span>Category</span></a></li>
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


                      
						
