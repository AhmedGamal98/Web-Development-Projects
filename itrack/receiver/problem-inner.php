<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['res_name'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  $pr_id = $_GET['id'];
  $sql1 =$con->prepare("SELECT * FROM problems WHERE prs_id=?");
  $sql1->execute([$pr_id]);
  $row1 =$sql1->fetch();

  if($row1['status'] ==0){
    $sql = $con->prepare("UPDATE problems SET 

    status =1

    WHERE prs_id=$pr_id"); 

    $sql->execute();
  }
  $t=time();
            
  $dtObj = date_create( $row1['date'], timezone_open("Europe/Oslo"));


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
                                <li><a class="active" href="index.php">Home</a></li>
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
    <section class="solutions">
        <div class="container">
            <ul class="wizard">
                <li> <a href="index.php">
                        Home
                        <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                            </path>
                        </svg></a></li>
                <li> <a href="index.php">
                        Problems
                        <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                            </path>
                        </svg></a></li>
                <li> <?php echo $row1['prs_title'];?></li>
            </ul>
            <h3 class="title mb-3"> <?php echo $row1['prs_title'];?></h3>
            <div class="date"><?php echo date_format($dtObj, 'g:ia \o\n l jS F Y');?></div>
            <div class="user">
            <?php
                $sql2 =$con->prepare("SELECT * FROM student WHERE std_id=?");
                $sql2->execute([$row1['prs_std_id']]);
                $row2 =$sql2->fetch();
            ?>
                <a href="user_profile.php?usr_id=<?php echo $row1['prs_std_id'];?>"><img src="../images/profile.png" alt="" title=""></a>
                <div class="text">
                <a href="user_profile.php?usr_id=<?php echo $row1['prs_std_id'];?>">
                        <h3 class="name"> <?php echo $row2['std_name'];?></h3>
                    <p><?php echo $row2['std_level']; echo ' - ';  echo $row2['std_major'];?> </p>
                    
                    </a>
                    <h3 class="name"> <a href="user_profile.php?usr_id=<?php echo $row1['prs_std_id'];?>" class="itemprofile">View Profile</a></h3>
                </div>

            </div>
            <div class="inner mt-4">
                <h3 class="title mb-3">Problem </h3>
                <p> <?php echo $row1['prs_description'];?></p>

            </div>

        </div>
    </section><br><br>

    <section class="create" style="margin-bottom: 100px;">
        <div class="container">
        <?php if($do == "Manage"){ ?>
                <?php }elseif($do == "erorr"){ ?>
                    <div class="alert alert-danger">
                    <svg width="30" height="36" viewBox="0 0 40 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M30.3317 9.61971L31.7399 10.699C35.0394 13.2307 37.432 16.7611 38.5611 20.7637C39.6901 24.7664 39.4951 29.0267 38.005 32.9094C36.5149 36.7921 33.8097 40.0892 30.2927 42.3088C26.7757 44.5284 22.6355 45.5517 18.4894 45.226C14.3434 44.9003 10.4137 43.2431 7.28642 40.5016C4.15914 37.7601 2.00185 34.0812 1.13628 30.0134C0.270714 25.9457 0.743244 21.7071 2.4834 17.9299C4.22355 14.1526 7.1381 11.0391 10.7924 9.05358M20.4942 1.31382L20.7017 27.5582"
                            stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <div class="text-mass">
                        <p>Please fill your Answer to proceed </p>
                    </div>
                </div>
                    
                <?php } ?>
           

            <?php
                if($row1['prs_solution'] == NULL){
                    echo'
                    <div class="inner">
                    <h3 class="title mar" style="margin-bottom: 9px;">Answer Solution </h3>
                    <span style="font-size: 14px;">Please provide a solution to this problem</span>
                    <form action="../include/answer.php?pr_id='.$row1['prs_id'].'" method="post">
                    <div class="row">
                        <div class="col-sm-12 field">
                            <textarea class="form-control" name="solution" placeholder="solution" required> </textarea>
                        </div>
                        <div class="col-sm-3 field">
    
                        </div>
                        <div class="col-sm-3 field">
                            
                            <button class="bottom" type="submit"> Submit Solution </button>
    
                        </div>
                    </form>
                        <div class="col-sm-3 field">
    
                            <a class="bottom" href="chat.php?std_id='.$row1['prs_std_id'].'&prs_id='.$row1['prs_id'].'">Contact the sender </a>
                        </div>
                        <div class="col-sm-3 field">
    
                        </div>
                        <div class="col-sm-12 field" style="text-align: center">
                            <br>
                            <p>Aren\'t you able to answer the question! forward to other concerned department</p><br>
                            <a href="#forward" data-toggle="modal" style="font-size:18px;">Forward Now <i
                                    class="fa-solid fa-arrow-right" style="font-size:16px;"></i></a>
                        </div>
    
                    </div>
                </div>
                    ';
                }
                elseif($row1['prs_solution'] != NULL){
                    echo'
                    <div class="inner mt-4">
                    <h3 class="title mb-3">Solution </h3>
                    <p>'. $row1['prs_solution'].'</p>
                    </div>';
                }
            ?>
            
        </div>
    </section><br><br><br><br><br>
    <div class="modal fade" id="forward" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.66271 6.00002L11.8625 0.800231C12.0455 0.617161 12.0455 0.320349 11.8625 0.137303C11.6794 -0.0457441 11.3826 -0.0457675 11.1995 0.137303L5.99975 5.33709L0.799987 0.137303C0.616917 -0.0457675 0.320105 -0.0457675 0.137058 0.137303C-0.0459882 0.320373 -0.0460117 0.617185 0.137058 0.800231L5.33682 6L0.137058 11.1998C-0.0460117 11.3829 -0.0460117 11.6797 0.137058 11.8627C0.228582 11.9542 0.348558 12 0.468535 12C0.588511 12 0.708464 11.9542 0.800011 11.8627L5.99975 6.66295L11.1995 11.8627C11.291 11.9542 11.411 12 11.531 12C11.651 12 11.7709 11.9542 11.8625 11.8627C12.0455 11.6796 12.0455 11.3828 11.8625 11.1998L6.66271 6.00002Z"
                            fill="#1A1919"></path>
                    </svg>
                </button>
                <h3 class="title">Forward To</h3><br>
                <form action="../include/change_unit.php?pr_id=<?php echo $row1['prs_id'];?>" method="post">
                    <div class="row">
                        <div class="col-sm-12 field" style="margin-top:30px;">
                            <select class="form-control" style="height:55px;" name="department">
                            <?php
                                $sql3 =$con->prepare("SELECT * FROM unit");
                                $sql3->execute();
                                
                                $rows3 =$sql3->fetchAll($con::FETCH_ASSOC);
                                    foreach ($rows3 as $row){
                                        echo"
                                        <option value='".$row['unit_title']."'>".$row['unit_title']."</option>
                                        ";
                                    }
                            ?>
                                
                            </select>
                        </div>
                        <br><br><br><br>
                        <div class="col-sm-12 field" style="margin-top:30px;">
                            <button class="bottom" type="submit"  style="width:400px;"> Submit</button>
                        </div>
                    </div>
                </form>
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