<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['user_type']) && !isset($_SESSION['password'])) {  
      header('location: ../sign_in.php?do=should'); 
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";

  $sql =$con->prepare("SELECT *  FROM answer WHERE user_id=? ORDER BY answer_id DESC LIMIT 1");
  $sql->execute(array($_SESSION['user_id']));
  $row =$sql->fetch();
  $ans_id= $row['answer_id'];
  $data_array = array("answer" => array(intval($row['two']),intval($row['three']),intval($row['four']),intval($row['five']),intval($row['six']),intval($row['seven']),intval($row['eight']),intval($row['nine']),intval($row['ten'])));
  
 

  // create & initialize a curl session
    $curl = curl_init();

    // set our url with curl_setopt()
    curl_setopt($curl, CURLOPT_URL, "api.example.com");

    // return the transfer as a string, also with setopt()
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // curl_exec() executes the started curl session
    // $output contains the output string
    $output = curl_exec($curl);

    // close curl resource to free up system resources
    // (deletes the variable made by curl_init)
    curl_close($curl);

    function callAPI($method, $url, $data){
      $curl = curl_init();
      switch ($method){
         case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
         case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
            break;
         default:
            if ($data)
               $url = sprintf("%s?%s", $url, http_build_query($data));
      }
      // OPTIONS:
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array(
         'APIKEY: 111111111111111111111',
         'Content-Type: application/json',
      ));
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      // EXECUTE:
      $result = curl_exec($curl);
      if(!$result){ header('location: ../entrepreneur/prediction.php?do=error2');}
      curl_close($curl);
      return $result;
   }
  

  $make_call = callAPI('POST', 'http://127.0.0.1:5000/predict/', json_encode($data_array));
  $response = json_decode($make_call, true);
  $fail   = $response['fail'];
  $success = $response['success'];

  $id = $_SESSION['user_id'];
  $sql = "INSERT INTO results (success,fail,user_id,answer_id) VALUES ('$fail','$success','$id','$ans_id')";
    
  $reselt=$con->exec($sql);

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="../img/logo.png" />
    <link rel="icon" type="image/ico" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/result.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" integrity="sha512-a+mx2C3JS6qqBZMZhSI5LpWv8/4UK21XihyLKaFoSbiKQs/3yRdtqCwGuWZGwHKc5amlNN8Y7JlqnWQ6N/MYgA==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
    <script defer src="../js/all.js"></script>
    <style>
        #my{
    margin-left: 20px;
    width: 150px;
    border-radius: 25px;
    background-color: #fff;
    }
    #my:hover{
    background-color: #2b56ba;
}
    </style>
    
    <title>نجاح</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="home.php"><img src="../img/logo.png" width="120"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex">
              <a href="home.php"><button class="btn btn-light"  type="button">الرئيسية</button></a>
              <a href="prediction.php"><button class="btn btn-outline-primary active" id="s_btn" type="button">ابدأ التوقع</button></a>
              <a href="my_result.php"><button class="btn btn-outline-primary" id="my" type="button">توقعاتي</button></a>
              <a href="profile.php"><button class="btn btn-outline-primary" id="pro_btn" type="button">الصفحة الشخصية</button></a>
              <a href="../index.php"><button class="btn btn-outline-primary" id="log_out_btn" type="button">تسجيل الخروج</button></a>
            </div>
          </div>
        </div>
      </nav>

    <header>
        <div class="container">
          <br>
            <div class="row">
                
                <div class="col-md-6 col-sm-12">
                    <h1>معدل نجاح عملك هو:</h1><br>
                    <canvas id="result_chart"></canvas>
                    <a href="home.php"><button class="btn btn-outline-primary active" id="s_btn" type="button">تم</button></a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <img src="../img/Projections.gif" height="500" width="500" alt="">
                </div>
            </div>
            <script>
                let chart = document.getElementById('result_chart').getContext('2d');
                let labels = ['النجاح','الفشل'];
                let colorHex =['#2b56ba','#2e2c2eaf']

                let res_chart = new Chart(chart,{
                  type: 'pie',
                  data: {
                    datasets:[{
                      data: [<?php echo $fail ?>,<?php echo $success ?>],
                      backgroundColor: colorHex 
                    }],
                    labels: labels
                  },
                  options: {
                    responsive: true,
                    legend: {
                      position: 'bottom'
                    },
                    plugins:{
                      datalabels: {
                        color: '#fff',
                        font: {
                          weight: 'bold',
                          size: '18'
                        },
                        formatter:(value) =>{
                          return value + '% '
                        }
                      }

                    }
                  }
                })
            </script>
        </div>
    </header><!-- End Header -->
</body>
</html>