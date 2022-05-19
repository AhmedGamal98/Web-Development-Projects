<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['name'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  
  $sql =$con->prepare("SELECT count(*)
  FROM chat where student_id=? and std_is_read = 0
  ");
  $sql->execute([$_SESSION['id']]);
  $count1 = $sql->fetchColumn(); 

  $t = "answer";
  $sql2 =$con->prepare("SELECT count(*)
  FROM std_not where std_id=? and std_is_read = 0 and type=?
  ");
  $sql2->execute([$_SESSION['id'],$t]);
  $count2 = $sql2->fetchColumn();

  $ap = "approve";
  $sql3 =$con->prepare("SELECT count(*)
  FROM std_not where std_id=? and std_is_read = 0 and type=?
  ");
  $sql3->execute([$_SESSION['id'],$ap]);
  $count3 = $sql3->fetchColumn();
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
                                <li><a class="active" href="#">Home</a></li>
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
    <section class="slider" style="background-color:#2aacc013">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1  style="font-size:30px;margin-top:50%;margin-bottom:12%;color: #2eb3b8;">DESIGNED TO MAKE A DIFFERENCE</h1>
                    
                </div>
                
                <div class="col-sm-6">
                    <div class="carousel slide carousel-fade" id="carouselExampleFade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#carouselExampleFade" data-slide-to="0"></li>
                            <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                            <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                            <li data-target="#carouselExampleFade" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img src="../images/slides/img1.jpg" alt=""></div>
                            <div class="carousel-item"> <img src="../images/slides/img2.jpg" alt=""></div>
                            <div class="carousel-item"> <img src="../images/slides/img3.jpg" alt=""></div>
                            <div class="carousel-item"> <img src=" ../images/slides/img4.jpg" alt=""></div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.8 490.8"
                                style="enable-background:new 0 0 490.8 490.8;" xml:space="preserve">
                                <path
                                    d="M135.685,3.128c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82 l227.115,227.136L120.581,472.461c-4.237,4.093-4.354,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262 c0.089-0.086,0.176-0.173,0.262-0.262l234.667-234.667c4.164-4.165,4.164-10.917,0-15.083L135.685,3.128z">
                                </path>
                                <path
                                    d="M128.133,490.68c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571l227.136-227.115 L120.581,18.232c-4.171-4.171-4.171-10.933,0-15.104c4.171-4.171,10.933-4.171,15.104,0l234.667,234.667 c4.164,4.165,4.164,10.917,0,15.083L135.685,487.544C133.685,489.551,130.967,490.68,128.133,490.68z">
                                </path>
                            </svg></a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.8 490.8"
                                style="enable-background:new 0 0 490.8 490.8;" xml:space="preserve">
                                <path
                                    d="M135.685,3.128c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82 l227.115,227.136L120.581,472.461c-4.237,4.093-4.354,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262 c0.089-0.086,0.176-0.173,0.262-0.262l234.667-234.667c4.164-4.165,4.164-10.917,0-15.083L135.685,3.128z">
                                </path>
                                <path
                                    d="M128.133,490.68c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571l227.136-227.115 L120.581,18.232c-4.171-4.171-4.171-10.933,0-15.104c4.171-4.171,10.933-4.171,15.104,0l234.667,234.667 c4.164,4.165,4.164,10.917,0,15.083L135.685,487.544C133.685,489.551,130.967,490.68,128.133,490.68z">
                                </path>
                            </svg></a>
                    </div>
                </div>

            </div>
        </div>
    </section><br><br><br><br><br><br><br>
    <!--End Slider-->
    <section class="categories">
        <div class="container">
            <h2 class="title">CATEGORIES</h2>
            <div class="row">
                <div class="col-sm-3 item">
                    <a class="inner" href="create.php">
                        <div class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 502 502"
                                style="enable-background:new 0 0 502 502;" xml:space="preserve">
                                <path
                                    d="M467.628,190.176l-70.469-70.468c-1.876-1.875-4.419-2.929-7.071-2.929h-76.473V80.468c0-2.652-1.054-5.196-2.929-7.071 L240.219,2.929C238.342,1.054,235.8,0,233.146,0H41.443c-5.522,0-10,4.477-10,10v365.221c0,5.523,4.478,10,10,10h146.941V492 c0,5.523,4.478,10,10,10h262.172c5.522,0,10-4.477,10-10V197.247C470.557,194.595,469.503,192.051,467.628,190.176z M400.089,150.921l18.163,18.163l18.163,18.163h-36.326V150.921z M243.147,34.142l18.163,18.163l18.163,18.163h-36.326V34.142z M87.287,116.779c-5.522,0-10,4.477-10,10s4.478,10,10,10h101.099v29.919H87.287c-5.522,0-10,4.477-10,10s4.478,10,10,10h101.099 v30.01H87.287c-5.522,0-10,4.477-10,10c0,5.523,4.478,10,10,10h101.099v30.009H87.287c-5.522,0-10,4.477-10,10s4.478,10,10,10 h101.099v78.504H51.443V20h171.703v60.468c0,5.523,4.478,10,10,10h60.469v26.311H87.287z M450.557,482H208.386V136.779h171.703 v60.468c0,5.523,4.478,10,10,10h60.469V482z">
                                </path>
                                <path
                                    d="M244.229,253.468H369.63c5.522,0,10-4.477,10-10c0-5.523-4.478-10-10-10H244.229c-5.522,0-10,4.477-10,10 C234.229,248.991,238.706,253.468,244.229,253.468z">
                                </path>
                                <path
                                    d="M414.714,283.478H244.229c-5.522,0-10,4.477-10,10s4.478,10,10,10h170.486c5.522,0,10-4.477,10-10 S420.237,283.478,414.714,283.478z">
                                </path>
                                <path
                                    d="M414.714,333.487H244.229c-5.522,0-10,4.477-10,10s4.478,10,10,10h170.486c5.522,0,10-4.477,10-10 S420.237,333.487,414.714,333.487z">
                                </path>
                                <path
                                    d="M414.714,383.497H244.229c-5.522,0-10,4.477-10,10s4.478,10,10,10h170.486c5.522,0,10-4.477,10-10 S420.237,383.497,414.714,383.497z">
                                </path>
                                <path
                                    d="M398.044,253.468h16.67c5.522,0,10-4.477,10-10c0-5.523-4.478-10-10-10h-16.67c-5.522,0-10,4.477-10,10 C388.044,248.991,392.522,253.468,398.044,253.468z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="title">Report</h3>
                        <br><br>
                    </a>
                </div>
                <div class="col-sm-3 item">
                    <a class="inner" href="track.php">
                        <div class="icon">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 535.658 535.658"
                                style="enable-background:new 0 0 535.658 535.658;" xml:space="preserve">
                                <path
                                    d="M295.027,91.431c25.202,0,45.705-20.508,45.705-45.716C340.732,20.508,320.229,0,295.027,0 c-25.207,0-45.714,20.508-45.714,45.715C249.313,70.923,269.82,91.431,295.027,91.431z">
                                </path>
                                <path
                                    d="M164.08,279.878c2.674,0,5.183-1.036,7.064-2.917l32.96-32.959c1.881-1.882,2.917-4.391,2.917-7.064 s-1.036-5.183-2.917-7.064l-9.64-9.641c0.462-0.395,0.915-0.804,1.349-1.237c4.542-4.542,6.96-10.641,6.847-17.212 c1.874-1.243,3.539-2.814,4.896-4.664l15.702-21.41c2.268-3.092,7.515-8.369,10.593-10.655l1.253-0.93l-13.608,54.243 c-0.168,0.671-0.263,1.332-0.317,1.985l-11.245,47.8c-0.972,4.129-3.594,11.351-5.499,15.149l-27.289,54.338 c-2.446,4.871-2.849,10.402-1.135,15.576c1.714,5.174,5.341,9.371,10.212,11.816c2.723,1.368,5.638,2.098,8.665,2.169 c0.159,0.004,0.318,0.006,0.477,0.006c7.771,0,14.764-4.311,18.25-11.252l27.291-54.341c3.306-6.587,7.069-16.956,8.754-24.12 l10.925-46.439h18.93c0.009,0.008,0.016,0.017,0.025,0.023l26.137,22.702l-12.928,51.716c-2.728,10.916,3.933,22.017,14.849,24.746 c1.631,0.407,3.3,0.613,4.962,0.613c9.373-0.001,17.507-6.359,19.782-15.461l13.413-53.656c3.238-12.95-1.727-28.703-11.805-37.456 l-25.397-22.061l8.708-34.717c5.185,10.155,16.115,18.897,27.093,21.508l36.9,8.778c1.476,0.352,2.987,0.529,4.494,0.529 c8.993,0,16.729-6.118,18.814-14.878c2.469-10.382-3.968-20.838-14.349-23.308l-36.55-8.694c-0.545-0.279-1.606-1.151-1.984-1.632 l-17.931-39.223c-3.141-6.872-10.054-11.312-17.612-11.312c-0.279,0-53.171,0-53.171,0c-4.025,0-8.175,2.029-10.581,3.814 l-41.607,30.886c-6.15,4.565-14.204,12.667-18.734,18.845l-15.701,21.409c-0.418,0.57-0.795,1.162-1.146,1.766 c-5.936,0.292-11.422,2.689-15.558,6.825c-0.435,0.435-0.843,0.888-1.238,1.35l-9.64-9.64c-1.881-1.881-4.39-2.917-7.064-2.917 s-5.183,1.036-7.064,2.917l-32.959,32.96c-1.881,1.882-2.918,4.391-2.918,7.064s1.036,5.183,2.918,7.064l55.342,55.343 C158.897,278.842,161.406,279.878,164.08,279.878z M168.033,191.213c1.329-1.33,2.96-2.29,4.763-2.841 c0.011,0.082,0.013,0.163,0.025,0.244c0.786,5.109,3.515,9.607,7.684,12.665c2.95,2.163,6.375,3.423,9.979,3.69 c-0.482,2.144-1.517,4.083-3.063,5.629c-0.437,0.436-0.913,0.822-1.41,1.179l-19.156-19.156 C167.211,192.128,167.595,191.65,168.033,191.213z">
                                </path>
                                <path
                                    d="M436.9,402.838c0-4.763-3.577-8.77-8.318-9.321l-10.528-1.232c-1.563-5.163-3.71-10.115-6.395-14.746l6.565-8.258 c2.958-3.743,2.652-9.103-0.711-12.467l-13.186-13.188c-1.77-1.769-4.124-2.742-6.629-2.742c-2.107,0-4.181,0.722-5.84,2.033 l-8.798,6.967c-4.354-2.313-8.922-4.175-13.606-5.545l-1.3-11.249c-0.548-4.716-4.553-8.292-9.323-8.32H340.19 c-4.764,0-8.771,3.577-9.32,8.32l-1.298,11.152c-4.936,1.405-9.715,3.343-14.234,5.772l-8.968-7.099 c-1.658-1.31-3.732-2.031-5.839-2.031c-2.506,0-4.86,0.974-6.629,2.743l-13.189,13.188c-3.362,3.363-3.668,8.724-0.708,12.47 l6.815,8.595c-2.708,4.772-4.868,9.862-6.431,15.157l-10.764,1.254c-4.717,0.549-8.294,4.553-8.321,9.322l0.001,18.641 c0,4.766,3.578,8.772,8.317,9.319l10.578,1.253c1.498,5.311,3.567,10.361,6.161,15.042l-6.337,7.985 c-2.957,3.745-2.651,9.107,0.712,12.469l13.188,13.187c1.769,1.77,4.123,2.743,6.629,2.743c2.107,0,4.18-0.722,5.838-2.032 l7.868-6.222c4.589,2.591,9.531,4.676,14.716,6.21l1.144,9.817c0.546,4.716,4.548,8.292,9.318,8.32h18.598 c4.765,0,8.772-3.577,9.321-8.321l1.098-9.486c5.454-1.5,10.729-3.661,15.706-6.433l7.674,6.071 c1.658,1.309,3.732,2.031,5.839,2.031c2.507,0,4.861-0.975,6.629-2.744l13.188-13.186c3.364-3.364,3.67-8.724,0.711-12.467 l-6.069-7.673c2.848-5.102,5.055-10.54,6.571-16.193l9.876-1.142c4.714-0.546,8.292-4.549,8.322-9.321L436.9,402.838z M370.061,434.056c-5.53,5.53-12.898,8.576-20.749,8.576c-7.85,0-15.218-3.046-20.747-8.576c-5.53-5.53-8.576-12.897-8.576-20.747 c0-7.85,3.045-15.218,8.576-20.748c5.529-5.53,12.898-8.576,20.747-8.576c7.85,0,15.219,3.046,20.749,8.576 c5.53,5.53,8.576,12.899,8.576,20.748C378.637,421.158,375.591,428.525,370.061,434.056z">
                                </path>
                                <path
                                    d="M267.518,445.289c-0.417-4.993-4.503-8.862-9.498-9.001l-7.76-0.248c-1.706-4.22-3.865-8.248-6.431-12l4.25-6.428 c2.757-4.152,1.968-9.729-1.842-12.979l-10.434-8.797c-1.781-1.495-4.042-2.319-6.366-2.319c-2.51,0-4.897,0.944-6.723,2.657 l-6.023,5.65c-3.776-1.614-7.766-2.86-11.887-3.713l-1.663-8.19c-0.99-4.843-5.462-8.275-10.474-7.853l-13.59,1.146 c-4.992,0.418-8.861,4.505-8.998,9.498l-0.272,8.275c-4.114,1.574-8.002,3.548-11.581,5.881l-7.055-4.683 c-1.612-1.071-3.49-1.637-5.433-1.637c-2.912,0-5.66,1.265-7.547,3.477l-8.797,10.435c-3.216,3.83-3.07,9.457,0.337,13.087 l5.516,5.889c-1.936,4.238-3.396,8.69-4.351,13.265l-7.794,1.593c-4.893,1.001-8.268,5.502-7.851,10.472l1.146,13.592 c0.421,4.991,4.507,8.86,9.502,8.999l7.753,0.227c1.649,4.362,3.757,8.479,6.278,12.267l-4.07,6.156 c-2.758,4.151-1.97,9.729,1.842,12.98l10.435,8.796c1.782,1.496,4.043,2.32,6.367,2.32c2.509,0,4.896-0.944,6.72-2.657l5.283-4.956 c4.127,1.872,8.452,3.285,12.885,4.211l1.403,6.979c0.883,4.622,4.931,7.977,9.627,7.978h0.001c0.273,0,0.548-0.012,0.827-0.035 l13.587-1.147c4.991-0.417,8.862-4.503,9.002-9.496l0.222-6.813c4.482-1.654,8.792-3.859,12.835-6.567l5.872,3.882 c1.612,1.071,3.49,1.637,5.433,1.637c2.912,0,5.661-1.265,7.547-3.477l8.798-10.435c3.214-3.83,3.069-9.457-0.336-13.087 l-4.797-5.121c2.049-4.567,3.529-9.326,4.409-14.177l7.037-1.425c4.894-0.998,8.27-5.5,7.852-10.478L267.518,445.289z M211.407,475.701c-4.777,5.671-11.788,8.923-19.233,8.923c-5.93,0-11.684-2.106-16.206-5.933 c-5.13-4.32-8.268-10.393-8.834-17.097c-0.567-6.705,1.507-13.219,5.842-18.343c4.776-5.67,11.786-8.922,19.233-8.922 c5.929,0,11.684,2.106,16.206,5.932c5.13,4.322,8.267,10.396,8.833,17.101C217.815,464.066,215.741,470.578,211.407,475.701z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="title">Track <?php if($count3 !=0){
                                    echo "<span style='width: 30px;border-radius: 20px;background-color:red;color:#fff;padding: 6px; margin-left:5px; margin-top:0px;'>".$count3."<span>";
                                    }?></h3>
                        <br><br>
                    </a>
                </div>
                <div class="col-sm-3 item">
                    <a class="inner" href="solutions.php">
                        <div class="icon">
                            <svg id="bulb-svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="250px" height="250px"
                                viewBox="0 0 196 196" enable-background="new 0 0 196 196" xml:space="preserve">
                                <g id="bulb">
                                    <path id="bulb_body" fill="#FFFFFF" stroke="#2aabc0" stroke-width="3"
                                        stroke-linecap="square" stroke-miterlimit="10"
                                        d="M138,86.465
                                   c0-22.284-18.131-40.348-40.5-40.348c-22.367,0-40.5,18.064-40.5,40.348c0,13.2,6.363,24.918,16.201,32.279v12.91
                                   c0,1.781,1.449,3.229,3.238,3.229h42.12c1.789,0,3.24-1.445,3.24-3.229v-12.91C131.637,111.384,138,99.665,138,86.465z" />
                                    <g id="sockel">
                                        <path fill="#fff" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                            stroke-miterlimit="10" d="M119.013,139.598
                                       c0,1.803-1.468,3.266-3.276,3.266H79.689c-1.81,0-3.276-1.463-3.276-3.266l0,0c0-1.805,1.468-3.267,3.276-3.267h36.046
                                       C117.545,136.331,119.013,137.793,119.013,139.598L119.013,139.598z" />
                                        <path fill="#fff" stroke="#3D3D3D" stroke-width="3" stroke-linecap="square"
                                            stroke-miterlimit="10" d="M119.013,146.128
                                       c0,1.804-1.468,3.267-3.276,3.267H79.689c-1.81,0-3.276-1.463-3.276-3.267l0,0c0-1.804,1.468-3.267,3.276-3.267h36.046
                                       C117.545,142.861,119.013,144.324,119.013,146.128L119.013,146.128z" />
                                        <path fill="#ffff" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                            stroke-miterlimit="10" d="M119.013,152.659
                                       c0,1.804-1.468,3.267-3.276,3.267H79.689c-1.81,0-3.276-1.463-3.276-3.267l0,0c0-1.804,1.468-3.267,3.276-3.267h36.046
                                       C117.545,149.395,119.013,150.855,119.013,152.659L119.013,152.659z" />
                                        <path fill="#ffff" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                            stroke-miterlimit="10" d="M119.013,159.191
                                       c0,1.803-1.468,3.266-3.276,3.266H79.689c-1.81,0-3.276-1.463-3.276-3.266l0,0c0-1.805,1.468-3.267,3.276-3.267h36.046
                                       C117.545,155.926,119.013,157.389,119.013,159.191L119.013,159.191z" />
                                        <path fill="none" stroke="#2aabc0" stroke-width="3" stroke-miterlimit="10" d="M89.111,168.988c0,4.093,3.851,7.41,8.602,7.41
                                       c4.75,0,8.603-3.317,8.603-7.41" />
                                        <path fill="none" stroke="#3D3D3D" stroke-width="3" stroke-miterlimit="10"
                                            d="M81.116,162.457v3.266
                                       c0,1.805,1.467,3.267,3.275,3.267h4.72h17.203h4.293c1.809,0,3.275-1.464,3.275-3.267v-3.266" />
                                    </g>
                                    <path fill="none" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                        stroke-miterlimit="10" d="M75,89.781v2.427v6.953
                                   l13,12.769v22.75" />
                                    <path fill="none" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                        stroke-miterlimit="10" d="M107,134.68v-22.75
                                   l13-12.769v-6.953v-2.427" />

                                    <path id="glow" fill="none" stroke="#2aabc0" stroke-width="3"
                                        stroke-linecap="square" stroke-miterlimit="10" d="M120,89.802
                                   c0,3.003-2.52,5.438-5.625,5.438c-3.107,0-5.625-2.435-5.625-5.438c0,3.003-2.52,5.438-5.625,5.438
                                   c-3.107,0-5.625-2.435-5.625-5.438c0,3.003-2.519,5.438-5.625,5.438s-5.625-2.435-5.625-5.438c0,3.003-2.519,5.438-5.625,5.438
                                   c-3.105,0-5.625-2.435-5.625-5.438" />

                                </g>
                                <g id="licht" style="opacity:0">

                                    <line fill="none" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                        stroke-miterlimit="10" x1="151.088" y1="90.5" x2="170" y2="90.5" />
                                    <line fill="none" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                        stroke-miterlimit="10" x1="25" y1="90.5" x2="43.912" y2="90.5" />

                                    <line fill="none" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                        stroke-miterlimit="10" x1="135.392" y1="128.327" x2="148.765" y2="141.677" />

                                    <line fill="none" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                        stroke-miterlimit="10" x1="46.234" y1="39.322" x2="59.607" y2="52.673" />

                                    <line fill="none" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                        stroke-miterlimit="10" stroke-opacity="0" x1="97.5" y1="143.996" x2="97.5"
                                        y2="162.876" />

                                    <line fill="none" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                        stroke-miterlimit="10" x1="97.5" y1="18.124" x2="97.5" y2="37.004" />

                                    <line fill="none" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                        stroke-miterlimit="10" x1="59.607" y1="128.327" x2="46.234" y2="141.677" />

                                    <line fill="none" stroke="#2aabc0" stroke-width="3" stroke-linecap="square"
                                        stroke-miterlimit="10" x1="148.765" y1="39.322" x2="135.392" y2="52.672" />

                                </g>
                            </svg>

                        </div>
                        <h3 class="title">Solutions <?php if($count2 !=0){
                                    echo "<span style='width: 30px;border-radius: 20px;background-color:red;color:#fff;padding: 6px; margin-left:5px; margin-top:0px;'>".$count2."<span>";
                                    }?></h3>
                        <br><br>
                    </a>
                </div>
                <div class="col-sm-3 item">
                    <a class="inner" href="notifications.php">
                        <div class="icon">
                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 8v7h8V8a4 4 0 1 0-8 0zm2.03-5.67a2 2 0 1 1 3.95 0A6 6 0 0 1 16 8v6l3 2v1H1v-1l3-2V8a6 6 0 0 1 4.03-5.67zM12 18a2 2 0 1 1-4 0h4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="title">Notifications  <?php if($count1 !=0){
                                    echo "<span style='width: 30px;border-radius: 20px;background-color:red;color:#fff;padding: 6px; margin-left:5px; margin-top:0px;'>".$count1."<span>";
                                    }?></h3>
                        <br><br>
                    </a>
                </div>
            </div>
        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        if (!sessionStorage.getItem('doNotShow')) {
            sessionStorage.setItem('doNotShow', 'true');
            setTimeout(function () {
                $('.loader_bg').fadeToggle();
            }, 1800);
        } else {
            $('.loader, .loader_bg').hide();
        }
    </script>
</body>

</html>