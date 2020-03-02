<?php

session_start();


$con =mysqli_connect('localhost','root','');

mysqli_select_db($con ,'HostelManagement');

if (isset($_GET["code"])) {
	$code = $_GET['code'];
echo "get:".$code;
	/*echo("cant find page");*/
}
if(isset($_POST['code_post'])){
	$code = $_POST['code_post'];
	echo "post:".$code;
}




$m="SELECT Email_id FROM resetpassword WHERE code='$code'";

$q=mysqli_query($con ,$m);	

$num = mysqli_num_rows($q);

if ($num == 0) {
	exit("1can't find page");
}




else if (isset($_POST["password"])) {
	$pw=md5($_POST["password"]);

	$row =mysqli_fetch_array($q);
	$email=$row["Email_id"];

	$query= mysqli_query($con,"UPDATE usersignup SET password='$pw' WHERE email_id=
		'$email'");

	if ($query) {
		$query = mysqli_query($con,"DELETE FROM resetpassword WHERE code='$code'");
		echo "<script> alert('Password Update.');</script>";
		header('Location: login-07.php');
	}
	else
	{
		exit("something went wrong");
	}
}
?>	



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

body
{
  background: -webkit-linear-gradient(to right,#006699,#00cc99);
  background: linear-gradient(to right,#006699,#00cc99);
}
 </style>
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
                     <img class="img-fluid"src="img/logo-sticky.png" width="100%" class="center" alt="logo-sticky.png">
                </div><!-- ./brand-logo -->
                
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
                  <h3 class="auth-title">Reset Password</h3>
                </div>
           <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
             <div class="form-label-group">
	<input type="password" name="password" placeholder="New password" class="form-control" equired autofocus autocomplete="off">
        </div>
	<br>
	<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" id="bt">Reset Password</button>
	<input type="hidden" name="code_post" value="<?php echo $code;?>">
		

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

</script>
<!--End of Tawk.to Script-->
 </body>
 </html>





