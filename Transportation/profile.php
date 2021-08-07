<?php
  
  require_once('include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/ico" href="img/logo2.png" />
<script defer src="js/all.js"></script>
<link rel="stylesheet" href="css/font-awesome.css" /> 
<script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
></script>
<script src="js/jquery-1.12.1.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>  
<script src="js/login.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js" ></script>
    <script src="js/jquery.validate.min.js" ></script>
    <script>
    $.validator.addMethod('mypassword', function(value, element) {
        return this.optional(element) || (value.match(/[A-Z]/) && value.match(/[a-z]/) && value.match(/[0-9]/));
    },
    'Password Must Be Contains At Least Uppercase Letters && Lowercase Letters && Numbers');
    // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='edit']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      
      phone:{
        minlength: 10,
      
      },
      password: {
         
        minlength: 10,
        mypassword :true
        

      }
    },
    // Specify validation error messages
    messages: {
      password: {
        
        minlength: "Password Must Be At Least 10 Characters"
        
      },
      phone:{
        minlength: "Phone Must Be At Least 10 Numbers"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});


    </script>
<script>
  let star = document.querySelectorAll('input');


  for (let i = 0; i < star.length; i++) {
    star[i].addEventListener('click', function() {
      i = this.value;


	});
}
  </script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .btn-primary{
        background-color: #dc624a ;
        border: 0px; 
      }
      .btn-primary:hover{
        background-color: #dc624a ;
        border: 0px;
      }
      .nav-link.active {
        background: #dc624a ;
      
      }
      header nav{
        background-color: #3a5d70;
        
        height: 90px;
    }
    header ul{
        margin-left:auto;
        
    }
    header nav .nav-link{
      font-size: 18px;
      color:#fff;
    }
    .navbar-brand{
      color:#fff;
    }
    header nav a:hover,.navbar-brand:hover{
      color:#dc624a;
    
    }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/profile.css" rel="stylesheet">
    <title>Profile</title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-md  fixed-top " >
        <div class="container">
          <a class="navbar-brand" style="margin-right: 370px;" href="index.php">
            <div class="row">
              <div class="col-3">
                <img src="img/logo3.png" style="width:40px; margin-top:6px"></i>
              </div>
              <div class="col-8">
                <strong style='display:block;margin-bottom:0px; margin-top:16px;'>University Transportation</strong><small style='margin-left:27px;font-size:15px;'></small>
              </div>
            </div>
          </a>
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0" style="padding-bottom:12px;">
                    <li class="nav-item ">
                      <a class="nav-link"  aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" aria-current="page" href="index.php#about"><i class="fas fa-address-card"></i> About </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" aria-current="page" href="company.php"><i class="fas fa-building"></i> Companies</a>
                    </li>
                      
                    <?php
                if (!isset($_SESSION['username'])  && !isset($_SESSION['flag'])) { 
                  echo"
                  <li class='nav-ite'>
                  <a class='nav-link' href='login.php'><i class='fas fa-sign-in-alt'></i> Sgin in</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link href='login.php'><i class='fas fa-user-plus'></i> Sign up</a>
                </li>
                  ";    
                }elseif(isset($_SESSION['username'])  && isset($_SESSION['flag'])){
                 echo" <li class='nav-item'>
                  <div class='dropdown'>
                    <button class='btn dropdown-toggle' type='button' id='dropdownMenuButton' data-bs-toggle='dropdown' aria-expanded='false' style='color: #fff; margin-top:2px; font-size:18px'>
                     <i class='fas fa-user'></i> ".$_SESSION['username']."
                    </button>
                    <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                      <li><a class='dropdown-item' href='profile.php'><i class='fas fa-user'></i> Profile</a></li>
                      <li><a class='dropdown-item' href='include/logout_std.php'><i class='fas fa-sign-out-alt'></i> Sign out</a></li>
                    </ul>
                  </div>
              </li>";
                }
                ?>
                          </ul>
                        </div>
                    </li>
                    </ul>
              </div>
          </div>
        </nav>
      </header>


      <main>
        <br> <br>
                  
        <div class="container">
        <?php if($do == "Manage"){ ?>
            <h1 style="color: #dc624a ;">Profile Settings</h1>
        <?php }elseif($do == "success"){ ?>
        <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
            Profile Updated successfully.
        </div><br>
        <h1 style="color: #dc624a ;">Profile Settings</h1>
        <?php }elseif($do == "update"){ ?>
        <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
            Destination Settings Updated successfully.
        </div><br>
        <h1 style="color: #dc624a ;">Profile Settings</h1>
        <?php }elseif($do == "comment"){ ?>
        <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
           Comment Added successfully.
        </div><br>
        <h1 style="color: #dc624a ;">Profile Settings</h1>
        <?php }elseif($do == "suggest"){ ?>
        <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
           Suggestion Added successfully.
        </div><br>
        <h1 style="color: #dc624a ;">Profile Settings</h1>
        <?php }elseif($do == "pay"){ ?>
        <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
           Payment Done successfully.
        </div><br>
        <h1 style="color: #dc624a ;">Profile Settings</h1>
        <?php }elseif($do == "permission"){ ?>
        <div style="width:690px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
           You are not booking with any company so you do not have the permission to add comment
        </div><br>
        <h1 style="color: #dc624a ;">Profile Settings</h1>
        <?php }elseif($do == "permission1"){ ?>
        <div style="width:690px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
           You are not booking with any company so you do not have the permission to add suggestion
        </div><br>
        <h1 style="color: #dc624a ;">Profile Settings</h1>
        <?php }elseif($do == "permission3"){ ?>
        <div style="width:980px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:100px;" >
           You are not booking with any company or still in request list so you do not have the permission to update your destination settings
        </div><br>
        <h1 style="color: #dc624a ;">Profile Settings</h1>
        
        <?php } ?>
            <div class="row gutters-sm">
            <div class="col-md-4 d-none d-md-block">
                <div class="card">
                <div class="card-body">
                    <nav class="nav flex-column nav-pills nav-gap-y-1">
                    <a href="#account" data-toggle="tab"  class="nav-item nav-link has-icon nav-link-faded active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Account Settings
                </a>
                    
                    <a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Notification
                    </a>
                    <a href="#company" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Destination Settings
                  </a>
                    <a href="#commnet" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg> Commnet
                    </a>
                    <a href="#suggest" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg> Complaints and Suggestions 
                    </a>
                    </nav>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                <div class="card-header border-bottom mb-3 d-flex d-md-none">
                    <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                    
                    <li class="nav-item">
                        <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
                    </li>
                    <li class="nav-item">
                        <a href="#company" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                    </li>
                    <li class="nav-item">
                      <a href="#commnet" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                  </li>
                  <li class="nav-item">
                    <a href="#suggest" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                </li>
                    </ul>
                </div>
                <div class="card-body tab-content">
                    <div class="tab-pane active" id="account">
                    <h6>YOUR PROFILE INFORMATION</h6>
                    <hr>
                    <form action="include/edit_student_profile.php" method="post" name="edit">
                        <div class="form-group">
                            <label for="fullName">User Name</label>
                            <input type="text" class="form-control" name="name" id="userName" aria-describedby="userNameHelp" placeholder="Enter your username" value="<?php echo $_SESSION['username']?>" required disabled>
                            <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can not change or remove it .</small>
                        </div><br>
                        <div class="form-group">
                            <label for="fullName">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter your email" value="<?php echo $_SESSION['email']?>" required disabled>
                        </div><br>
                        
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" name="adress" id="location" placeholder="Enter your location" value="<?php echo $_SESSION['adress']?>" required disabled>
                          </div><br>
                          <div class="form-group">
                            <label for="location">Phone Number</label>
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone number" value="0<?php echo $_SESSION['phone']?>" required>
                          </div><br>
                          <div class="form-group">
                              <label class="d-block"> Password</label><br>
                              <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" value="" ><br>
                              <small id="fullNameHelp" class="form-text text-muted">If you set passowrd empty it will not be changed</small><br>
                              <small id="fullNameHelp" class="form-text text-muted">Password Should conatins:<br> * Uppercase letter<br>* Lowercase letter <br> * Numbers <br>* Length of 10 or more</small>
                          </div>
                          <br>
                        <button type="submit" class="btn btn-primary" style="float: right;">Update Profile</button>
                    </form>
                    </div>
                    
                    <div class="tab-pane" id="notification">
                    <h6>Company List Requests</h6>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Company Name</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $std_id = $_SESSION['id'];
                          $sql =$con->prepare("SELECT book.tc_id,book.book_flag,tc.com_name
                          FROM book
                          INNER JOIN
                          tc
                          ON tc.id = book.tc_id
                          WHERE book.std_id=?");
                          $sql->execute(array($std_id));
                          $rows =$sql->fetchAll($con::FETCH_ASSOC);
                          $count = $sql->rowCount();
                          if($count>0){
                            foreach($rows as $row){
                              
                              echo"<td>".$row['com_name']."</a></td>";
                              if($row['book_flag'] == 0){
                                echo"<td>Pendding</td>";
                              }elseif($row['book_flag'] == 1){
                                echo"<td>Accepted</td>";
                              }elseif($row['book_flag'] == 2){
                                echo"<td>Rejected</td>";
                              }
                              
                              
                            }
                          }
                        ?>
                          
                        </tbody>
                      </table>
                    </div>

                    <hr>
                    <h6>Company Notification </h6>
                    <hr>
                    
                        <?php
                          $std_id = $_SESSION['id'];
                          $sql =$con->prepare("SELECT notify.*,tc.com_name
                          FROM notify
                          INNER JOIN
                          tc
                          ON tc.id = notify.tc_id
                          WHERE notify.std_id=? LIMIT 1");
                          $sql->execute(array($std_id));
                          $rows =$sql->fetchAll($con::FETCH_ASSOC);
                          $count = $sql->rowCount();
                          if($count>0){
                            foreach($rows as $row){
                              echo"<h6>Company Name: ".$row['com_name']."</h6>";
                              echo"<p>New message:</p>";
                              echo"<p>We remind you that you will pay for your package in ( ".$row['date']." )</p>";

                              
                              
                            }
                          }
                        ?>
                          
                        
                
                    </div>
                    <div class="tab-pane" id="company">
                    <h6>Company SETTINGS</h6>
                    <hr>
                    <h6>Company Name</h6>
                    <hr>
                    <form action="include/update_times.php" method="post">
                    <?php
                          $std_id = $_SESSION['id'];
                          $sql1 =$con->prepare("SELECT * FROM book WHERE std_id=?");
                          $sql1->execute(array($std_id));
                          $row1 =$sql1->fetch();
                          $count1 = $sql1->rowCount();
                          
                        ?>
                      <div class="form-group row">
                        <label for="enter" class="col-sm-2 col-form-label">Sunday:</label>
                        <div class="col-sm-9">
                          <label for="enter" class="col-sm-4 col-form-label">Your Entry Time:</label>
                          <?php 
						  if($count1 > 0){
                           if(strtotime($row1['1_in']) != strtotime("00:00:00")){
                             echo'<input type="time" name="1_in" value="'. date("H:i",strtotime($row1['1_in'])).'" class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';
                           }
                           else{
                            echo'<input type="time" name="1_in" value="" class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';

                           }
						  }
						  else{
                            echo'<input type="time" name="1_in" value="" class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';

                           }
                          ?>
                          
                          <label for="leave" class="col-sm-4 col-form-label">Your Leaving Time:</label>
                          <?php 
						  if($count1 > 0){
                           if(strtotime($row1['1_out']) != strtotime("00:00:00")){
                             echo'<input type="time" name="1_out" value="'. date("H:i",strtotime($row1['1_out'])).'"  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';
                           }
                           else{
                            echo'<input type="time" name="1_out" value=""  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';

                           }
						  }
						  else{
                            echo'<input type="time" name="1_out" value=""  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';

                           }
                          ?>
                          
                        </div>
                      </div><hr class="featurette-divider"><br>
                      <div class="form-group row">
                        <label for="enter" class="col-sm-2 col-form-label">Monday:</label>
                        <div class="col-sm-9">
                          <label for="enter" class="col-sm-4 col-form-label">Your Entry Time:</label>
                          <?php 
						  if($count1 > 0){
                           if(strtotime($row1['2_in']) != strtotime("00:00:00")){
                             echo'<input type="time" name="2_in" value="'.date("H:i:s",strtotime($row1['2_in'])).'"  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';
                           }
                           else{
                            echo'<input type="time" name="2_in" value=""  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';

						  }}
						  else{
                            echo'<input type="time" name="2_in" value=""  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';

						  }
                          ?>
                          
                          <label for="leave" class="col-sm-4 col-form-label">Your Leaving Time:</label>
                          <?php 
						  if($count1 > 0){
                           if(strtotime($row1['2_out']) != strtotime("00:00:00")){
                             echo'<input type="time" name="2_out" value="'.date("H:i:s",strtotime($row1['2_out'])).'"  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';
                           }
                           else{
                            echo'<input type="time" name="2_out" value=""  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';

						  } }
						  else{
                            echo'<input type="time" name="2_out" value=""  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';

						  }
                          ?>
                          
                        </div>
                      </div><hr class="featurette-divider"><br>
                      <div class="form-group row">
                        <label for="enter" class="col-sm-2 col-form-label">Tuesday:</label>
                        <div class="col-sm-9">
                          <label for="enter" class="col-sm-4 col-form-label">Your Entry Time:</label>
                          <?php 
						  if($count1 > 0){
                           if(strtotime($row1['3_in']) != strtotime("00:00:00")){
                             echo'<input type="time" name="3_in" value="'.date("H:i:s",strtotime($row1['3_in'])).'"  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';
                           }
                           else{
                            echo'<input type="time" name="3_in" value=""  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';

						  }}
						  else{
                            echo'<input type="time" name="3_in" value=""  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';

						  }
                          ?>
                          
                          <label for="leave" class="col-sm-4 col-form-label">Your Leaving Time:</label>
                          <?php 
						  if($count1 > 0){
                           if(strtotime($row1['3_out']) != strtotime("00:00:00")){
                             echo'<input type="time" name="3_out" value="'. date("H:i:s",strtotime($row1['3_out'])).'"  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';
                           }
                           else{
                            echo'<input type="time" name="3_out" value=""  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';
						  }}
						  else{
                            echo'<input type="time" name="3_out" value=""  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';
						  }
                          ?>
                          
                        </div>
                      </div><hr class="featurette-divider"><br>
                      <div class="form-group row">
                        <label for="enter" class="col-sm-2 col-form-label">Wednesday:</label>
                        <div class="col-sm-9">
                          <label for="enter" class="col-sm-4 col-form-label">Your Entry Time:</label>
                          <?php 
						  if($count1 > 0){
                           if(strtotime($row1['4_in']) != strtotime("00:00:00")){
                             echo'<input type="time" name="4_in" value="'.date("H:i:s",strtotime($row1['4_in'])).'"  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';
                           }
                           else{
                            echo'<input type="time" name="4_in" value=""  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';
                           }
						  }
						  else{
                            echo'<input type="time" name="4_in" value=""  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';
                           }
                          ?>
                          
                          <label for="leave" class="col-sm-4 col-form-label">Your Leaving Time:</label>
                          <?php 
						  if($count1 > 0){
                           if(strtotime($row1['4_out']) != strtotime("00:00:00")){
                             echo'<input type="time" name="4_out" value="'. date("H:i:s",strtotime($row1['4_out'])).'"  class="col-sm-8 form-control"  id="leave" placeholder="Leaving Time" >';
                           }
                           else{
                            echo'<input type="time" name="4_out" value=""  class="col-sm-8 form-control"  id="leave" placeholder="Leaving Time" >';
						  }}
						  else{
                            echo'<input type="time" name="4_out" value=""  class="col-sm-8 form-control"  id="leave" placeholder="Leaving Time" >';
						  }
                          ?>
                          
                        </div>
                      </div><hr class="featurette-divider"><br>
                      <div class="form-group row">
                        <label for="enter" class="col-sm-2 col-form-label">Thursday:</label>
                        <div class="col-sm-9">
                          <label for="enter" class="col-sm-4 col-form-label">Your Entry Time:</label>
                          <?php 
						  if($count1 > 0){
                           if(strtotime($row1['5_in']) != strtotime("00:00:00")){
                             echo'<input type="time" name="5_in" value="'. date("H:i:s",strtotime($row1['5_in'])).'"  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';
                           }
                           else{
                            echo'<input type="time" name="5_in" value=""  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';
						  }}
						  else{
                            echo'<input type="time" name="5_in" value=""  class="col-sm-8 form-control" id="enter" placeholder="Entry Time" >';
						  }
                          ?>
                          
                          <label for="leave" class="col-sm-4 col-form-label">Your Leaving Time:</label>
                          <?php 
						  if($count1 > 0){
                           if(strtotime($row1['5_out']) != strtotime("00:00:00")){
                             echo'<input type="time" name="5_out" value="'. date("H:i:s",strtotime($row1['5_out'])).'"  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';
                           }
                           else{
                            echo'<input type="time" name="5_out" value=""  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';
						  }}
						  else{
                            echo'<input type="time" name="5_out" value=""  class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" >';
						  }
                          ?>
                          
                        </div>
                      </div><br><br>
                      <div class="form-group row" style="float: right;">
                        <div class="col-sm-10">
                          <button type="submit" onclick="return confirm('Are you sure you want to update your destination settings?')" style="width: 140px;" class="btn btn-primary">Edit</button>
                        </div>
                      </div>
                    </form>
                    </div>

                    <div class="tab-pane" id="commnet">
                      <h6>Commnet</h6>
                      <hr>
                      <h6>Leave Your Comment and Rate compnay here</h6>
                      <hr>
                      <form action="include/add_comment.php" method="post">
                        <div class="form-group row">
                          <label for="comment" class="col-sm-3 col-form-label">Enter Your comment:</label>
                          <div class="col-sm-9">
                            <textarea type="textarea" class="form-control" name="comment" id="coment" placeholder="Your Comment" required></textarea>
                          </div>
                        </div><br>
                        <div class="form-group row">
                          
                            <label for="comment" class="col-sm-3 col-form-label">Your Rate :</label>
                            <div class="rating col-sm-9">
                              <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5"/><label for="star5" class="full" title="Awesome"></label>
                                
                                <input type="radio" id="star4" name="rating" value="4"/><label for="star4" class="full"></label>
                                
                                <input type="radio" id="star3" name="rating" value="3"/><label for="star3" class="full"></label>
                                
                                <input type="radio" id="star2" name="rating" value="2"/><label for="star2" class="full"></label>
                                
                                <input type="radio" id="star1" name="rating" value="1"/><label for="star1" class="full"></label>
                      
                              </fieldset>
                            </div>
                        </div><br>
                        <div class="form-group row" style="float: right;">
                          <div class="col-sm-10">
                            <button type="submit" style="width: 140px;" class="btn btn-primary">Comment</button>
                          </div>
                        </div>
                      </form>
                      </div>

                    <div class="tab-pane" id="suggest">
                        <h6>Complaints and Suggestions </h6>
                        <hr>
                        <h6>Leave Your Complaints and Suggestions here</h6>
                        <hr>
                        <form action="include/add_suggest.php" method="post">
                          <div class="form-group row" >
                            <label for="comment" class="col-sm-3 col-form-label">Enter Your Complaints and Suggestions:</label>
                            <div class="col-sm-9">
                              <textarea type="textarea" name="suggest" class="form-control" id="comment" placeholder="Your Comment" required></textarea>
                            </div>
                          </div><br>
                          <div class="form-group row" style="float: right;">
                            <div class="col-sm-10">
                              <button type="submit" style="width: 140px; "  class="btn btn-primary">Suggest</button>
                            </div>
                          </div>
                        </form>
                        <br><br><br>
                      <hr>
                        <h6>Responses For Your Complaints and Suggestions</h6>
                      <hr>
                      <?php
                          $std_id = $_SESSION['id'];
                          $sql =$con->prepare("SELECT suggest.*,tc.com_name
                          FROM suggest
                          INNER JOIN
                          tc
                          ON tc.id = suggest.tc_id
                          WHERE suggest.std_id=?");
                          $sql->execute(array($std_id));
                          $rows =$sql->fetchAll($con::FETCH_ASSOC);
                          $count = $sql->rowCount();
                          if($count>0){
                            foreach($rows as $row){
                              echo"<h6>Company Name: ".$row['com_name']."</h6>";
                              echo"<p>Respones:</p>";
                              echo"<p>Your Complaint or Suggestion is \"".$row['suggest']."\" </p>";
                              if($row['state'] == 0 && $row['response']==NULL){
                                echo"NoT Responed Yet <br><hr>";
                              }
                              else{
                                echo"<p>Response: \"".$row['response']."\" </p><hr>";
                              }
                              

                              
                              
                            }
                          }
                        ?>

                      </div>
                </div>
                </div>
            </div>
            </div>

        </div><br><br><br><br><br><br><br><br><br>
        
        
        <hr class="featurette-divider">
        <footer class="container sticky-bottom">
          
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2021 Transportation, Inc.</p>
          </footer>
      </main>
</body>
</html>