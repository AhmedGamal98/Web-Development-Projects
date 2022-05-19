<?php
require_once('include/connection.php');

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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/grt-youtube-popup.js"></script>
    <script src="js/plugin.js"></script>
    <style>
        .head::after {
            content: '';
            position: absolute;
            bottom: 72%;
            left: 2.5%;
            z-index: 1;
            height: 3px;
            background: #2aabc0;
            width: 60px;


        }

        #bulb-svg {
            transition: all .3s ease-in-out;
            position: absolute;
            width: 250px;
        }
    </style>
    <style>
        body{
            text-transform: none;
        }
    </style>
</head>

<body>
    <div class="loader_bg" id="loader_bg">
        <img src="images/logo2.png" alt="" />
        <div class="loader" id="loader"></div>
    </div>
    <section class="login">
        <div class="box-bg">
            <div class="inner">
                <div class="logo">
                    <a href="index.php"><img src="images/logo2.png" alt="" title=""></a>
                </div>

            </div>
        </div>
        <div class="boxform">
            <div class="inner">
                <a class="back" href="index.php">
                    <svg width="18" height="14" viewBox="0 0 18 14" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.290001 7.71L6.29 13.71C6.47 13.89 6.72 14 7 14C7.55 14 8 13.55 8 13C8 12.72 7.89 12.47 7.71 12.29L3.41 8L17 8C17.55 8 18 7.55 18 7C18 6.45 17.55 6 17 6L3.41 6L7.7 1.71C7.89 1.53 8 1.28 8 1C8 0.45 7.55 0 7 0C6.72 0 6.47 0.11 6.29 0.29L0.290001 6.29C0.110001 6.47 0 6.72 0 7C0 7.28 0.110001 7.53 0.290001 7.71Z"
                            fill=""></path>
                    </svg></a>
                    <?php if($do == "Manage"){ ?>
                        <h2 class="title"> Welcome Back </h2><br>
                        <?php }elseif($do == "error"){ ?>
                            <h2 class="title"> Welcome Back </h2><br>
                        <div class="alert alert-danger">
                            <svg width="30" height="36" viewBox="0 0 40 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.3317 9.61971L31.7399 10.699C35.0394 13.2307 37.432 16.7611 38.5611 20.7637C39.6901 24.7664 39.4951 29.0267 38.005 32.9094C36.5149 36.7921 33.8097 40.0892 30.2927 42.3088C26.7757 44.5284 22.6355 45.5517 18.4894 45.226C14.3434 44.9003 10.4137 43.2431 7.28642 40.5016C4.15914 37.7601 2.00185 34.0812 1.13628 30.0134C0.270714 25.9457 0.743244 21.7071 2.4834 17.9299C4.22355 14.1526 7.1381 11.0391 10.7924 9.05358M20.4942 1.31382L20.7017 27.5582" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                            <div class="text-mass">
                                <p>Email or Password is incorrect, try again </p>
                            </div>
                        </div>
                    <?php }elseif($do == "should"){ ?>
                        <h2 class="title"> Welcome Back </h2><br>
                        <div class="alert alert-danger">
                            <svg width="30" height="36" viewBox="0 0 40 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.3317 9.61971L31.7399 10.699C35.0394 13.2307 37.432 16.7611 38.5611 20.7637C39.6901 24.7664 39.4951 29.0267 38.005 32.9094C36.5149 36.7921 33.8097 40.0892 30.2927 42.3088C26.7757 44.5284 22.6355 45.5517 18.4894 45.226C14.3434 44.9003 10.4137 43.2431 7.28642 40.5016C4.15914 37.7601 2.00185 34.0812 1.13628 30.0134C0.270714 25.9457 0.743244 21.7071 2.4834 17.9299C4.22355 14.1526 7.1381 11.0391 10.7924 9.05358M20.4942 1.31382L20.7017 27.5582" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                            <div class="text-mass">
                                <p>You don't have the permisson to reach this page without login with right credentials </p>
                            </div>
                        </div>
                        <?php } ?>
               
                <p class="text"></p>
                <form action="include/log_in.php" method="post">
                    <div class="row">
                        <div class="col-sm-12 field">
                            <input class="form-control" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="col-sm-12 field">
                            <input class="form-control" type="password" placeholder="Password" name="password" required>
                        </div>


                        <!--<div class="col-sm-3 field" ></div>-->
                        <div class="col-sm-12 field">
                            <input class="form-control" type="submit" value="Sign in"
                                style="background-color: #2aabc0; border-radius: 15px; color: white; font-size: 17px;">
                        </div>
                        <!--<div class="col-sm-3 field" ></div>-->

                    </div>
                </form>
            </div>
        </div>
    </section><br><br><br><br><br><br><br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        if (!sessionStorage.getItem("doNotShow")) {
            //sessionStorage.setItem("doNotShow", "true");
            setTimeout(function () {
                $("#loader_bg").fadeToggle();
            }, 2000);
        } else {
            $("#loader, #loader_bg").hide();
        }
    </script>
</body>

</html>