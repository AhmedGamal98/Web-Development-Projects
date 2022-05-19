<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['name'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  $res_id = $_GET['res_id'];
  $sql1 =$con->prepare("SELECT * FROM receiver WHERE res_id='$res_id'");
  $sql1->execute();
    
  $row1 =$sql1->fetch();
    
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
                <li> <a href="chat_list.php">
                        Chat List
                        <svg width="9" height="9" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.58102 4.72562L2.96341 0.108013C2.81055 -0.0396239 2.56695 -0.0353851 2.41931 0.117483C2.27528 0.266608 2.27528 0.503012 2.41931 0.652115L6.76487 4.99767L2.41931 9.34322C2.26908 9.49347 2.26908 9.73707 2.41931 9.88733C2.56959 10.0376 2.81316 10.0376 2.96341 9.88733L7.58102 5.26972C7.73125 5.11944 7.73125 4.87587 7.58102 4.72562Z">
                            </path>
                        </svg></a></li>
                <li>Chat </li>
            </ul>
            <h3 class="title mb-3">Chat </h3>
            <div class="user"><img src="../images/profile.png" alt="" title="">
                <div class="text">
                    
                    <h3 class="name"><?php echo $row1['res_name'];?></h3>
                </div>
            </div>
            <div class="inner chatall mt-4">
            <div class="chat-text">
            <?php 
	
								
									
						if(isset($_POST["submit1"])){
						
						
                            $message = $_POST["message"];
                            $date = date("Y-m-d H:i:s");	
					
											
					    $sql5 = "INSERT INTO chat (message , date , student_id , receiver_id , opposer) VALUES ('$message', '$date' , '$std_id' , '$res_id' , '$res_id')"; 		
						
                        $con->exec($sql5);
                        
                        
                        $sql11 =$con->prepare("SELECT *  FROM chat_list WHERE res_id=? AND std_id=?");
                        $sql11->execute(array($res_id,$std_id));
                        $row11 =$sql11->fetch();
                        
                        if($row11 == NULL){
                          $sql9 = "INSERT INTO chat_list (res_id,std_id) VALUES ('$res_id','$std_id')";
                      
                          $con->exec($sql9);
                        }
						
						}
									
										
						?>
            <?php
	 
								$sql = $con->prepare("SELECT * FROM chat");
								$sql->execute();
                                $rows = $sql->fetchAll();
                                
                                if($rows !=NULL){
                                    foreach($rows as $pat){
                                    if($pat['student_id']==$std_id && $pat['opposer']==$res_id ){

                                    
                                            echo'
                                        <div class="userchat tow">
                                            <a class="photo" href="#"><img src="../images/profile.png" alt=""></a>
                                            <div class="padcht">
                                                <p class="text">'. $pat["message"].'  </p>
                                                <div class="time"><span>'. $pat["date"] .'</span></div>
                                            </div>
                                        </div>';
                                        
                                    }elseif($pat['receiver_id']==$res_id && $pat['opposer']==$std_id){
                                            echo'<div class="userchat">
                                            <a class="photo" href="#"><img src="../images/profile.png" alt=""></a>
                                            <div class="padcht">
                                                <p class="text">'. $pat["message"].'</p>
                                                <div class="time">'. $pat["date"] .'</span></div>
                                            </div>
                                        </div>';
                                    }       
                              
                                }
								             
                        }else{
                            echo"";
                        }?>	
                
                    
                </div>
                <?php
                if($rows !=NULL){
                    $sql5 = $con->prepare("UPDATE chat SET 

                    std_is_read =1
                
                    WHERE student_id =? and receiver_id=?");

                    $sql5->execute([$std_id, $res_id]); 

                    
                }
                
                ?>
                <form class="formchat" method="post">
                    <textarea type="text" name="message" placeholder="Your Message..."></textarea>
                    <div class="icon-at">
                        <button class="send" type="submit" name="submit1">
                            <svg id="Capa_1" enable-background="new 0 0 512.005 512.005" height="512"
                                viewBox="0 0 512.005 512.005" width="512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m511.658 51.675c2.496-11.619-8.895-21.416-20.007-17.176l-482 184c-5.801 2.215-9.638 7.775-9.65 13.984-.012 6.21 3.803 11.785 9.596 14.022l135.403 52.295v164.713c0 6.948 4.771 12.986 11.531 14.593 6.715 1.597 13.717-1.598 16.865-7.843l56.001-111.128 136.664 101.423c8.313 6.17 20.262 2.246 23.287-7.669 127.599-418.357 122.083-400.163 122.31-401.214zm-118.981 52.718-234.803 167.219-101.028-39.018zm-217.677 191.852 204.668-145.757c-176.114 185.79-166.916 176.011-167.684 177.045-1.141 1.535 1.985-4.448-36.984 72.882zm191.858 127.546-120.296-89.276 217.511-229.462z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </form>
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
</body>

</html>