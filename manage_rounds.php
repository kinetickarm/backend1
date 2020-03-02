<?php 
include 'dbconnection1.php';
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 05:38:26 GMT -->
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       <link rel="icon" href="img/logo.png" type="image/x-icon" />

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Hostel Management</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!--Start of CSS portion of header-->
        <style type="text/css">
        	.form-control textarea
        	{
        		color: black;
        	}
        	.form-control textarea.placeholder{
        		color: black;
        	}
        	.form-control textarea:-moz-placeholder{
        		color: black;
        	}
        	.form-control textarea::-moz-placeholder{
        		color: black;
        	}
        	.form-control textarea::-webkit-input-placeholder{
        		color: black;
        	}
            .h_middle_text2 {
                 
                font-family: "Montserrat", sans-serif;
                 font-size: 25px;
                font-weight: bold;
                margin-top: 15px;
                /*letter-spacing: .96px;*/
                text-transform: uppercase;
                 padding-bottom: 15px;
                 position: relative;
            }

            .h_middle_text2 h3{
                 color: #ffb606;
                letter-spacing: 3.3px;
            }

            .h_middle_text2 h5{
                color: #ffb606;
            }
            #H{
                font-size: 35px;

            }
            .resort_title1 h2 {
  font-size: 27px;
  font-weight: bold;
  font-family: "Montserrat", sans-serif;
  letter-spacing: .96px;
  text-transform: uppercase;
  color: #242424;
  margin-top: 20px;
  padding-bottom: 10px;
}

