<?php 

include "init.php";

include $tpl .  "header.php";

session_start();

?>

       <!-- Start Apper Bar -->

		
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
       <!-- Start Terms And Privacy -->
       <div class="terms">
		   <div class="container">
			   <h2 style="font-weight:bold;color: #515A5A;text-align:center;margin-top:50px">Terms And Conditions</h2>
			   <hr style="width:500px;border-bottom:2px solid #000">
			   <div class="row">
				   <div class="col-md-12">
					   <div class="term">
						   <h2 style="color: #D68910">General Terms</h2>
						   <p style="color: #515A5A">By accessing and placing an order with you confirm that you are in agreement with and bound by the terms of service contained in the Terms & Conditions outlined below.</p>
						   <p style="color: #515A5A">These terms apply to the entire website and any email or other type of communication between you and Under no circumstances shall team be liable for any direct, indirect, special, incidental or consequential damages, including, but not limited to, loss of data or profit  , arising out of the use, or the inability to use, the materials on this site, even if team or an authorized representative has been advised of the possibility of such damages.  If your use of materials from this site results in the need for servicing, repair or correction of equipment or data, you assume any costs thereof.</p>
						   <p style="color: #515A5A">will not be responsible for any outcome that may occur during the course of usage of our resources.  We reserve the rights to change prices and revise the resources usage policy at any moment.</p>
						   <h2 style="color: #D68910">License</h2>
						   <p style="color: #515A5A">Fursah grants you a revocable, non exclusive, non - transferable, limited license to download, install and use our service strictly in accordance with the terms of this Agreement. These Terms & Conditions are a contract between you and Fursah (referred to in These Terms & Conditions as "Fursah", "us", "we" or "our"), the provider of the Fursah website and the services accessible from the Fursah  website (which are collectively referred to in these Terms & Conditions as the "Fursah Service").  You are agreeing to be bound by these Terms & Conditions.  If you do not agree to these Terms & Conditions, please do not use the Service.  In these Terms & Conditions, "you" refers to both to you as an individual and to the entity you represent.  If you violate any of these Terms & Conditions, we reserve the right to cancel your account or block access to your account without notice.</p>
						   <h2 style="color: #D68910">Definitions and key terms </h2>
						   <h3 style="color: #D68910">For this Terms & Conditions:</h3>
						   <ul>
							   <li style="color: #515A5A">Cookie: small amount of data generated by a website and saved by your web browser.  It is used to identify your browser, provide analytics, remember information about you such as your language preference or login information.  </li>
							   <li style="color: #515A5A">Company: when this policy mentions "Company," "we," "us, or" our, "it refers to Fursah, Saudi Arabia that is responsible for your information under this Privacy Policy </li>
							   <li style="color: #515A5A">Country: where Fursah or the owners / founders  of Fursah are based, in this case is Saudi Arabia </li>
							   <li style="color: #515A5A">Customer: refers to the company, organization or person that signs up to use the Fursah Service to manage the relationships with your consumers or service users. </li>
							   <li style="color: #515A5A">Device: any internet connected device such as a phone, tablet, X computer or any other device that can be used to visit Fursah and use the services </li>
							   <li style="color: #515A5A">IP address: Every device connected to the Internet is assigned  a number known as an Internet protocol (IP) address. These numbers are usually assigned in geographic blocks. An IP address can often be used to identify the location from which a device is connecting to the Internet. Personnel: refers to those individuals who are employed by Fursah or are under contract to perform a service on behalf of one of the parties.   </li>
							   <li style="color: #515A5A">Personal data: any information that is directly, indirectly, or in connection with other information - including a personal identification number - allows for the identification or identifiability of a natural person. 
							   Service: refers to the service provided by Fursah as described in the relative terms (if available) and on this platform. </li>
							   <li style="color: #515A5A">Third - party service: refers to advertisers, contest sponsors, promotional and marketing partners, and others who provide our content or whose products or services we think may interest you.   </li>
							   <li style="color: #515A5A">Website: Fursah's site, which can be accessed via this URL: www.fursah.com </li>
							   <li style="color: #515A5A">You: a person or entity that is registered with Fursah to use the Services.   Restrictions 
							   You agree not to, and you will not permit others to: </li>
							   <ul>
								   <li style="color: #515A5A">License, sell, rent, lease, assign, distribute, transmit, host, outsource, disclose or otherwise commercially exploit the service or make the platform available to any third party. </li>
								   <li style="color: #515A5A">Modify, make derivative works of disassemble, decrypt, reverse compile or reverse engineer any part of the service. </li>
								   <li style="color: #515A5A">Remove, alter or obscure any proprietary notice (including any notice of copyright or trademark) of or its affiliates, partners, or the licensors of the service. </li>
							   </ul>
						   </ul>
						   <h2 style="color: #D68910">Your Consent </h2>
						   <p style="color: #515A5A">We've updated our Terms & Conditions to provide you with complete transparency into what is being set when you visit our site and how it's being used.  By using our service, registering an account, or making a purchase, you hereby consent to our Terms & Conditions. </p>
						   <h2 style="color: #D68910">Cookies </h2>
						   <p style="color: #515A5A">We use "Cookies" to identify the areas of our website that you have visited.  A Cookie is a small piece of data stored on your computer or mobile device by your web browser.  We use cookies to enhance the performance and functionality of our service but are non - essential to their use.  However, without these cookies, certain functionality like videos may become unavailable or you would be required to enter your login details every time you visit our platform as we would not be able to remember that you had logged in previously.  Most web browsers can be set to disable the use of cookies.  However, it you disable Cookies, you may not be able to access functionality on our website correctly or at all. We never place Personally Identifiable Information in Cookies. </p>
						   <h3 style="color: #D68910">Changes To Our Terms & Conditions </h3>
						   <p style="color: #515A5A">You acknowledge and agree that we may stop (permanently or temporarily) providing the Service (or any features within the Service) to you or to users generally at our sole discretion, without prior notice to you.  You may stop using the Service at any time.  You do not need to specifically inform us when you stop using the Service.  You acknowledge and agree that if we disable access to your account, you may be prevented from accessing the Service, your account details or any files or other materials which is contained in your account.  If we decide to change our Terms & Conditions, we will post those changes on this page, and / or update the Terms & Conditions modification date below.</p>
						   <h3 style="color: #D68910">Modifications to Our service </h3>
						   <p style="color: #515A5A">We reserve the right to modify, suspend or discontinue, temporarily or permanently, the service or any service to which it connects, with or without notice and without liability to you. </p>
						   <h3 style="color: #D68910">Updates to Our service </h3>
						   <p style="color: #515A5A">We may from time to time provide enhancements or improvements to the features / functionality of the service, which may include patches, bug fixes, updates, upgrades and other modifications ("Updates").  Updates may modify or delete certain features and / or functionalities of the service.  You agree that we have no obligation to (i) provide any Updates, or (i) continue to provide or enable any particular features and / or functionalities of the service to you.  You further agree that all Updates will be (i) deemed to constitute an integral part of the service, and (ii) subject to the terms and conditions of this Agreement </p>
					   </div>
				   </div>
			   </div>
		   </div>
       </div>
       <!-- End Terms And Privacy -->
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
<?php include  $tpl . "footer.php"; ?>