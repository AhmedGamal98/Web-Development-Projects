<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['name'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

?> 
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="description" content="Lorem PugJs">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="keywords" content="">
    <title>iTrack</title>

    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <link rel="icon" href="../images/favicon.png" type="image/png">
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/grt-youtube-popup.js"></script>
    <script src="../js/plugin.js"></script>


    <link href="../dash-assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../dash-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../dash-assets/css/ruang-admin.min.css" rel="stylesheet">
    <link href="../dash-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="../dash-assets/vendor/jquery/jquery.min.js"></script>
    <script src="../dash-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../dash-assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../dash-assets/js/ruang-admin.min.js"></script>
    <script src="../dash-assets/vendor/chart.js/Chart.min.js"></script>
    <script src="../dash-assets/js/demo/chart-area-demo.js"></script>

    <script src="../dash-assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../dash-assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
    <style>
        body{
            text-transform: none;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container-fluid">
            <div class='row'>
                <div class="col-sm-3 logo">
                    <a href="index.php" title="iTrack"> <img src="../images/logo.png"
                            style="height:30px; margin-left:20px;" alt="iTrack" title="iTrack"></a>
                </div>
                <div class="col-sm-9">
                    <div class='row'>
                        <div class="col-sm-11" id="cssmenu" style="text-transform: uppercase;">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a  href="about.php">About</a></li>
                                <li><a href="chat_list.php">Messages</a></li>
                                <li><a style="text-decoration: none"class="active"  href="#">Announcement</a></li>
                                <li><a href="contact.php">Support</a></li>
                                <li class="dropdown"><i style="font-size:23px;" class="fa-solid fa-user"></i>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="profile.php">Profile</a></li>
                                        <li class="dropdown-item"><a href="../include/logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        
                    </div>
                </div>

            </div>
    </header>
    <!--End Header-->
    <section class="categories">
        <div class="container">
        <ul class="wizard">
                <li> <a href="index.php">
                        Home
                        <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                            </path>
                        </svg></a></li>

                <li>Announcement</li>
            </ul><span class="filterby">
            </span>
            <div class="col-lg-12">
                <div class="card mb-4">
                
                <br><br>
                
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Announcement</h6>
                        
                        
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover" style="text-transform: none;">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Announcement</th>
                                    

                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php
                                $sql =$con->prepare("SELECT * FROM announcement");
                                $sql->execute();
                                
                                $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                    foreach ($rows as $row){
                                        
                                    echo 
                                    
                                        "<tr>
                                        <td>".$row['id']."</td>
                                        <td>".$row['title']."</td>
                                        <td>".$row['des']."</td>
                                       
                                        

                                        </tr>";
                                    
                                 }?>
                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="container">
                <br><br>
                <div class="row align-items-center">
                    <div class="col-md-6 order-2 order-md-1 mb-md-0">
                        <img class="img-fluid " style="width:540px;height: 1000px; opacity: .95;" src="../images/about.jpg"
                            alt="">
                    </div>
    
                    <div class="col-md-6 order-2 order-md-1 mb-md-0"><br>
                        <h3 class="title" style="font-size:70px;">About Us</h3><br><br>
                        <hr style="border: 1px solid #2aabc0; width:200px;">
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
    
                                <i class="fa-solid fa-bullseye"
                                    style="color: #2aabc0; font-size:70px; margin-right: 10px; "></i>
    
                            </div>
    
                            <div class="col-md-9">
                                <h1 style="display: inline; font-size:28px;">OUR STORY</h1>
                                <p>In 2021, iTrack was founded with a simple mission: find an issue that all students face
                                    and try to build a system to handle it. We decided to build a system which will solve
                                    all the students issues, not just one. Because students feel uncomfortable using email
                                    to solving their issues, instead, they feel tired knowing that they should go to the
                                    university to solve it better. Now after developing iTrack, we are glad that our system
                                    will make students problems easier for them, If students practice problem solving
                                    consistently, they can develop greater situational and social awareness. Ultimately,
                                    live about having good time doing what you love. And for us, we glad to build such a
                                    system will benefit students that in one day, the were us.
                                </p>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
    
                                <i class="fa-solid fa-face-grin-stars"
                                    style="color: #2aabc0; font-size:70px; margin-right: 10px; "></i>
    
                            </div>
    
                            <div class="col-md-9">
                                <h1 style="display: inline; font-size:28px;">OUR MISSION</h1>
                                <p>iTrack will reduce the waiting time for a problem to be solved and facilitate tracking
                                    and solving students' problems by the academic affairs unit or by an administrator. It
                                    will be made certain that the student’s problem will be solved or at least the student
                                    will get an appropriate answer regarding it. Further, the status of a student's problem
                                    resolution is intended to be tracked for better results.
                                </p>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
    
                                <i class="fa-solid fa-user-tie"
                                    style="color: #2aabc0; font-size:70px; margin-right: 10px; "></i>
    
                            </div>
    
                            <div class="col-md-9">
                                <h1 style="display: inline; font-size:28px;">OUR PROMISE</h1>
                                <p>iTrack will help and benefit all the students to solve their issues as soon as possible.
                                </p>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
            <br><br><br>
        </section><br><br><br><br><br><br><br>
    <div class="overlay"></div>
    <footer class="footer"><br>
        <div class="container">
            <div class="logo"><img src="../images/logo.png" alt="" title=""></div>
        </div>
        <div class="container">
            <div class="copyright">
                <p><span>iTrack</span> © 2008-2022. All rights reserved. <br><br>
                    </p>
            </div>
        </div><br>
    </footer>
    <!--End Footer-->
</body>

</html>