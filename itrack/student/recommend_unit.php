<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['name'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  $rec_unit = $_GET['unit'];
  

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
                    <li> <a href="create.php">
                            Craate
                            <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                                </path>
                            </svg></a></li>
                    <li>Recommend Unit</li>
                </ul>
                
                <form action="..\include\create_pr.php" method="post">
                    <div class="inner">
                        <h3 class="title mar">Create Problem </h3>
                        <p class="text">Please describe in detail the problem that you would like to be solved</p>
                        <div class="row">
                            <div class="col-sm-6 field">
                                <h1 style="font-size:20px;">Problem Title:</h1><br>
                                <input class="form-control" style="height:35px;" type="text" value="<?php echo $_SESSION['pr'];?>" name="pr_title" disabled>
                            </div>
                            <div class="col-sm-6 field">
                                <div class="col-sm-12 ">
                                    <h1 style="font-size:20px;">Recommened Unit: <span style="color: red"><?php echo $rec_unit;?></span></h1>
                                    <p>You can choose different unit if recommended one is fitting your predictions</p>
                                    <select name="unit_title"  style="height: 55px;" required>
                                    <option selected></option>
                                    <?php
                                        
                                        $sql =$con->prepare("SELECT * FROM unit");
                                        $sql->execute();
                                        
                                        $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                        echo '<option selected value="'.$rec_unit.'">'.$rec_unit.'</option>';
                                            foreach ($rows as $row){
                                            
                                            echo 
                                            
                                            '<option value="'.$row["unit_title"].'">'.$row["unit_title"].'</option>';
                                            
                                        
                                    }?>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 field">
                                <br>
                                <h1 style="font-size:20px;">Description:</h1><br>
                                <textarea class="form-control" name="description"
                                    disabled><?php echo $_SESSION['des'];?></textarea>
                            </div>
                            <div class="col-sm-5 field"></div>
                            <div class="col-sm-7 field">
                                <input type="submit" class="bottom" value="Create">
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

</html>