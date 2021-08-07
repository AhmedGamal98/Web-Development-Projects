<?php 

ob_start();

include "init.php";

include $tpl .  "header.php";

session_start();

$type = $_SESSION['type'];

if($type == "creator"){

  $id = $_SESSION['creatorid'];
	
}else if($type == "investor"){
	
	
	$id = $_SESSION['investorid'];
	
}

$do = isset($_GET['page'])? $_GET['page'] : "Add";

?>

			  <nav class="navbar navbar-default" style="font-size:14px">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="homepage.php"><img src="admin/layouts/images/logo.jpg" alt="Forsah" width="60%" height="70px"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 nav">
				  <ul class="nav navbar-nav navbar-right login links" style="height:65px">
					<li><a style="color:#515A5A;margin-top:25px" href="ideas.php">Ideas</a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="investors.php">Investors</a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="about.php">About Us</a></li>
					<li><a style="color:#515A5A;margin-top:25px" href="contact.php">Contact Us</a></li>  
					<!--<li title="Sign In"><a style="background-color:#D9D9D9;color:#515A5A;width:40px;height:40px;border:none;margin-top:-20px;margin-right:-5px" href="login.php" class="btn btn-primary log"><i style="font-size:22px;color:#D68910" class="fa fa-user"></i></a></li>-->
					<?php if(!isset($_SESSION['password'])){  ?> 
					  
					<li><a style="background-color:#D9D9D9;color:#515A5A;width:40px;height:40px;border:none;margin-top:-20px;margin-right: -15px;font-weight:bold;width:100px" href="signup.php" class="up">Sign Up</a></li>
					<li><a style="background-color:#D9D9D9;color:#515A5A;width:40px;height:40px;border:none;margin-top:-20px;margin-right: -15px;font-weight:bold;width:100px" href="login.php" class="up">Sign In</a></li>    
					 
					 <?php  }else{
					  
					  if($_SESSION['type'] == "creator"){
					  
					  ?> 
					  
					  <li class="dropdown" style="margin-top:-20px;margin-right:-5px">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size:24px;color:#D68910" class="fa fa-user"></i> <!--<span class="caret"></span>--></a>
					  <ul class="dropdown-menu">
						<li><a href="Creator/profile.php" style="color:#000"><i class="fa fa-user"></i> Account Information</a></li>
						<li><a href="Creator/chat.php" style="color:#000"><i class="fa fa-envelope"></i> Messages</a></li>  
						<li><a href="logout.php" style="color:#000"><i class="fa fa-sign-out"></i> Sign out</a></li>
					  </ul>
					</li> 
					  
					  
					  
					 <?php 
					  
					  }elseif($_SESSION['type'] == "investor"){ ?>
						  
						  
					  <li class="dropdown" style="margin-top:-20px;margin-right:-5px">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size:24px;color:#D68910" class="fa fa-user"></i> <!--<span class="caret"></span>--></a>
					  <ul class="dropdown-menu">
						<li><a href="Investor/profile.php" style="color:#000"><i class="fa fa-user"></i> Account Information</a></li>
						<li><a href="Investor/chat.php" style="color:#000"><i class="fa fa-envelope"></i> Messages</a></li>  
						<li><a href="logout.php" style="color:#000"><i class="fa fa-sign-out"></i> Sign out</a></li>
					  </ul>
					</li> 
					  
						  
					<?php	  
					  }elseif($_SESSION['type'] == "admin"){ ?>
					  
					  <li class="dropdown" style="margin-top:-20px;margin-right:-5px">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size:24px;color:#D68910" class="fa fa-user"></i> <!--<span class="caret"></span>--></a>
					  <ul class="dropdown-menu">
						<li><a href="admin/Ideas.php" style="color:#000"><i class="fa fa-user"></i> Account Information</a></li>  
						<li><a href="logout.php" style="color:#000"><i class="fa fa-sign-out"></i> Sign out</a></li>
					  </ul>
					</li>
					  
					  
				  <?php	  }}  ?>  
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
       
	   <!-- End Apper Bar -->
