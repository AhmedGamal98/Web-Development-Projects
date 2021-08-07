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
    <script src='../js/jquery.min.js'></script>
    <link rel="icon" type="image/ico" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/test.css">
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
    <script>
        $(document).ready(function () { 
            var currentGfgStep, nextGfgStep, previousGfgStep; 
            var opacity; 
            var current = 1; 
            var steps = $("fieldset").length; 
        
            setProgressBar(current); 
        
            $(".next-step").click(function () { 
        
                currentGfgStep = $(this).parent(); 
                nextGfgStep = $(this).parent().next(); 
        
                $("#progressbar li").eq($("fieldset") 
                    .index(nextGfgStep)).addClass("active"); 
        
                nextGfgStep.show(); 
                currentGfgStep.animate({ opacity: 0 }, { 
                    step: function (now) { 
                        opacity = 1 - now; 
        
                        currentGfgStep.css({ 
                            'display': 'none', 
                            'position': 'relative'
                        }); 
                        nextGfgStep.css({ 'opacity': opacity }); 
                    }, 
                    duration: 500 
                }); 
                setProgressBar(++current); 
            }); 
        
            $(".previous-step").click(function () { 
        
                currentGfgStep = $(this).parent(); 
                previousGfgStep = $(this).parent().prev(); 
        
                $("#progressbar li").eq($("fieldset") 
                    .index(currentGfgStep)).removeClass("active"); 
        
                previousGfgStep.show(); 
        
                currentGfgStep.animate({ opacity: 0 }, { 
                    step: function (now) { 
                        opacity = 1 - now; 
        
                        currentGfgStep.css({ 
                            'display': 'none', 
                            'position': 'relative'
                        }); 
                        previousGfgStep.css({ 'opacity': opacity }); 
                    }, 
                    duration: 500 
                }); 
                setProgressBar(--current); 
            }); 
        
            function setProgressBar(currentStep) { 
                var percent = parseFloat(100 / steps) * current; 
                percent = percent.toFixed(); 
                $(".progress-bar") 
                    .css("width", percent + "%") 
            } 
        
             
        }); 
        
    </script>
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
              <a href="#"><button class="btn btn-outline-primary active" id="s_btn" type="button">ابدأ التوقع</button></a>
              <a href="my_result.php"><button class="btn btn-outline-primary" id="my" type="button">توقعاتي</button></a>
              <a href="profile.php"><button class="btn btn-outline-primary" id="pro_btn" type="button">الصفحة الشخصية</button></a>
              <a href="../include/logout.php"><button class="btn btn-outline-primary" id="log_out_btn" type="button">تسجيل الخروج</button></a>
            </div>
          </div>
        </div>
      </nav>

    <header>
        <div class="container"> 
            <div class="row justify-content-center"> 
                <div class="col-9"> 
                    <div class="px-0 pt-4 pb-0 mt-3 mb-3"> 
                    
                    <form action="../include/insert_answer.php" method="POST" id="form">
                        <?php if($do == "Manage"){ ?> 
                            <div style="text-align: center;">
                                <h2>يمكنك توقع نجاح عملك الآن!</h2>
                                <small >فقط أجب علي الأسئلة بكل تأكيد. قد تستغرق الإجابة ۱٥-۳۰ دقيقة.</small>
                              </div><br>
                        <?php }elseif($do == "error"){ ?>
                            <div style="text-align: center;">
                                <h2>يمكنك توقع نجاح عملك الآن!</h2>
                                <small >فقط أجب علي الأسئلة بكل تأكيد. قد تستغرق الإجابة ۱٥-۳۰ دقيقة.</small>
                              </div>
                            <div class="alert alert-danger alert-dismissible fade show" style="margin-top:20px;" role="alert">
                                    من فضل تأكد من الاجابة علي جميع الاسئلة
                            </div>
                            <?php }elseif($do == "error2"){ ?>
                                <div class="alert alert-danger alert-dismissible fade show" style="margin-top:20px;" role="alert">
                                    هناك مشكلة في السيرفر 
                            </div>
                            <div style="text-align: center;">
                                <h2>يمكنك توقع نجاح عملك الآن!</h2>
                                <small >فقط أجب علي الأسئلة بكل تأكيد. قد تستغرق الإجابة ۱٥-۳۰ دقيقة.</small>
                              </div>
                            
                            
                            <?php } ?>
                                  
                            <div class="progress"> 
                                <div class="progress-bar"></div> 
                            </div> <br> 
                            <fieldset> 
                                <br>
                                <p style="float: right;">نوع المشروع ؟</p><br><br><br>
                                <div class="col-sm-12">
                                <input style="float: right; margin-right: 57px;" name="one" class="form-check-input" type="radio" value="1" name="q_1" id="q_1" >
                                <label style="float: right; margin-right: 17px;" class="form-check-label" for="q_1_1">
                                    كافيه
                                </label>
                                <input style="float: right;  margin-right: 57px;" name="one"  class="form-check-input" type="radio" value="2" name="q_1" id="q_1" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_1_2">
                                    مطعم
                                </label>
                                <input style="float: right; margin-right: 57px;" name="one"  class="form-check-input" type="radio" value="3" name="q_1" id="q_1" >
                                <label style="float: right; margin-right: 17px;" class="form-check-label" for="q_1_3">
                                    ملابس
                                </label>
                                <input style="float: right;  margin-right: 57px;" name="one"  class="form-check-input" type="radio" value="4" name="q_1" id="q_1" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_1_4">
                                    هدايا
                                </label>
                                <input style="float: right;  margin-right: 57px;" name="one"  class="form-check-input" type="radio" value="5" name="q_1" id="q_1" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_1_5">
                                    كماليات
                                </label>
                                </div><br><br>

                                <hr><br> 

                                <p style="float: right;">رأس المال ؟</p><br><br><br>
                                <div class="col-sm-12">
                                <input style="float: right; margin-right: 57px;" name="two" class="form-check-input" type="radio" value="0" name="q_2" id="q_2" >
                                <label style="float: right; margin-right: 17px;" class="form-check-label" for="q_2_1">
                                    10000 - 50000
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="two" class="form-check-input" type="radio" value="1" name="q_2" id="q_2" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_2_2">
                                    60000 - 100000
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="two" class="form-check-input" type="radio" value="2" name="q_2" id="q_2" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_2_3">
                                    100000 - 500000
                                </label>
                                </div><br>

                                <hr><br>
                                
                                <p style="float: right;">هل يوجد منافسيين ؟</p><br><br><br>
                                <div class="col-sm-12">
                                <input style="float: right; margin-right: 57px;" name="three" class="form-check-input" type="radio" value="0" name="q_3" id="q_3" >
                                <label style="float: right; margin-right: 17px;" class="form-check-label" for="q_3_1">
                                    نعم
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="three" class="form-check-input" type="radio" value="1" name="q_3" id="q_3" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_3_2">
                                    لا
                                </label>
                                </div><br><br>
                                <input type="button" name="next-step" 
                                    class="next-step" value="التالي" /> 
                            </fieldset> 
                            <fieldset> 
                                <br>
                                <p style="float: right;">هل مشروعك ؟</p><br><br><br>
                                <div class="col-sm-12">
                                <input style="float: right; margin-right: 57px;" name="four" class="form-check-input" type="radio" value="0" name="q_4" id="q_4" >
                                <label style="float: right; margin-right: 17px;" class="form-check-label" for="q_4_1">
                                    علي أرض الواقع
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="four" class="form-check-input" type="radio" value="1" name="q_4" id="q_4" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_4_2">
                                    اونلاين
                                </label>
                                </div><br>
                                <hr><br>

                                <p style="float: right;">عدد الموظفين المحتمل ؟ </p><br><br><br>
                                <div class="col-sm-12">
                                <input style="float: right; margin-right: 57px;" name="five" class="form-check-input" type="radio" value="0" name="q_5" id="q_5" >
                                <label style="float: right; margin-right: 17px;" class="form-check-label" for="q_5_1">
                                    10 وأقل
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="five" class="form-check-input" type="radio" value="1" name="q_5" id="q_5" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_5_2">
                                    20 وأقل
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="five" class="form-check-input" type="radio" value="2" name="q_5" id="q_5" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_5_3">
                                    30 وأقل
                                </label>
                                </div><br>

                                <hr><br>

                                <p style="float: right;">هل مشروعك يوجد به شركاء ؟</p><br><br><br>
                                <div class="col-sm-12">
                                <input style="float: right; margin-right: 57px;" name="six" class="form-check-input" type="radio" value="0" name="q_6" id="q_6" >
                                <label style="float: right; margin-right: 17px;" class="form-check-label" for="q_6_1">
                                    نعم
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="six" class="form-check-input" type="radio" value="1" name="q_6" id="q_6" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_6_2">
                                    لا
                                </label>
                                </div><br> <br> 
                                <input type="button" name="next-step" 
                                    class="next-step" value="التالي" /> 
                                <input type="button" name="previous-step" 
                                    class="previous-step" 
                                    value="السابق" /> 
                            </fieldset> 
                            <fieldset> 
                                <br>
                                <p style="float: right;">هل يوجد خطط للمخاطر ؟</p><br><br><br>
                                <div class="col-sm-12">
                                <input style="float: right; margin-right: 57px;" name="seven" class="form-check-input" type="radio" value="0" name="q_7" id="q_7" >
                                <label style="float: right; margin-right: 17px;" class="form-check-label" for="q_7_1">
                                    نعم
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="seven" class="form-check-input" type="radio" value="1" name="q_7" id="q_7" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_7_2">
                                    لا
                                </label>
                                </div><br>

                                <hr><br>

                                <p style="float: right;">كم المبلغ  المتوفر للمخاطر ؟</p><br><br><br>
                                <div class="col-sm-12">
                                <input style="float: right; margin-right: 57px;" name="eight" class="form-check-input" type="radio" value="0" name="q_8" id="q_8" >
                                <label style="float: right; margin-right: 17px;" class="form-check-label" for="q_8_1">
                                    5000 - 10000
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="eight"  class="form-check-input" type="radio" value="1" name="q_8" id="q_8" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_8_2">
                                    10000 - 15000
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="eight"  class="form-check-input" type="radio" value="2" name="q_8" id="q_8" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_8_3">
                                    15000 اكثر من
                                </label>
                                </div><br>

                                <hr><br>

                                <p style="float: right;">هل يوجد ممول للمشروع ؟</p><br><br><br>
                                <div class="col-sm-12">
                                <input style="float: right; margin-right: 57px;" name="nine" class="form-check-input" type="radio" value="0" name="q_9" id="q_9" >
                                <label style="float: right; margin-right: 17px;" class="form-check-label" for="q_9_1">
                                    نعم
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="nine" class="form-check-input" type="radio" value="1" name="q_9" id="q_9" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_9_2">
                                    لا
                                </label>
                                </div><br><br>
                                <input type="button" name="next-step" 
                                    class="next-step" value="التالي" /> 
                                <input type="button" name="previous-step" 
                                    class="previous-step" 
                                    value="السابق" /> 
                            </fieldset> 
                            <fieldset> 
                                <br>
                                <p style="float: right;">هل تم اللجوء فقط إلي التمويل ؟</p><br><br><br>
                                <div class="col-sm-12">
                                <input style="float: right; margin-right: 57px;" name="ten" class="form-check-input" type="radio" value="0" name="q_10" id="q_10" >
                                <label style="float: right; margin-right: 17px;" class="form-check-label" for="q_10_1">
                                    نعم
                                </label><br><br>
                                <input style="float: right;  margin-right: 57px;" name="ten" class="form-check-input" type="radio" value="1" name="q_10" id="q_10" >
                                <label style="float: right;  margin-right: 17px;" class="form-check-label" for="q_10_2">
                                    لا
                                </label>
                                </div><br>
                                <input type="submit" class="submit"  style="float: left;" value="توقع"/>
                                <input type="button" name="previous-step" 
                                    class="previous-step" 
                                    value="السابق" />
                            </fieldset>     
                        </form> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </header><!-- End Header -->
</body>
</html>