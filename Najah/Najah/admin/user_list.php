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
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/all.js"></script>
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
              <a href="admin_home.php"><button class="btn btn-light"  type="button">الرئيسية</button></a>
              <a href="user_list.php"><button class="btn btn-outline-primary active" id="s1_btn" type="button">إدارة الموقع</button></a>
              <a href="../include/logout.php"><button class="btn btn-outline-primary" id="log_out_btn" type="button">تسجيل الخروج</button></a>
            </div>
          </div>
        </div>
      </nav>

      <?php if($do == "Manage"){ ?>
    <div class="container main">  
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">قائمة المستخدمين</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>اسم المستخدم</th>
              <th>البريد الإلكتروني</th>
              <th>رقم الهاتف</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
              $sql =$con->prepare("SELECT * FROM users");
              $sql->execute();
              
              $rows =$sql->fetchAll($con::FETCH_ASSOC);
                foreach ($rows as $row){
                  if($row['user_type'] == 'user'){
                  echo 
                  
                  "<tr>
                  <td><h5>" . $row['id'] . "</h5></td>
                  <td><h5><a href='../include/show_user.php?id=".$row['id']."'>" . $row['username'] . "</a></h5></td>
                  <td>" . $row['email'] . "</td>
                  <td>" . $row['phone'] . "</td>
                  <td><a onclick='return confirm(\"هل انت متأكد من عملية مسح المستخدم؟\")' href='../include/delete_user.php?id=".$row['id']."'><button type='button' class='btn btn-outline-danger'> حذف </button></a></td>
                </tr>";
                  
              } }?>
            
          </tbody>
        </table>
      </div>
    </div>  
    <?php }elseif($do == "deleted"){ ?>
      <div class="container main"> 
      <div style="width:700px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-right:230px;" >
            تم حذف المستخدم بنجاح
        </div><br> 
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">قائمة المستخدمين</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>اسم المستخدم</th>
              <th>البريد الإلكتروني</th>
              <th>رقم الهاتف</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
              $sql =$con->prepare("SELECT * FROM users");
              $sql->execute();
              
              $rows =$sql->fetchAll($con::FETCH_ASSOC);
                foreach ($rows as $row){
                  if($row['user_type'] == 'user'){
                  echo 
                  
                  "<tr>
                  <td><h5>" . $row['id'] . "</h5></td>
                  <td><h5><a href='../include/show_user.php?id=".$row['id']."'>" . $row['username'] . "</a></h5></td>
                  <td>" . $row['email'] . "</td>
                  <td>" . $row['phone'] . "</td>
                  <td><a onclick='return confirm(\"هل انت متأكد من عملية مسح المستخدم؟\")' href='../include/delete_user.php?id=".$row['id']."'><button type='button' class='btn btn-outline-danger'> حذف </button></a></td>
                </tr>";
                  
              } }?>
            
          </tbody>
        </table>
      </div>
    </div>
      <?php } ?>
</body>
</html>