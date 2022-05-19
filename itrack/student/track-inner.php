<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['name'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  $pr_id = $_GET['id'];
  $sql1 =$con->prepare("SELECT * FROM problems WHERE prs_id='$pr_id'");
    $sql1->execute();
    
    $row =$sql1->fetch();
    $res_id=$row['res_id'];
    
    function dateDiff ($d1, $d2) {

        // Return the number of days between the two dates:    
        return round(abs(strtotime($d1) - strtotime($d2))/86400);
    
    } // end function dateDiff

    
    $t=time();
    
    $dtObj = date_create( $row['date'], timezone_open("Europe/Oslo"));
    
    if(dateDiff (date("Y-m-d",$t), $row['date']) >2){
        $sql = $con->prepare("UPDATE problems SET 

        is_solved =3,status=2

        WHERE prs_id=?"); 

        $sql->execute([$row['prs_id']]);
    }
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
                <div class="col-sm-3 logo">
                    <a href="index.php" title="iTrack"> <img src="../images/logo.png"
                            style="height:30px; margin-left:20px;" alt="iTrack" title="iTrack"></a>
                </div>
                <div class="col-sm-9">
                    <div class='row'>
                        <div class="col-sm-11" id="cssmenu" style="text-transform: uppercase;">
                            <ul>
                                <li><a class="active" href="index.php">Home</a></li>
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
    <section class="track">
        <div class="container">
            <ul class="wizard">
                <li> <a href="index.php">
                        Home
                        <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                            </path>
                        </svg></a></li>
                <li> <a href="track.php">
                        Track
                        <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                            </path>
                        </svg></a></li>
                <li> Track Problem</li>
            </ul>
            <div class="linebox">
                
                <h3 class="title"><?php echo $row['prs_title'];?></h3>
                <p class="text"># <?php echo $row['prs_id'];?></p>
            </div>
            <br>
            
            
            <div class="date"><?php echo date_format($dtObj, 'g:ia \o\n l jS F Y');?></div>
            
            <br><br>
            <div class="user"><img src="../images/profile.png" alt="" title="">
            <?php
            $sql2 =$con->prepare("SELECT * FROM receiver WHERE res_id='$res_id'");
            $sql2->execute();
            
            $rows =$sql2->fetch();
            
            
            

    ?>
                <div class="text">
                    <p><?php echo $_SESSION['major'];?></p>
                    <h3 class="name"> <?php echo $_SESSION['name'];?></h3>
                </div>
            </div>
            <div class="itembox">
            <?php
                if( $row['status'] == 0){
                    echo'
                    <div class="col status-item active"><i></i>
                    <p>Recieved</p>
                    </div>
                    <div class="col status-item "><i></i>
                        <p>Processing</p>
                    </div>
                    <div class="col status-item"><i></i>
                        <p>Solved</p>
                    </div>
                    ';
                }
                elseif( $row['status'] == 1){
                    echo'
                    <div class="col status-item active"><i></i>
                    <p>Recieved</p>
                    </div>
                    <div class="col status-item active"><i></i>
                        <p>Processing</p>
                    </div>
                    <div class="col status-item"><i></i>
                        <p>Solved</p>
                    </div>
                    ';
                }
                elseif( $row['status'] == 2){
                    echo'
                    <div class="col status-item active"><i></i>
                    <p>Recieved</p>
                    </div>
                    <div class="col status-item active"><i></i>
                        <p>Processing</p>
                    </div>
                    <div class="col status-item active"><i></i>
                        <p>Solved</p>
                    </div>
                    ';
                }
            ?>
                
            </div>
            
        </div>
        <br><br>
    </section><br><br><br><br><br><br><br><br><br><br><br>
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