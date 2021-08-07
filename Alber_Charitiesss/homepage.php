<?php


 session_start();

?>
<!DOCTYPE html>
<html lang="">
<head>
<title>Homepage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layouts/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">	
<link href="layouts/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">		
<link href="layouts/css/login.css" rel="stylesheet" type="text/css" media="all">
<link href="layouts/css/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left">
      <ul class="nospace">
        <!--<li><a href="index.html"><i class="fas fa-home fa-lg"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>-->
		<li>Alber Charity</li>  
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> 0117222084</li>
        <li><i class="fas fa-envelope rgtspace-5"></i> info@alber.com</li>
      </ul>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="one_half first">
      <!--<h1 class="logoname"><a href="index.html"><span>Suro</span>gou</a></h1>-->
	  <a class="navbar-brand" href="homepage.php"><img src="admin/layouts/images/alber1.jpg" alt="Alber" style="width:55%;height:168px"></a>
    </div>
    <div class="one_half" style="margin-top:30px">
      <ul class="nospace clear">
        <li class="one_half first">
          <div class="block clear"><i class="fas fa-phone"></i> <span><strong class="block">Call Us:</strong> 0117222084</span> </div>
        </li>
        <li class="one_half">
          <div class="block clear"><i class="far fa-clock"></i> <span><strong class="block"> Morning:</strong> 08.00Am - 12.00Am</span> <span><strong class="block"> Evening:</strong> 04.00Am - 5.30Am</span> </div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
  <nav id="mainav" class="hoc clear" style="margin-top:10px"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="homepage.php">Home</a></li>
	  <li><a href="events.php">Events</a></li>	
	  <li><a href="cases.php">Need Cases</a></li>
	<?php 
		
		if(!isset($_SESSION['Password'])){

	?>	
	  <li><a href="sign-up.php">Sign Up</a></li>
	  <li><a href="login.php">Sign In</a></li>	
		
  <?php }else{ ?>	
		
		<li><a class="drop" href="#"><?php echo $_SESSION['Name'];  ?></a>
        <ul>
          <li><a href="User/profile.php"><i class="fa fa-user"></i> Profile</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </li>
		
  <?php } ?>		
		
      <!--<li><a class="drop" href="#">Dropdown</a>
        <ul>
          <li><a href="#">Level 2</a></li>
          <li><a class="drop" href="#">Level 2 + Drop</a>
            <ul>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
            </ul>
          </li>
          <li><a href="#">Level 2</a></li>
        </ul>
      </li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Long Link Text</a></li>-->
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('layouts/images/slide1.jpg');">
  <div id="pageintro" class="hoc clear"> 
    
    <article>
      <p>You can donate easily from home</p>
      <h3 class="heading">You can join volunteer events and provide aid</h3>
      <p>You can provide clothes or buy a food basket for the needy</p>
    </article>
  
  </div>