<?php  if($do == "Add"){ ?>

    <div class="add_idea">
	  <div class="container">
		  <div class="header text-center">
			  <h2 style="color:#D68910;font-family:Athelas">Start a Project</h2>
			  <p style="color:#515A5A;font-family:Athelas">Bring Your Creative Project To Life</p>
		  </div>
		  <div class="form">
			  <form class="idea" action="?page=Insert" method="post" enctype="multipart/form-data">
				  <div class="row">
					  <div class="col-md-6">
						  <div class="col-md-4"><label>Category</label></div>
						  <div class="col-md-4 cat ast">
						  <select class="form-control category choices form-select" name="category" id="categoryid" data-live-search="true" aria-required="true" aria-invalid="false" style="margin-bottom:20px" required>
							 <option value="">Category</option>
							  <?php
	  
								include('connect.php');  
								$sql = $con->prepare("SELECT * FROM category");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								 <a href="?categoryid=<?php echo $pat["category_id"]; ?>"><option value="<?php echo $pat["category_id"]; ?>"><?php echo $pat["category_name"]; ?></option></a>
							  
							 <?php } ?> 
					      </select>
						  <i class="fa fa-check check3"></i>
						  <i class="fa fa-close close3"></i>
						  <div class="alert alert-danger empty-alert" style="width:320px">You Must Select A <strong></strong>Category</div>	  
					    </div>
					  </div>
				     <div class="col-md-6">
					  <div class="col-md-4"><label>Tags</label></div>
					  <div class="col-md-4 cat ast">
						  <select class="form-control tag choices form-select" id="tagid" name="tags" style="margin-bottom:20px" required>
							 
					      </select>
						  <i class="fa fa-check check3"></i>
						  <i class="fa fa-close close3"></i>
						  <div class="alert alert-danger empty-alert" style="width:320px">You Must Select A <strong></strong>Tag</div>
					  </div>
				  </div>
				  <div class="col-md-6">	  
					  <div class="col-md-4"><label>Title</label></div>
					  <div class="form-group ast col-md-4">
						<input class="form-control title" type="text" name="title" class="first" placeholder="Enter Title" required>
						<i class="fa fa-check check2"></i>
						<i class="fa fa-close close2"></i>
						<div class="alert alert-danger empty-alert" style="width:320px">Title Can't Be <strong></strong>Empty</div>
						<div class="alert alert-danger number-alert" style="width:320px">Title Must Be <strong>Contains Only Characters</strong></div>  
					  </div>
				  </div>	  
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Budget Amount</label></div>
						  <div class="form-group ast col-md-4">
							<input class="form-control budget" type="text" name="budget" class="first" placeholder="Enter Budget" required>
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Budget amount Can't Be <strong></strong>Empty</div>
							<div class="alert alert-danger number-alert" style="width:320px">Budget amount Must Be <strong>Contains Only Numbers</strong></div>  
					      </div>
				  </div>
				  <div class="col-md-6">  
					  <div class="col-md-4"><label>Brief About Your Idea</label></div>
					  <div class="form-group ast col-md-4">
						<textarea class="form-control brief" placeholder="Brief About Your Idea" style="margin-bottom:20px" name="brief" required></textarea>
						<i class="fa fa-check check2"></i>
						<i class="fa fa-close close2"></i>
						<div class="alert alert-danger empty-alert" style="width:320px">Description Can't Be <strong></strong>Empty</div>
						<div class="alert alert-danger number-alert" style="width:320px">Description Must Be <strong>Contains Only Characters</strong></div>   
					  </div>
				  </div>
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Expired Date</label></div>
						  <div class="form-group ast col-md-4">
							<input style="width:320px" class="form-control budget" type="date" name="date" class="first" placeholder="Enter Expired Date" autocomplete="off">
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Expired Date Can't Be <strong></strong>Empty</div> 
					      </div>
				  </div>	  
				  <div class="col-md-6">  
					  <div class="col-md-4"><label>Upload Photo</label></div>
					  <div class="form-group ast col-md-4">
						<input style="margin-bottom:20px" type="file" class="file" name="image" class="first" required>
						<i class="fa fa-check check2"></i>
						<i class="fa fa-close close2"></i>
						<div class="alert alert-danger empty-alert" style="width:320px">Must By Select an Photo To Your <strong></strong>Idea</div>
					  </div>
				  </div>
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Raised Amount</label></div>
						  <div class="form-group ast col-md-4">
							<input class="form-control budget" type="text" name="raised" class="first" placeholder="Enter Raised Amount" required>
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Raised amount Can't Be <strong></strong>Empty</div>
							<div class="alert alert-danger number-alert" style="width:320px">Raised amount Must Be <strong>Contains Only Numbers</strong></div>  
					      </div>
				  </div>
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Status</label></div>
					  <div class="col-md-4 cat ast">
						  <select class="form-control tag" name="status" style="margin-bottom:20px" required>
							 <option value="0">Status</option>
							 <option value="1">Completed</option>
							 <option value="2">Pending</option>
							 <option value="3">Expired</option>
					      </select>
						  <i class="fa fa-check check3"></i>
						  <i class="fa fa-close close3"></i>
						  <div class="alert alert-danger empty-alert" style="width:320px">You Must Select A <strong></strong>Status</div>
					  </div>
				  </div>	
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Current Investors</label></div>
						  <div class="form-group ast col-md-4">
							<input style="width:320px" class="form-control budget" type="number" min="0" maxlength="50" name="current" class="first" placeholder="Enter Current Investors" required>
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Current Investors Can't Be <strong></strong>Empty</div>
							<div class="alert alert-danger number-alert" style="width:320px">Current Investors Must Be <strong>Contains Only Numbers</strong></div>  
					      </div>
				  </div>	  
				  <div class="col-md-12"> 
				      <input style="background-color:#FAD7A0" class="btn btn-outline-primary center-block" type="submit" name="upload" value="Upload">
				  </div>	 	  
				  </div>
			  </form>
		  </div>
	  </div>
    </div>

