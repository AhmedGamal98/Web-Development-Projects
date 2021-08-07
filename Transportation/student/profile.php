<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/ico" href="../img/logo2.png" />
<script defer src="../js/all.js"></script>
<link rel="stylesheet" href="../css/font-awesome.css" /> 
<script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
></script>
<script src="../js/jquery-1.12.1.min.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>  
<script src="../js/login.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
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
    <link href="../css/profile.css" rel="stylesheet">
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
                      
                      <li class="nav-item active">
                        <div class="dropdown">
                          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff; margin-top:2px; font-size:18px">
                            Student Name
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="profile.php"><i class="fas fa-user"></i> Profile</a></li>
                      <li><a class="dropdown-item" href="../index.php"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
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
            <h1 style="color: #dc624a ;">Profile Settings</h1>

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
                    <form action="#">
                        <div class="form-group">
                            <label for="fullName">User Name</label>
                            <input type="text" class="form-control" id="userName" aria-describedby="userNameHelp" placeholder="Enter your username" value="User Name" required>
                            <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                        </div><br>
                        <div class="form-group">
                            <label for="fullName">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email" value="ex@ex.com" required>
                        </div><br>
                        
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" placeholder="Enter your location" value="Loaction" required>
                          </div><br>
                          <div class="form-group">
                            <label for="location">Phone Number</label>
                            <input type="numver" class="form-control" id="phone" placeholder="Phone number" value="+9600000000" required>
                          </div><br>
                          <div class="form-group">
                              <label class="d-block"> Password</label><br>
                              <input type="password" class="form-control" placeholder="Enter your old password" value="***********" required><br>
                          </div>
                            <div class="form-group small text-muted">
                            All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
                        </div><br>
                        <button type="submit" onclick="return confirm('Are you sure you want to update your profile information?')" class="btn btn-primary" style="float: right;">Update Profile</button>
                    </form>
                    </div>
                    
                    <div class="tab-pane" id="notification">
                    <h6>Company List </h6>
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
                          <tr>
                            <td><a href="details.php" style="text-decoration: none; font-size: 19px;">lorem</a></td>
                            <td>Pendding</td>
                          </tr>
                          <tr>
                            <td><a href="details.php" style="text-decoration: none; font-size: 19px;">lorem</a></td>
                            <td>Pendding</td>
                          </tr>
                          <tr>
                            <td><a href="details.php" style="text-decoration: none; font-size: 19px;">lorem</a></td>
                            <td>Pendding</td>
                          </tr>
                          <tr>
                            <td><a href="details.php" style="text-decoration: none; font-size: 19px;">lorem</a></td>
                            <td>Pendding</td>
                          </tr>
                          <tr>
                            <td><a href="details.php" style="text-decoration: none; font-size: 19px;">lorem</a></td>
                            <td>Pendding</td>
                          </tr>
                          <tr>
                            <td><a href="details.php" style="text-decoration: none; font-size: 19px;">lorem</a></td>
                            <td>Pendding</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                
                    </div>
                    <div class="tab-pane" id="company">
                    <h6>Company SETTINGS</h6>
                    <hr>
                    <h6>Company Name</h6>
                    <hr>
                    <form>
                      <div class="form-group row">
                        <label for="enter" class="col-sm-2 col-form-label">Sunday:</label>
                        <div class="col-sm-9">
                          <label for="enter" class="col-sm-4 col-form-label">Your Entry Time:</label>
                          <input type="time" class="col-sm-8 form-control" id="enter" placeholder="Entry Time" required>
                          <label for="leave" class="col-sm-4 col-form-label">Your Leaving Time:</label>
                          <input type="time" class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" required>
                        </div>
                      </div><hr class="featurette-divider"><br>
                      <div class="form-group row">
                        <label for="enter" class="col-sm-2 col-form-label">Monday:</label>
                        <div class="col-sm-9">
                          <label for="enter" class="col-sm-4 col-form-label">Your Entry Time:</label>
                          <input type="time" class="col-sm-8 form-control" id="enter" placeholder="Entry Time" required>
                          <label for="leave" class="col-sm-4 col-form-label">Your Leaving Time:</label>
                          <input type="time" class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" required>
                        </div>
                      </div><hr class="featurette-divider"><br>
                      <div class="form-group row">
                        <label for="enter" class="col-sm-2 col-form-label">Tuesday:</label>
                        <div class="col-sm-9">
                          <label for="enter" class="col-sm-4 col-form-label">Your Entry Time:</label>
                          <input type="time" class="col-sm-8 form-control" id="enter" placeholder="Entry Time" required>
                          <label for="leave" class="col-sm-4 col-form-label">Your Leaving Time:</label>
                          <input type="time" class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" required>
                        </div>
                      </div><hr class="featurette-divider"><br>
                      <div class="form-group row">
                        <label for="enter" class="col-sm-2 col-form-label">Wednesday:</label>
                        <div class="col-sm-9">
                          <label for="enter" class="col-sm-4 col-form-label">Your Entry Time:</label>
                          <input type="time" class="col-sm-8 form-control" id="enter" placeholder="Entry Time" required>
                          <label for="leave" class="col-sm-4 col-form-label">Your Leaving Time:</label>
                          <input type="time" class="col-sm-8 form-control"  id="leave" placeholder="Leaving Time" required>
                        </div>
                      </div><hr class="featurette-divider"><br>
                      <div class="form-group row">
                        <label for="enter" class="col-sm-2 col-form-label">Thursday:</label>
                        <div class="col-sm-9">
                          <label for="enter" class="col-sm-4 col-form-label">Your Entry Time:</label>
                          <input type="time" class="col-sm-8 form-control" id="enter" placeholder="Entry Time" required>
                          <label for="leave" class="col-sm-4 col-form-label">Your Leaving Time:</label>
                          <input type="time" class="col-sm-8 form-control" id="leave" placeholder="Leaving Time" required>
                        </div>
                      </div><br><br>
                      <div class="form-group row" style="float: right;">
                        <div class="col-sm-10">
                          <button type="submit" style="width: 140px;" class="btn btn-primary">Edit</button>
                        </div>
                      </div>
                    </form>
                    </div>

                    <div class="tab-pane" id="commnet">
                      <h6>Commnet</h6>
                      <hr>
                      <h6>Leave Your Comment and Rate compnay here</h6>
                      <hr>
                      <form>
                        <div class="form-group row">
                          <label for="comment" class="col-sm-3 col-form-label">Enter Your comment:</label>
                          <div class="col-sm-9">
                            <textarea type="textarea" class="form-control" name="commnet" id="coment" placeholder="Your Comment" required></textarea>
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
                        <form>
                          <div class="form-group row" >
                            <label for="comment" class="col-sm-3 col-form-label">Enter Your Complaints and Suggestions:</label>
                            <div class="col-sm-9">
                              <textarea type="textarea" class="form-control" id="coment" placeholder="Your Comment" required></textarea>
                            </div>
                          </div><br>
                          <div class="form-group row" style="float: right;">
                            <div class="col-sm-10">
                              <button type="submit" style="width: 140px; "  class="btn btn-primary">Comment</button>
                            </div>
                          </div>
                        </form>
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