</div>
<!-- Start Header Photos -->
         
			<!--<div id="carousel-example-generic" class="carousel slide car" data-ride="carousel">
			  <!-- Indicators 
			  <ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>  
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>  
				<li data-target="#carousel-example-generic" data-slide-to="5"></li>  
			  </ol>

			  <!-- Wrapper for slides 
			  <div class="carousel-inner" role="listbox">
				<div class="item active">
				  <img src="layouts/images/slide1.jpg" alt="...">
				  <div class="carousel-caption" style="margin-bottom:270px">
					<h3>You can donate easily from home</h3>
				  </div>
				</div>
				<div class="item">
				  <img src="layouts/images/slide2.jpg" alt="...">
				  <div class="carousel-caption" style="margin-bottom:270px">
				    <h3>You can join volunteer events and provide aid</h3> 
				  </div>
				</div>
				<div class="item">
				 <img src="layouts/images/slide3.jpg" alt="...">
				  <div class="carousel-caption" style="margin-bottom:270px">
				     <h3>You can provide clothes or buy a food basket for the needy</h3>
				  </div>
				</div>
				<div class="item">
				  <img src="layouts/images/slide4.jpg" alt="...">
				  <div class="carousel-caption" style="margin-bottom:270px">
				    <h3>You can donate easily from home</h3>  
				  </div>
				</div>  
				<div class="item">
				  <img src="layouts/images/slide5.jpg" alt="...">
				  <div class="carousel-caption" style="margin-bottom:270px">
				    <h3>You can join volunteer events and provide aid</h3>  
				  </div>
				</div> 
				<div class="item">
				  <img src="layouts/images/slide6.jpg" alt="...">
				  <div class="carousel-caption" style="margin-bottom:270px">
				    <h3>You can provide clothes or buy a food basket for the needy</h3>  
				  </div>
				</div>  
			  </div>

			  <!-- Controls 
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>-->
 
       <!-- End Header Photos -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <!--<div class="sectiontitle">
      <h6 class="heading">Quis est gravida facilisis</h6>
      <p>Mauris tempor aenean pretium sem et luctus semper justo velit</p>
    </div>
    <ul class="nospace group overview">
      <li class="one_third">
        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Dapibus pede tristique</h6>
            <p>Congue quam erat et dui morbi at sapien non enim blandit.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Interdum morbi posuere</h6>
            <p>Etiam consequat arcu accumsan commodo luctus nibh fringilla.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Augue non vehicula</h6>
            <p>Erat neque et tortor ut molestie ultricies quam aliquam.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Erat volutpat integer</h6>
            <p>Posuere vulputate leo nullam eu tellus phasellus aliquam.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Tellus ut libero etiam</h6>
            <p>Ut metus quisque pretium nunc fermentum volutpat velit sed.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Dictum bibendum velit</h6>
            <p>Nulla iaculis pellentesque nunc felis tristique vel ultrices.</p>
          </figcaption>
        </figure>
      </li>
    </ul>-->
	  
	<!-- Start Voluntarism Events -->
		   <div class="events ideas text-center">
			   <div class="container">
				   <h3 class="text-center" style="color:#D68910;font-family:cursive;margin-bottom:70px">Latest Voluntarism Events</h3>
				   <div class="row">
				   <?php
	  
					include('connect.php');  
					$sql = $con->prepare("SELECT * FROM  events ORDER BY event_ID ASC LIMIT 9");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?>
				   
					   <div class="col-md-4">
						   <div class="thumbnail" style="height:430px">
							  <img class="img-responsive" height="120px"  src="data:image;base64,<?php echo $pat["image"]; ?>" alt="...">
							  <div class="caption">
								<h3><?php echo $pat["Title"]; ?></h3>
								<p><?php echo $pat["Description"]; ?></p>
								<p class="budget">Location: <span><?php echo $pat["Location"]; ?></span></p>
								<p class="budget">Number of Volunteers: <span><?php echo $pat["volunteers"]; ?></span></p>  
								<p><a style="width:170px" href="show-detail.php?eventid=<?php echo $pat["event_ID"]; ?>" class="btn btn-primary" role="button"><i class="fa fa-eye"></i> Show Details</a>
									<?php if(!isset($_SESSION['Password'])){ ?>
									<a style="width:150px;margin-left:10px" href="login.php" class="btn btn-primary" role="button"><i class="fa fa-share" style="color:#080"></i> Participate</a>
								  <?php }else{ ?>
								  
								   <a style="width:150px;margin-left:10px" href="participate.php?eventid=<?php echo $pat["event_ID"]; ?>" class="btn btn-primary" role="button"><i class="fa fa-share" style="color:#080"></i> Participate</a>
								  
								  
								  <?php } ?>
									</p>
							  </div>
							</div>
					   </div>
					   <?php } ?>
				   </div>
			   </div>
		   </div>
       <!-- End Voluntarism Events -->  
	  
    <div class="clear"></div>
  </main>