<?php  }elseif($do == "Insert"){


echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$category = $_POST["category"];
			$tags = $_POST["tags"];
			$title    = $_POST["title"];
			$budget = $_POST["budget"];
			$brief = $_POST["brief"];
			$expired = $_POST["date"];
			$raised = $_POST["raised"];
			$current = $_POST["current"];
			$status = $_POST["status"];
			//$phone = $_POST["photo"];
			
			
			if(isset($_POST['upload'])){
							 
							 
				 if($_FILES['image']['tmp_name'] == FALSE){


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
				
				 include('connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM ideas WHERE title= ?");
				 $stmt->execute(array($title));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					echo '<div class="add_idea">
	  <div style="margin-top:40px" class="container">
	  <div class="alert alert-info">This Idea Is Found Before Please Try Again
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
		  <div class="header text-center">
			  <h2 style="color:#D68910;font-family:Athelas">Start a Project</h2>
			  <p style="color:#515A5A;font-family:Athelas">Bring Your Creative Project To Life</p>
		  </div>
		  <div class="form">
			  <form class="idea" action="?page=Insert" method="post">
				  <div class="row">
					  <div class="col-md-6">
						  <div class="col-md-4"><label>Category</label></div>
						  <div class="col-md-4 cat ast">
						  <select class="form-control category" name="category" style="margin-bottom:20px" required>
							 <option value="">Category</option>';
							  
	  
								include('connect.php');  
								$sql = $con->prepare("SELECT * FROM category");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							  
								 echo '<a href="?categoryid=' . $pat["category_id"] . '"><option value="' . $pat["category_id"] . '">' . $pat["category_name"] . '</option></a>';
							  
							 } 
					      echo '</select>
						  <i class="fa fa-check check3"></i>
						  <i class="fa fa-close close3"></i>
						  <div class="alert alert-danger empty-alert" style="width:320px">You Must Select A <strong></strong>Category</div>	  
					    </div>
					  </div>
				     <div class="col-md-6">
					  <div class="col-md-4"><label>Tags</label></div>
					  <div class="col-md-4 cat ast">
						  <select class="form-control tag" name="tags" style="margin-bottom:20px" required>
							 <option value="">Tag</option>';
							
	  
								
								$sql = $con->prepare("SELECT * FROM tags");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   
								 echo '<option value="'  . $pat["tag_id"] . '">'  . $pat["tag_name"] . '</option>';
							  
							 }
					      echo '</select>
						  <i class="fa fa-check check3"></i>
						  <i class="fa fa-close close3"></i>
						  <div class="alert alert-danger empty-alert" style="width:320px">You Must Select A <strong></strong>Tag</div>
					  </div>
				  </div>
				  <div class="col-md-6">	  
					  <div class="col-md-4"><label>Title</label></div>
					  <div class="form-group ast col-md-4">
						<input class="form-control title" type="text" name="title" class="first" placeholder="Enter Title" required>
						<i class="fa fa-check check2"></i>
						<i class="fa fa-close close2"></i>
						<div class="alert alert-danger empty-alert" style="width:320px">Title Can\'t Be <strong></strong>Empty</div>
						<div class="alert alert-danger number-alert" style="width:320px">Title Must Be <strong>Contains Only Characters</strong></div>  
					  </div>
				  </div>	  
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Budget Amount</label></div>
						  <div class="form-group ast col-md-4">
							<input class="form-control budget" type="text" name="budget" class="first" placeholder="Enter Budget" required>
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Budget amount Can\'t Be <strong></strong>Empty</div>
							<div class="alert alert-danger number-alert" style="width:320px">Budget amount Must Be <strong>Contains Only Numbers</strong></div>  
					      </div>
				  </div>
				  <div class="col-md-6">  
					  <div class="col-md-4"><label>Brief About Your Idea</label></div>
					  <div class="form-group ast col-md-4">
						<textarea class="form-control brief" placeholder="Brief About Your Idea" style="margin-bottom:20px" name="brief" required></textarea>
						<i class="fa fa-check check2"></i>
						<i class="fa fa-close close2"></i>
						<div class="alert alert-danger empty-alert" style="width:320px">Description Can\'t Be <strong></strong>Empty</div>
						<div class="alert alert-danger number-alert" style="width:320px">Description Must Be <strong>Contains Only Characters</strong></div>   
					  </div>
				  </div>
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Expired Date</label></div>
						  <div class="form-group ast col-md-4">
							<input style="width:320px" class="form-control budget" type="date" name="date" class="first" placeholder="Enter Expired Date" autocomplete="off">
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Expired Date Can\'t Be <strong></strong>Empty</div> 
					      </div>
				  </div>	  
				  <div class="col-md-6">  
					  <div class="col-md-4"><label>Upload Photo</label></div>
					  <div class="form-group ast col-md-4">
						<input style="margin-bottom:20px" type="file" class="file" name="image" class="first" required>
						<i class="fa fa-check check2"></i>
						<i class="fa fa-close close2"></i>
						<div class="alert alert-danger empty-alert" style="width:320px">Must By Select an Photo To Your <strong></strong>Idea</div>
					  </div>
				  </div>
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Raised Amount</label></div>
						  <div class="form-group ast col-md-4">
							<input class="form-control budget" type="text" name="raised" class="first" placeholder="Enter Budget" required>
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Raised amount Can\'t Be <strong></strong>Empty</div>
							<div class="alert alert-danger number-alert" style="width:320px">Raised amount Must Be <strong>Contains Only Numbers</strong></div>  
					      </div>
				  </div>
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Status</label></div>
					  <div class="col-md-4 cat ast">
						  <select class="form-control tag" name="status" style="margin-bottom:20px" required>
							 <option value="0">Status</option>
							 <option value="1">Completed</option>
							 <option value="2">Pending</option>
							 <option value="3">Expired</option>
					      </select>
						  <i class="fa fa-check check3"></i>
						  <i class="fa fa-close close3"></i>
						  <div class="alert alert-danger empty-alert" style="width:320px">You Must Select A <strong></strong>Status</div>
					  </div>
				  </div>	
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Current Investors</label></div>
						  <div class="form-group ast col-md-4">
							<input class="form-control budget" type="text" name="current" min="0" maxlength="50" class="first" placeholder="Enter Current Investors" required>
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Current Investors Can\'t Be <strong></strong>Empty</div>
							<div class="alert alert-danger number-alert" style="width:320px">Current Investors Must Be <strong>Contains Only Numbers</strong></div>  
					      </div>
				  </div>	  
				  <div class="col-md-12"> 
				      <input style="background-color:#FAD7A0" class="btn btn-outline-primary center-block" type="submit" name="upload" value="Upload">
				  </div>	 	  
				  </div>
			  </form>
		  </div>
	  </div>
    </div>';
					
				}else{
				

					$stmt = $con->prepare("INSERT INTO ideas(Budget , Current_investors , Status , image , name , idea_category_id , Raised_money , idea_description , title , idea_tag_id , expiredDate , creator_ID) VALUES(:budget, :investor, :status, :image , :name , :category , :raised , :desc ,  :title , :tag , :expired , :creatorid)");

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

					));

					// echo success message

					
					echo '<div class="add_idea">
	  <div style="margin-top:40px" class="container">
	  <div class="alert alert-info">Idea Added Successfully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
		  <div class="header text-center">
			  <h2 style="color:#D68910;font-family:Athelas">Start a Project</h2>
			  <p style="color:#515A5A;font-family:Athelas">Bring Your Creative Project To Life</p>
		  </div>
		  <div class="form">
			  <form class="idea" action="?page=Insert" method="post">
				  <div class="row">
					  <div class="col-md-6">
						  <div class="col-md-4"><label>Category</label></div>
						  <div class="col-md-4 cat ast">
						   <select class="form-control category" name="category" style="margin-bottom:20px" required>
							 <option value="">Category</option>';
							  
	  
								include('connect.php');  
								$sql = $con->prepare("SELECT * FROM category");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							  
								 echo '<a href="?categoryid=' . $pat["category_id"] . '"><option value="' . $pat["category_id"] . '">' . $pat["category_name"] . '</option></a>';
							  
							 } 
					      echo '</select>
						  <i class="fa fa-check check3"></i>
						  <i class="fa fa-close close3"></i>
						  <div class="alert alert-danger empty-alert" style="width:320px">You Must Select A <strong></strong>Category</div>	  
					    </div>
					  </div>
				     <div class="col-md-6">
					  <div class="col-md-4"><label>Tags</label></div>
					  <div class="col-md-4 cat ast">
						  <select class="form-control tag" name="tags" style="margin-bottom:20px" required>
							 <option value="">Tag</option>';
							
	  
								
								$sql = $con->prepare("SELECT * FROM tags");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   
								 echo '<option value="'  . $pat["tag_id"] . '">'  . $pat["tag_name"] . '</option>';
							  
							 }
					      echo '</select>
						  <i class="fa fa-check check3"></i>
						  <i class="fa fa-close close3"></i>
						  <div class="alert alert-danger empty-alert" style="width:320px">You Must Select A <strong></strong>Tag</div>
					  </div>
				  </div>
				  <div class="col-md-6">	  
					  <div class="col-md-4"><label>Title</label></div>
					  <div class="form-group ast col-md-4">
						<input class="form-control title" type="text" name="title" class="first" placeholder="Enter Title" required>
						<i class="fa fa-check check2"></i>
						<i class="fa fa-close close2"></i>
						<div class="alert alert-danger empty-alert" style="width:320px">Title Can\'t Be <strong></strong>Empty</div>
						<div class="alert alert-danger number-alert" style="width:320px">Title Must Be <strong>Contains Only Characters</strong></div>  
					  </div>
				  </div>	  
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Budget Amount</label></div>
						  <div class="form-group ast col-md-4">
							<input class="form-control budget" type="text" name="budget" class="first" placeholder="Enter Budget" required>
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Budget amount Can\'t Be <strong></strong>Empty</div>
							<div class="alert alert-danger number-alert" style="width:320px">Budget amount Must Be <strong>Contains Only Numbers</strong></div>  
					      </div>
				  </div>
				  <div class="col-md-6">  
					  <div class="col-md-4"><label>Brief About Your Idea</label></div>
					  <div class="form-group ast col-md-4">
						<textarea class="form-control brief" placeholder="Brief About Your Idea" style="margin-bottom:20px" name="brief" required></textarea>
						<i class="fa fa-check check2"></i>
						<i class="fa fa-close close2"></i>
						<div class="alert alert-danger empty-alert" style="width:320px">Description Can\'t Be <strong></strong>Empty</div>
						<div class="alert alert-danger number-alert" style="width:320px">Description Must Be <strong>Contains Only Characters</strong></div>   
					  </div>
				  </div>
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Expired Date</label></div>
						  <div class="form-group ast col-md-4">
							<input style="width:320px" class="form-control budget" type="date" name="date" class="first" placeholder="Enter Expired Date" autocomplete="off">
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Expired Date Can\'t Be <strong></strong>Empty</div> 
					      </div>
				  </div>	  
				  <div class="col-md-6">  
					  <div class="col-md-4"><label>Upload Photo</label></div>
					  <div class="form-group ast col-md-4">
						<input style="margin-bottom:20px" type="file" class="file" name="image" class="first" required>
						<i class="fa fa-check check2"></i>
						<i class="fa fa-close close2"></i>
						<div class="alert alert-danger empty-alert" style="width:320px">Must By Select an Photo To Your <strong></strong>Idea</div>
					  </div>
				  </div>
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Raised Amount</label></div>
						  <div class="form-group ast col-md-4">
							<input class="form-control budget" type="text" name="raised" class="first" placeholder="Enter Budget" required>
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Raised amount Can\'t Be <strong></strong>Empty</div>
							<div class="alert alert-danger number-alert" style="width:320px">Raised amount Must Be <strong>Contains Only Numbers</strong></div>  
					      </div>
				  </div>
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Status</label></div>
					  <div class="col-md-4 cat ast">
						  <select class="form-control tag" name="status" style="margin-bottom:20px" required>
							 <option value="0">Status</option>
							 <option value="1">Completed</option>
							 <option value="2">Pending</option>
							 <option value="3">Expired</option>
					      </select>
						  <i class="fa fa-check check3"></i>
						  <i class="fa fa-close close3"></i>
						  <div class="alert alert-danger empty-alert" style="width:320px">You Must Select A <strong></strong>Status</div>
					  </div>
				  </div>	
				  <div class="col-md-6">
					  <div class="col-md-4"><label>Current Investors</label></div>
						  <div class="form-group ast col-md-4">
							<input class="form-control budget" type="text" name="current" min="0" maxlength="50" class="first" placeholder="Enter Current Investors" required>
							<i class="fa fa-check check2"></i>
							<i class="fa fa-close close2"></i>
							<div class="alert alert-danger empty-alert" style="width:320px">Current Investors Can\'t Be <strong></strong>Empty</div>
							<div class="alert alert-danger number-alert" style="width:320px">Current Investors Must Be <strong>Contains Only Numbers</strong></div>  
					      </div>
				  </div>	  
				  <div class="col-md-12"> 
				      <input style="background-color:#FAD7A0" class="btn btn-outline-primary center-block" type="submit" name="upload" value="Upload">
				  </div>	 	  
				  </div>
			  </form>
		  </div>
	  </div>
    </div>';
					
					
				}
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>Can not Browse This Page</div>";
			
		}
		
		echo "</div>";


 

 } ?>

