<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['name'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  
  $std_id= $_SESSION['id'];

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
                                <li><a href="about.php">About</a></li>
                                <li><a href="chat_list.php">Messages</a></li>
                                <li><a style="text-decoration: none"  href="announce.php">Announcement</a></li>
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
        </div>
    </header>
    <!--End Header-->
    <section class="solutions">
        <div class="container">
            <ul class="wizard">
                <li> <a href="index.html">
                        Home
                        <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                            </path>
                        </svg></a></li>
                <li> Solutions</li>
            </ul>

            
                <?php if($do == "Manage"){ ?>
                <?php }elseif($do == "edit"){ ?>
                    <div class="alert alert-success">
                        <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39.2853 18.2363V20.0106C39.2829 24.1694 37.9363 28.2161 35.4461 31.547C32.956 34.8779 29.4559 37.3147 25.4678 38.4939C21.4796 39.673 17.2172 39.5314 13.3161 38.0902C9.41497 36.6489 6.08427 33.9852 3.82072 30.4964C1.55717 27.0075 0.482036 22.8805 0.755672 18.7307C1.02931 14.5809 2.63705 10.6307 5.33912 7.46926C8.04119 4.30784 11.6928 2.10457 15.7494 1.18804C19.8059 0.271518 24.0501 0.690841 27.8489 2.38348M39.2853 4.58207L19.9996 23.8871L14.2139 18.1014" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                                <div class="text-mass">
                                    <p>Solution has been approved. Thanks for your trust</p>
                        </div>
                    </div> 
                    <?php }elseif($do == "request"){ ?>
                    <div class="alert alert-success">
                        <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39.2853 18.2363V20.0106C39.2829 24.1694 37.9363 28.2161 35.4461 31.547C32.956 34.8779 29.4559 37.3147 25.4678 38.4939C21.4796 39.673 17.2172 39.5314 13.3161 38.0902C9.41497 36.6489 6.08427 33.9852 3.82072 30.4964C1.55717 27.0075 0.482036 22.8805 0.755672 18.7307C1.02931 14.5809 2.63705 10.6307 5.33912 7.46926C8.04119 4.30784 11.6928 2.10457 15.7494 1.18804C19.8059 0.271518 24.0501 0.690841 27.8489 2.38348M39.2853 4.58207L19.9996 23.8871L14.2139 18.1014" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                                <div class="text-mass">
                                    <p>Your reauest has been sent. Thanks for your trust</p>
                        </div>
                    </div> 
                    <?php }elseif($do == "add"){ ?>
                    <div class="alert alert-success">
                        <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39.2853 18.2363V20.0106C39.2829 24.1694 37.9363 28.2161 35.4461 31.547C32.956 34.8779 29.4559 37.3147 25.4678 38.4939C21.4796 39.673 17.2172 39.5314 13.3161 38.0902C9.41497 36.6489 6.08427 33.9852 3.82072 30.4964C1.55717 27.0075 0.482036 22.8805 0.755672 18.7307C1.02931 14.5809 2.63705 10.6307 5.33912 7.46926C8.04119 4.30784 11.6928 2.10457 15.7494 1.18804C19.8059 0.271518 24.0501 0.690841 27.8489 2.38348M39.2853 4.58207L19.9996 23.8871L14.2139 18.1014" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                                <div class="text-mass">
                                    <p>Your rate has been added. Thanks for your trust</p>
                        </div>
                    </div> 
                <?php } ?>
                
                <br>
            <h3 class="title mb-4"> View Solutions </h3>
            <div class="inner">
                <div class="table-responsive">
                    <table class="table table-striped">
                    <?php
                                $sql =$con->prepare("SELECT * FROM problems where prs_std_id=$std_id");
                                $sql->execute();
                                $c=0;
                                $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                    foreach ($rows as $row){
                                    
                                    if($row['prs_solution'] != NULL){
                                        $c=$c+1;
                                        if($row['is_solved'] == 2){
                                            echo 
                                        
                                        "
                                        <tr>
                                            <td>
                                                <h3 class='title'>".$row['prs_title']."</h3>
                                                <p class='text'>#".$row['prs_id']."</p>
                                            </td>
                                            <td><a class='bottom green' href='..\include\pre_view-solutions.php?id=".$row['prs_id']."'> View </a>
                                            <a class='bottom' href='#rate' onclick='setEventId(".$row['prs_id'].")' data-toggle='modal'> Rate </a>
                                            </td>
                                        </tr>";
                                        }
                                        else{
                                            echo 
                                        
                                        "
                                        <tr>
                                            <td>
                                                <h3 class='title'>".$row['prs_title']."</h3>
                                                <p class='text'>#".$row['prs_id']."</p>
                                            </td>
                                            <td><a class='bottom green' href='..\include\pre_view-solutions.php?id=".$row['prs_id']."'> View </a></td>
                                        </tr>";
                                        }
                                        
                                    }
                                    
                                    
                                 }?>
                        
                    </table>
                </div>
            </div>
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#">
                        <svg width="16" height="12" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.27438 5.58083L9.89199 0.963231C10.0396 0.810363 10.0354 0.566767 9.88252 0.41913C9.73339 0.2751 9.49699 0.2751 9.34789 0.41913L5.00233 4.76468L0.656779 0.41913C0.506526 0.2689 0.262929 0.2689 0.112677 0.41913C-0.0375528 0.569405 -0.0375529 0.812978 0.112677 0.963231L4.73028 5.58083C4.88056 5.73106 5.12413 5.73106 5.27438 5.58083Z">
                            </path>
                        </svg></a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1 </a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <svg width="16" height="12" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.27438 5.58083L9.89199 0.963231C10.0396 0.810363 10.0354 0.566767 9.88252 0.41913C9.73339 0.2751 9.49699 0.2751 9.34789 0.41913L5.00233 4.76468L0.656779 0.41913C0.506526 0.2689 0.262929 0.2689 0.112677 0.41913C-0.0375528 0.569405 -0.0375529 0.812978 0.112677 0.963231L4.73028 5.58083C4.88056 5.73106 5.12413 5.73106 5.27438 5.58083Z">
                            </path>
                        </svg></a>
                </li>
            </ul>
        </div>
        
    </section>
    <br><br><br><br><br><br><br>
    <script>
        function setEventId(event_id){
        document.getElementById("event_id").setAttribute('value',event_id);
        document.querySelector("#event_id").innerHTML = event_id;
    }
    </script>
    <div class="modal fade" id="rate" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z"
                            fill="#1A1919"></path>
                    </svg>
                </button>
                <h3 class="title">Rate</h3>
                <form action="..\include\add_rate.php" method="post">
                    
                    <div>
                        <p style="color:black; font-size:15px;">Write your comment: </p>
                        <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        <input type="hidden" name="prs_id" id="event_id">
                    </div>
                    <br>
                    <button class="bottom" type="submit" style="width:400px;" > Submit</button>

                </form>

            </div>
        </div>
    </div>
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