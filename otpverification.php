<?php session_start();
ob_start();?>

<!DOCTYPE html>
<html lang="zxx">
  
<!-- Mirrored from gitapp.top/demo/authfy/demo/login-07.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jan 2020 09:57:30 GMT -->
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- For Search Engine Meta Data  -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="yoursite.com" />
	
  <title>Authfy : Login-07</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/icon" href="login_images/favicon-16x16.html"/>
   
  <!-- Main structure css file -->
  <link  rel="stylesheet" href="login_css/login7-style.css">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
 <style>

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
 </style>
 <script>
function startTimer(duration, display) {
    var first=1;
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        diff = duration - (((Date.now() - start) / 1000) | 0);
        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = "OTP expires in " + minutes + ":" + seconds; 

        if (diff <= 0) {
          if(minutes==0)
          {
            window.location="signup.php";
          }
          else
          {
              start = Date.now() + 1000;
            }
        }
    }
    timer();
    setInterval(timer, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 10,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};  
</script>

  </head>
  
  <body>

    <!-- Start Preloader -->
    <div id="preload-block">
      <div class="square-block"></div>
    </div>
    <!-- Preloader End -->
    
    <div class="container-fluid">
      <div class="row">
        <div class="authfy-container col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
          <div class="col-sm-5 authfy-panel-left">
            <div class="brand-col">
              <div class="headline">
                <!-- brand-logo start -->
                <div class="brand-logo">
                  <img src="images/logo-sticky.png" width="150" class="center" alt="logo-sticky.png">
                </div><!-- ./brand-logo -->
                <h2 style="color:#039287" align="center">HOSTEL </h2>
                <h2 style="color:#039287"> MANAGEMENT</h2 >
                <!-- social login buttons start -->
                <div class="row social-buttons">
                  <!-- <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-facebook">
                      <i class="fa fa-facebook"></i> <span class="hidden-xs hidden-sm">Signin with facebook</span>
                    </a>
                  </div> -->
                 <!--  <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-twitter">
                      <i class="fa fa-twitter"></i> <span class="hidden-xs hidden-sm">Signin with twitter</span>
                    </a>
                  </div> -->
                  <!-- <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-google">
                      <i class="fa fa-google-plus"></i> <span class="hidden-xs hidden-sm">Signin with google</span>
                    </a>
                  </div> -->
                </div><!-- ./social-buttons -->
              </div>
            </div>
          </div>
          <div class="col-sm-7 authfy-panel-right">
            <!-- authfy-login start -->
            <div class="authfy-login">
              <!-- panel-login start -->
              <div class="authfy-panel panel-login text-center active">
                <div class="authfy-heading">
                  <h3 class="auth-title">Verify OTP</h3>
                </div>
            <form class="form-signin" action="" method="post">
              <div class="form-label-group">
                <input type="text" name="inputOTP" id="inputOTP" class="form-control" placeholder="Enter OTP" required autofocus autocomplete="off">
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" id="bt">Verify</button>
              <label style="margin-top: 20px;"><a href="sendotp.php" style="text-decoration: none" >Resend OTP</a></label>
              <?php
            if(isset($_POST['inputOTP']))
            {
            if($_SESSION['otp']==$_POST['inputOTP'])
            {
              $con =mysqli_connect('localhost','root','');
              mysqli_select_db($con ,'HostelManagement');
              $email=$_SESSION['Email'];
              $name = $_SESSION['name'];
              $pass = $_SESSION['pass'];
              $pnumber=$_SESSION['pnumber'];
              $type = 'user';
              $reg="INSERT INTO usersignup(email_id,fullname,password,phonenumber,type) VALUES ('$email','$name',md5('$pass'),'$pnumber','$type')";
              if(mysqli_query($con ,$reg))
                 { header("Location: login-07.php");}
                else
                {
                  echo mysqli_error($con);
                }
            }
            else
            {
              echo '<br><label class="pt-3 mb-0 text-danger w-100 text-center"><strong>'.'Wrong OTP'.'</strong></label>';
            }
          }
      ?>
            </form>
  
            </div> <!-- ./authfy-login -->
          </div>
        </div>
      </div> <!-- ./row -->
    </div> <!-- ./container -->
    
    <!-- Javascript Files -->

    <!-- initialize jQuery Library -->
    <script src="login_js/jquery-2.2.4.min.js"></script>
  
    <!-- for Bootstrap js -->
    <script src="login_js/bootstrap.min.js"></script>
  
    <!-- Custom js-->
    <script src="login_js/custom.js"></script>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e458394a89cda5a1885d3ce/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  
  </body>	

<!-- Mirrored from gitapp.top/demo/authfy/demo/login-07.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jan 2020 09:57:35 GMT -->
</html>
<?php ob_flush();?>

