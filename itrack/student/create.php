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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
        integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
        integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

    <script>
        $(document).ready(function () {
            $('select').selectize({
                sortField: 'text'
            });
        });
    </script>
    <style>
        body{
            text-transform: none;
        }
    </style>
</head>

<body>
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
        <section class="create" style="margin-bottom: 100px;">
            <div class="container">
                <ul class="wizard">
                    <li> <a href="index.php">
                            Home
                            <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                                </path>
                            </svg></a></li>
                    <li>Report</li>
                </ul>
                <?php if($do == "Manage"){ ?>
                <?php }elseif($do == "model"){ ?>
                    <div class="alert alert-danger">
                <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M39.2853 18.2363V20.0106C39.2829 24.1694 37.9363 28.2161 35.4461 31.547C32.956 34.8779 29.4559 37.3147 25.4678 38.4939C21.4796 39.673 17.2172 39.5314 13.3161 38.0902C9.41497 36.6489 6.08427 33.9852 3.82072 30.4964C1.55717 27.0075 0.482036 22.8805 0.755672 18.7307C1.02931 14.5809 2.63705 10.6307 5.33912 7.46926C8.04119 4.30784 11.6928 2.10457 15.7494 1.18804C19.8059 0.271518 24.0501 0.690841 27.8489 2.38348M39.2853 4.58207L19.9996 23.8871L14.2139 18.1014"
                        stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <div class="text-mass">
                    <p>Model is not connected, please make sure to run app.py file.</p>
                </div>
            </div>
            
                    
                <?php } ?>
                <div class="inner">
                    <form action="../include/recommendation.php" method="post">
                        <h3 class="title mar">Report a Problem </h3>
                        <p class="text">Please describe in detail the problem that you would like to be solved</p>
                        <div class="row">

                            <div class="col-sm-12 field">
                                <input class="form-control" type="text" placeholder="Choose Title" name="problem"
                                    list="problemtitle" required>
                                <datalist id="problemtitle">
                                <?php
                                $sql =$con->prepare("SELECT * FROM problem_title");
                                $sql->execute();
                                
                                $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                    foreach ($rows as $row){
                                    
                                    echo 
                                    
                                    
                                    '<option label="'.$row['pr_title'].'" value="'.$row['pr_title'].'">';
                                    
                                    
                                 }?>
                                    
                                </datalist>
                            </div>

                            <div class="col-sm-12 field">
                                <br>
                                <textarea class="form-control" name="description" placeholder="Description" required></textarea>
                            </div>
                            <div class="col-sm-5 field"></div>
                            <div class="col-sm-7 field">
                                <input type="submit" class="bottom" value="Recommend Unit">
                            </div>

                        </div>
                </div>

            </div>
            </form>
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
    <script>
   
</script>

</html>