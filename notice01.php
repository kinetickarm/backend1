<?php 
include 'dbconnection1.php';
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/activities.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Dec 2019 12:46:36 GMT -->
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

            .h_middle_text2 h3 {
                color: #ffb606;
                letter-spacing: 3.3px;
            }

            .h_middle_text2 h5 {
                color: #ffb606;
            }

        #H {
            font-size: 35px;
        }
    </style>



    <!--End of CSS portion of header-->
    </head>
    <body>

        <!--================Header Area =================-->
        <!--================Header Area =================-->
        <?php include 'header.php'; ?>
        <!--================Header Area =================-->

        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container" style="padding-bottom:0px;">
                <div class="banner_inner_content">
                    <h3>Activities</h3>
                    <ul>
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="notice.php">Notices</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Activities Area =================-->
        <section class="activities_title" style="background:white">
            <br>
            <div class="container">
                <div class="main_big_title">
                    <h2>notice<span></span></h2>
                </div>
        </section>
        <!--================Activities Area =================-->
                  <style type="text/css">
                    .notice {
                        font-size: large;
                        padding-bottom: 200px !important;
                        text-decoration: underline;
                        line-height: 65px;}
                </style>
                <section id="content" style="background:white">
                    <div style="background:#E3E4FA;color:black;width: 600px;justify-content: center;align-items: center;" class="container">
                        <div class="container" style="width:100%;padding-bottom:0px;align-items: center;">
                             <pre></pre>
                            <div style="align-items: center;">
                                <center style="font-size:30px;padding: 20px"><b></b></center>
                                <marquee onmouseout="this.start();" onmouseover="this.stop();" style="overflow-y:scroll;padding:10px;padding-top: 30px;padding-bottom: 40px;height: 400px;" scrollamount="4" direction="up" >
                                    <?php
                                        $query="select subject,notice,sdate,edate,status,timestamp from notice";
                                        $run=mysqli_query($connection1,$query);
                                        while ($result=mysqli_fetch_array($run,MYSQLI_NUM)) {
                                            if($result[4]=="1" && $result[2]<=date("Y-m-d") && $result[3]>=date("Y-m-d")){
                                    ?>
                                    <b class="notice"><?php echo "$result[0]:" ?></b>
                                    <br />
                                    <?php echo "$result[5]";?>
                                    <br /><br />
                                    <?php echo "$result[1]"; ?>
                                    <br /> 
                                    <br />
                                    <?php } }
                                    ?>
                                </marquee>
                            <pre></pre>
                            </div>
                        </div>
                    </div>
                </section>
        <!--================Footer Area =================-->
        <?php include 'footer_student.php' ;?>
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

<!-- Mirrored from designarc.biz/demos/hilltown/theme/activities.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Dec 2019 12:46:52 GMT -->
</html>