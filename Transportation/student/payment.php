<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/ico" href="../img/logo2.png" />
<script defer src="../js/all.js"></script>
<link rel="stylesheet" href="../css/font-awesome.css" /> 
<script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
></script>
<script src="../js/jquery-1.12.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>  
<script src="../js/login.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

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
    <link href="../css/main1.css" rel="stylesheet">
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
                      
                      <li class="nav-item active">
                        <div class="dropdown">
                          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff; margin-top:2px; font-size:18px">
                            Student Name
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="profile.php"><i class="fas fa-user"></i> Profile</a></li>
                      <li><a class="dropdown-item" href="../index.php"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
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
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-6"> <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
                                        <div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="../img/visa.png"> <img src="../img/mastercard.png"> <img src="../img/amex.png"> </div>
                                    </div>
                                </div>
                                <div class="card-body" style="height: 350px">
                                    <div class="form-group"> <label for="cc-number" class="control-label">CARD NUMBER</label> <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required> </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="cc-exp" class="control-label">CARD EXPIRY</label> <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" required> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="cc-cvc" class="control-label">CARD CVC</label> <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="••••" required> </div>
                                        </div>
                                    </div>
                                    <div class="form-group"> <label for="numeric" class="control-label">CARD HOLDER NAME</label> <input type="text" class="input-lg form-control"> </div><br>
                                    <div class="form-group"><a onclick="return confirm('Are you sure you want to Pay to this compnay?')" href="profile.php"> <input value="MAKE PAYMENT" type="button" class="btn btn-success btn-lg form-control" style="font-size: 1rem; background-color: #dc624a ;border:0px;color:#ffffff; "></a> </div>
                                </div>
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