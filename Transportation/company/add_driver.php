<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  
  

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Dashboard</title>

    <link rel="icon" type="image/ico" href="../img/logo2.png" />
    <script defer src="../js/all.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    

    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/jquery.min.js" ></script>
    <script src="../js/jquery.validate.min.js" ></script>
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
      
      
      password: {
         
        minlength: 10,
        mypassword :true
        

      },
      phone: {
         
         minlength: 10,
         maxlength: 10
         
         
 
       },
       name:{
         required:true
       }
    },
    // Specify validation error messages
    messages: {
      password: {
        
        minlength: "Password Must Be At Least 10 Characters"
        
      },
      phone: {
         
         minlength: "Phone Number Must Be At Least 10 Numbers",
         maxlength: "Phone Number Must Be  10 Numbers Only"
         
 
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
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#" style="font-size:16.5px;"><img src="../img/logo3.png" style="width:23px;"></i> University Transportation</a>
  
  <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        <?php  if (isset($_SESSION['name'])) : ?>
            <?php echo $_SESSION['name'];  ?>&nbsp;
        <?php endif ?>
        </button>&nbsp;&nbsp;&nbsp;
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="company_profile.php">Profile</a></li>
          <li><a class="dropdown-item" href="../include/logout.php">Sign out</a></li>
        </ul>
      </div>
   
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">   
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="driver.php">
              <i class="fas fa-list"></i>
              Driver List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="student.php">
              <i class="fas fa-list"></i>
              Student List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="std_request.php">
              <i class="fas fa-list"></i>
              Request List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="package.php">
              <i class="fas fa-list"></i>
              Package List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="student_schedule.php">
              <i class="far fa-calendar-alt"></i>
              Student Schedule
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="comment.php">
              <i class="far fa-comments"></i>
               Comments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="suggestion.php">
              <i class="far fa-comment-dots"></i>
               Complaints and Suggestions
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="pay_schedule.php">
              <i class="far fa-calendar-alt"></i>
              Payment Schedule
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Driver</h1>
      </div>
      <form action="../include/add_driver.php" name="edit" method="post">
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
          </div>
        </div><br>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Phone:</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone" required>
          </div>
        </div><br>
        
        <div class="form-group row">
          <label for="location" class="col-sm-2 col-form-label">Location:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="adress" id="location" placeholder="Location" required>
          </div>
        </div><br>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
          </div>
        </div><br>
        <div class="form-group row">
          <label for="password" class="col-sm-2 col-form-label">Password:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
          </div>
        </div><br>
        <div class="form-group row">
          <div class="col-sm-10" style="margin-left: 400px;" >
            <button style=" width: 200px; background-color: #3a5d70 ;border:0px;" type="submit" class="btn btn-primary">ADD</button>
          </div>
        </div>
      </form>
    </main>
  </div>
</div>


    <script src="../js/feather.min.js"></script>
    <script src="../js/dashboard.js"></script>
  </body>
</html>