</div>
<div class="about-us">
			  <div class="overlay">
				  <div class="scrap">
					  <h3 class="text-center">Scrap</h3>
					  <p class="text-center center-block">This project aims to build a network to serve ALBER Charity in Afif which gather charity and volunteering in the one platform, so ALBER Charity would be able to share the cases in need in order to receive the donation from people either the donation by material things or food basket or financial donation and share activities with volunteers. the volunteer also will be able to know about the activities and events in the suitable time to join them.</p>
				  </div>
			  </div>
		  </div>	
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Donation Cases</h6>
      <p>You Can Donate By Any Case From This Cases</p>
    </div>
    <div class="group center">
    <article class="one_third first"><a class="ringcon btmspace-50" href="#"><i class="fas fa-money-bill-wave"></i></a>
        <h6 class="heading">Money</h6>
        <p>You Can Donate To Any Person or Charity By Money and By Any amount of money.</p>
      </article>
      <article class="one_third"><a class="ringcon btmspace-50" href="#"><i class="fa fa-shopping-cart"></i></a>
        <h6 class="heading">Food Baskets</h6>
        <p>You Can Donate To person or any family or charity By Food Baskets.</p>
      </article>
      <article class="one_third"><a class="ringcon btmspace-50" href="#"><i class="fas fa-tshirt"></i></a>
        <h6 class="heading">Clothes</h6>
        <p>You Can Donate To any person or any family By Clothes.</p>
      </article>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper gradient">
  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Voluntary Event</h6>
      <p>How to participate in any voluntary events</p>
    </div>
    <article class="">
      <blockquote>You can participate in volunteer events and provide assistance to the community through the site.
      <br><br>To Participate In Any Voluntary Event create an account and sign in then show the latest voluntarism events then click on button participate.</blockquote>
    </article>
    
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section id="latest" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <!--<div class="sectiontitle">
      <h6 class="heading">Ligula mi fringilla vel hendrerit</h6>
      <p>Et malesuada vitae risus in a enim in metus ultrices tristique</p>
    </div>
    <ul class="nospace group">
      <li class="one_third first">
        <article>
          <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
            <figcaption>
              <time datetime="2045-04-06T08:15+00:00"><strong>06</strong> <em>Apr</em></time>
            </figcaption>
          </figure>
          <div class="excerpt">
            <h6 class="heading">Integer aliquet dignissim tellus</h6>
            <ul class="nospace meta">
              <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
              <li><i class="fas fa-tags"></i> <a href="#">Tag 1</a>, <a href="#">Tag 2</a></li>
            </ul>
            <p>Vestibulum consequat praesent bibendum vehicula mi sed fermentum erat sit amet imperdiet dictum enim lectus [<a href="#">&hellip;</a>]</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
            <figcaption>
              <time datetime="2045-04-05T08:15+00:00"><strong>05</strong> <em>Apr</em></time>
            </figcaption>
          </figure>
          <div class="excerpt">
            <h6 class="heading">Tortor tempus metus neque</h6>
            <ul class="nospace meta">
              <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
              <li><i class="fas fa-tags"></i> <a href="#">Tag 1</a>, <a href="#">Tag 2</a></li>
            </ul>
            <p>Vel elit integer in orci vitae lacus ultricies mattis suspendisse congue sapien vel massa posuere lacinia [<a href="#">&hellip;</a>]</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
            <figcaption>
              <time datetime="2045-04-04T08:15+00:00"><strong>04</strong> <em>Apr</em></time>
            </figcaption>
          </figure>
          <div class="excerpt">
            <h6 class="heading">Phasellus a ipsum eget odio</h6>
            <ul class="nospace meta">
              <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
              <li><i class="fas fa-tags"></i> <a href="#">Tag 1</a>, <a href="#">Tag 2</a></li>
            </ul>
            <p>Fringilla tincidunt proin velit aliquam erat volutpat etiam elementum eros ut ante fusce a lacus ac neque [<a href="#">&hellip;</a>]</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </div>
        </article>
      </li>
    </ul>-->
    <!-- Start Voluntarism Events -->
		   <div class="needs ideas text-center">
			   <div class="container">
				   <h3 class="text-center" style="color:#D68910;font-family:cursive;margin-bottom:70px">Latest Need Cases</h3>
				   <div class="row">
					    <?php
	  
					include('connect.php');  
					$sql = $con->prepare("SELECT * FROM  cases ORDER BY case_ID ASC LIMIT 3");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?>
					   <div class="col-md-4">
						   <div class="thumbnail">
							  <!--<img src="layouts/images/image1%20(2).jpg" height="120px" alt="...">-->
							  <div class="caption">
								<h3><?php echo $pat["case_name"]; ?></h3>
								<p><?php echo $pat["description"]; ?></p>
								 <?php if(!isset($_SESSION['Password'])){ ?> 
								<p><a style="width:150px;margin-left:10px" href="login.php" class="btn btn-primary" role="button"><i class="fa fa-share" style="color:#080"></i> Donate</a></p>
								  <?php }else{ ?>
								  
								  <p><a style="width:150px;margin-left:10px" href="donate.php?caseid=<?php echo $pat["case_ID"]; ?>" class="btn btn-primary" role="button"><i class="fa fa-share" style="color:#080"></i> Donate</a></p>
								  
								  <?php } ?>
							  </div>
							</div>
					   </div>
					   
					   <?php } ?>
				   </div>
			   </div>
		   </div>
       <!-- End Voluntarism Events -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper gradient">
  <section id="cta" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Contact Us</h6>
      <p>You Can Contact Us By</p>
    </div>
    <ul class="nospace clear">
      <li class="one_third first">
        <div class="block clear"><i class="fas fa-phone"></i> <span><strong>Give us a call:</strong> 0117222084</span> </div>
      </li>
      <li class="one_third">
        <div class="block clear"><i class="fas fa-envelope"></i> <span><strong>Send us a mail:</strong> support@alber.com</span> </div>
      </li>
      <li class="one_third">
        <div class="block clear"><i class="fas fa-map-marker-alt"></i> <span><strong>Come visit us:</strong> Directions to <a href="https://goo.gl/maps/xKjzkhARaHzPgsoQ8">our location</a></span> </div>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="homepage.php">Alber Charity</a></p>
    <!--<p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>-->
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layouts/js/jquery.min.js"></script>  
<script src="layouts/js/bootstrap.js"></script>	
<script src="layouts/js/login.js"></script>		
<script src="layouts/js/jquery.backtotop.js"></script>
<script src="layouts/js/jquery.mobilemenu.js"></script>
</body>
</html>