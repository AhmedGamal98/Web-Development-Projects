<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../login.php?do=should#sign'); 
       
  } 
  elseif (isset($_SESSION['email']) && isset($_SESSION['password'])){
    $email = $_SESSION['email'];
    $pass = $_SESSION['password'];

    $sql1 =$con->prepare("SELECT *  FROM admin WHERE email=? AND password=?");
    $sql1->execute(array($email,$pass));
    $row1 =$sql1->fetch();
    $count1 = $sql1->rowCount();

    $sql2 =$con->prepare("SELECT *  FROM farmer WHERE email=?  AND password=?");
    $sql2->execute(array($email,$pass));
    $row2 =$sql2->fetch();
    $count2 = $sql2->rowCount();

    $sql3 =$con->prepare("SELECT *  FROM customer WHERE email=?  AND password=?");
    $sql3->execute(array($email,$pass));
    $row3 =$sql3->fetch();
    $count3 = $sql3->rowCount();

    if($count1>0 or $count2>0){
       
        header('location: ../login.php?do=customer-s');
    }
  }
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="../assets/img/logo.jpg" rel="icon">
        <title>Al-Ahsa Heritage - Customer Dashboard</title>
        <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/ruang-admin.min.css" rel="stylesheet">
        <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
        </style>
        <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/css/all.min.csss" rel="stylesheet">
        <!-- Bootstrap Touchspin -->
        <link href="../assets/vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
        <!-- ClockPicker -->
        <link href="../assets/vendor/clock-picker/clockpicker.css" rel="stylesheet">
        <!-- Bootstrap DatePicker -->
        <link href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet">


        <script type="text/javascript" src="..\assets\js\jquery.min.js"></script>

        <style>
        .is_hidden {
            display: none;
        }
        </style>
        <style>
        .padding {

            margin-left: 18%;
            margin-top: 10%;
            margin-bottom: 10%;
        }

        .card {
            margin-bottom: 5rem;
        }

        .card {
            width: 160%;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #c8ced3;
            border-radius: .25rem;
        }

        .card-header:first-child {
            border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
        }

        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: #f0f3f5;
            border-bottom: 1px solid #c8ced3;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .form-control:focus {
            color: #304a2d;
            background-color: #fff;
            border-color: #c8ced3 !important;
            outline: 0;
            box-shadow: 0 0 0 #304a2d;
        }
        </style>
    </head>

    <body id="page-top">
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon">
                        <img src="../assets/img/logo.jpg">
                    </div>
                    <div class="sidebar-brand-text mx-1">Al-Ahsa Heritage</div>
                </a>
                <hr class="sidebar-divider my-0">
                <br>
                <div class="sidebar-heading">
                    Dashboard
                </div>



                <li class="nav-item">
                    <a class="nav-link" href="index.php">

                        <i class="fas fa-fw fa-calendar"></i>

                        <span>Visits List</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="requests-bills.php">
                        <i class="fa fa-fw fa-code-pull-request"></i>
                        <span>Bills & Orders<span></a>
                </li>

                <hr class="sidebar-divider">
                <div class="sidebar-heading">
                    Opertaion
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="../assets/javascript:void(0);" data-toggle="modal"
                        data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt "></i>
                        <span>Log out</span>
                    </a>
                </li>

            </ul>
            <!-- Sidebar -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- TopBar -->
                    <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item dropdown no-arrow mx-1 active">
                                <a class="nav-link " href="cart.php">
                                    <i style="margin-right: 5px; margin-top: 10px; font-size: 20px;"
                                        class="fa-solid fa-cart-shopping fa-fw "></i>

                                    <?php
                                        $sql =$con->prepare("SELECT * FROM cart where customer_id=?");
                                        $sql->execute(array($_SESSION['id']));
                                        $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                        $count = $sql->rowCount();
                                    ?>
                                    <span class="badge badge-danger badge-counter"><?php echo $count;?></span>
                                </a>

                            </li>
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <span class="ml-2 d-none d-lg-inline text-white small">
                                        <?php  if (isset($_SESSION['fname'])) : ?>
                                        <?php echo $_SESSION['fname'] ." ". $_SESSION['lname']; ?>
                                        <?php endif ?>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="customer_profile.php">
                                        <i class="fa-solid fa-id-card fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="../index.php">
                                        <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Home Page
                                    </a>


                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../assets/javascript:void(0);" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- Topbar -->

                    <!-- Container Fluid-->
                    <div class="container-fluid" id="container-wrapper">
                        <div class="padding">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Credit Card</strong>
                                            <small>enter your card details</small>
                                        </div>
                                        <div class="card-body">
                                            <form action="../include/clear_cart_online.php">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">



                                                            <label for="name">Name</label>
                                                            <input class="form-control" id="name" type="text"
                                                                placeholder="Enter your name" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="ccnumber">Credit Card Number</label>


                                                            <div class="input-group">
                                                                <input class="form-control" type="number"
                                                                    placeholder="0000 0000 0000 0000"
                                                                    autocomplete="email" required>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="mdi mdi-credit-card"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="city">City</label>
                                                            <input class="form-control" id="city" type="text"
                                                                placeholder="city" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="SN">Street Name</label>
                                                            <input class="form-control" id="SN" type="text"
                                                                placeholder="street name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="ZC">Zip Code</label>
                                                            <input class="form-control" id="ZC" type="number"
                                                                placeholder="zip code" required>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-4">
                                                        <label for="ccmonth">Month</label>
                                                        <select class="form-control" id="ccmonth" required>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="ccyear">Year</label>
                                                        <select class="form-control" id="ccyear" required>
                                                            <option>2014</option>
                                                            <option>2015</option>
                                                            <option>2016</option>
                                                            <option>2017</option>
                                                            <option>2018</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cvv">CVV/CVC</label>
                                                            <input class="form-control" id="cvv" type="number"
                                                                placeholder="123" required>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="card-footer">
                                            <button class="btn  btn-success float-right" type="submit">
                                                <i class="mdi mdi-gamepad-circle"></i> Continue</button>

                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Modal Logout -->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to logout?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary"
                                    data-dismiss="modal">Cancel</button>
                                <a href="../include/logout.php" class="btn btn-primary">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!---Container Fluid-->
            <br><br><br><br><br>
        </div>
        <!-- Footer -->
        <footer style="color: #d2a01e ; font-size:28px;" class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>copyright &copy; <script>
                        document.write(new Date().getFullYear());
                        </script> - developed by
                        <b><a style="color: #ffb700;" href="">Al-Ahsa Heritage</a></b>
                    </span>
                </div>
            </div>
        </footer>
        <!-- Footer -->
        </div>
        </div>

        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="../assets/js/ruang-admin.min.js"></script>
        <script src="../assets/vendor/chart.js/Chart.min.js"></script>
        <script src="../assets/js/demo/chart-area-demo.js"></script>
        <script src="../assets/js/all.min.js"></script>
        <!-- Page level plugins -->
        <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Bootstrap Touchspin -->
        <script src="../assets/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
        <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script>
        var x = document.getElementById("x");
        var y = document.getElementById("y");
        var d = document.getElementById("d");
        var xstored = x.getAttribute("data-in");
        var ystored = y.getAttribute("data-in");
        setInterval(function() {
            if (x == document.activeElement) {
                var temp = x.value;
                if (xstored != temp) {
                    xstored = temp;
                    x.setAttribute("data-in", temp);
                    calculate();
                }
            }
            if (y == document.activeElement) {
                var temp = y.value;
                if (ystored != temp) {
                    ystored = temp;
                    y.setAttribute("data-in", temp);
                    calculate();
                }
            }
        }, 50);

        function calculate() {
            d.innerHTML = x.value * y.value;
        }
        x.onblur = calculate;
        calculate();
        </script>
        <script>
        var x1 = document.getElementById("x1");
        var y1 = document.getElementById("y1");
        var d1 = document.getElementById("d1");
        var xstored1 = x1.getAttribute("data-in");
        var ystored1 = y1.getAttribute("data-in");
        setInterval(function() {
            if (x1 == document.activeElement) {
                var temp1 = x1.value;
                if (xstored1 != temp1) {
                    xstored1 = temp1;
                    x1.setAttribute("data-in", temp);
                    calculate1();
                }
            }
            if (y1 == document.activeElement) {
                var temp1 = y1.value;
                if (ystored1 != temp1) {
                    ystored1 = temp1;
                    y1.setAttribute("data-in", temp1);
                    calculate1();
                }
            }
        }, 50);

        function calculate1() {
            d1.innerHTML = x1.value * y1.value;
        }
        x1.onblur = calculate1;
        calculate1();
        </script>
        <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
        </script>
        <script>
        function Search() {
            // Locate the card elements
            let cards = document.querySelectorAll('.cards')
            // Locate the search input
            let search_query = document.getElementById("searchbox").value;
            // Loop through the cards
            for (var i = 0; i < cards.length; i++) {
                // If the text is within the card...
                if (cards[i].innerText.toLowerCase()
                    // ...and the text matches the search query...
                    .includes(search_query.toLowerCase())) {
                    // ...remove the `.is-hidden` class.
                    cards[i].classList.remove("is_hidden");
                } else {
                    // Otherwise, add the class.
                    cards[i].classList.add("is_hidden");
                }
            }
        }
        let Timer;
        let Interval = 500; // Half a second
        let searchInput = document.getElementById('searchbox');
        searchInput.addEventListener('keyup', () => {
            clearTimeout(Timer);
            Timer = setTimeout(Search, Interval);
        });
        </script>
        <script>
        $(document).ready(function() {


            $('.select2-single').select2();

            // Select2 Single  with Placeholder
            $('.select2-single-placeholder').select2({
                placeholder: "Select a Province",
                allowClear: true
            });

            // Select2 Multiple
            $('.select2-multiple').select2();

            // Bootstrap Date Picker
            $('#simple-date1 .input-group.date').datepicker({
                format: 'dd/mm/yyyy',
                todayBtn: 'linked',
                todayHighlight: true,
                autoclose: true,
            });

            $('#simple-date2 .input-group.date').datepicker({
                startView: 1,
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            $('#simple-date3 .input-group.date').datepicker({
                startView: 2,
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            $('#simple-date4 .input-daterange').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            // TouchSpin

            $('#touchSpin1').TouchSpin({
                min: 0,
                max: 100,
                boostat: 5,
                maxboostedstep: 10,
                initval: 0
            });

            $('#touchSpin2').TouchSpin({
                min: 0,
                max: 100,
                decimals: 2,
                step: 0.1,
                postfix: '%',
                initval: 0,
                boostat: 5,
                maxboostedstep: 10
            });

            $('#touchSpin3').TouchSpin({
                min: 0,
                max: 100,
                initval: 0,
                boostat: 5,
                maxboostedstep: 10,
                verticalbuttons: true,
            });

            $('#clockPicker1').clockpicker({
                donetext: 'Done'
            });

            $('#clockPicker2').clockpicker({
                autoclose: true
            });

            let input = $('#clockPicker3').clockpicker({
                autoclose: true,
                'default': 'now',
                placement: 'top',
                align: 'left',
            });

            $('#check-minutes').click(function(e) {
                e.stopPropagation();
                input.clockpicker('show').clockpicker('toggleView', 'minutes');
            });

        });
        </script>
    </body>

</html>