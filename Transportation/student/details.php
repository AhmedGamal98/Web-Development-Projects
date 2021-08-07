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
<script src="../js/bootstrap.min.js"></script>  
<script src="../js/login.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .more{
        width: 180px; 
        border-radius:15px;
        padding:10px; 
        color: #dc624a; 
        border:1px solid #dc624a;
      }
      .more:hover{
        background-color: #db8b50; 
        color: #fff;
        border:1px solid #db8b50;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/main1.css" rel="stylesheet">
    <title>Details</title>
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
                      <a class="nav-link"   aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" aria-current="page" href="index.php#about"><i class="fas fa-address-card"></i> About </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" style="color:#dc624a;" aria-current="page" href="company.php"><i class="fas fa-building"></i> Companies</a>
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
          <br><br><br><br>
        <div class="container">
            <div class="card mb-3" >
                
              <img src="../img/comany.jpg" style="height: 450px;" class="card-img-top" alt="company img">
                    <div class="card-body">
                      <h3 class="card-title">Comapny Name</h3>
                      <p class="card-text">Location: Example</p>
                      <p class="card-text">Rate: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p><br>
                      <h5>Package List</h5>
                      <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Location</th>
                            <th scope="col">Duration</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Silver</td>
                            <td>10$</td>
                            <td>EX - EX</td>
                            <td>1 Month</td>
                            <td><a href="book.php" class="btn more" style="width: 140px; border-radius:15px; padding:10px;">Book Now <i class="fas fa-long-arrow-alt-right"></i></a></td>
                          </tr>
                          <tr>
                            <td>Gold</td>
                            <td>20$</td>
                            <td>EX - EX</td>
                            <td>3 Months</td>
                            <td><a href="book.php" class="btn more" style="width: 140px; border-radius:15px; padding:10px;">Book Now <i class="fas fa-long-arrow-alt-right"></i></a></td>
                          </tr>
                          <tr>
                            <td >Diamond</td>
                            <td>25$</td>
                            <td>EX - EX</td>
                            <td>6 Months</td>
                            <td><a href="book.php" class="btn more" style="width: 140px; border-radius:15px; padding:10px;">Book Now <i class="fas fa-long-arrow-alt-right"></i></a></td>
                          </tr>
                          <tr>
                            <td>Crown</td>
                            <td>50$</td>
                            <td>EX - EX</td>
                            <td>1 Year</td>
                            <td><a href="book.php" class="btn more" style="width: 140px; border-radius:15px; padding:10px;">Book Now <i class="fas fa-long-arrow-alt-right"></i></a></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="card-body">
                        <h5 class="card-title">Comments</h5>
                      </div>
                      <div class="card w-100">
                        <div class="card-body">
                          <h5 class="card-title">User Name: Name</h5>
                          <p class="card-text">Commnet: With supporting text below as a natural lead-in to additional content.</p>
                          <p class="card-text">Date: dd/mm/yyyy</p>
                        </div>
                      </div><br>
                      <div class="card w-100">
                        <div class="card-body">
                          <h5 class="card-title">User Name: Name</h5>
                          <p class="card-text">Commnet: With supporting text below as a natural lead-in to additional content.</p>
                          <p class="card-text">Date: dd/mm/yyyy</p>
                        </div>
                      </div><br>
                      <div class="card w-100">
                        <div class="card-body">
                          <h5 class="card-title">User Name: Name</h5>
                          <p class="card-text">Commnet: With supporting text below as a natural lead-in to additional content.</p>
                          <p class="card-text">Date: dd/mm/yyyy</p>
                        </div>
                      </div><br>
                      <div class="card w-100">
                        <div class="card-body">
                          <h5 class="card-title">User Name: Name</h5>
                          <p class="card-text">Commnet: With supporting text below as a natural lead-in to additional content.</p>
                          <p class="card-text">Date: dd/mm/yyyy</p>
                        </div>
                      </div><br>
                      <div class="card w-100">
                        <div class="card-body">
                          <h5 class="card-title">User Name: Name</h5>
                          <p class="card-text">Commnet: With supporting text below as a natural lead-in to additional content.</p>
                          <p class="card-text">Date: dd/mm/yyyy</p>
                        </div>
                      </div><br>
                
                      </div>
                    </div>
                  
                
        </div>
      </div>

          <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2021 Transportation, Inc.</p>
          </footer>
      </main>
</body>
</html>