<!-- Start Footer -->
         <div class="footer">
			 <div class="container">
				 <div class="row">
					 <div class="col-md-12">
						 <!-- Start Help -->
						 <div class="contact text-center">
							 <div class="container">
								 <div class="row">
									 <div class="col-md-6 con">
										 <h3 style="color:#D68910">Contact</h3>
										 <p><i style="color:#D68910" class="fa fa-envelope-o"></i> contact@Fursah.com</p>
										 <p><i style="color:#D68910" class="fa fa-phone"></i> +966 545446161</p>
									 </div>
									 <!--<div class="col-md-4 con">
										 <h3>Pages</h3>
										 <p><a href="about.php" style="text-decoration:none;color:#FFF">About Us</a></p>
										 <p><a href="contact.php" style="text-decoration:none;color:#FFF">Contact Us</a></p>
									 </div>-->
									 <div class="col-md-6 con">
										 <h3 style="color:#D68910">More</h3>
										 <p><a href="terms.php" style="text-decoration:none;color:#FFF">Terms</a></p>
										 <p><a href="terms.php" style="text-decoration:none;color:#FFF">Privacy</a></p>
									 </div>
								 </div>
							 </div>
						 </div>
						 <!-- End Help -->
					 </div>
					 <div class="col-md-12 copy text-center">
						 Copyrights &copy; All Rights Reserved 2021 <span style="color:#D68910">FURSAH</span>
					 </div>
				 </div>
			 </div>
         </div>
       <!-- End Footer -->
<?php include  $tpl . "footer.php"; ob_end_flush(); ?>