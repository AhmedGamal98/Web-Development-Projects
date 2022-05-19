<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['res_name'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  $res_id=$_SESSION['id'];

  $sql =$con->prepare("SELECT COUNT(*)  FROM notification
                where reciever_id =? and accept = 0
                ");
  $sql->execute([$_SESSION['id']]);
  $count1 = $sql->fetchColumn();               
  
  $ap = "approve";
  $sql3 =$con->prepare("SELECT count(*)
  FROM std_not where res_id=? and res_is_read = 0 and type=?
  ");
  $sql3->execute([$_SESSION['id'],$ap]);
  $count3 = $sql3->fetchColumn();

  $count = $count1 + $count3;    
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
                                <li><a href="index.php">Home</a></li>
                                <li><a class="active" href="#">Notifications</a> <?php if($count !=0){
                                    echo "<span style='width: 30px;border-radius: 20px;background-color:red;color:#fff;padding: 6px; margin-left:5px; margin-top:0px;'>".$count."<span>";
                                    }?></li>
                                <li><a href="chat_list.php">Messages</a></li>
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

        <section class="track">
        <div class="container">
        <?php if($do == "Manage"){ ?>
                <?php }elseif($do == "done"){ ?>
                    <div class="alert alert-success">
                <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M39.2853 18.2363V20.0106C39.2829 24.1694 37.9363 28.2161 35.4461 31.547C32.956 34.8779 29.4559 37.3147 25.4678 38.4939C21.4796 39.673 17.2172 39.5314 13.3161 38.0902C9.41497 36.6489 6.08427 33.9852 3.82072 30.4964C1.55717 27.0075 0.482036 22.8805 0.755672 18.7307C1.02931 14.5809 2.63705 10.6307 5.33912 7.46926C8.04119 4.30784 11.6928 2.10457 15.7494 1.18804C19.8059 0.271518 24.0501 0.690841 27.8489 2.38348M39.2853 4.58207L19.9996 23.8871L14.2139 18.1014"
                        stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <div class="text-mass">
                    <p>Done, you got the notification</p>
                </div>
            </div>
                    
                <?php } ?><br>
            <ul class="wizard">
                <li> <a href="index.html">
                        Home
                        <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                            </path>
                        </svg></a></li>
                <li> Notifications</li>
            </ul> <br>
            <h3 class="title mb-4"> Notifications</h3>
            <?php
                $sql =$con->prepare("SELECT * FROM notification
                where reciever_id =?
                ");
                $sql->execute([$_SESSION['id']]);
                $rows =$sql->fetchAll($con::FETCH_ASSOC);
                    foreach ($rows as $row){
                        if($row['accept'] == 0){
                        $sql1 =$con->prepare("SELECT * FROM problems
                        where prs_id =?
                        ");
                        $sql1->execute([$row['pr_id']]);
                        $row1 =$sql1->fetch();

                        $sql2 =$con->prepare("SELECT * FROM student
                        where std_id =?
                        ");
                        $sql2->execute([$row1['prs_std_id']]);
                        $row2 =$sql2->fetch();
                        echo'
                            <div class="linebox_problem">
                            <div class="user"><img src="../images/profile.png" alt="" title="">
                                <div class="text">
                                    <p>'.$row2['std_level']. ' - '.$row2['std_major'].' </p>
                                    <h3 style="font-size:18px;color:black;">'.$row2['std_name'].' </h3>
                                </div>
                            </div>
                            <div class="info">
                                <p>Problem Title: '.$row1['prs_title'].'</p>
                                <p>Description: '.$row1['prs_description'].'</p>
                                <div class="row">
                                    <div class="col-sm-2 field">
                                        <a class="bottom" href="../include/accept.php?prs_id='.$row1['prs_id'].'&res_id='.$_SESSION['id'].'&std_id='.$row2['std_id'].'&nf_id='.$row['nf_id'].'">Accept </a>
                                    </div>
                                    <div class="col-sm-2 field">
                                        <a class="bottom" href="user_profile.php?usr_id='.$row2['std_id'].'">View </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';

                    }
                }
            ?>
            
            <?php
                $s = "approve";
                $sql =$con->prepare("SELECT * FROM std_not
                where res_id =? and type=?
                ");
                $sql->execute([$_SESSION['id'],$s]);
                $rows =$sql->fetchAll($con::FETCH_ASSOC);
                    foreach ($rows as $row){
                        if($row['res_is_read'] == 0){
                        $sql1 =$con->prepare("SELECT * FROM problems
                        where prs_id =?
                        ");
                        $sql1->execute([$row['pr_id']]);
                        $row1 =$sql1->fetch();

                        $sql2 =$con->prepare("SELECT * FROM student
                        where std_id =?
                        ");
                        $sql2->execute([$row['std_id']]);
                        $row2 =$sql2->fetch();
                        echo'
                            <div class="linebox_problem">
                            <div class="user"><img src="../images/profile.png" alt="" title="">
                                <div class="text">
                                    <p>'.$row2['std_level']. ' - '.$row2['std_major'].' </p>
                                    <h3 style="font-size:18px;color:black;">'.$row2['std_name'].' </h3>
                                </div>
                            </div>
                            <div class="info">
                                <p>Problem Title: '.$row1['prs_title'].'</p>
                                <p>Description: '.$row1['prs_description'].'</p>
                                <p>Status: Approved</p>
                                <div class="row">
                                    <div class="col-sm-2 field">
                                        <a class="bottom" href="../include/done.php?prs_id='.$row1['prs_id'].'&res_id='.$_SESSION['id'].'&std_id='.$row2['std_id'].'">Done </a>
                                    </div>
                                    <div class="col-sm-2 field">
                                        <a class="bottom" href="problem-inner.php?id='.$row['pr_id'].'">View </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';

                    }
                }
            ?>
        
    </section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



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