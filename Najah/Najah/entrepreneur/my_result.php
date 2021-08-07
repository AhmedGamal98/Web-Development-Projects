<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['user_type']) && !isset($_SESSION['password'])) {  
      header('location: ../sign_in.php?do=should'); 
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";

?> 
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/profile.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
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
          <a class="navbar-brand" href="#"><img src="../img/logo.png" width="120"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex">
              <a href="home.php"><button class="btn btn-light"  type="button">الرئيسية</button></a>
              <a href="prediction.php"><button class="btn btn-outline-primary" id="s_btn" type="button">ابدأ التوقع</button></a>
              <a href="my_result.php"><button class="btn btn-outline-primary" id="pro_btn" type="button">توقعاتي</button></a>
              <a href="profile.php"><button class="btn btn-outline-primary" id="my" type="button">الصفحة الشخصية</button></a>
              <a href="../index.php"><button class="btn btn-outline-primary" id="log_out_btn" type="button">تسجيل الخروج</button></a>
            </div>
          </div>
        </div>
      </nav>

      <div class="container"> 
      
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">توقعاتي</h1>
        </div><br>
      
        
          <?php
              $user_id = $_SESSION['user_id'];
              $sql =$con->prepare("SELECT
              answer.*,results.fail,results.success
               FROM answer
               INNER JOIN
               results
               ON results.answer_id = answer.answer_id
               WHERE answer.user_id = $user_id");
              $sql->execute();
              
              $rows =$sql->fetchAll($con::FETCH_ASSOC);
                foreach ($rows as $row){
                  
                  echo "<div class='row'>
                  <div class='col-12'>
                  <h2>كود الاجابة : ".$row['answer_id']."</h2><br>
                  <h4> السؤال الأول : نوع المشروع ؟ </h4><br>";
                  if($row['one'] == 0){
                    echo"<h6>الإجابة : كافيه </h6><br>";
                  }elseif($row['one']== 1){
                    echo"<h6>الإجابة : مطعم </h6><br>";
                  }elseif($row['one']== 2){
                    echo"<h6>الإجابة : ملابس  </h6><br>";
                  }elseif($row['one']== 3){
                    echo"<h6>الإجابة : هدايا </h6><br>";
                  }elseif($row['one']== 4){
                    echo"<h6>الإجابة : كماليات </h6><br>";
                  }

                  echo"<h4> السؤال الثاني : رأس المال ؟ </h4><br>";
                  if($row['two'] == 0){
                    echo"<h6>الإجابة : 10000 - 50000 </h6><br>";
                  }elseif($row['two']== 1){
                    echo"<h6>الإجابة : 60000 - 100000 </h6><br>";
                  }elseif($row['two']== 2){
                    echo"<h6>الإجابة : 100000 - 500000  </h6><br>";
                  }

                  echo"<h4> السؤال الثالث : هل يوجد منافسيين ؟ </h4><br>";
                  if($row['three'] == 0){
                    echo"<h6>الإجابة : نعم </h6><br>";
                  }elseif($row['three']== 1){
                    echo"<h6>الإجابة : لا </h6><br>";
                  }

                  echo"<h4> السؤال الرابع : هل مشروعك ؟ </h4><br>";
                  if($row['four'] == 0){
                    echo"<h6>الإجابة : نعم </h6><br>";
                  }elseif($row['four']== 1){
                    echo"<h6>الإجابة : لا </h6><br>";
                  }

                  echo"<h4> السؤال الخامس : عدد الموظفين المحتمل ؟ </h4><br>";
                  if($row['five'] == 0){
                    echo"<h6>الإجابة : 10 وأقل </h6><br>";
                  }elseif($row['five']== 1){
                    echo"<h6>الإجابة : 20 وأقل </h6><br>";
                  }elseif($row['five']== 2){
                    echo"<h6>الإجابة : 30 وأقل  </h6><br>";
                  }

                  echo"<h4> السؤال السادس : هل مشروعك يوجد به شركاء ؟ </h4><br>";
                  if($row['six'] == 0){
                    echo"<h6>الإجابة : نعم </h6><br>";
                  }elseif($row['six']== 1){
                    echo"<h6>الإجابة : لا </h6><br>";
                  }

                  echo"<h4> السؤال السابع : هل يوجد خطط للمخاط ؟ </h4><br>";
                  if($row['seven'] == 0){
                    echo"<h6>الإجابة : نعم </h6><br>";
                  }elseif($row['seven']== 1){
                    echo"<h6>الإجابة : لا </h6><br>";
                  }

                  echo"<h4> السؤال الثامن : كم المبلغ المتوفر للمخاطر ؟ </h4><br>";
                  if($row['eight'] == 0){
                    echo"<h6>الإجابة : 5000 - 10000 </h6><br>";
                  }elseif($row['eight']== 1){
                    echo"<h6>الإجابة : 10000 - 15000 </h6><br>";
                  }elseif($row['eight']== 2){
                    echo"<h6>الإجابة : 15000 اكثر من  </h6><br>";
                  }

                  echo"<h4> السؤال التاسع : هل يوجد ممول للمشروع ؟ </h4><br>";
                  if($row['nine'] == 0){
                    echo"<h6>الإجابة : نعم </h6><br>";
                  }elseif($row['nine']== 1){
                    echo"<h6>الإجابة : لا </h6><br>";
                  }

                  echo"<h4> السؤال العاشر : هل تم اللجوء فقط إلي التمويل ؟ </h4><br>";
                  if($row['ten'] == 0){
                    echo"<h6>الإجابة : نعم </h6><br>";
                  }elseif($row['ten']== 1){
                    echo"<h6>الإجابة : لا </h6><br>";
                  }
                  
                  echo"<h4> نسبة النجاح: ".$row['success']."% </h4><br>";
                  echo"<h4> نسبة الفشل: ".$row['fail']."% </h4><br>";
                  echo"<hr><br>";
                  
              } ?>
            
          
    
      
      </div> 
</body>
</html>