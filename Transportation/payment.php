<?php
  
  require_once('include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";

  
  

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/ico" href="img/logo2.png" />
<script defer src="js/all.js"></script>
<link rel="stylesheet" href="css/font-awesome.css" /> 
<script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
></script>
<script src="js/jquery-1.12.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>  
<script src="js/login.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js" ></script>
    <script src="js/jquery.validate.min.js" ></script>
    <script>
    $.validator.addMethod('card', function(value, element) {
        return this.optional(element) || (value.match(/[0-9]/));
    },
    'Must conatins only Characters');
    // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='pay']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      
      cardnum:{
        minlength: 14
      
      },
      cardcvc: {
         
        minlength: 3

      },
      cardname:{
        required:true
      }
    },
    // Specify validation error messages
    messages: {
      cardnum: {
        
        minlength: "Card Number Must Be At Least 14 Numbers"
        
      },
      cardcvc:{
        minlength: "Card CVC Must Be At Least 3 Numbers"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});


    </script>
<script>
    $(function($) {
        $('[data-numeric]').payment('restrictNumeric');
        $('.cc-number').payment('formatCardNumber');
        $('.cc-exp').payment('formatCardExpiry');
        $('.cc-cvc').payment('formatCardCVC');
        $.fn.toggleInputError = function(erred) {
        this.parent('.form-group').toggleClass('has-error', erred);
        return this;
        };
        $('form').submit(function(e) {
        e.preventDefault();
        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.cc-brand').text(cardType);
        $('.validation').removeClass('text-danger text-success');
        $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
        });
        });
</script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/main1.css" rel="stylesheet">
    <title>Payment</title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-md  fixed-top " >
        <div class="container">
          <a class="navbar-brand" style="margin-right: 370px;" href="index.php">
            <div class="row">
              <div class="col-3">
                <img src="img/logo3.png" style="width:40px; margin-top:6px"></i>
              </div>
              <div class="col-8">
                <strong style='display:block;margin-bottom:0px; margin-top:16px;'>University Transportation</strong><small style='margin-left:27px;font-size:15px;'></small>
              </div>
            </div>
          </a>
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0" style="padding-bottom:12px;">
                    <li class="nav-item ">
                      <a class="nav-link"   aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" aria-current="page" href="index.php#about"><i class="fas fa-address-card"></i> About </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" aria-current="page" href="company.php"><i class="fas fa-building"></i> Companies</a>
                    </li>
                      
                    <?php
                if (!isset($_SESSION['username'])  && !isset($_SESSION['flag'])) { 
                  echo"
                  <li class='nav-ite'>
                  <a class='nav-link' href='login.php'><i class='fas fa-sign-in-alt'></i> Sgin in</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link href='login.php'><i class='fas fa-user-plus'></i> Sign up</a>
                </li>
                  ";    
                }elseif(isset($_SESSION['username'])  && isset($_SESSION['flag'])){
                 echo" <li class='nav-item'>
                  <div class='dropdown'>
                    <button class='btn dropdown-toggle' type='button' id='dropdownMenuButton' data-bs-toggle='dropdown' aria-expanded='false' style='color: #fff; margin-top:2px; font-size:18px'>
                    <i class='fas fa-user'></i>  ".$_SESSION['username']."
                    </button>
                    <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                      <li><a class='dropdown-item' href='profile.php'><i class='fas fa-user'></i> Profile</a></li>
                      <li><a class='dropdown-item' href='include/logout_std.php'><i class='fas fa-sign-out-alt'></i> Sign out</a></li>
                    </ul>
                  </div>
              </li>";
                }
                ?>
                          </ul>
                        </div>
                    </li>
                    </ul>
              </div>
          </div>
        </nav>
      </header>

      <main>
          <br><br>
          <script src="../js/payment.min.js"></script>
            <div class="padding">
                <div class="row">
                    <div class="container-fluid d-flex justify-content-center">
                        <div class="col-sm-8 col-md-6">
                            <div class="card" style="height:480px">
                                <div class="card-header">
                                
                                    <div class="row">
                                        <div class="col-md-6"> <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
                                        <div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="img/visa.png"> <img src="img/mastercard.png"> <img src="img/amex.png"> </div>
                                    </div>
                                </div>
                                <form action="include/payment.php" name="pay" method="post">
                                <div class="card-body" style="height: 350px">
                                    <div class="form-group"> <label for="cc-number" class="control-label">CARD NUMBER</label> <input id="cc-number" type="number" class="input-lg form-control cc-number" autocomplete="cc-number" name="cardnum" placeholder="•••• •••• •••• ••••" maxlength="14" required> </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="cc-exp" class="control-label">CARD EXPIRY</label> <input id="cc-exp" type="date" class="input-lg form-control cc-exp" autocomplete="cc-exp" name="cardexp" placeholder="•• / ••" required> </div><br>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="cc-cvc" class="control-label">CARD CVC</label> <input id="cc-cvc" type="number" class="input-lg form-control cc-cvc" autocomplete="off" name="cardcvc" maxlength="3" placeholder="•••" required> </div><br>
                                        </div>
                                    </div>
                                    <div class="form-group"> <label for="numeric" class="control-label">CARD HOLDER NAME</label> <input type="text" name="cardname" onkeypress="return /[a-z]/i.test(event.key)" class="input-lg form-control"> </div><br>

                                    <div class="form-group"><a onclick="return confirm('Are you sure you want to Pay to this compnay?')" href="profile.php"> <input value="MAKE PAYMENT" type="submit" class="btn btn-success btn-lg form-control" style="font-size: 1rem; background-color: #dc624a ;border:0px;color:#ffffff; "></a> </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2021 Transportation, Inc. </p>
          </footer>
      </main>
</body>
</html>