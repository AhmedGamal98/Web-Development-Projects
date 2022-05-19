<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['res_name'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  
  $sql1 =$con->prepare("SELECT unit_title
  FROM unit
  WHERE unit_id=?
  ");
  $sql1->execute([$_SESSION['department']]);
  $row1 =$sql1->fetch();
 

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
                                <li><a class="active" href="#">Home</a></li>
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

    <section class="categories">
        <div class="container">
        <?php if($do == "Manage"){ ?>
                <?php }elseif($do == "success"){ ?>
                    <div class="alert alert-success">
                <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M39.2853 18.2363V20.0106C39.2829 24.1694 37.9363 28.2161 35.4461 31.547C32.956 34.8779 29.4559 37.3147 25.4678 38.4939C21.4796 39.673 17.2172 39.5314 13.3161 38.0902C9.41497 36.6489 6.08427 33.9852 3.82072 30.4964C1.55717 27.0075 0.482036 22.8805 0.755672 18.7307C1.02931 14.5809 2.63705 10.6307 5.33912 7.46926C8.04119 4.30784 11.6928 2.10457 15.7494 1.18804C19.8059 0.271518 24.0501 0.690841 27.8489 2.38348M39.2853 4.58207L19.9996 23.8871L14.2139 18.1014"
                        stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <div class="text-mass">
                    <p>Aswer has been submitted successfully</p>
                </div>
            </div>
            <?php }elseif($do == "hide"){ ?>
                        <div class="alert alert-success">
                            <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.2853 18.2363V20.0106C39.2829 24.1694 37.9363 28.2161 35.4461 31.547C32.956 34.8779 29.4559 37.3147 25.4678 38.4939C21.4796 39.673 17.2172 39.5314 13.3161 38.0902C9.41497 36.6489 6.08427 33.9852 3.82072 30.4964C1.55717 27.0075 0.482036 22.8805 0.755672 18.7307C1.02931 14.5809 2.63705 10.6307 5.33912 7.46926C8.04119 4.30784 11.6928 2.10457 15.7494 1.18804C19.8059 0.271518 24.0501 0.690841 27.8489 2.38348M39.2853 4.58207L19.9996 23.8871L14.2139 18.1014" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                                    <div class="text-mass">
                                        <p>Problem has been hidden successfully</p>
                            </div>
                        </div> 
            <?php }elseif($do == "change"){ ?>
                    <div class="alert alert-success">
                <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M39.2853 18.2363V20.0106C39.2829 24.1694 37.9363 28.2161 35.4461 31.547C32.956 34.8779 29.4559 37.3147 25.4678 38.4939C21.4796 39.673 17.2172 39.5314 13.3161 38.0902C9.41497 36.6489 6.08427 33.9852 3.82072 30.4964C1.55717 27.0075 0.482036 22.8805 0.755672 18.7307C1.02931 14.5809 2.63705 10.6307 5.33912 7.46926C8.04119 4.30784 11.6928 2.10457 15.7494 1.18804C19.8059 0.271518 24.0501 0.690841 27.8489 2.38348M39.2853 4.58207L19.9996 23.8871L14.2139 18.1014"
                        stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <div class="text-mass">
                    <p>Unit has been changed successfully</p>
                </div>
            </div>
                    
                <?php } ?><br>
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#menu">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu1">New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu3">Wairing For Approval</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu2">Solved</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="menu" class="container tab-pane active"><br>
                    <section class="track">
                        <div class="container">
                        
                        <?php
                                $sql =$con->prepare("SELECT *
                                FROM problems
                                where prs_unit=? ORDER BY date DESC 
                                ");
                                $sql->execute([$row1['unit_title']]);
                                $rows =$sql->fetchAll();
                                    foreach ($rows as $row){
                                        $t=time();
            
                                        $dtObj = date_create( $row['date'], timezone_open("Europe/Oslo"));
                                        $sql2 =$con->prepare("SELECT *
                                        FROM student
                                        WHERE std_id=?
                                        ");
                                        $sql2->execute([$row['prs_std_id']]);
                                        $row2 =$sql2->fetch();
                                        if($row['prs_solution'] == NULL && $row['is_solved'] == 0 && $row['prs_show'] == 1){
                                            
                                        echo 
                                    
                                        '
                                        <div class="linebox_problem">
                                        <a href="problem-inner.php?id='.$row['prs_id'].'">
                                            <h3 class="title">'.$row['prs_title'].'</h3>
                                        </a>
                                        <div class="info">';
                                        
                                            echo'<span class="title_type">New</span>
                                            <div class="date">'.date_format($dtObj, 'g:ia \o\n l jS F Y').'</div>
                                            <a href="problem-inner.php?id='.$row['prs_id'].'"><span class="open_icon"><i
                                                        class="fa-solid fa-envelope"></i></span></a>
                                                        
                                                        </div>';

                                                        echo'
                                        <div class="user"><a href="user_profile.php?usr_id='.$row['prs_std_id'].'"><img src="../images/profile.png" alt=""
                                                    title=""></a>
                                            <div class="text">
                                                <p>'.$row2['std_level'].' - '.$row2['std_major'].' </p>
                                                <a href="user_profile.php?usr_id='.$row['prs_std_id'].'">
                                                    <h3 class="name"> '.$row2['std_name'].'</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                        }
                                        elseif($row['prs_solution'] != NULL && $row['is_solved'] == 2 &&  $row['prs_show'] == 1){
                                            echo 
                                    
                                        '
                                        <div class="linebox_problem">
                                        <a href="problem-inner.php?id='.$row['prs_id'].'">
                                            <h3 class="title">'.$row['prs_title'].'</h3>
                                        </a>
                                        <div class="info">';
                                            echo'
                                            <span class="title_type" style="background-color: green;">Solved</span>
                                            <div class="date">'.date_format($dtObj, 'g:ia \o\n l jS F Y').'</div>
                                            <a onclick="return confirm(\'Are you sure you want hide this problem?\');"  href="../include/show_prs.php?id='.$row['prs_id'].'">
                                            <span style="margin-right:20px;"  class="open_icon"><i
                                                        class="fa-solid fa-x"></i></span></a>

                                            <a href="problem-inner.php?id='.$row['prs_id'].'">
                                            <span style="margin-right:40px;" class="open_icon"><i
                                                        class="fa-solid fa-envelope-open"></i></span></a>
                                                        
                                                        
                                                        
                                                        </div>';
                                        
                                            
                                            
                                        echo'
                                        <div class="user"><a href="user_profile.php?usr_id='.$row['prs_std_id'].'"><img src="../images/profile.png" alt=""
                                                    title=""></a>
                                            <div class="text">
                                                <p>'.$row2['std_level'].' - '.$row2['std_major'].' </p>
                                                <a href="user_profile.php?usr_id='.$row['prs_std_id'].'">
                                                    <h3 class="name"> '.$row2['std_name'].'</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                    
                                }
                                elseif($row['prs_solution'] != NULL && $row['is_solved'] == 1 &&  $row['prs_show'] == 1){
                                    echo 
                            
                                '
                                <div class="linebox_problem">
                                <a href="problem-inner.php?id='.$row['prs_id'].'">
                                    <h3 class="title">'.$row['prs_title'].'</h3>
                                </a>
                                <div class="info">';
                                    echo'
                                    <span class="title_type" style="background-color: red;">Waiting</span>
                                    <div class="date">'.date_format($dtObj, 'g:ia \o\n l jS F Y').'</div>

                                    <a href="problem-inner.php?id='.$row['prs_id'].'">
                                    <span  class="open_icon"><i
                                                class="fa-solid fa-envelope-open"></i></span></a>
                                                
                                                
                                                
                                                </div>';
                                
                                    
                                    
                                echo'
                                <div class="user"><a href="user_profile.php?usr_id='.$row['prs_std_id'].'"><img src="../images/profile.png" alt=""
                                            title=""></a>
                                    <div class="text">
                                        <p>'.$row2['std_level'].' - '.$row2['std_major'].' </p>
                                        <a href="user_profile.php?usr_id='.$row['prs_std_id'].'">
                                            <h3 class="name"> '.$row2['std_name'].'</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            ';
                            
                        }
                                    
                                 }?>
                      
                            
                        </div>
                    </section><br><br><br><br><br><br><br>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <section class="track">
                        <div class="container">
                        <?php
                                $sql =$con->prepare("SELECT *
                                FROM problems
                                where prs_unit=?
                                ");
                                $sql->execute([$row1['unit_title']]);
                                $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                    foreach ($rows as $row){
                                        if($row['prs_solution'] == NULL && $row['is_solved'] == 0){
                                        $sql2 =$con->prepare("SELECT *
                                        FROM student
                                        WHERE std_id=?
                                        ");
                                        $sql2->execute([$row['prs_std_id']]);
                                        $row2 =$sql2->fetch();
                                        if($row['prs_solution'] == NULL ){
                                        echo 
                                    
                                        '
                                        <div class="linebox_problem">
                                        <a href="problem-inner.php?id='.$row['prs_id'].'">
                                            <h3 class="title">'.$row['prs_title'].'</h3>
                                        </a>
                                        <div class="info">';
                                        
                                            echo'<span class="title_type">New</span>
                                            <div class="date">'.date_format($dtObj, 'g:ia \o\n l jS F Y').'</div>
                                            <a href="problem-inner.php?id='.$row['prs_id'].'"><span class="open_icon"><i
                                                        class="fa-solid fa-envelope"></i></span></a>
                                                        
                                                        </div>';
                                                        echo'
                                        <div class="user"><a href="user_profile.php?usr_id='.$row['prs_std_id'].'"><img src="../images/profile.png" alt=""
                                                    title=""></a>
                                            <div class="text">
                                                <p>'.$row2['std_level'].' - '.$row2['std_major'].' </p>
                                                <a href="user_profile.php?usr_id='.$row['prs_std_id'].'">
                                                    <h3 class="name"> '.$row2['std_name'].'</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                        }
                                        elseif($row['prs_solution'] != NULL && $row['prs_show'] == 1){
                                            echo 
                                    
                                        '
                                        <div class="linebox_problem">
                                        <a href="problem-inner.php?id='.$row['prs_id'].'">
                                            <h3 class="title">'.$row['prs_title'].'</h3>
                                        </a>
                                        <div class="info">';
                                        echo'
                                        <span class="title_type" style="background-color: green;">Solved</span>
                                        <div class="date">'.date_format($dtObj, 'g:ia \o\n l jS F Y').'</div>
                                        <a onclick="return confirm(\'Are you sure you want hide this problem?\');"  href="../include/show_prs.php?id='.$row['prs_id'].'">
                                        <span style="margin-right:20px;"  class="open_icon"><i
                                                    class="fa-solid fa-x"></i></span></a>
                                            <a href="problem-inner.php?id='.$row['prs_id'].'"><span  style="margin-right:40px;" class="open_icon"><i
                                                        class="fa-solid fa-envelope-open"></i></span></a>
                                                        
                                                        </div>';
                                        
                                            
                                            
                                        echo'
                                        <div class="user"><a href="user_profile.php?usr_id='.$row['prs_std_id'].'"><img src="../images/profile.png" alt=""
                                                    title=""></a>
                                            <div class="text">
                                                <p>'.$row2['std_level'].' - '.$row2['std_major'].' </p>
                                                <a href="user_profile.php?usr_id='.$row['prs_std_id'].'">
                                                    <h3 class="name"> '.$row2['std_name'].'</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                                    }
                                    
                                 }?>

                        </div>
                    </section><br><br><br><br><br><br><br>
                </div>


                <div id="menu2" class="container tab-pane fade"><br>
                    <section class="track">
                        <div class="container">
                        <?php
                                $sql =$con->prepare("SELECT *
                                FROM problems
                                where prs_unit=?
                                ");
                                $sql->execute([$row1['unit_title']]);
                                $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                    foreach ($rows as $row){
                                        if($row['prs_solution'] != NULL && $row['is_solved'] == 2){
                                        $sql2 =$con->prepare("SELECT *
                                        FROM student
                                        WHERE std_id=?
                                        ");
                                        $sql2->execute([$row['prs_std_id']]);
                                        $row2 =$sql2->fetch();
                                        if($row['prs_solution'] == NULL){
                                            echo'
                                        <div class="user"><a href="user_profile.php?usr_id='.$row['prs_std_id'].'"><img src="../images/profile.png" alt=""
                                                    title=""></a>
                                            <div class="text">
                                                <p>'.$row2['std_level'].' - '.$row2['std_major'].' </p>
                                                <a href="user_profile.php?usr_id='.$row['prs_std_id'].'">
                                                    <h3 class="name"> '.$row2['std_name'].'</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                        echo 
                                    
                                        '
                                        <div class="linebox_problem">
                                        <a href="problem-inner.php?id='.$row['prs_id'].'">
                                            <h3 class="title">'.$row['prs_title'].'</h3>
                                        </a>
                                        <div class="info">';
                                        
                                            echo'<span class="title_type">New</span>
                                            <div class="date">'.date_format($dtObj, 'g:ia \o\n l jS F Y').'</div>
                                            <a href="problem-inner.php?id='.$row['prs_id'].'"><span class="open_icon"><i
                                                        class="fa-solid fa-envelope"></i></span></a>
                                                        
                                                        </div>';
                                        }
                                        elseif($row['prs_solution'] != NULL && $row['prs_show'] == 1){
                                            echo 
                                    
                                        '
                                        <div class="linebox_problem">
                                        <a href="problem-inner.php?id='.$row['prs_id'].'">
                                            <h3 class="title">'.$row['prs_title'].'</h3>
                                        </a>
                                        <div class="info">';
                                        echo'
                                        <span class="title_type" style="background-color: green;">Solved</span>
                                        <div class="date">'.date_format($dtObj, 'g:ia \o\n l jS F Y').'</div>
                                        <a onclick="return confirm(\'Are you sure you want hide this problem?\');"  href="../include/show_prs.php?id='.$row['prs_id'].'">
                                        <span style="margin-right:20px;"  class="open_icon"><i
                                                    class="fa-solid fa-x"></i></span></a>
                                            <a href="problem-inner.php?id='.$row['prs_id'].'"><span  style="margin-right:40px;" class="open_icon"><i
                                                        class="fa-solid fa-envelope-open"></i></span></a>
                                                        
                                                        </div>';
                                        
                                            
                                            
                                        echo'
                                        <div class="user"><a href="user_profile.php?usr_id='.$row['prs_std_id'].'"><img src="../images/profile.png" alt=""
                                                    title=""></a>
                                            <div class="text">
                                                <p>'.$row2['std_level'].' - '.$row2['std_major'].' </p>
                                                <a href="user_profile.php?usr_id='.$row['prs_std_id'].'">
                                                    <h3 class="name"> '.$row2['std_name'].'</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                                    }
                                    
                                 }?>

                        </div>
                    </section><br><br><br><br>
                </div>
                <div id="menu3" class="container tab-pane fade"><br>
                    <section class="track">
                        <div class="container">
                        <?php
                                $sql =$con->prepare("SELECT *
                                FROM problems
                                where prs_unit=?
                                ");
                                $sql->execute([$row1['unit_title']]);
                                $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                    foreach ($rows as $row){
                                        if($row['prs_solution'] != NULL && $row['is_solved'] == 1){
                                        $sql2 =$con->prepare("SELECT *
                                        FROM student
                                        WHERE std_id=?
                                        ");
                                        $sql2->execute([$row['prs_std_id']]);
                                        $row2 =$sql2->fetch();
                                        if($row['prs_solution'] == NULL){
                                            echo'
                                        <div class="user"><a href="user_profile.php?usr_id='.$row['prs_std_id'].'"><img src="../images/profile.png" alt=""
                                                    title=""></a>
                                            <div class="text">
                                                <p>'.$row2['std_level'].' - '.$row2['std_major'].' </p>
                                                <a href="user_profile.php?usr_id='.$row['prs_std_id'].'">
                                                    <h3 class="name"> '.$row2['std_name'].'</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                        echo 
                                    
                                        '
                                        <div class="linebox_problem">
                                        <a href="problem-inner.php?id='.$row['prs_id'].'">
                                            <h3 class="title">'.$row['prs_title'].'</h3>
                                        </a>
                                        <div class="info">';
                                        
                                            echo'<span class="title_type">New</span>
                                            <div class="date">'.date_format($dtObj, 'g:ia \o\n l jS F Y').'</div>
                                            <a href="problem-inner.php?id='.$row['prs_id'].'"><span class="open_icon"><i
                                                        class="fa-solid fa-envelope"></i></span></a>
                                                        
                                                        </div>';
                                        }
                                        elseif($row['prs_solution'] != NULL && $row['prs_show'] == 1){
                                            echo 
                                    
                                        '
                                        <div class="linebox_problem">
                                        <a href="problem-inner.php?id='.$row['prs_id'].'">
                                            <h3 class="title">'.$row['prs_title'].'</h3>
                                        </a>
                                        <div class="info">';
                                        echo'
                                        <span class="title_type" style="background-color: red;">Waiting</span>
                                        <div class="date">'.date_format($dtObj, 'g:ia \o\n l jS F Y').'</div>
                                            <a href="problem-inner.php?id='.$row['prs_id'].'"><span class="open_icon"><i
                                                        class="fa-solid fa-envelope-open"></i></span></a>
                                                        
                                                        </div>';
                                        
                                            
                                            
                                        echo'
                                        <div class="user"><a href="user_profile.php?usr_id='.$row['prs_std_id'].'"><img src="../images/profile.png" alt=""
                                                    title=""></a>
                                            <div class="text">
                                                <p>'.$row2['std_level'].' - '.$row2['std_major'].' </p>
                                                <a href="user_profile.php?usr_id='.$row['prs_std_id'].'">
                                                    <h3 class="name"> '.$row2['std_name'].'</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                                    }
                                    
                                 }?>

                        </div>
                    </section><br><br><br><br>
                </div>                   
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br>
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
        setTimeout(function () {
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>
</body>

</html>