.resort_title1 h2 span {
  color: #ffb606;

  padding-left: 20px;
}
        </style>
    </head>
    <body>

        <!--================Header Area =================-->
         <?php include 'header_admin.php'; ?>
        <!--================Header Area =================-->

        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>MANAGE ROUNDS</h3>
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="event.html">Manage Rounds</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        <section style="width: 100%;height: 1000px;background: #f7f7f7;padding: 50px;">
             <?php 
        if ($_POST['submit']) {
            $round=$_POST['round'];
            $sdate_application=$_POST['sdate_application'];
            $edate_application=$_POST['edate_application'];
            $sdate_fees=$_POST['sdate_fees'];
            $edate_fees=$_POST['edate_fees'];
            $edate_round=$_POST['edate_round'];
            $decription=$_POST['decription'];


            mysqli_query($connection1,"insert into rounds (round,sdate_application,edate_application,sdate_fees,edate_fees,edate_round,decription) values ('$round','$sdate_application','$edate_application','$sdate_fees','$edate_fees','$edate_round','$decription')");

            /*if($detail=mysqli_fetch_array(mysqli_query($connection1,"select * from rounds"),MYSQLI_ASSOC)){
                echo "runn";
            $round=$detail['round'];
            $sdate_application=$detail['sdate_application'];
            $edate_application=$detail['edate_application'];
            $sdate_fees=$detail['sdate_fees'];
            $edate_fees=$detail['edate_fees'];
            $edate_round=$detail['edate_round'];
            $decription=$detail['decription'];
}
           
            echo "$sdate_application";*/

            $notice="Round:".$round."--You have to pay the hostel fees between ".$sdate_fees." and ".$edate_fees;
            $run = mysqli_query($connection1,"insert into notice (subject,sdate,edate,notice,status) values('ROUND SCHEDULE','$sdate_application','$edate_fees','$notice','1')");
            if(!$run){
                $error=mysqli_error($connection1);
                echo $error;
            }

            $notice="Round:".$round."--You have to fill application between ".$sdate_application." and ".$edate_application;
            $run = mysqli_query($connection1,"insert into notice (subject,sdate,edate,notice,status) values('ROUND SCHEDULE','$sdate_application','$edate_application','$notice','1')");
            if(!$run){
                $error=mysqli_error($connection1);
                echo $error;
            }

            $notice="Round:".$round."--Admin will approve your application between".$edate_application." and ".$sdate_fees;
            $run = mysqli_query($connection1,"insert into notice (subject,sdate,edate,notice,status) values('ROUND SCHEDULE','$sdate_application','$sdate_fees','$notice','1')");
            if(!$run){
                $error=mysqli_error($connection1);
                echo $error;
            }

            $notice="Round:".$round."--Room will be allocated by admin between ".$edate_fees." and ".$edate_round;
            $run = mysqli_query($connection1,"insert into notice (subject,sdate,edate,notice,status) values('ROUND SCHEDULE','$sdate_application','$edate_round','$notice','1')");
            if(!$run){
                $error=mysqli_error($connection1);
                echo $error;
            }
        }
        ?>
        	<!-- <h2 style="color: black;text-align: center;padding: 30px;padding-bottom: 40px;font-size: 30px;font-weight: bold;"> &nbspNOTICE</h2> -->
            <div class="main_big_title">
                    <h2>manage&nbsp<span>rounds</span></h2>
                </div>
        	<div class="container" style="width: 70%;background: white;height: 85%;margin: all;padding: 20px;" >
        	<form method="POST" action="" enctype="multipart/form-data">
        		<div>
        			<select style="width: 100%;height: 50px;background: #E3E4FA;color: black;border-radius: 5px;padding: 10px;border-color: black;" name="round" id="sub">
        				<option value="" disabled selected>Choose ROUND</option>
        				<option value="1">ROUND1</option>
        				<option value="2">ROUND2</option>
        				<option value="3">ROUND3</option>
        				
        			</select>
        		</div>
				<div style="margin-top: 20px;margin-bottom: 20px;">
                        <span style="width: 100%;padding: 10px;margin: 10px;">Start date to apply application:</span><br>
                        &nbsp<span class="fa fa-calendar" aria-hidden="true"></span>
                        <input type="Date"id="datepicker" class="Date col-md-6" name="sdate_application" id="sdate" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"

                            required="" style="
                            font-size: 16px;
                            color: black; 
                            border: 1px solid black;
                            width: 96%;
                            letter-spacing: 1px;
                            background: #E3E4FA;
                            border-radius: 5px;
                            outline: none;
                            background: #E3E4FA;
                            font-family: 'Open Sans', sans-serif;">
                </div>
                <div style="margin-top: 20px;margin-bottom: 20px;">
                        <span style="width: 100%;padding: 10px;margin: 10px;">End date to apply application:</span><br>
                        &nbsp<span class="fa fa-calendar" aria-hidden="true"></span>
                        <input type="Date"id="datepicker" class="Date col-md-6" name="edate_application" id="edate" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"

                            required="" style="
                            font-size: 16px;
    						color: black; 
       						border: 1px solid black;
   							width: 96%;
   							letter-spacing: 1px;
    						background: #E3E4FA;
    						border-radius: 5px;
    						outline: none;
    						background: #E3E4FA;
    						font-family: 'Open Sans', sans-serif;">
                </div>
                  <div style="margin-top: 20px;margin-bottom: 20px;">
                        <span style="width: 100%;padding: 10px;margin: 10px;">Start date to pay fees & upload fees reciept:</span><br>
                        &nbsp<span class="fa fa-calendar" aria-hidden="true"></span>
                        <input type="Date"id="datepicker" class="Date col-md-6" name="sdate_fees" id="edate" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"

                            required="" style="
                            font-size: 16px;
                            color: black; 
                            border: 1px solid black;
                            width: 96%;
                            letter-spacing: 1px;
                            background: #E3E4FA;
                            border-radius: 5px;
                            outline: none;
                            background: #E3E4FA;
                            font-family: 'Open Sans', sans-serif;">
                </div>
                <div style="margin-top: 20px;margin-bottom: 20px;">
                        <span style="width: 100%;padding: 10px;margin: 10px;">End date to pay fees & upload fees reciept:</span><br>
                        &nbsp<span class="fa fa-calendar" aria-hidden="true"></span>
                        <input type="Date"id="datepicker" class="Date col-md-6" name="edate_fees" id="edate" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"

                            required="" style="
                            font-size: 16px;
                            color: black; 
                            border: 1px solid black;
                            width: 96%;
                            letter-spacing: 1px;
                            background: #E3E4FA;
                            border-radius: 5px;
                            outline: none;
                            background: #E3E4FA;
                            font-family: 'Open Sans', sans-serif;">
                </div>
                <div style="margin-top: 20px;margin-bottom: 20px;">
                        <span style="width: 100%;padding: 10px;margin: 10px;">End date of ROUND:</span><br>
                        &nbsp<span class="fa fa-calendar" aria-hidden="true"></span>
                        <input type="Date"id="datepicker" class="Date col-md-6" name="edate_round" id="edate" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"

                            required="" style="
                            font-size: 16px;
                            color: black; 
                            border: 1px solid black;
                            width: 96%;
                            letter-spacing: 1px;
                            background: #E3E4FA;
                            border-radius: 5px;
                            outline: none;
                            background: #E3E4FA;
                            font-family: 'Open Sans', sans-serif;">
                </div>
        		<div>
        			<textarea style="background: #E3E4FA;padding: 15px; margin-top: 20px;width: 100%;color: black;border-radius: 5px;border-color: black;" placeholder="Write the decription here" rows="7" name="decription" id="notice"></textarea>
        		</div>
        		
        		<div align="center">
        			<button type="submit" name="submit" value="submit" class="col-md-6 center" style="margin-left:38%;height: 45px;width: 20%;background: #E3E4FA;padding:10px;color: grey;border-radius: 5px;border: 1px solid black;margin-right: 5%;margin-top: 50px;" align="center" >Submit</button>
                    <input type="hidden" name="submit" value="submit">
        		</div>
        		<!-- <div align="center">
        			<button type="reset" name="reset" value="reset" class="col-md-6 center" style="margin-right:27.5%;height: 45px;width: 20%;background: #E3E4FA;padding: 10px;color: grey;border-radius:5px;border: 1px solid black;margin-top: 50px;" align="center">Reset</button>
        		</div> -->
        	</form>
        	</div>
        </section>

        <!--================Footer Area =================-->
        <?php include 'footer_admin.php'; ?>
        <!--================End Footer Area =================-->
        
        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <!--================End Search Box Area =================-->
        
        
        
        
        
        <!--================End Footer Area =================-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <!-- instafeed-->
        <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
        <script type="text/javascript" src="vendors/instafeed/script.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

<!-- Mirrored from designarc.biz/demos/hilltown/theme/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 05:38:43 GMT -->
</html>