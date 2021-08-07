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
	   

  <div class="inner-block" style="margin-top:0;padding-top:0">
    <div class="inbox">
		  <i style="color:#D68910" class="fa fa-users fa-2x"></i>
    	  <h2 style="display:inline;margin-left:20px;color:#515A5A;font-family:Athelas">Investors</h2>
                            <div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
									  <th>National ID</th>	
									  <th>First Name</th>
									  <th>Last Name</th>	
									  <th>Email</th>	
									  <th>Phone Number</th>
									  <th>City</th>	
									  <th>Age</th>
									  <th>Gender</th>
									  <th>Bio</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>
								   <?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM investor");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?> 
                                <tr>
                                  <td><?php echo $pat['nationalid']; ?></td>
								  <td><?php echo $pat['Fname']; ?></td>
								  <td><?php echo $pat['Lname']; ?></td>	
                                  <td><?php echo $pat['Email']; ?></td>
								  <td><?php echo "0" . $pat['PhoneNum']; ?></td>
								  <td><?php echo $pat['City']; ?></td>
								  <td><?php echo $pat['Age']; ?></td>
								  <td><?php echo $pat['Gender']; ?></td>	
								  <td><?php echo $pat['Bio']; ?></td>	
								  <td>
									  <a title="Delete" href="Investors.php?do=Delete&investorid=<?php echo $pat['nationalid']; ?>" class="confirm icons"><i class="fa fa-trash"></i></a>
									  <?php if($pat['state'] == "0"){ ?>
									  
									  
									  <a title="UnBanned" href="Investors.php?do=UnBanned&investorid=<?php echo $pat['nationalid']; ?>" class="icons"><i class="fa fa-close"></i></a>
									  
									  
									  <?php }elseif($pat['state'] == "1"){ ?>
									  
									  <a title="Banned" href="Investors.php?do=Banned&investorid=<?php echo $pat['nationalid']; ?>" class="icons"><i class="fa fa-check"></i></a>
									  
									  
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
		<?php }elseif($do == "Banned"){
	
	
	    $investorid = isset($_GET['investorid']) && is_numeric($_GET['investorid']) ? intval($_GET['investorid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM investor WHERE nationalid= ?");
		 $stmt->execute(array($investorid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("UPDATE investor SET state = 0 WHERE nationalid = ?");

				$stmt->execute(array($investorid));
				
				
				echo '
				
				<div class="inner-block" style="margin-top:0;padding-top:0">
				<div class="alert alert-success">Investor Has Banned Successfully
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>
    <div class="inbox">
		  <i style="color:#D68910" class="fa fa-user fa-2x"></i>
    	  <h2 style="display:inline;margin-left:20px;color:#515A5A;font-family:Athelas">Investors</h2>
                            <div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>National ID</th>
									  <th>First Name</th>
									  <th>Last Name</th>	
									  <th>Email</th>	
									  <th>Phone Number</th>
									  <th>City</th>
									  <th>Age</th>
									  <th>Gender</th>
									  <th>Bio</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>';
								  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM investor");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							  
                                 echo'<tr>
                                 <td>' . $pat['nationalid'] . '</td>
								  <td>' . $pat['Fname'] . '</td>
								  <td>' . $pat['Lname'] . '</td>	
                                  <td>' . $pat['Email'] . '</td>
								  <td>0' . $pat['PhoneNum'] . '</td>
								  <td>' . $pat['City'] . '</td>
								  <td>' . $pat['Age'] . '</td>
								  <td>' . $pat['Gender'] . '</td>	
								  <td>' . $pat['Bio'] . '</td>	
								  <td>
									  <a title="Delete" href="Investors.php?do=Delete&investorid=' .  $pat['nationalid'] . '" class="confirm icons"><i class="fa fa-trash"></i></a>';
								if($pat['state'] == "0"){
									  
									  
									  echo '<a title="UnBanned" href="Investors.php?do=UnBanned&investorid=' . $pat['nationalid'] . '" class="icons"><i class="fa fa-close"></i></a>';
									  
									  
								 }elseif($pat['state'] == "1"){
									  
									  echo '<a title="Banned" href="Investors.php?do=Banned&investorid=' . $pat['nationalid'] . '" class="icons"><i class="fa fa-check"></i></a>';
									  
									  
									   }
								  echo '</td>	
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
				
				echo "<div class='alert alert-danger'>You Can not Browsw This Page</div>";
				
			}
	
	    
	   
	   
	   
	   
	   }elseif($do == "UnBanned"){
	
	
	
	    $investorid = isset($_GET['investorid']) && is_numeric($_GET['investorid']) ? intval($_GET['investorid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM investor WHERE nationalid= ?");
		 $stmt->execute(array($investorid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("UPDATE investor SET state = 1 WHERE nationalid = ?");

				$stmt->execute(array($investorid));
				
				
				echo '
				
				<div class="inner-block" style="margin-top:0;padding-top:0">
				<div class="alert alert-success">Investor Has UnBanned Successfully
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>
    <div class="inbox">
		  <i style="color:#D68910" class="fa fa-user fa-2x"></i>
    	  <h2 style="display:inline;margin-left:20px;color:#515A5A;font-family:Athelas">Investors</h2>
                            <div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>National ID</th>
									  <th>First Name</th>
									  <th>Last Name</th>	
									  <th>Email</th>	
									  <th>Phone Number</th>
									  <th>City</th>
									  <th>Age</th>
									  <th>Gender</th>
									  <th>Bio</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>';
								  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM investor");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							  
                                 echo'<tr>
                                 <td>' . $pat['nationalid'] . '</td>
								  <td>' . $pat['Fname'] . '</td>
								  <td>' . $pat['Lname'] . '</td>	
                                  <td>' . $pat['Email'] . '</td>
								  <td>0' . $pat['PhoneNum'] . '</td>
								  <td>' . $pat['City'] . '</td>
								  <td>' . $pat['Age'] . '</td>
								  <td>' . $pat['Gender'] . '</td>	
								  <td>' . $pat['Bio'] . '</td>	
								  <td>
									  <a title="Delete" href="Investors.php?do=Delete&investorid=' .  $pat['nationalid'] . '" class="confirm icons"><i class="fa fa-trash"></i></a>';
								if($pat['state'] == "0"){
									  
									  
									  echo '<a title="UnBanned" href="Investors.php?do=UnBanned&investorid=' . $pat['nationalid'] . '" class="icons"><i class="fa fa-close"></i></a>';
									  
									  
								 }elseif($pat['state'] == "1"){
									  
									  echo '<a title="Banned" href="Investors.php?do=Banned&investorid=' . $pat['nationalid'] . '" class="icons"><i class="fa fa-check"></i></a>';
									  
									  
									   }
								  echo '</td>	
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
				
				echo "<div class='alert alert-danger'>You Can not Browsw This Page</div>";
				
			}
	
	   
	   
	   
	   
	   
		}elseif($do == "Delete"){
		
	
	
	     $id = isset($_GET['investorid']) && is_numeric($_GET['investorid']) ? intval($_GET['investorid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM investor WHERE nationalid= ?");
		 $stmt->execute(array($id));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM investor WHERE nationalid = :nationalid");

				$stmt->bindParam(":nationalid" , $id);

				$stmt->execute();

				
				echo '
				
				<div class="inner-block" style="margin-top:0;padding-top:0">
				<div class="alert alert-success">Investor Deleted Successfully
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>
    <div class="inbox">
		  <i style="color:#D68910" class="fa fa-user fa-2x"></i>
    	  <h2 style="display:inline;margin-left:20px;color:#515A5A;font-family:Athelas">Investors</h2>
                            <div class="table-responsive" style="margin-top:60px">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>National ID</th>
									  <th>First Name</th>
									  <th>Last Name</th>	
									  <th>Email</th>	
									  <th>Phone Number</th>
									  <th>City</th>
									  <th>Age</th>
									  <th>Gender</th>
									  <th>Bio</th>	
									  <th>Control</th>	
                                  </tr>
                              </thead>
                              <tbody>';
								  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM investor");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							  
                                 echo'<tr>
                                 <td>' . $pat['nationalid'] . '</td>
								  <td>' . $pat['Fname'] . '</td>
								  <td>' . $pat['Lname'] . '</td>	
                                  <td>' . $pat['Email'] . '</td>
								  <td>0' . $pat['PhoneNum'] . '</td>
								  <td>' . $pat['City'] . '</td>
								  <td>' . $pat['Age'] . '</td>
								  <td>' . $pat['Gender'] . '</td>	
								  <td>' . $pat['Bio'] . '</td>	
								  <td>
									  <a title="Delete" href="Investors.php?do=Delete&investorid=' .  $pat['nationalid'] . '" class="confirm icons"><i class="fa fa-trash"></i></a>';
								if($pat['state'] == "0"){
									  
									  
									  echo '<a title="Banned" href="Investors.php?do=Banned&investorid=' . $pat['nationalid'] . '" class="icons"><i class="fa fa-close"></i></a>';
									  
									  
								 }elseif($pat['state'] == "1"){
									  
									  echo '<a title="Un Banned" href="Investors.php?do=UnBanned&investorid=' . $pat['nationalid'] . '" class="icons"><i class="fa fa-check"></i></a>';
									  
									  
									   }
								  echo '</td>	
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
		    <a style="height:200px"  href="../homepage.php"><img id="logo" src="layouts/images/logo.jpg" width="81%" height="70px" style="margin-top:10px;margin-left:16px;margin-top:16px" alt="Logo"/></a>
		    <hr style="border-bottom:2px solid #000;margin-bottom:0">
		    <div class="menu">
		      <ul id="menu" >
		        <li><a href="Ideas.php"><i class="fa fa-lightbulb-o"></i><span>Ideas</span></a></li>
		        <li><a href="creators.php"><i class="fa fa-user"></i><span>Creators</span></a></li>
		        <li class="activ"><a href="Investors.php"><i class="fa fa-users"></i><span>Investors</span></a></li>
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


                      
						
