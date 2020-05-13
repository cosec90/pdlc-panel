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
  <div class="login-page-sec">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="form-panel">
                      <div class="img-contain">
                           <img src="img/download.png" alt="">
                      </div>
                       <form action="../module/login.php" method="POST">
                               <div class="form-group">
                                   <label for="email">Username:</label>
                                   <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                                 </div>
                                 <div class="form-group">
                                   <label for="pwd">Password:</label>
                                   <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                 </div>
                                 <div class="form-group">
                                     <label>Select Department</label>
                                       <select class="form-control" id="department" required name="departName" >
                                         <option selected disabled hidden></option>
                                         <option value="degree">Degree College</option>
                                         <option value="junior">Junior College</option>
                                       </select>
                                 </div>
                                 <div class="form-group">
                                       <label>Select Course</label>
                                       <select class="form-control" id="course" required name="courseName">
                                         <option selected disabled hidden></option>
                                         <option id="baf" value="baf">BAF</option>
                                         <option id="bms" value="bms">BMS</option>
                                         <option id="bmm" value="bmm">BMM</option>
                                         <option id="bscit" value="bscit">BSCIT</option>
                                         <option id="bim" value="bim">BIM</option>
                                         <option id="bcom" value="bcom">BCOM</option>
                                         <option id="bfm" value="bfm">BFM</option>
                                         <option id="comm" value="comm">Commerce</option>
                                       </select>
                                 </div>
                                 <div class="button-cont">
                                  <a href="forgot_password.html"><button type="button" class="btn btn-submit" name="btnForgot">Forgot Password</button></a>
                                  <button type="submit" class="btn btn-submit" name="btnSubmit">Login</button>
                                 </div>
                                 
                            </form>
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