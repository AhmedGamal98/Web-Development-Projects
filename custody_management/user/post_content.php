<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../login.php?do=should#sign'); 
       
  } 
  elseif (isset($_SESSION['email']) && isset($_SESSION['password'])){
    $email = $_SESSION['email'];
    $pass = $_SESSION['password'];

    $sql1 =$con->prepare("SELECT *  FROM admins WHERE email=? AND password=?");
    $sql1->execute(array($email,$pass));
    $row1 =$sql1->fetch();
    $count1 = $sql1->rowCount();
    
    $sql2 =$con->prepare("SELECT *  FROM users WHERE email=?  AND password=?");
    $sql2->execute(array($email,$pass));
    $row2 =$sql2->fetch();
    $count2 = $sql2->rowCount();
    if($count1>0){
       
        header('location: ../login.php?do=user-s#sign');
    }
  }
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  $id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Custody Management - Post Content</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->


        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="../assets/css/style.css" rel="stylesheet">


    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="index.php" class="logo d-flex align-items-center">

                    <span class="d-none d-lg-block">Custody Management</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->



            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">


                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">

                            <span class="d-none d-md-block dropdown-toggle ps-2">
                                <?php  if (isset($_SESSION['username'])) : ?>
                                <?php echo $_SESSION['username']; ?>
                                <?php endif ?>
                            </span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6><?php  if (isset($_SESSION['username'])) : ?>
                                    <?php echo $_SESSION['username']; ?>
                                    <?php endif ?></h6>
                                <span>User</span>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="..\index.php">
                                    <i class="bi bi-house-door"></i>
                                    <span>Home Page</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="..\include\logout.php">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link " data-bs-target="#posts-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="posts-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="index.php">
                                <i class="bi bi-circle"></i><span>All Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="my_posts.php">
                                <i class="bi bi-circle"></i><span>My Posts</span>
                            </a>
                        </li>

                    </ul>
                </li><!-- End Forms Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#requests-nav" data-bs-toggle="collapse" href="#">
                        <i class=" ri-git-pull-request-line"></i><span>Requests</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="requests-nav" class="nav-content  collapse" data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="requests_list.php">
                                <i class="bi bi-circle"></i><span>Requests List</span>
                            </a>
                        </li>
                        <li>
                            <a href="my_requests.php">
                                <i class="bi bi-circle"></i><span>My Requests</span>
                            </a>
                        </li>

                    </ul>
                </li><!-- End Forms Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="my_items.php">
                        <i class="bi bi-gem"></i>
                        <span>My Items</span>
                    </a>
                </li><!-- End Dashboard Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="users.php">
                        <i class="ri-user-2-fill"></i>
                        <span>Users</span>
                    </a>
                </li><!-- End Dashboard Nav -->




            </ul>

        </aside><!-- End Sidebar-->

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Posts</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Posts</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section">
                <?php
                        $sql =$con->prepare("SELECT * FROM posts where post_id = ?");
                        $sql->execute(array($id));
                        
                        
                        $row =$sql->fetch();
                            
                        $sql1 =$con->prepare("SELECT * FROM items where item_id = ?");
                        $sql1->execute(array($row['item_id']));
                        $row1 =$sql1->fetch();

                        $sql3 =$con->prepare("SELECT * FROM users where user_id = ?");
                        $sql3->execute(array($row['user_id']));
                        $row3 =$sql3->fetch();

                        $sql2 =$con->prepare("SELECT *  FROM comments WHERE post_id=? ");
                        $sql2->execute(array($row['post_id']));
                        $rows2 =$sql2->fetchAll($con::FETCH_ASSOC);
                        $count2 = $sql2->rowCount();
                           
                                echo'
                                <div class="card mb-3 cards">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="data:image/jpeg;base64,'.base64_encode($row1['img']).'" style="height: 350px; width: 100%"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8 ">
                                        <div class="card-body">
                                            <div class="row g-0">
                                                <div class="col-md-8" style="margin-top: 12px;">
                                                    <a href="post_content.php">
                                                        <h5 class="card-title">'.$row1['item_name'].'</h5>
                                                    </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <br>
                                                    <p> <a href="create_request.php?id='.$row['post_id'].'"><button type="button"
                                                                class="btn btn-outline-success"><i
                                                                    style="font-size:18px;margin-top:5px;margin-right:5px;"
                                                                    class=" ri-add-box-fill  "></i> Request Item</button></a> </p>
                                                </div>
            
                                            </div>
                                            <div class="row g-0">
                                                <div class="col-md-2" style="margin-top: 10px;">
                                                    <h6><a href="user_profile.php?id='.$row['post_id'].'">@'.$row3['username'].'</a></h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <a href="mailto:'.$row3['email'].'"> <i style="font-size: 29px;"
                                                            class=" ri-mail-send-line"></i>
                                                    </a> &nbsp;&nbsp; <a href="tel:'.$row3['phone'].'"> <i style="font-size: 29px;"
                                                            class="  ri-phone-line"></i> </a> </p>
                                                </div>
                                            </div>
            
            
                                            <p class="card-text">All Item Details Will Be Here</p>
                                            <p class="card-text">Item Description: '.$row1['description'].' </p>
                                            <p class="card-text">Post Info: '.$row['info'].' </p>
                                            <p class="card-text">Count: '.$row['quantity'].'</p>
                                            <p class="card-text">Date: '.$row['date'].'</p>
                                            <br>
                                            <br>
                                            ';
                                            foreach ($rows2 as $row){
                                            $sql1 =$con->prepare("SELECT * FROM users where user_id = ?");
                                            $sql1->execute(array($row['user_id']));
                                            $row1 =$sql1->fetch();
                                            if($row1['user_id'] != $_SESSION['id']){
                                                echo'
                                            
                                                <div class="row g-0">
                                                    <div class="col-md-8" style="margin-top: 5px;">
                                                        <p> <a href="user_profile.php?id='.$row1['user_id'].'">@'.$row1['username'].'</a>: '.$row['comment'].' </p>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <p> </p>
                                                    </div>
                                                </div>
                                            ';
                                            }
                                            else{
                                                echo'
                                                <div class="row g-0">
                                                <div class="col-md-8" style="margin-top: 5px;">
                                                <p> <a href="user_profile.php?id='.$row1['user_id'].'">@'.$row1['username'].'</a>: '.$row['comment'].' </p>
                                                </div>
                                                <div class="col-md-2">
                                                    <p> <a href="../include/user_delete_comment.php?id='.$row['comment_id'].'&post_id='.$id.'"
                                                            onclick="return confirm(\'Are you sure you want to delete this comment?\')"><button
                                                                type="button" class="btn btn-outline-danger"><i
                                                                    style="font-size:18px;margin-top:5px;margin-right:5px;"
                                                                    class=" ri-delete-bin-6-line"></i>Delete</button></a> </p>
                                                </div>
                                            </div>
                                                ';
                                            }
                                            }
                                            echo'
                                            <br><br>
                                            <form action="../include/add_comment.php" method="post">
                                            <div class="row g-0">
                                            
                                                <label for="inputText" class="col-sm-2 col-form-label">Comment:</label>
                                                <div class="col-sm-5">
                                                    <textarea class="form-control" style="height: 80px" name="comment"></textarea>
                                                    <input hidden name="user_id" value="'.$_SESSION['id'].'">
                                                    <input hidden name="post_id" value="'.$id.'">
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-3">
                                                    <br>
                                                   
                                                        <button type="submit" class="btn btn-outline-primary"><i
                                                                style="font-size:18px;margin-top:5px;margin-right:5px;"
                                                                class=" ri-ball-pen-line "></i> Add Comment</button>
                                                    </form>

                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Card with an image on left -->

                                            



                         ';
                            
                        
                  
                          
                        
                ?>


               



            </section>

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>Custody Management</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#">Khalid & Zyad</a>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/chart.js/chart.min.js"></script>
        <script src="../assets/vendor/echarts/echarts.min.js"></script>
        <script src="../assets/vendor/quill/quill.min.js"></script>
        <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="../assets/vendor/tinymce/tinymce.min.js"></script>


        <!-- Template Main JS File -->
        <script src="../assets/js/main.js"></script>


    </body>

</html>