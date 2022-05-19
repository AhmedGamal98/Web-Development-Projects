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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="chat_list.php">Messages</a></li>
                                <li><a style="text-decoration: none"  href="announce.php">Announcement</a></li>
                                <li><a class="active" href="#l">Support</a></li>
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

       <section class="contactus">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 item" style="text-align: center;margin-bottom: 20px;">
                
                <?php if($do == "Manage"){ ?>
                        
                        <?php }elseif($do == "success"){ ?>
                            <div class="alert alert-success">
                        <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39.2853 18.2363V20.0106C39.2829 24.1694 37.9363 28.2161 35.4461 31.547C32.956 34.8779 29.4559 37.3147 25.4678 38.4939C21.4796 39.673 17.2172 39.5314 13.3161 38.0902C9.41497 36.6489 6.08427 33.9852 3.82072 30.4964C1.55717 27.0075 0.482036 22.8805 0.755672 18.7307C1.02931 14.5809 2.63705 10.6307 5.33912 7.46926C8.04119 4.30784 11.6928 2.10457 15.7494 1.18804C19.8059 0.271518 24.0501 0.690841 27.8489 2.38348M39.2853 4.58207L19.9996 23.8871L14.2139 18.1014" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                                <div class="text-mass">
                                    <p>Your message has been sent successfully</p>
                        </div>
                    </div> <br><br>
                    <?php } ?>
                    <h3 class="title1">Contact Us</h3>
                    <p class="text">Feel free to contact us if there is a problem with our website. We will be happy to assist you.</p>

                </div>
                
                    
                        
                <div class="col-sm-6">
                    <img src="../images/send-mail.png" style="width:400px; margin-top:0px;margin-left:50px;" alt="">
                </div>
                <div class="col-sm-6 item">
                

                    <form action="../include/contact_inc.php" method="post" style=" margin-top:80px;">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <input class="form-control" type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-sm-12 inpudata">
                                <input class="form-control" type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-sm-12 inpudata">
                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                            </div><br><br>
                            <div class="col-sm-12 inpudata" style="margin: auto">
                                <button class="bottom" type="submit">Send Now</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
    </section>
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