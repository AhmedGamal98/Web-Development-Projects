<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['admin_name'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  
    $AAU= 0;
    $GPU= 0;
    $TS= 0;

    $sql =$con->prepare("SELECT * FROM problems");
    $sql->execute();

    $rows =$sql->fetchAll($con::FETCH_ASSOC);
        foreach ($rows as $row){
            
            
            if ($row['prs_unit'] == 'Academic Affairs Unit'){
                $AAU = $AAU +1;
            }
            elseif($row['prs_unit'] == 'Graduation Project Unit'){
                $GPU = $GPU +1;
            }
            elseif($row['prs_unit'] == 'Technical Support'){
                $TS  = $TS +1;
            }
        }
                               
                                 

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
    <script src="../dist/chart.js"></script>
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
                                <li><a style="text-decoration: none" href="index.php">Home</a></li>
                                <li><a style="text-decoration: none" class="active" href="#">Dashboard</a></li>
                                <li><a style="text-decoration: none" href="rates.php">Rates</a></li>
                                <li><a style="text-decoration: none" href="announce.php">Announcement</a></li>
                                <li><a style="text-decoration: none" href="messages.php">MESSAGES</a></li>
                                
                                <li><a style="text-decoration: none" href="../include/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            </ul>
                        </div>

                        
                    </div>
                </div>
            </div>

        </div>
    </header>

    <br><br>
    <section class="categories">
        <div class="container">
            <h2 class="title">Dashboard</h2><br>

            <canvas id="myChart" width="50" height="50"></canvas>
            <?php
                    $sql =$con->prepare("SELECT prs_unit, COUNT(*) as COUNT from problems GROUP BY prs_unit");
                    $sql->execute();
                
                    $rows =$sql->fetchAll($con::FETCH_ASSOC);
                    $labels = array();
                    $data = array();
                    foreach ($rows as $row){
                        array_push($labels, $row['prs_unit']);
                        array_push($data, $row['COUNT']);

                    }
                    
            ?>
            <script>
            
            
            
                var labels = <?php echo json_encode($labels); ?>;
                var data = <?php echo json_encode($data); ?>;
                var dataset =[];
                var coloers = ['rgba(255, 99, 132, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 205, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(201, 203, 207, 0.2)'];
                 
                var borderColor= [
                                'rgb(255, 99, 132)',
                                'rgb(255, 159, 64)',
                                'rgb(255, 205, 86)',
                                'rgb(75, 192, 192)',
                                'rgb(54, 162, 235)',
                                'rgb(153, 102, 255)',
                                'rgb(201, 203, 207)'
                            ];

                
                var temp;
                for (let i = 0; i < labels.length; i++) {
                    var zeros = new Array(data.length).fill(0);
                    zeros[i] =  data[i];
                    temp = {
                    label: labels[i],
                    data: zeros,
                    backgroundColor: coloers[i],
                    borderColor: borderColor[i],
                    borderWidth: 1
                    };
                    dataset.push(temp);
                }

                var planetData = {
                    labels: labels,
                    datasets: dataset
                    };  
                    
                    var chartOptions = {
                        scales: {
                            xAxes: [{
                            barPercentage: 2,
                            categoryPercentage: 0.8
                            }]
                        }
                        };
                const ctx = document.getElementById('myChart').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'bar',
                    data: planetData,
                    options: chartOptions
                    
                });
            </script>

        </div>
    </section><br><br><br><br><br><br><br><br><br>
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