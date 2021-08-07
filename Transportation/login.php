<?php
require_once('include/connection.php');

$do = isset($_GET['do'])? $_GET['do'] : "Manage";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />  
    <link rel="stylesheet" href="css/login.css" />
    
    <link rel="icon" type="image/ico" href="img/logo2.png" />
    <title>Sign in & Sign up Form</title>
    <style>
      input[type='email'],input[type='text']{
        max-width: 500px;
        background-color: #f0f0f0;
        margin: 10px 0;
        height: 45px;
        display: grid;
        grid-template-columns: 15% 85%;
      }
    </style>
    
  </head>

  <body>
    <nav class="navbar navbar-expand-md  fixed-top ">
      <div class="container">
        <a class="navbar-brand" style="margin-right: 500px;" href="index.php">
          <div class="row">
            <div class="col-3">
            <img src="img/logo3.png" style="width:40px; margin-top:6px">
            </div>
            <div class="col-8">
              <strong style='display:block;margin-bottom:0px; margin-top:17px;'>University Transportation</strong><small style='margin-left:27px;font-size:15px;'></small>
            </div>
          </div>
        </a>
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0" style="padding-bottom:12px;">
                  <li class="nav-item ">
                    <a class="nav-link"   aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="index.php#about"><i class="fas fa-address-card"></i> About </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link"  aria-current="page" href="company.php"><i class="fas fa-building"></i> Companies</a>
                  </li>
                  
                  <li>
                  </li>
                </ul>
          </div>
          
      </div>
      
      </div>
      
    </nav>
    
    <?php if($do == "Manage"){ ?>
    <div class="contain">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="include/sign_in.php" method="post" class="sign-in-form login" id="sign"><br>
            <h2 class="title" style="color:#dc624a;">Sign in</h2>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>	
              <input class="form-control email" name="email"  type="email" placeholder="Email" required />	  
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>		
                    <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>	
              <!-- Validation Password --> 	
              <a href="reset_pass.php" style="margin-left: 150px; color:#dc624a; ">Forget Password?</a>	
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>


          <!-- ---------------------Company Sgin Up-------------------------------- -->


          <form action="include/sign_up_company.php" method="post" enctype="multipart/form-data" class="sign-up-form login companies"><br><br>
            <h2 class="title"  style="color:#dc624a;">Sign up</h2>
            <h4 style="color:#dc624a;">As Company</h4>
            <div class="input-field ast">
              <i class="fa fa-user icon" style="color:#dc624a;"></i>
              <input class="form-control username" name="name" type="text" placeholder="Company Name" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="input-field ast">
              <i class="fa fa-clipboard-list icon" style="color:#dc624a;"></i>
              <input class="form-control commercial" name="commercial" type="number" placeholder="Commercial Record" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Commercial Record Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Commercial Record Must Be Least <strong> 10 Numbers</strong></div>	
              <div class="alert alert-danger max-alert">Commercial Record Must Not Be More Than <strong> 10 Numbers</strong></div>
            </div>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
              <input class="form-control email" name="email" type="email" placeholder="Email" required/>
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password -->	
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>
              <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Password Must Contains At Least <strong><br>1 Uppercase <br> 1 Lowercase Letter <br> 1 Number <br> Length Of 10 Characters</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
              <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="form-group ast">
              <label for="exampleFormControlFile1">Choose Image: </label>
              <input type="file" name="image" style="color:#dc624a;" class="form-control-file" id="exampleFormControlFile1" accept="image/*" required>
            </div>
            
            <button class="btn student" >As Student</button>
            <input type="submit" name="submit" class="btn" value="Sign up" /> 
          </form>


  <!-- ------------------------------Student Sign up ------------------------------------- -->
          <form action="include/sign_up_student.php" method="post" class="sign-up-form login hide students"><br><br><br>
            <h2 class="title" style="color:#dc624a;">Sign up</h2>
                <h4 style="color:#dc624a;">As Student</h4>
                <div class="input-field ast">
                  <i class="fa fa-user icon" style="color:#dc624a;"></i>
                  <input class="form-control username" name="name" type="text" placeholder="Username" required/>
				          <i class="fa fa-check check"></i>
				          <i class="fa fa-close close"></i>
				          <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
				        <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
                </div>
                <div class="input-field ast">
                  <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
                  <input class="form-control email" name="email" type="email" placeholder="Email" required/>
                  <!-- Validation Password --> 		
                  <i class="fa fa-check check"></i>
                  <i class="fa fa-close close"></i>
                  <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
                  <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
                  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
                  <i class="fa fa-lock icon" style="color:#dc624a;"></i>
                  <input class="form-control password" name="password" type="password" placeholder="Password" required/>
                  <!-- Validation Password --> 	
                  <i class="fa fa-check check check-pass"></i>
                  <i class="fa fa-close close close-pass"></i>
                  <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
                  
                  <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Password Must Contains At Least <strong><br>1 Uppercase <br> 1 Lowercase Letter <br> 1 Number <br> Length Of 10 Characters</strong></div>
              
				  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
            <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
            <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
				    <i class="fa fa-check check"></i>
				    <i class="fa fa-close close"></i>
				    <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
				    <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>		
          </div>
          <div class="input-field ast">
            <i class="fa fa-phone icon" style="color:#dc624a;"></i>
            <input class="form-control Phone" name="phone" type="number" placeholder="Phone Number" required/>
            <i class="fa fa-check check"></i>
            <i class="fa fa-close close"></i>
            <div class="alert alert-danger long-alert">Phone Number Must Be At Least <strong>10 Numbers</strong></div>
            <div class="alert alert-danger custom-alert">Phone Number Must Not Be More Than <strong>10 Numbers</strong></div>
            <div class="alert alert-danger empty-alert">Phone Number Can't Be <strong></strong>Empty</div>	
          </div>
            <button class="btn company">As Company</button>
            <input type="submit" class="btn"  value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content"><br>
            <h3>New here ?</h3>
            <p>
              Feel free to join our website.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <!--<img src="img/log.jpg" class="image" alt="" />-->
        </div>
        <div class="panel right-panel">
          <div class="content"><br>
            <h3>One of us ?</h3>
            <p>
              Let's move on to your profile and make more processes.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <!--<img src="img/register.svg" class="image" alt="" />-->
        </div>
      </div>
  </div>
  <?php }elseif($do == "success"){ ?>
    
    <div class="contain">
      
      <div class="forms-container">
        
        <div class="signin-signup">

          <form action="include/sign_in.php" method="post" class="sign-in-form login" id="sign">
            <div style="width:500px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px;" >
              Successfully registered. You can now log in
            </div><br>
            <h2 class="title" style="color:#dc624a;">Sign in</h2>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>	
              <input class="form-control email" name="email" type="email" placeholder="Email" required />	  
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>		
                    <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>	
              <!-- Validation Password --> 	
              <a href="reset_pass.php" style="margin-left: 150px; color:#dc624a; ">Forget Password?</a>	
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>
                
         


          <!-- ---------------------Company Sgin Up-------------------------------- -->


          <form action="include/sign_up_company.php" method="post" enctype="multipart/form-data" class="sign-up-form login companies"><br><br>
            <h2 class="title"  style="color:#dc624a;">Sign up</h2>
            <h4 style="color:#dc624a;">As Company</h4>
            <div class="input-field ast">
              <i class="fa fa-user icon" style="color:#dc624a;"></i>
              <input class="form-control username" name="name" type="text" placeholder="Company Name" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="input-field ast">
              <i class="fa fa-clipboard-list icon" style="color:#dc624a;"></i>
              <input class="form-control commercial" name="commercial" type="number" placeholder="Commercial Record" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Commercial Record Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Commercial Record Must Be Least <strong> 10 Numbers</strong></div>	
              <div class="alert alert-danger max-alert">Commercial Record Must Not Be More Than <strong> 10 Numbers</strong></div>
            </div>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
              <input class="form-control email" name="email" type="email" placeholder="Email" required/>
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password -->	
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>
              <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Password Must Contains At Least <strong><br>1 Uppercase <br> 1 Lowercase Letter <br> 1 Number <br> Length Of 10 Characters</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
              <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="form-group ast">
              <label for="exampleFormControlFile1">Choose Image: </label>
              <input type="file" name="image" style="color:#dc624a;" class="form-control-file" id="exampleFormControlFile1" accept="image/*" required>
            </div>
            
            <button class="btn student" >As Student</button>
            <input type="submit" name="submit" class="btn" value="Sign up" /> 
          </form>


  <!-- ------------------------------Student Sign up ------------------------------------- -->
          <form action="include/sign_up_student.php" method="post" class="sign-up-form login hide students"><br><br><br>
            <h2 class="title" style="color:#dc624a;">Sign up</h2>
                <h4 style="color:#dc624a;">As Student</h4>
                <div class="input-field ast">
                  <i class="fa fa-user icon" style="color:#dc624a;"></i>
                  <input class="form-control username" name="name" type="text" placeholder="Username" required/>
				          <i class="fa fa-check check"></i>
				          <i class="fa fa-close close"></i>
				          <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
				        <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
                </div>
                <div class="input-field ast">
                  <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
                  <input class="form-control email" name="email" type="email" placeholder="Email" required/>
                  <!-- Validation Password --> 		
                  <i class="fa fa-check check"></i>
                  <i class="fa fa-close close"></i>
                  <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
                  <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
                  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
                  <i class="fa fa-lock icon" style="color:#dc624a;"></i>
                  <input class="form-control password" name="password" type="password" placeholder="Password" required/>
                  <!-- Validation Password --> 	
                  <i class="fa fa-check check check-pass"></i>
                  <i class="fa fa-close close close-pass"></i>
                  <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
                  <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Password Must Be At Least <strong>10 Characters</strong></div>
                  <div class="alert alert-danger custom-alert">Password Must Be Contains At Least <strong>Uppercase Letters.</strong></div>
                  <div class="alert alert-danger lower-alert">Password Must Be Contains At Least <strong>Lowercase Letters.</strong></div>
                  <div class="alert alert-danger number-alert">Password Must Be Contains At Least <strong>1 Number.</strong></div>	
				  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
            <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
            <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
				    <i class="fa fa-check check"></i>
				    <i class="fa fa-close close"></i>
				    <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
				    <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>		
          </div>
          <div class="input-field ast">
            <i class="fa fa-phone icon" style="color:#dc624a;"></i>
            <input class="form-control Phone" name="phone" type="number" placeholder="Phone Number" required/>
            <i class="fa fa-check check"></i>
            <i class="fa fa-close close"></i>
            <div class="alert alert-danger long-alert">Phone Number Must Be At Least <strong>10 Numbers</strong></div>
            <div class="alert alert-danger custom-alert">Phone Number Must Not Be More Than <strong>10 Numbers</strong></div>
            <div class="alert alert-danger empty-alert">Phone Number Can't Be <strong></strong>Empty</div>	
          </div>
            <button class="btn company">As Company</button>
            <input type="submit" class="btn"  value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content"><br>
            <h3>New here ?</h3>
            <p>
              Feel free to join our website.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <!--<img src="img/log.jpg" class="image" alt="" />-->
        </div>
        <div class="panel right-panel">
          <div class="content"><br>
            <h3>One of us ?</h3>
            <p>
              Let's move on to your profile and make more processes.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <!--<img src="img/register.svg" class="image" alt="" />-->
        </div>
      </div>
  </div>
  <?php }elseif($do == "error"){ ?>
    <div class="contain">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="include/sign_in.php" method="post" class="sign-in-form login" id="sign">
            <div style="width:500px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:15px;border-radius:8px;" >
              Email or Username is already taken.
            </div><br>
            <h2 class="title" style="color:#dc624a;">Sign in</h2>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>	
              <input class="form-control email" name="email" type="email" placeholder="Email" required />	  
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>		
                    <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>	
              <!-- Validation Password --> 	
              <a href="reset_pass.php" style="margin-left: 150px; color:#dc624a; ">Forget Password?</a>	
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>


          <!-- ---------------------Company Sgin Up-------------------------------- -->


          <form action="include/sign_up_company.php" method="post" enctype="multipart/form-data" class="sign-up-form login companies"><br><br>
            <h2 class="title"  style="color:#dc624a;">Sign up</h2>
            <h4 style="color:#dc624a;">As Company</h4>
            <div class="input-field ast">
              <i class="fa fa-user icon" style="color:#dc624a;"></i>
              <input class="form-control username" name="name" type="text" placeholder="Company Name" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="input-field ast">
              <i class="fa fa-clipboard-list icon" style="color:#dc624a;"></i>
              <input class="form-control commercial" name="commercial" type="number" placeholder="Commercial Record" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Commercial Record Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Commercial Record Must Be Least <strong> 10 Numbers</strong></div>	
              <div class="alert alert-danger max-alert">Commercial Record Must Not Be More Than <strong> 10 Numbers</strong></div>
            </div>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
              <input class="form-control email" name="email" type="email" placeholder="Email" required/>
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password -->	
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>
              <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Password Must Contains At Least <strong><br>1 Uppercase <br> 1 Lowercase Letter <br> 1 Number <br> Length Of 10 Characters</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
              <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="form-group ast">
              <label for="exampleFormControlFile1">Choose Image: </label>
              <input type="file" name="image" style="color:#dc624a;" class="form-control-file" id="exampleFormControlFile1" accept="image/*" required>
            </div>
            
            <button class="btn student" >As Student</button>
            <input type="submit" name="submit" class="btn" value="Sign up" /> 
          </form>



  <!-- ------------------------------Student Sign up ------------------------------------- -->
          <form action="include/sign_up_student.php" method="post" class="sign-up-form login hide students"><br><br><br>
            <h2 class="title" style="color:#dc624a;">Sign up</h2>
                <h4 style="color:#dc624a;">As Student</h4>
                <div class="input-field ast">
                  <i class="fa fa-user icon" style="color:#dc624a;"></i>
                  <input class="form-control username" name="name" type="text" placeholder="Username" required/>
				          <i class="fa fa-check check"></i>
				          <i class="fa fa-close close"></i>
				          <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
				        <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
                </div>
                <div class="input-field ast">
                  <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
                  <input class="form-control email" name="email" type="email" placeholder="Email" required/>
                  <!-- Validation Password --> 		
                  <i class="fa fa-check check"></i>
                  <i class="fa fa-close close"></i>
                  <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
                  <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
                  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
                  <i class="fa fa-lock icon" style="color:#dc624a;"></i>
                  <input class="form-control password" name="password" type="password" placeholder="Password" required/>
                  <!-- Validation Password --> 	
                  <i class="fa fa-check check check-pass"></i>
                  <i class="fa fa-close close close-pass"></i>
                  <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
                  <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Password Must Be At Least <strong>10 Characters</strong></div>
                  <div class="alert alert-danger custom-alert">Password Must Be Contains At Least <strong>Uppercase Letters.</strong></div>
                  <div class="alert alert-danger lower-alert">Password Must Be Contains At Least <strong>Lowercase Letters.</strong></div>
                  <div class="alert alert-danger number-alert">Password Must Be Contains At Least <strong>5 Numbers.</strong></div>	
				  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
            <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
            <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
				    <i class="fa fa-check check"></i>
				    <i class="fa fa-close close"></i>
				    <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
				    <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>		
          </div>
          <div class="input-field ast">
            <i class="fa fa-phone icon" style="color:#dc624a;"></i>
            <input class="form-control Phone" name="phone" type="number" placeholder="Phone Number" required/>
            <i class="fa fa-check check"></i>
            <i class="fa fa-close close"></i>
            <div class="alert alert-danger long-alert">Phone Number Must Be At Least <strong>10 Numbers</strong></div>
            <div class="alert alert-danger custom-alert">Phone Number Must Not Be More Than <strong>10 Numbers</strong></div>
            <div class="alert alert-danger empty-alert">Phone Number Can't Be <strong></strong>Empty</div>	
          </div>
            <button class="btn company">As Company</button>
            <input type="submit" class="btn"  value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content"><br>
            <h3>New here ?</h3>
            <p>
              Feel free to join our website.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <!--<img src="img/log.jpg" class="image" alt="" />-->
        </div>
        <div class="panel right-panel">
          <div class="content"><br>
            <h3>One of us ?</h3>
            <p>
              Let's move on to your profile and make more processes.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <!--<img src="img/register.svg" class="image" alt="" />-->
        </div>
      </div>
  </div>
  <?php }elseif($do == "error2"){ ?>
    <div class="contain">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="include/sign_in.php" method="post" class="sign-in-form login" id="sign">
            <div style="width:500px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:15px;border-radius:8px;" >
              Email or Password is wrong try to write them correct.
            </div><br>
            <h2 class="title" style="color:#dc624a;">Sign in</h2>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>	
              <input class="form-control email" name="email" type="email" placeholder="Email" required />	  
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>		
                    <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>	
              <!-- Validation Password --> 	
              <a href="reset_pass.php" style="margin-left: 150px; color:#dc624a; ">Forget Password?</a>	
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>


          <!-- ---------------------Company Sgin Up-------------------------------- -->


          <form action="include/sign_up_company.php" method="post" enctype="multipart/form-data" class="sign-up-form login companies"><br><br>
            <h2 class="title"  style="color:#dc624a;">Sign up</h2>
            <h4 style="color:#dc624a;">As Company</h4>
            <div class="input-field ast">
              <i class="fa fa-user icon" style="color:#dc624a;"></i>
              <input class="form-control username" name="name" type="text" placeholder="Company Name" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="input-field ast">
              <i class="fa fa-clipboard-list icon" style="color:#dc624a;"></i>
              <input class="form-control commercial" name="commercial" type="number" placeholder="Commercial Record" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Commercial Record Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Commercial Record Must Be Least <strong> 10 Numbers</strong></div>	
              <div class="alert alert-danger max-alert">Commercial Record Must Not Be More Than <strong> 10 Numbers</strong></div>
            </div>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
              <input class="form-control email" name="email" type="email" placeholder="Email" required/>
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password -->	
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>
              <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Password Must Contains At Least <strong><br>1 Uppercase <br> 1 Lowercase Letter <br> 1 Number <br> Length Of 10 Characters</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
              <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="form-group ast">
              <label for="exampleFormControlFile1">Choose Image: </label>
              <input type="file" name="image" style="color:#dc624a;" class="form-control-file" id="exampleFormControlFile1" accept="image/*" required>
            </div>
            
            <button class="btn student" >As Student</button>
            <input type="submit" name="submit" class="btn" value="Sign up" /> 
          </form>



  <!-- ------------------------------Student Sign up ------------------------------------- -->
          <form action="include/sign_up_student.php" method="post" class="sign-up-form login hide students"><br><br><br>
            <h2 class="title" style="color:#dc624a;">Sign up</h2>
                <h4 style="color:#dc624a;">As Student</h4>
                <div class="input-field ast">
                  <i class="fa fa-user icon" style="color:#dc624a;"></i>
                  <input class="form-control username" name="name" type="text" placeholder="Username" required/>
				          <i class="fa fa-check check"></i>
				          <i class="fa fa-close close"></i>
				          <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
				        <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
                </div>
                <div class="input-field ast">
                  <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
                  <input class="form-control email" name="email" type="email" placeholder="Email" required/>
                  <!-- Validation Password --> 		
                  <i class="fa fa-check check"></i>
                  <i class="fa fa-close close"></i>
                  <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
                  <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
                  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
                  <i class="fa fa-lock icon" style="color:#dc624a;"></i>
                  <input class="form-control password" name="password" type="password" placeholder="Password" required/>
                  <!-- Validation Password --> 	
                  <i class="fa fa-check check check-pass"></i>
                  <i class="fa fa-close close close-pass"></i>
                  <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
                  <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Password Must Be At Least <strong>10 Characters</strong></div>
                  <div class="alert alert-danger custom-alert">Password Must Be Contains At Least <strong>Uppercase Letters.</strong></div>
                  <div class="alert alert-danger lower-alert">Password Must Be Contains At Least <strong>Lowercase Letters.</strong></div>
                  <div class="alert alert-danger number-alert">Password Must Be Contains At Least <strong>1 Number.</strong></div>		
				  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
            <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
            <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
				    <i class="fa fa-check check"></i>
				    <i class="fa fa-close close"></i>
				    <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
				    <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>		
          </div>
          <div class="input-field ast">
            <i class="fa fa-phone icon" style="color:#dc624a;"></i>
            <input class="form-control Phone" name="phone" type="number" placeholder="Phone Number" required/>
            <i class="fa fa-check check"></i>
            <i class="fa fa-close close"></i>
            <div class="alert alert-danger long-alert">Phone Number Must Be At Least <strong>10 Numbers</strong></div>
            <div class="alert alert-danger custom-alert">Phone Number Must Not Be More Than <strong>10 Numbers</strong></div>
            <div class="alert alert-danger empty-alert">Phone Number Can't Be <strong></strong>Empty</div>	
          </div>
            <button class="btn company">As Company</button>
            <input type="submit" class="btn"  value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content"><br>
            <h3>New here ?</h3>
            <p>
              Feel free to join our website.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <!--<img src="img/log.jpg" class="image" alt="" />-->
        </div>
        <div class="panel right-panel">
          <div class="content"><br>
            <h3>One of us ?</h3>
            <p>
              Let's move on to your profile and make more processes.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <!--<img src="img/register.svg" class="image" alt="" />-->
        </div>
      </div>
  </div>
  <?php }elseif($do == "error3"){ ?>
    <div class="contain">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="include/sign_in.php" method="post" class="sign-in-form login" id="sign">
            <div style="width:500px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:15px;border-radius:8px;" >
              This compnay request status is in Pendding mode, can't log in until be accepted.
            </div><br>
            <h2 class="title" style="color:#dc624a;">Sign in</h2>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>	
              <input class="form-control email" name="email" type="email" placeholder="Email" required />	  
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>		
                    <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>	
              <!-- Validation Password --> 	
              <a href="reset_pass.php" style="margin-left: 150px; color:#dc624a; ">Forget Password?</a>	
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>


          <!-- ---------------------Company Sgin Up-------------------------------- -->


          <form action="include/sign_up_company.php" method="post" enctype="multipart/form-data" class="sign-up-form login companies"><br><br>
            <h2 class="title"  style="color:#dc624a;">Sign up</h2>
            <h4 style="color:#dc624a;">As Company</h4>
            <div class="input-field ast">
              <i class="fa fa-user icon" style="color:#dc624a;"></i>
              <input class="form-control username" name="name" type="text" placeholder="Company Name" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="input-field ast">
              <i class="fa fa-clipboard-list icon" style="color:#dc624a;"></i>
              <input class="form-control commercial" name="commercial" type="number" placeholder="Commercial Record" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Commercial Record Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Commercial Record Must Be Least <strong> 10 Numbers</strong></div>	
              <div class="alert alert-danger max-alert">Commercial Record Must Not Be More Than <strong> 10 Numbers</strong></div>
            </div>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
              <input class="form-control email" name="email" type="email" placeholder="Email" required/>
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password -->	
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>
              <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Password Must Contains At Least <strong><br>1 Uppercase <br> 1 Lowercase Letter <br> 1 Number <br> Length Of 10 Characters</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
              <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="form-group ast">
              <label for="exampleFormControlFile1">Choose Image: </label>
              <input type="file" name="image" style="color:#dc624a;" class="form-control-file" id="exampleFormControlFile1" accept="image/*" required>
            </div>
            
            <button class="btn student" >As Student</button>
            <input type="submit" name="submit" class="btn" value="Sign up" /> 
          </form>



  <!-- ------------------------------Student Sign up ------------------------------------- -->
          <form action="include/sign_up_student.php" method="post" class="sign-up-form login hide students"><br><br><br>
            <h2 class="title" style="color:#dc624a;">Sign up</h2>
                <h4 style="color:#dc624a;">As Student</h4>
                <div class="input-field ast">
                  <i class="fa fa-user icon" style="color:#dc624a;"></i>
                  <input class="form-control username" name="name" type="text" placeholder="Username" required/>
				          <i class="fa fa-check check"></i>
				          <i class="fa fa-close close"></i>
				          <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
				        <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
                </div>
                <div class="input-field ast">
                  <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
                  <input class="form-control email" name="email" type="email" placeholder="Email" required/>
                  <!-- Validation Password --> 		
                  <i class="fa fa-check check"></i>
                  <i class="fa fa-close close"></i>
                  <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
                  <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
                  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
                  <i class="fa fa-lock icon" style="color:#dc624a;"></i>
                  <input class="form-control password" name="password" type="password" placeholder="Password" required/>
                  <!-- Validation Password --> 	
                  <i class="fa fa-check check check-pass"></i>
                  <i class="fa fa-close close close-pass"></i>
                  <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
                  <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Password Must Be At Least <strong>10 Characters</strong></div>
                  <div class="alert alert-danger custom-alert">Password Must Be Contains At Least <strong>Uppercase Letters.</strong></div>
                  <div class="alert alert-danger lower-alert">Password Must Be Contains At Least <strong>Lowercase Letters.</strong></div>
                  <div class="alert alert-danger number-alert">Password Must Be Contains At Least <strong>5 Numbers.</strong></div>	
				  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
            <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
            <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
				    <i class="fa fa-check check"></i>
				    <i class="fa fa-close close"></i>
				    <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
				    <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>		
          </div>
          <div class="input-field ast">
            <i class="fa fa-phone icon" style="color:#dc624a;"></i>
            <input class="form-control Phone" name="phone" type="number" placeholder="Phone Number" required/>
            <i class="fa fa-check check"></i>
            <i class="fa fa-close close"></i>
            <div class="alert alert-danger long-alert">Phone Number Must Be At Least <strong>10 Numbers</strong></div>
            <div class="alert alert-danger custom-alert">Phone Number Must Not Be More Than <strong>10 Numbers</strong></div>
            <div class="alert alert-danger empty-alert">Phone Number Can't Be <strong></strong>Empty</div>	
          </div>
            <button class="btn company">As Company</button>
            <input type="submit" class="btn"  value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content"><br>
            <h3>New here ?</h3>
            <p>
              Feel free to join our website.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <!--<img src="img/log.jpg" class="image" alt="" />-->
        </div>
        <div class="panel right-panel">
          <div class="content"><br>
            <h3>One of us ?</h3>
            <p>
              Let's move on to your profile and make more processes.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <!--<img src="img/register.svg" class="image" alt="" />-->
        </div>
      </div>
  </div>
  <?php }elseif($do == "error4"){ ?>
    <div class="contain">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="include/sign_in.php" method="post" class="sign-in-form login" id="sign">
            <div style="width:500px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:15px;border-radius:8px;" >
              This company request status is rejected, you can not log in.
            </div><br>
            <h2 class="title" style="color:#dc624a;">Sign in</h2>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>	
              <input class="form-control email" name="email" type="email" placeholder="Email" required />	  
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>		
                    <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>	
              <!-- Validation Password --> 	
              <a href="reset_pass.php" style="margin-left: 150px; color:#dc624a; ">Forget Password?</a>	
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>


          <!-- ---------------------Company Sgin Up-------------------------------- -->


          <form action="include/sign_up_company.php" method="post" enctype="multipart/form-data" class="sign-up-form login companies"><br><br>
            <h2 class="title"  style="color:#dc624a;">Sign up</h2>
            <h4 style="color:#dc624a;">As Company</h4>
            <div class="input-field ast">
              <i class="fa fa-user icon" style="color:#dc624a;"></i>
              <input class="form-control username" name="name" type="text" placeholder="Company Name" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="input-field ast">
              <i class="fa fa-clipboard-list icon" style="color:#dc624a;"></i>
              <input class="form-control commercial" name="commercial" type="number" placeholder="Commercial Record" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Commercial Record Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Commercial Record Must Be Least <strong> 10 Numbers</strong></div>	
              <div class="alert alert-danger max-alert">Commercial Record Must Not Be More Than <strong> 10 Numbers</strong></div>
            </div>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
              <input class="form-control email" name="email" type="email" placeholder="Email" required/>
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password -->	
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>
              <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Password Must Contains At Least <strong><br>1 Uppercase <br> 1 Lowercase Letter <br> 1 Number <br> Length Of 10 Characters</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
              <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="form-group ast">
              <label for="exampleFormControlFile1">Choose Image: </label>
              <input type="file" name="image" style="color:#dc624a;" class="form-control-file" id="exampleFormControlFile1" accept="image/*" required>
            </div>
            
            <button class="btn student" >As Student</button>
            <input type="submit" name="submit" class="btn" value="Sign up" /> 
          </form>



  <!-- ------------------------------Student Sign up ------------------------------------- -->
          <form action="include/sign_up_student.php" method="post" class="sign-up-form login hide students"><br><br><br>
            <h2 class="title" style="color:#dc624a;">Sign up</h2>
                <h4 style="color:#dc624a;">As Student</h4>
                <div class="input-field ast">
                  <i class="fa fa-user icon" style="color:#dc624a;"></i>
                  <input class="form-control username" name="name" type="text" placeholder="Username" required/>
				          <i class="fa fa-check check"></i>
				          <i class="fa fa-close close"></i>
				          <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
				        <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
                </div>
                <div class="input-field ast">
                  <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
                  <input class="form-control email" name="email" type="email" placeholder="Email" required/>
                  <!-- Validation Password --> 		
                  <i class="fa fa-check check"></i>
                  <i class="fa fa-close close"></i>
                  <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
                  <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
                  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
                  <i class="fa fa-lock icon" style="color:#dc624a;"></i>
                  <input class="form-control password" name="password" type="password" placeholder="Password" required/>
                  <!-- Validation Password --> 	
                  <i class="fa fa-check check check-pass"></i>
                  <i class="fa fa-close close close-pass"></i>
                  <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
                  <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Password Must Be At Least <strong>10 Characters</strong></div>
                  <div class="alert alert-danger custom-alert">Password Must Be Contains At Least <strong>Uppercase Letters.</strong></div>
                  <div class="alert alert-danger lower-alert">Password Must Be Contains At Least <strong>Lowercase Letters.</strong></div>
                  <div class="alert alert-danger number-alert">Password Must Be Contains At Least <strong>5 Numbers.</strong></div>	
				  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
            <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
            <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
				    <i class="fa fa-check check"></i>
				    <i class="fa fa-close close"></i>
				    <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
				    <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>		
          </div>
          <div class="input-field ast">
            <i class="fa fa-phone icon" style="color:#dc624a;"></i>
            <input class="form-control Phone" name="phone" type="number" placeholder="Phone Number" required/>
            <i class="fa fa-check check"></i>
            <i class="fa fa-close close"></i>
            <div class="alert alert-danger long-alert">Phone Number Must Be At Least <strong>10 Numbers</strong></div>
            <div class="alert alert-danger custom-alert">Phone Number Must Not Be More Than <strong>10 Numbers</strong></div>
            <div class="alert alert-danger empty-alert">Phone Number Can't Be <strong></strong>Empty</div>	
          </div>
            <button class="btn company">As Company</button>
            <input type="submit" class="btn"  value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content"><br>
            <h3>New here ?</h3>
            <p>
              Feel free to join our website.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <!--<img src="img/log.jpg" class="image" alt="" />-->
        </div>
        <div class="panel right-panel">
          <div class="content"><br>
            <h3>One of us ?</h3>
            <p>
              Let's move on to your profile and make more processes.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <!--<img src="img/register.svg" class="image" alt="" />-->
        </div>
      </div>
  </div>
  <?php }elseif($do == "error"){ ?>
    <div class="contain">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="include/sign_in.php" method="post" class="sign-in-form login" id="sign">
            <div style="width:500px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:15px;border-radius:8px;" >
              Email or Username is already taken.
            </div><br>
            <h2 class="title" style="color:#dc624a;">Sign in</h2>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>	
              <input class="form-control email" name="email" type="email" placeholder="Email" required />	  
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>		
                    <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>	
              <!-- Validation Password --> 	
              <a href="reset_pass.php" style="margin-left: 150px; color:#dc624a; ">Forget Password?</a>	
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>


          <!-- ---------------------Company Sgin Up-------------------------------- -->


          <form action="include/sign_up_company.php" method="post" enctype="multipart/form-data" class="sign-up-form login companies"><br><br>
            <h2 class="title"  style="color:#dc624a;">Sign up</h2>
            <h4 style="color:#dc624a;">As Company</h4>
            <div class="input-field ast">
              <i class="fa fa-user icon" style="color:#dc624a;"></i>
              <input class="form-control username" name="name" type="text" placeholder="Company Name" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="input-field ast">
              <i class="fa fa-clipboard-list icon" style="color:#dc624a;"></i>
              <input class="form-control commercial" name="commercial" type="number" placeholder="Commercial Record" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Commercial Record Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Commercial Record Must Be Least <strong> 10 Numbers</strong></div>	
              <div class="alert alert-danger max-alert">Commercial Record Must Not Be More Than <strong> 10 Numbers</strong></div>
            </div>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
              <input class="form-control email" name="email" type="email" placeholder="Email" required/>
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password -->	
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>
              <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Password Must Contains At Least <strong><br>1 Uppercase <br> 1 Lowercase Letter <br> 1 Number <br> Length Of 10 Characters</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
              <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="form-group ast">
              <label for="exampleFormControlFile1">Choose Image: </label>
              <input type="file" name="image" style="color:#dc624a;" class="form-control-file" id="exampleFormControlFile1" accept="image/*" required>
            </div>
            
            <button class="btn student" >As Student</button>
            <input type="submit" name="submit" class="btn" value="Sign up" /> 
          </form>



  <!-- ------------------------------Student Sign up ------------------------------------- -->
          <form action="include/sign_up_student.php" method="post" class="sign-up-form login hide students"><br><br><br>
            <h2 class="title" style="color:#dc624a;">Sign up</h2>
                <h4 style="color:#dc624a;">As Student</h4>
                <div class="input-field ast">
                  <i class="fa fa-user icon" style="color:#dc624a;"></i>
                  <input class="form-control username" name="name" type="text" placeholder="Username" required/>
				          <i class="fa fa-check check"></i>
				          <i class="fa fa-close close"></i>
				          <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
				        <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
                </div>
                <div class="input-field ast">
                  <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
                  <input class="form-control email" name="email" type="email" placeholder="Email" required/>
                  <!-- Validation Password --> 		
                  <i class="fa fa-check check"></i>
                  <i class="fa fa-close close"></i>
                  <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
                  <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
                  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
                  <i class="fa fa-lock icon" style="color:#dc624a;"></i>
                  <input class="form-control password" name="password" type="password" placeholder="Password" required/>
                  <!-- Validation Password --> 	
                  <i class="fa fa-check check check-pass"></i>
                  <i class="fa fa-close close close-pass"></i>
                  <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
                  <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Password Must Be At Least <strong>10 Characters</strong></div>
                  <div class="alert alert-danger custom-alert">Password Must Be Contains At Least <strong>Uppercase Letters.</strong></div>
                  <div class="alert alert-danger lower-alert">Password Must Be Contains At Least <strong>Lowercase Letters.</strong></div>
                  <div class="alert alert-danger number-alert">Password Must Be Contains At Least <strong>5 Numbers.</strong></div>	
				  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
            <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
            <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
				    <i class="fa fa-check check"></i>
				    <i class="fa fa-close close"></i>
				    <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
				    <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>		
          </div>
          <div class="input-field ast">
            <i class="fa fa-phone icon" style="color:#dc624a;"></i>
            <input class="form-control Phone" name="phone" type="number" placeholder="Phone Number" required/>
            <i class="fa fa-check check"></i>
            <i class="fa fa-close close"></i>
            <div class="alert alert-danger long-alert">Phone Number Must Be At Least <strong>10 Numbers</strong></div>
            <div class="alert alert-danger custom-alert">Phone Number Must Not Be More Than <strong>10 Numbers</strong></div>
            <div class="alert alert-danger empty-alert">Phone Number Can't Be <strong></strong>Empty</div>	
          </div>
            <button class="btn company">As Company</button>
            <input type="submit" class="btn"  value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content"><br>
            <h3>New here ?</h3>
            <p>
              Feel free to join our website.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <!--<img src="img/log.jpg" class="image" alt="" />-->
        </div>
        <div class="panel right-panel">
          <div class="content"><br>
            <h3>One of us ?</h3>
            <p>
              Let's move on to your profile and make more processes.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <!--<img src="img/register.svg" class="image" alt="" />-->
        </div>
      </div>
  </div>
  <?php }elseif($do == "should"){ ?>
    <div class="contain">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="include/sign_in.php" method="post" class="sign-in-form login" id="sign">
            <div style="width:500px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:15px;border-radius:8px;" >
              You can not be able to reach this page please log in first.
            </div><br>
            <h2 class="title" style="color:#dc624a;">Sign in</h2>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>	
              <input class="form-control email" name="email" type="email" placeholder="Email" required />	  
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>		
                    <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>	
              <!-- Validation Password --> 	
              <a href="reset_pass.php" style="margin-left: 150px; color:#dc624a; ">Forget Password?</a>	
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>


          <!-- ---------------------Company Sgin Up-------------------------------- -->


          <form action="include/sign_up_company.php" method="post" enctype="multipart/form-data" class="sign-up-form login companies"><br><br>
            <h2 class="title"  style="color:#dc624a;">Sign up</h2>
            <h4 style="color:#dc624a;">As Company</h4>
            <div class="input-field ast">
              <i class="fa fa-user icon" style="color:#dc624a;"></i>
              <input class="form-control username" name="name" type="text" placeholder="Company Name" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="input-field ast">
              <i class="fa fa-clipboard-list icon" style="color:#dc624a;"></i>
              <input class="form-control commercial" name="commercial" type="number" placeholder="Commercial Record" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Commercial Record Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Commercial Record Must Be Least <strong> 10 Numbers</strong></div>	
              <div class="alert alert-danger max-alert">Commercial Record Must Not Be More Than <strong> 10 Numbers</strong></div>
            </div>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
              <input class="form-control email" name="email" type="email" placeholder="Email" required/>
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password -->	
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>
              <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Password Must Contains At Least <strong><br>1 Uppercase <br> 1 Lowercase Letter <br> 1 Number <br> Length Of 10 Characters</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
              <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="form-group ast">
              <label for="exampleFormControlFile1">Choose Image: </label>
              <input type="file" name="image" style="color:#dc624a;" class="form-control-file" id="exampleFormControlFile1" accept="image/*" required>
            </div>
            
            <button class="btn student" >As Student</button>
            <input type="submit" name="submit" class="btn" value="Sign up" /> 
          </form>



  <!-- ------------------------------Student Sign up ------------------------------------- -->
          <form action="include/sign_up_student.php" method="post" class="sign-up-form login hide students"><br><br><br>
            <h2 class="title" style="color:#dc624a;">Sign up</h2>
                <h4 style="color:#dc624a;">As Student</h4>
                <div class="input-field ast">
                  <i class="fa fa-user icon" style="color:#dc624a;"></i>
                  <input class="form-control username" name="name" type="text" placeholder="Username" required/>
				          <i class="fa fa-check check"></i>
				          <i class="fa fa-close close"></i>
				          <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
				        <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
                </div>
                <div class="input-field ast">
                  <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
                  <input class="form-control email" name="email" type="email" placeholder="Email" required/>
                  <!-- Validation Password --> 		
                  <i class="fa fa-check check"></i>
                  <i class="fa fa-close close"></i>
                  <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
                  <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
                  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
                  <i class="fa fa-lock icon" style="color:#dc624a;"></i>
                  <input class="form-control password" name="password" type="password" placeholder="Password" required/>
                  <!-- Validation Password --> 	
                  <i class="fa fa-check check check-pass"></i>
                  <i class="fa fa-close close close-pass"></i>
                  <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
                  <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Password Must Be At Least <strong>10 Characters</strong></div>
                  <div class="alert alert-danger custom-alert">Password Must Be Contains At Least <strong>Uppercase Letters.</strong></div>
                  <div class="alert alert-danger lower-alert">Password Must Be Contains At Least <strong>Lowercase Letters.</strong></div>
                  <div class="alert alert-danger number-alert">Password Must Be Contains At Least <strong>5 Numbers.</strong></div>	
				  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
            <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
            <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
				    <i class="fa fa-check check"></i>
				    <i class="fa fa-close close"></i>
				    <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
				    <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>		
          </div>
          <div class="input-field ast">
            <i class="fa fa-phone icon" style="color:#dc624a;"></i>
            <input class="form-control Phone" name="phone" type="number" placeholder="Phone Number" required/>
            <i class="fa fa-check check"></i>
            <i class="fa fa-close close"></i>
            <div class="alert alert-danger long-alert">Phone Number Must Be At Least <strong>10 Numbers</strong></div>
            <div class="alert alert-danger custom-alert">Phone Number Must Not Be More Than <strong>10 Numbers</strong></div>
            <div class="alert alert-danger empty-alert">Phone Number Can't Be <strong></strong>Empty</div>	
          </div>
            <button class="btn company">As Company</button>
            <input type="submit" class="btn"  value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content"><br>
            <h3>New here ?</h3>
            <p>
              Feel free to join our website.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <!--<img src="img/log.jpg" class="image" alt="" />-->
        </div>
        <div class="panel right-panel">
          <div class="content"><br>
            <h3>One of us ?</h3>
            <p>
              Let's move on to your profile and make more processes.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <!--<img src="img/register.svg" class="image" alt="" />-->
        </div>
      </div>
  </div>
  <?php }elseif($do == "rest"){ ?>
    <div class="contain">
      <div class="forms-container">
        <div class="signin-signup">
        
          <form action="include/sign_in.php" method="post" class="sign-in-form login" id="sign">
            <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px;" >
            Password has been sent to the entered e-mail. Please check your inbox.
            </div><br>
            <h2 class="title" style="color:#dc624a;">Sign in</h2>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>	
              <input class="form-control email" name="email" type="email" placeholder="Email" required />	  
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>		
                    <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>	
              <!-- Validation Password --> 	
              <a href="reset_pass.php" style="margin-left: 150px; color:#dc624a; ">Forget Password?</a>	
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>


          <!-- ---------------------Company Sgin Up-------------------------------- -->


          <form action="include/sign_up_company.php" method="post" enctype="multipart/form-data" class="sign-up-form login companies"><br><br>
            <h2 class="title"  style="color:#dc624a;">Sign up</h2>
            <h4 style="color:#dc624a;">As Company</h4>
            <div class="input-field ast">
              <i class="fa fa-user icon" style="color:#dc624a;"></i>
              <input class="form-control username" name="name" type="text" placeholder="Company Name" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="input-field ast">
              <i class="fa fa-clipboard-list icon" style="color:#dc624a;"></i>
              <input class="form-control commercial" name="commercial" type="number" placeholder="Commercial Record" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Commercial Record Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Commercial Record Must Be Least <strong> 10 Numbers</strong></div>	
              <div class="alert alert-danger max-alert">Commercial Record Must Not Be More Than <strong> 10 Numbers</strong></div>
            </div>
            <div class="input-field ast">
              <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
              <input class="form-control email" name="email" type="email" placeholder="Email" required/>
              <!-- Validation Password --> 		
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
              <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
              <!-- Validation Password -->	
            </div>
            <div class="input-field ast">
              <i class="fa fa-lock icon" style="color:#dc624a;"></i>
              <input class="form-control password" name="password" type="password" placeholder="Password" required/>
              <!-- Validation Password --> 	
              <i class="fa fa-check check check-pass"></i>
              <i class="fa fa-close close close-pass"></i>
              <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
              <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Password Must Contains At Least <strong><br>1 Uppercase <br> 1 Lowercase Letter <br> 1 Number <br> Length Of 10 Characters</strong></div>	
              <!-- Validation Password --> 		
            </div>
            <div class="input-field ast">
              <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
              <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
              <i class="fa fa-check check"></i>
              <i class="fa fa-close close"></i>
              <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
              <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>	
            </div>
            <div class="form-group ast">
              <label for="exampleFormControlFile1">Choose Image: </label>
              <input type="file" name="image" style="color:#dc624a;" class="form-control-file" id="exampleFormControlFile1" accept="image/*" required>
            </div>
            
            <button class="btn student" >As Student</button>
            <input type="submit" name="submit" class="btn" value="Sign up" /> 
          </form>



  <!-- ------------------------------Student Sign up ------------------------------------- -->
          <form action="include/sign_up_student.php" method="post" class="sign-up-form login hide students"><br><br><br>
            <h2 class="title" style="color:#dc624a;">Sign up</h2>
                <h4 style="color:#dc624a;">As Student</h4>
                <div class="input-field ast">
                  <i class="fa fa-user icon" style="color:#dc624a;"></i>
                  <input class="form-control username" name="name" type="text" placeholder="Username" required/>
				          <i class="fa fa-check check"></i>
				          <i class="fa fa-close close"></i>
				          <div class="alert alert-danger empty-alert">User Name Can't Be <strong></strong>Empty</div>
				        <div class="alert alert-danger number-alert">User Name Must Be <strong>Contains Only Characters</strong></div>	
                </div>
                <div class="input-field ast">
                  <i class="fa fa-envelope icon" style="color:#dc624a;"></i>
                  <input class="form-control email" name="email" type="email" placeholder="Email" required/>
                  <!-- Validation Password --> 		
                  <i class="fa fa-check check"></i>
                  <i class="fa fa-close close"></i>
                  <div class="alert alert-danger empty-alert">Email Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Email Must Be Contains <strong>@</strong></div>
                  <div class="alert alert-danger custom-alert">Email Must Be Contains <strong>.com</strong></div>	
                  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
                  <i class="fa fa-lock icon" style="color:#dc624a;"></i>
                  <input class="form-control password" name="password" type="password" placeholder="Password" required/>
                  <!-- Validation Password --> 	
                  <i class="fa fa-check check check-pass"></i>
                  <i class="fa fa-close close close-pass"></i>
                  <i class="show-pass fa fa-eye fa-2x" style="color:#dc624a;"></i>
                  <div class="alert alert-danger empty-alert">Password Can't Be <strong></strong>Empty</div>
                  <div class="alert alert-danger long-alert">Password Must Be At Least <strong>10 Characters</strong></div>
                  <div class="alert alert-danger custom-alert">Password Must Be Contains At Least <strong>Uppercase Letters.</strong></div>
                  <div class="alert alert-danger lower-alert">Password Must Be Contains At Least <strong>Lowercase Letters.</strong></div>
                  <div class="alert alert-danger number-alert">Password Must Be Contains At Least <strong>1 Number.</strong></div>	
				  <!-- Validation Password -->	
                </div>
			    <div class="input-field ast">
            <i class="fa fa-map-marker icon" style="color:#dc624a;"></i>
            <input class="form-control location" name="adress" type="text" placeholder="adress" required/>
				    <i class="fa fa-check check"></i>
				    <i class="fa fa-close close"></i>
				    <div class="alert alert-danger empty-alert">Location Can't Be <strong></strong>Empty</div>
				    <div class="alert alert-danger number-alert">Location Must Be <strong>Contains Only Characters</strong></div>		
          </div>
          <div class="input-field ast">
            <i class="fa fa-phone icon" style="color:#dc624a;"></i>
            <input class="form-control Phone" name="phone" type="number" placeholder="Phone Number" required/>
            <i class="fa fa-check check"></i>
            <i class="fa fa-close close"></i>
            <div class="alert alert-danger long-alert">Phone Number Must Be At Least <strong>10 Numbers</strong></div>
            <div class="alert alert-danger custom-alert">Phone Number Must Not Be More Than <strong>10 Numbers</strong></div>
            <div class="alert alert-danger empty-alert">Phone Number Can't Be <strong></strong>Empty</div>	
          </div>
            <button class="btn company">As Company</button>
            <input type="submit" class="btn"  value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content"><br>
            <h3>New here ?</h3>
            <p>
              Feel free to join our website.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <!--<img src="img/log.jpg" class="image" alt="" />-->
        </div>
        <div class="panel right-panel">
          <div class="content"><br>
            <h3>One of us ?</h3>
            <p>
              Let's move on to your profile and make more processes.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <!--<img src="img/register.svg" class="image" alt="" />-->
        </div>
      </div>
  </div>
  <?php } ?>


    <script src="js/jquery-1.12.1.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>  
    <script src="js/login.js"></script>

  </body>
</html>
