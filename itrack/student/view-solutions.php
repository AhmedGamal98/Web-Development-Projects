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
                <li> <a href="index.php">
                        home
                        <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                            </path>
                        </svg></a></li>
                <li> <a href="solutions.php">
                        Solutions
                        <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                            </path>
                        </svg></a></li>
                <li> View</li>
            </ul>
            <?php if($do == "Manage"){ ?>
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
            <h3 class="title mb-3"> <?php echo $row['prs_title'];?></h3>
            
            <?php
            
            if($row['prs_solution'] != 48){
                $sql2 =$con->prepare("SELECT * FROM receiver WHERE res_id='$res_id'");
            $sql2->execute();
            
            $rows =$sql2->fetch();
            
            $dep= $rows['res_department'];
            $sql3 =$con->prepare("SELECT * FROM unit WHERE unit_id='$dep'");
            $sql3->execute();
            
            $row1 =$sql3->fetch();

                echo'
                <div class="user"><img src="../images/profile.png" alt="" title="">
                        <div class="text">
                        <p>'. $row1['unit_title'].'</p>
                        <h3 class="name">'. $rows['res_name'].'</h3>
                    </div>
                    </div>
                ';
            
        
            
        }

    ?>
                
            <div class="inner mt-4">
                <h3 class="title mb-3">Description </h3>
                <p> <?php echo $row['prs_description'];?></p>

            </div>
            
            <div class="inner mt-4">
                <h3 class="title mb-3">Solution </h3>
                <p> <?php echo $row['prs_solution'];?></p>

            </div>

            
            <?php
                $prs_id=$row['prs_id'];
                if($row['prs_solution'] != NULL && $row['is_solved'] == 1){
                    echo'
                    <div class="inner mt-4">
                    <h3 class="title mb-3">Are you satisfied with this solution ?</h3>
                    <p> Please note your problem will be automatically marked as solved by iTrack after 48 hours, so make sure
                    to review it </p>
                    <form action="..\include\approve.php" method="post">
                    <nav class="bottoms">
                    <a class="bottom" href="#change" data-toggle="modal"> Unsatisfied? </a>
                    <input hidden name="prs_id" value="'.$row["prs_id"].'">
                    <button type="submit" class="bottom green" >
                            Approve </button>
                            
                            </nav>
                    </form>

                    </div>
                    ';

                }
                elseif($row['is_solved'] == 3){
                    
                    echo'
                    <div class="inner mt-4">
                    <h3 class="title mb-3">48 hours have been passed, so this solution concederd approved</h3>
                    </div>
                    ';
                }
                elseif($row['is_solved'] == 4){
                    echo'<div class="inner mt-4">
                    <h3 class="title mb-3">You have contacted the concerned Unit</h3>
                    </div>
                    ';
                }
                elseif($row['is_solved'] == 5){
                    echo'<div class="inner mt-4">
                    <h3 class="title mb-3">Please resend your problem with more details if you did not approve this solution.</h3>
                    </div>
                    ';
                }


            ?>
                
                
            

        </div>
        <br><br><br><br><br>
    </section><br><br><br><br><br><br><br>

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
                <form action="..\include\add_rate.php?prs_id=<?php echo $prs_id;?>&std_id=<?php echo $_SESSION['id'];?>&res_id=<?php echo $res_id;?>" method="post">
                    
                    <div>
                        <p style="color:black; font-size:15px;">Write your comment: </p>
                        <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <br>
                    <button class="bottom" type="submit" style="width:400px;" > Submit</button>

                </form>

            </div>
        </div>
    </div>


    <div class="modal fade" id="change" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z"
                            fill="#1A1919"></path>
                    </svg>
                </button>
                <h3 class="title">Choose option</h3><br>
                
                    
                   <a href="../include/b_create.php?prs_id=<?php echo $prs_id?>"><button class="bottom"  style="width:400px;" > Creat New</button></a> <br>
                   <a href="../include/request_chat.php?res_id=<?php echo $res_id?>&std_id=<?php echo $std_id?>&prs_id=<?php echo $prs_id?>"><button class="bottom"  style="width:400px;" > Request Chat with Unit Member</button></a> <br>

                

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