

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDLC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
  <div class="forgot-page-sec">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="form-panel">
                      <div class="img-contain">
                           <img src="img/img1.jpg" alt="">
                      </div>
                       <form action="../module/otpAuthentication.php" method="POST">
                               <div class="form-group">
                                   <label for="email">OTP:</label>
                                   <input type="text" class="form-control" placeholder="Enter otp" name="otpField" required>
                                 </div>
                                 <div class="button-cont">
                                    <button type="submit" class="btn btn-submit" id="btnValidateOtp" name="btnOtp">Enter OTP</button>     
                                </div>     
                            </form>
                            <h2>
                            </h2>
                  </div>
              </div>
          </div>
      </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</html>