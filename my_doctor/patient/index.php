<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['pat_email']) && !isset($_SESSION['pat_password'])) { 
    header('location: ../sign_in.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - My Doctor</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">


    <script src="../assets/64d58efce2.js"></script>
    <script src="../assets/jquery-3.6.0.min.js"></script>
    <style>
        .rating {
            border: none;
            float: left;
        }

        .rating>input {
            display: none;
        }

        .rating>label:before {
            content: '\f005';
            font-family: FontAwesome;
            margin: 5px;
            font-size: 1.5rem;
            display: inline-block;
            cursor: pointer;
        }

        .rating>.half:before {
            content: '\f089';
            position: absolute;
            cursor: pointer;
        }


        .rating>label {
            color: #ddd;
            float: right;
            cursor: pointer;
        }

        .rating>input:checked~label,
        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: #fcec12;
        }

        .rating>input:checked+label:hover,
        .rating>input:checked~label:hover,
        .rating>label:hover~input:checked~label,
        .rating>input:checked~label:hover~label {
            color: #fcec12;
        }
    </style>
    <script>
        let star = document.querySelectorAll('input');


        for (let i = 0; i < star.length; i++) {
            star[i].addEventListener('click', function () {
                i = this.value;


            });
        }


    </script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="" alt="">
                <span class="d-none d-lg-block">My Doctor</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../assets/img/profile.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['pat_name'];?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $_SESSION['pat_name'];?></h6>
                            <span>Patient</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="../index.php">
                        <i class="bi bi-house"></i>
                        <span>Home Page</span>
                    </a>
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="user-profile.php">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="../include/logout.php">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </a>
                </li>

            </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">



            <li class="nav-item ">
                <a class="nav-link collapsed" data-bs-target="#app-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-list"></i><span>Appointments Panel</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="app-nav" class="nav-content collapsed" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="index.php" class="active">
                            <i class="bi bi-circle"></i><span>Appointments List</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_appointment.php">
                            <i class="bi bi-circle"></i><span>Add New Appointment</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End doctor Nav -->
            <li class="nav-item ">
                <a class="nav-link collapsed" data-bs-target="#service-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-list"></i><span>Services Panel</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="service-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="services.php">
                            <i class="bi bi-circle"></i><span>Services List</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End service Nav -->
            <li class="nav-item ">
                <a class="nav-link collapsed" data-bs-target="#hospital-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-list"></i><span>Hospitals Panel</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="hospital-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="hospitals.php">
                            <i class="bi bi-circle"></i><span>Hospitals List</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End service Nav -->

            <li class="nav-item ">
                <a class="nav-link collapsed" data-bs-target="#doctor-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-list"></i><span>Doctors Panel</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="doctor-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="doctors.php">
                            <i class="bi bi-circle"></i><span>Doctors List</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End service Nav -->


        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Appointments List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                        <?php if($do == "Manage"){ ?>
                            <?php }elseif($do == "open"){ ?>
                            <br>
                            <div class="section-title">
                                <div class="alert alert-success" role="alert">
                                Appointment has been opened successfully
                                </div><br>
                                
                            </div> 
                            <?php }elseif($do == "close"){ ?>
                            <br>
                            <div class="section-title">
                                <div class="alert alert-success" role="alert">
                                Appointment has been closed successfully
                                </div><br>
                                
                            </div> 
                            <?php }elseif($do == "edit"){ ?>
                            <br>
                            <div class="section-title">
                                <div class="alert alert-success" role="alert">
                                Appointment has been edited successfully
                                </div><br>
                                
                            </div> 
                            <?php }elseif($do == "rate"){ ?>
                            <br>
                            <div class="section-title">
                                <div class="alert alert-success" role="alert">
                                Rate has been Added successfully
                                </div><br>
                                
                            </div> 
                        <?php } ?>
                            <h5 class="card-title">Appointments</h5>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Doctor Name</th>
                                        <th scope="col">Hospital Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                            $sql =$con->prepare("SELECT * FROM appointment where patient_id=?");
                                            $sql->execute([$_SESSION['id']]);
                                            
                                            $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                                foreach ($rows as $row){
                                                    $sql2 =$con->prepare("SELECT * FROM doctor where id=?");
                                                    $sql2->execute([$row['doctor_id']]);
                                                    
                                                    $row2 =$sql2->fetch();
                                                    $sql3 =$con->prepare("SELECT * FROM hospital where id=?");
                                                    $sql3->execute([$row2['hospital_id']]);
                                                    
                                                    $row3 =$sql3->fetch();

                                                    $time = new DateTime($row['time']);
                                                    $t= $time->format('h:i A') ;
                                                    $date = new DateTime($row['date']);
                                                    $d= $date->format('m/d/Y') ;
                                                    if($row['status'] == 1){
                                                        if($row2['status'] ==1){
                                                            echo '
                                                        <tr>
                                                        <th scope="row">'.$row['id'].'</th>
                                                        <td>'.$row2['name'].'</td>
                                                        <td>'.$row3['name'].'</td>
                                                        <td>'.$d.'</td>
                                                        <td>'.$t.'</td>
                                                        <td>Opened</td>
                                                        <td>
                                                            <a href="../include/close.php?app_id='.$row['id'].'"> <button type="button" class="btn btn-outline-danger"
                                                                    onclick="confirm(\'Are you sure you want to close this appointment?\')">Close</button></a>
                                                            <a> <button type="button" class="btn btn-outline-warning" onclick="setEventId('.$row2['id'].')"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#basicModal">Rate</button></a>
                                                        </td>
                                                    </tr>

                                                        ';
                                                        
                                                        
                                                        }
                                                        
                                                    }
                                                    elseif($row['status'] == 0){
                                                        if($row2['status'] ==1){
                                                            echo '
                                                            <tr>
                                                            <th scope="row">'.$row['id'].'</th>
                                                            <td>'.$row2['name'].'</td>
                                                            <td>'.$row3['name'].'</td>
                                                            <td>'.$d.'</td>
                                                            <td>'.$t.'</td>
                                                            <td>Closed</td>
                                                            <td>
                    
                                                            </td>
                                                        </tr>
                                                        ';
                                                        }
                                                        
                                                    }
                                                
                                                
                                        }?>
                                    
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
                <br><br>
            </div>
            <br><br><br>
        </section>
        <br><br>
    </main><!-- End #main -->
    <script>
        function setEventId(event_id){
        document.getElementById("event_id").setAttribute('value',event_id);
        document.querySelector("#event_id").innerHTML = event_id;
    }
    </script>
    <div class="modal fade" id="basicModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Rate Your Doctor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" onClick="window.location.reload()" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action='../include/rate.php?id' onclick="location.href=this.href+''+essay_id;" method="post">
                        <div class="form-group row">

                            <label for="comment" class="col-sm-3 col-form-label">Your Rate :</label>
                            <div class="rating col-sm-9">
                                <fieldset class="rating" >
                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"
                                        class="full" title="Awesome"></label>

                                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4"
                                        class="full"></label>

                                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3"
                                        class="full"></label>

                                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2"
                                        class="full"></label>

                                    <input type="radio" id="star1" name="rating" value="1" required/><label for="star1"
                                        class="full"></label>

                                </fieldset>
                            </div>
                        </div>


                </div>
                <input type="hidden" name="doc_id" id="event_id">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" onClick="window.location.reload()">Rate</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onClick="window.location.reload()">Close</button>

                </div>
                </form>
            </div>
        </div>
    </div><!-- End Basic Modal-->
    <!-- ======= Footer ======= -->
    <footer id="footer" sty class="footer">

        <div class="copyright">
            &copy; Copyright <strong><span>My Doctor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

            Designed by <a href="../index.php">My Doctor</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.min.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>