<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['res_name'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  $user_id = $_GET['usr_id'];

  $sql12 =$con->prepare("SELECT *
  FROM student
  WHERE std_id=?
  ");
  $sql12->execute([$user_id]);
  $row12 =$sql12->fetch();



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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
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
                                <li><a href="notifications.php">Notifications</a> <?php if($count !=0){
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
    <section class="profile">
        <div class="container">
            <ul class="wizard">
                <li> <a href="index.php">
                        Home
                        <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                            </path>
                        </svg></a></li>

                <li>Profile</li>
            </ul><span class="filterby">
            </span>


            <div class="row">
                
                <div class="col-sm-12 item">
                    <div class="inner">
                        <form action="#">
                            <h3 class="title mar" style="font-size: 30px;">Profile </h3><br>
                            <div class="row">
                                <div class="col-sm-12 field">
                                    <div class="row">
                                        <div class="col-sm-6 field">
                                            <h1 style="font-size: 19px;"> Name: </h1>
                                        </div>
                                        <div class="col-sm-6 field">
                                            <h1 style="font-size: 17px;"><?php echo $row12['std_name'];?></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 field">
                                    <div class="row">
                                        <div class="col-sm-6 field">
                                            <h1 style="font-size: 19px;"> Email: </h1>
                                        </div>
                                        <div class="col-sm-6 field">
                                            <h1 style="font-size: 17px;"><?php echo $row12['std_email'];?></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 field">
                                    <div class="row">
                                        <div class="col-sm-6 field">
                                            <h1 style="font-size: 19px;"> Level: </h1>
                                        </div>
                                        <div class="col-sm-6 field">
                                            <h1 style="font-size: 17px;"> <?php echo $row12['std_level'];?> </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 field">
                                    <div class="row">
                                        <div class="col-sm-6 field">
                                            <h1 style="font-size: 19px;"> Major: </h1>
                                        </div>
                                        <div class="col-sm-6 field">
                                            <h1 style="font-size: 17px;"> <?php echo $row12['std_major'];?> </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br><br><br><br><br><br>
    <div class="overlay"></div><br><br><br><br><br><br><br><br>
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