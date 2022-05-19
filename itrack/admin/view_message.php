<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['admin_name'])) { 
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
                <div class="col-sm-5 logo">
                    <a href="index.php" title="iTrack"> <img src="../images/logo.png"
                            style="height:30px; margin-left:20px;" alt="iTrack" title="iTrack"></a>
                </div>
                <div class="col-sm-7">
                    <div class='row'>
                        <div class="col-sm-11" id="cssmenu" style="text-transform: uppercase;">
                            <ul>
                                <li><a style="text-decoration: none" href="index.php">Home</a></li>
                                <li><a style="text-decoration: none" href="dashboard.php">Dashboard</a></li>
                                <li><a style="text-decoration: none" href="rates.php">Rates</a></li>
                                <li><a style="text-decoration: none" href="announce.php">Announcement</a></li>
                                <li><a style="text-decoration: none" class="active" href="#">MESSAGES</a></li>
                                <li><a style="text-decoration: none" href="../include/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            </ul>
                        </div>

                        
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!--End Header-->

    <br><br>
    <section class="profile">
        <div class="container">
           


            <div class="row">
                
                <?php
                    $con_id = $_GET['id']; 
                    $sql =$con->prepare("SELECT * FROM contact WHERE con_id=?");
                    $sql->execute(array($con_id));
                    
                    $row =$sql->fetch();

                    
                        
                        
                ?>
                <div class="col-sm-12 item">
                    <div class="inner">
                        <form action="#" style="text-transform: none;">
                            <h3 class="title mar" style="font-size: 30px;">Message </h3><br>
                            <div class="row">
                                <div class="col-sm-12 field">
                                    <div class="row">
                                        <div class="col-sm-4 field">
                                            <h1 style="font-size: 19px;"> Name: </h1>
                                        </div>
                                        <div class="col-sm-8 field">
                                            <h1 style="font-size: 17px;"><?php echo $row['user_name']?></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 field">
                                    <div class="row">
                                        <div class="col-sm-4 field">
                                            <h1 style="font-size: 19px;"> Email: </h1>
                                        </div>
                                        <div class="col-sm-8 field">
                                            <h1 style="font-size: 17px;"><?php echo $row['user_email']?></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 field">
                                    <div class="row">
                                        <div class="col-sm-4 field">
                                            <h1 style="font-size: 19px;"> Message: </h1>
                                        </div>
                                        <div class="col-sm-8 field">
                                            <h1 style="font-size: 17px;"><?php echo $row['message']?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br><br><br><br><br><br><br><br><br><br><br>
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